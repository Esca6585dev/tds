<?php

namespace App\Http\Controllers\ApiControllers\Standart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Standart;

class ApiStandartController extends Controller
{
    public function index(Request $request)
    {
        $paginate = $request->paginate ? $request->paginate : 25;

        $standarts = Standart::orderBy('id', 'desc')->paginate($paginate);

        return response()->json($standarts);
    }

    public function sendApplicationForm1(Request $request)
    {
        if($request->button__type == "upload"){
            $request->validate([
                'bolum' => 'required',
                'applications' => 'required|array|min:1|max:10',
                'button__type' => 'required',
            ]);

            if($request->file('applications')){
                $applications = $request->file('applications');

                foreach($applications as $application){
                    $date = date("d-m-Y_H-i-s");

                    $code_number = Str::random(6);

                    $fileRandName = $code_number . '_' . $date;

                    $fileExt = $application->getClientOriginalExtension();

                    $fileName = $fileRandName . '.' . $fileExt;

                    $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                    $path = "assets/user/" . $user_name . '/';

                    $application->move($path, $fileName);

                    $originalApplication = $path . $fileName;

                    // Upload Application to Database

                    $application = new Application();

                    $application->code_number = $code_number;
                    $application->bolum = $request->bolum;
                    $application->user_id = Auth()->id();
                    $application->ip_address = $request->ip();
                    $application->address = $request->address;
                    $application->phone_number = $request->phone_number;
                    $application->file = $originalApplication;

                    $application->save();
                }
            }

            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');

        } else {
            $request->validate([
                'bolum' => 'required',
                'body' => 'required',
                'middle' => 'required',
                'head' => 'required',
                'button__type' => 'required',
            ]);
        }

        $carts = Cart::where('user_id', Auth::user()->id)->get();

        if($carts->isEmpty()){
            return redirect()->back()->with('warning', 'Kartyň içi boş!');
        } else {
            // Telekeçi ýa-da Döwlet Edara
            if(Auth::user()->roles->pluck('name')->first() != 'raýat'){

                $phpWord = new \PhpOffice\PhpWord\PhpWord();

                $section = $phpWord->addSection();

                $fontStyle = new \PhpOffice\PhpWord\Style\Font();
                $fontStyle->setName('Times New Roman');
                $fontStyle->setSize(14);

                $section->addTextBreak(3);

                $section->addText("Türkmen standartlar", $fontStyle, array("align" => "right"));
                $section->addText("maglumat merkeziniň", $fontStyle, array("align" => "right"));
                $section->addText("direktory M.Meredowa", $fontStyle, array("align" => "right"));

                $section->addTextBreak(3);

                $section->addText("Haýyşnama", $fontStyle, array("align" => "center"));

                $section->addTextBreak(1);

                $plural = "resminamany";

                if($carts->count() > 1){
                    $plural = "resminamalary";
                }

                $section->addText("      Aşakda görkezilen kadalaşdyryjy $plural satyn almak üçin ýardam bermegiňizi Sizden haýyş edýärin.", $fontStyle, array("align" => "left"));

                $section->addTextBreak(1);

                foreach($carts as $key => $cart){
                    $section->addText($key+1 . '.' . $cart->standart->number, $fontStyle);
                }

                $section->addTextBreak(3);

                $section->addText("Tölegini kepillendirýäris.", $fontStyle);

                $section->addTextBreak(5);

                $section->addText($request->hormatlamak, $fontStyle, array("align" => "left"));

                $section->addText("          " . $request->businesman, $fontStyle);

                $section->addTextBreak(8);

                $section->addText($request->address, $fontStyle);

                $section->addTextBreak(1);

                $section->addText($request->phone_number, $fontStyle);

                $section->addTextBreak(2);

                $code_number = Str::random(6);

                $section->addText('code-number: ' . $code_number, $fontStyle);

                $section->addTextBreak(3);

                $qrCode = \QrCode::format('png')->size(75)->generate('https://tds.gov.tm/tm/profile/' . $code_number . '/docx');

                $section->addImage($qrCode);

                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

                $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                $standart_path = "assets/user/" . $user_name;

                if (!File::exists($standart_path)) {
                    File::makeDirectory($standart_path, 0777, true, true);
                }

                $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

                $objWriter->save($standart_name);

                $application = new Application();

                $application->code_number = $code_number;
                $application->bolum = $request->bolum;
                $application->user_id = Auth()->id();
                $application->ip_address = $request->ip();
                $application->address = $request->address;
                $application->phone_number = $request->phone_number;
                $application->file = $standart_name;

                $application->save();

            } else {

                // Raýat
                $phpWord = new \PhpOffice\PhpWord\PhpWord();

                $section = $phpWord->addSection();

                $fontStyle = new \PhpOffice\PhpWord\Style\Font();
                $fontStyle->setName('Times New Roman');
                $fontStyle->setSize(14);

                $section->addText("Türkmen standartlar ", $fontStyle, array("align" => "right"));
                $section->addText("maglumat merkeziniň", $fontStyle, array("align" => "right"));
                $section->addText("direktory M.Meredowa", $fontStyle, array("align" => "right"));
                $section->addText("Raýat: " . Auth::user()->first_name . ' ' . Auth::user()->last_name, $fontStyle, array("align" => "right"));
                $section->addText("Öý salgysy: " . Auth::user()->address, $fontStyle, array("align" => "right"));

                $section->addTextBreak(3);

                $section->addText($request->middle, $fontStyle, array("align" => "center"));

                $section->addTextBreak(2);

                $section->addText("      " . $request->body, $fontStyle, array("align" => "left"));

                $section->addTextBreak(1);

                foreach($carts as $key => $cart){
                    $section->addText($key+1 . '.' . $cart->standart->number, $fontStyle);
                }

                $section->addTextBreak(3);

                $section->addText($request->toleg, $fontStyle);

                $section->addTextBreak(1);

                $section->addText($request->phone_number, $fontStyle);

                $section->addTextBreak(1);

                $code_number = Str::random(6);

                $section->addText('code-number: ' . $code_number, $fontStyle);

                $section->addTextBreak(3);

                $qrCode = \QrCode::format('png')->size(75)->generate('https://tds.gov.tm/tm/profile/' . $code_number . '/docx');

                $section->addImage($qrCode);

                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

                $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                $standart_path = "assets/user/" . $user_name;

                if (!File::exists($standart_path)) {
                    File::makeDirectory($standart_path, 0777, true, true);
                }

                $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

                $objWriter->save($standart_name);

                $application = new Application();

                $application->code_number = $code_number;
                $application->bolum = $request->bolum;
                $application->user_id = Auth()->id();
                $application->ip_address = $request->ip();
                $application->address = $request->address;
                $application->phone_number = $request->phone_number;
                $application->file = $standart_name;

                $application->save();
            }

            event(new ApplicationRegistered($application));

            foreach($carts as $cart){
                $cart->delete();
            }

            if($request->button__type == 'download'){
                return \Response::download($standart_name);
            } else {
                return response()->json('Your application sent successfully!', 201);
            }
        }
    }
}
