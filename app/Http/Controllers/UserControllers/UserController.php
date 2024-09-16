<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;
use App\Models\Standart;
use App\Models\Cart;
use App\Models\Application;
use App\Models\User;
use App\Models\Category;
use App\Models\News;
use App\Models\Text;
use App\Models\Message;
use App\Models\Section;
use Spatie\Permission\Models\Role;
use App\Events\ApplicationRegistered;
use App\Events\MessageSend;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AddToNameTrStandart;
use Stevebauman\Location\Facades\Location;
use SapientPro\ImageComparatorLaravel\Facades\Comparator;
use SapientPro\ImageComparator\Strategy\DifferenceHashStrategy;
use SapientPro\ImageComparator\ImageComparator;
use Auth;
use Str;
use File;
use QrCode;

class UserController extends Controller
{
    public function goToMainPage()
    {
        return view('user-panel.main-page');
    }

    public function mainPage()
    {
        return view('user-panel.main-page');
    }

    public function category($lang, $id)
    {
        $currentCategory = Category::findOrFail($id);

        return view('user-panel.category', compact('currentCategory', 'id'));
    }

    public function stateStandards(Request $request, $lang, $pagination = 25)
    {
        $categories = Category::where('category_id', null)->get();

        $carts = null;

        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::id() )->get();
        }

        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        $standarts = Standart::orderByDesc('id')->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = Standart::fillableData();

                $standarts = Standart::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            return view('user-panel.state-standards', compact('standarts', 'pagination'))->render();
        }

        return view('user-panel.state-standards-container', compact('standarts', 'carts', 'categories', 'pagination'));
    }

    public function addToCartApplication(Request $request, $lang, $id)
    {
        if(Auth::check()){
            if(Cart::where('user_id', Auth()->id())->where('standart_id', $id)->exists()){
                Cart::where('user_id', Auth()->id())->where('standart_id', $id)->delete();
                return __('tds was removed to cart');
            } else {
                $cart = new Cart;

                $cart->user_id = Auth()->id();
                $cart->ip_address = $request->ip();
                $cart->standart_id = $id;

                $cart->save();

                return __('tds was added to cart');
            }
        }
        return __('401 Unauthorized');
    }

    public function digitalServices()
    {
        return view('user-panel.digital-services');
    }

    public function digitalServicesCategory($lang, $id, $slug)
    {
        $currentSection = Section::findOrFail($id);

        return view('user-panel.digital-services-category', compact('currentSection', 'id'));
    }

    public function fillApplication($lang, $childrenSectionId, $slug)
    {
        if($childrenSectionId == 9){
            return view('user-panel.fill-application-guramacylyk', compact('childrenSectionId'));
        } else if($childrenSectionId == 10){
            return view('user-panel.fill-application-standards', compact('childrenSectionId'));
        } else if($childrenSectionId == 6){
            return view('user-panel.fill-application-kiberhowpsuzlyk', compact('childrenSectionId'));
        } else {
            return view('user-panel.fill-application-beyleki', compact('childrenSectionId'));
        }
    }

    public function sendApplicationStandardsBolumi(Request $request)
    {
        if($request->button__type == "upload"){
            $request->validate([
                'bolum' => 'required',
                'applications' => 'required|array|min:1|max:5',
                'button__type' => 'required',
            ]);

            if($request->file('applications')){
                $applications = $request->file('applications');

                foreach($applications as $application){
                    $date = date("d-m-Y_H-i-s");

                    $code_number = Str::random(6);

                    $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                    $fileRandName = $user_name . '_' .$code_number;

                    $fileExt = $application->getClientOriginalExtension();

                    $fileName = $fileRandName . '.' . $fileExt;

                    $path = "assets/user/" . $user_name . '/';

                    $application->move($path, $fileName);

                    $originalApplication = $path . $fileName;

                    // Upload Application to Database

                    $bolum = Section::findOrFail($request->bolum)->name_tm;

                    $application = new Application();

                    $application->code_number = $code_number;
                    $application->bolum = $bolum;
                    $application->user_id = Auth()->id();
                    $application->ip_address = $request->ip();
                    $application->address = $request->address;
                    $application->phone_number = $application->filterNumber($request->phone_number);
                    $application->file = $originalApplication;

                    $application->save();

                    event(new ApplicationRegistered($application));

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
                'phone_number' => 'required|min:29'
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

                $fontStyleBlankCompanyName = new \PhpOffice\PhpWord\Style\Font();
                $fontStyleBlankCompanyName->setName('Times New Roman');
                $fontStyleBlankCompanyName->setSize(12);
                $fontStyleBlankCompanyName->setColor('#4989de');

                $fontStyleBlank = new \PhpOffice\PhpWord\Style\Font();
                $fontStyleBlank->setName('Times New Roman');
                $fontStyleBlank->setSize(8);
                $fontStyleBlank->setColor('#4989de');

                $companyLogo = file_get_contents(Auth::user()->letterhead->image);

                // ====================== BEGIN company_name_tm =================================

                $table = $section->addTable();
                $table->addRow();

                $cell = $table->addCell(3500);
                $textrun = $cell->addTextRun();

                $textrun->addText($request->company_name_tm, $fontStyleBlankCompanyName, array('align'=>'left'));
                $textrun->addImage($companyLogo, ['width'=>50, 'height'=>50, 'align'=>'justify']);
                $table->addCell(3500)->addPreserveText($request->company_name_en, $fontStyleBlankCompanyName, array('align'=>'right'));

                // ====================== END company_name_tm ===================================

                // ====================== BEGIN address_tm =================================

                $table = $section->addTable();
                $table->addRow();

                $cell = $table->addCell(4500);
                $textrun = $cell->addTextRun();

                $textrun->addText($request->address_tm, $fontStyleBlank, array('align'=>'left'));
                $table->addCell(4500)->addPreserveText($request->address_en, $fontStyleBlank, array('align'=>'right'));

                // ====================== END address_tm ===================================

                // ====================== BEGIN phone_number_tm =================================

                $table = $section->addTable();
                $table->addRow();

                $cell = $table->addCell(4500);
                $textrun = $cell->addTextRun();

                $textrun->addText($request->phone_number_tm, $fontStyleBlank, array('align'=>'left'));
                $table->addCell(4500)->addPreserveText($request->phone_number_en, $fontStyleBlank, array('align'=>'right'));

                // ====================== END phone_number_tm ===================================


                // ====================== BEGIN email_tm =================================

                $table = $section->addTable();
                $table->addRow();

                $cell = $table->addCell(4500);
                $textrun = $cell->addTextRun();

                $textrun->addText($request->email_tm, $fontStyleBlank, array('align'=>'left'));
                $table->addCell(4500)->addPreserveText($request->email_en, $fontStyleBlank, array('align'=>'right'));

                // ====================== END email_tm ===================================
                

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

                $filePath = 'https://tds.gov.tm/' . app()->getlocale() . '/' . 'profile/';
                $qrCode = QrCode::format('png')->size(75)->generate($filePath . $code_number . '/docx');

                $section->addImage($qrCode);

                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

                $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                $standart_path = "assets/user/" . $user_name;

                if (!File::exists($standart_path)) {
                    File::makeDirectory($standart_path, 0777, true, true);
                }

                $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

                $objWriter->save($standart_name);

                $bolum = Section::findOrFail($request->bolum)->name_tm;

                $application = new Application();

                $application->code_number = $code_number;
                $application->bolum = $bolum;
                $application->user_id = Auth()->id();
                $application->ip_address = $request->ip();
                $application->address = $request->address;
                $application->phone_number = $application->filterNumber($request->phone_number);
                $application->file = $standart_name;

                $application->save();

                $user = User::findOrFail(Auth::user()->id);
                $user->phone_number = $application->filterNumber($request->phone_number);
                $user->save();

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

                $filePath = 'https://tds.gov.tm/' . app()->getlocale() . '/' . 'profile/';
                $qrCode = QrCode::format('png')->size(75)->generate($filePath . $code_number . '/docx');

                $section->addImage($qrCode);

                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

                $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                $standart_path = "assets/user/" . $user_name;

                if (!File::exists($standart_path)) {
                    File::makeDirectory($standart_path, 0777, true, true);
                }

                $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

                $objWriter->save($standart_name);

                $bolum = Section::findOrFail($request->bolum)->name_tm;

                $application = new Application();

                $application->code_number = $code_number;
                $application->bolum = $bolum;
                $application->user_id = Auth()->id();
                $application->ip_address = $request->ip();
                $application->address = $request->address;
                $application->phone_number = $application->filterNumber($request->phone_number);
                $application->file = $standart_name;

                $application->save();

                $user = User::findOrFail(Auth::user()->id);
                $user->phone_number = $application->filterNumber($request->phone_number);
                $user->save();
            }

            event(new ApplicationRegistered($application));

            foreach($carts as $cart){
                $cart->delete();
            }

            if($request->button__type == 'download'){
                return \Response::download($standart_name);
            } else {
                return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');
            }
        }
    }

    public function sendApplicationGuramacylykBolumi(Request $request)
    {
        if($request->button__type == "upload"){
            $request->validate([
                'bolum' => 'required',
                'applications' => 'required|array|min:1|max:5',
                'button__type' => 'required',
            ]);

            if($request->file('applications')){
                $applications = $request->file('applications');

                foreach($applications as $application){
                    $code_number = Str::random(6);

                    $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                    $fileRandName = $user_name . '_' .$code_number;

                    $fileExt = $application->getClientOriginalExtension();

                    $fileName = $fileRandName . '.' . $fileExt;

                    $path = "assets/user/" . $user_name . '/';

                    $application->move($path, $fileName);

                    $originalApplication = $path . $fileName;

                    // Upload Application to Database

                    $bolum = Section::findOrFail($request->bolum)->name_tm;

                    $application = new Application();

                    $application->code_number = $code_number;
                    $application->bolum = $bolum;
                    $application->user_id = Auth()->id();
                    $application->ip_address = $request->ip();
                    $application->address = $request->address;
                    $application->phone_number = $application->filterNumber($request->phone_number);
                    $application->file = $originalApplication;

                    $application->save();

                    event(new ApplicationRegistered($application));
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

        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setName('Times New Roman');
        $fontStyle->setSize(14);

        $section->addTextBreak(5);

        $section->addText("Türkmen standartlar", $fontStyle, array("align" => "right"));
        $section->addText("maglumat merkeziniň", $fontStyle, array("align" => "right"));
        $section->addText("direktory M.Meredowa", $fontStyle, array("align" => "right"));

        $section->addTextBreak(2);

        if(Auth::user()->roles->pluck('name')[0] == 'raýat'){
            $section->addText($request->middle, $fontStyle, array("align" => "center"));
            $section->addText($request->body, $fontStyle, array("align" => "left"));
        } else {
            $section->addText($request->middle, $fontStyle, array("align" => "center"));
            $section->addText($request->company_name, $fontStyle, array("align" => "center"));
            $section->addText($request->body, $fontStyle, array("align" => "left"));
            $section->addText($request->person, $fontStyle, array("align" => "left"));
        }
        
        $section->addTextBreak(3);

        $section->addText($request->toleg, $fontStyle, array("align" => "left"));

        $section->addTextBreak(2);

        if(Auth::user()->roles->pluck('name')[0] == 'raýat'){
            $section->addText($request->sign, $fontStyle, array("align" => "right"));
            $section->addText($request->date, $fontStyle, array("align" => "right"));
            $section->addText($request->phone_number, $fontStyle, array("align" => "left"));
        } else {
            $section->addText($request->hormatlamak, $fontStyle, array("align" => "left"));
            $section->addText($request->businesman, $fontStyle, array("align" => "left"));
        }

        $section->addTextBreak(2);

        $code_number = Str::random(6);

        $section->addText('code-number: ' . $code_number, $fontStyle);

        $section->addTextBreak(3);

        $filePath = 'https://tds.gov.tm/' . app()->getlocale() . '/' . 'profile/';
        $qrCode = QrCode::format('png')->size(75)->generate($filePath . $code_number . '/docx');

        $section->addImage($qrCode);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

        $standart_path = "assets/user/" . $user_name;

        if (!File::exists($standart_path)) {
            File::makeDirectory($standart_path, 0777, true, true);
        }

        $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

        $objWriter->save($standart_name);

        $bolum = Section::findOrFail($request->bolum)->name_tm;

        $application = new Application();

        $application->code_number = $code_number;
        $application->bolum = $bolum;
        $application->user_id = Auth()->id();
        $application->ip_address = $request->ip();
        $application->address = $request->address;
        $application->phone_number = $application->filterNumber($request->phone_number);
        $application->file = $standart_name;

        $application->save();

        event(new ApplicationRegistered($application));

        if($request->button__type == 'download'){
            return \Response::download($standart_name);
        } else {
            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');
        }
    }

    public function sendApplicationKiberhowpsuzlykBolumi(Request $request)
    {
        if($request->button__type == "upload"){
            $request->validate([
                'bolum' => 'required',
                'applications' => 'required|array|min:1|max:5',
                'button__type' => 'required',
            ]);

            if($request->file('applications')){
                $applications = $request->file('applications');

                foreach($applications as $application){
                    $code_number = Str::random(6);

                    $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                    $fileRandName = $user_name . '_' .$code_number;

                    $fileExt = $application->getClientOriginalExtension();

                    $fileName = $fileRandName . '.' . $fileExt;

                    $path = "assets/user/" . $user_name . '/';

                    $application->move($path, $fileName);

                    $originalApplication = $path . $fileName;

                    // Upload Application to Database

                    $bolum = Section::findOrFail($request->bolum)->name_tm;

                    $application = new Application();

                    $application->code_number = $code_number;
                    $application->bolum = $bolum;
                    $application->user_id = Auth()->id();
                    $application->ip_address = $request->ip();
                    $application->address = $request->address;
                    $application->phone_number = $application->filterNumber($request->phone_number);
                    $application->file = $originalApplication;

                    $application->save();

                    event(new ApplicationRegistered($application));
                }
            }

            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');

        } else {
            $request->validate([
                'bolum' => 'required',
                'body' => 'required',
                'head' => 'required',
                'button__type' => 'required',
            ]);
        }

        $heading = explode(" ",$request->head);

        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setName('Times New Roman');
        $fontStyle->setSize(14);

        $section->addTextBreak(5);

        foreach($heading as $key => $row){
            if($key == 0){
                $section->addText($heading[0], $fontStyle, array("align" => "right"));
            } else if($key == 3){
                $section->addText($heading[1] . ' ' . $heading[2] . ' ' . $heading[3], $fontStyle, array("align" => "right"));
            } else if($key == 5){
                $section->addText($heading[4] . ' ' . $heading[5], $fontStyle, array("align" => "right"));
            } else if($key == 6){
                $section->addText($heading[6], $fontStyle, array("align" => "right"));
            }
        }

        $section->addTextBreak(2);

        $section->addText('           ' . $request->body, $fontStyle, array("align" => "left"));
        
        $section->addTextBreak(3);

        $section->addText($request->toleg, $fontStyle, array("align" => "left"));

        $section->addTextBreak(2);

        $section->addText($request->hormatlamak, $fontStyle, array("align" => "left"));
        $section->addText($request->businesman, $fontStyle, array("align" => "left"));

        $section->addTextBreak(2);

        $code_number = Str::random(6);

        $section->addText('code-number: ' . $code_number, $fontStyle);

        $section->addTextBreak(3);

        $filePath = 'https://tds.gov.tm/' . app()->getlocale() . '/' . 'profile/';
        $qrCode = QrCode::format('png')->size(75)->generate($filePath . $code_number . '/docx');

        $section->addImage($qrCode);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

        $standart_path = "assets/user/" . $user_name;

        if (!File::exists($standart_path)) {
            File::makeDirectory($standart_path, 0777, true, true);
        }

        $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

        $objWriter->save($standart_name);

        $bolum = Section::findOrFail($request->bolum)->name_tm;

        $application = new Application();

        $application->code_number = $code_number;
        $application->bolum = $bolum;
        $application->user_id = Auth()->id();
        $application->ip_address = $request->ip();
        $application->address = $request->address;
        $application->phone_number = $application->filterNumber($request->phone_number);
        $application->file = $standart_name;

        $application->save();

        event(new ApplicationRegistered($application));

        if($request->button__type == 'download'){
            return \Response::download($standart_name);
        } else {
            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');
        }
    }

    public function sendApplicationBeylekiBolumler(Request $request)
    {
        if($request->button__type == "upload"){
            $request->validate([
                'bolum' => 'required',
                'applications' => 'required|array|min:1|max:5',
                'button__type' => 'required',
            ]);

            if($request->file('applications')){
                $applications = $request->file('applications');

                foreach($applications as $application){
                    $date = date("d-m-Y_H-i-s");

                    $code_number = Str::random(6);

                    $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

                    $fileRandName = $user_name . '_' .$code_number;

                    $fileExt = $application->getClientOriginalExtension();

                    $fileName = $fileRandName . '.' . $fileExt;

                    $path = "assets/user/" . $user_name . '/';

                    $application->move($path, $fileName);

                    $originalApplication = $path . $fileName;

                    // Upload Application to Database
                    $bolum = Section::findOrFail($request->bolum)->name_tm;

                    $application = new Application();
            
                    $application->code_number = $code_number;
                    $application->bolum = $bolum;
                    $application->user_id = Auth()->id();
                    $application->ip_address = $request->ip();
                    $application->address = $request->address;
                    $application->phone_number = $application->filterNumber($request->phone_number);
                    $application->file = $originalApplication;

                    $application->save();

                    event(new ApplicationRegistered($application));
                }
            }

            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');

        } else {
            $request->validate([
                'bolum' => 'required',
                'body' => 'required',
                'head' => 'required',
                'button__type' => 'required',
            ]);
        }

        $heading = explode(" ",$request->head);

        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setName('Times New Roman');
        $fontStyle->setSize(14);

        $section->addTextBreak(5);

        foreach($heading as $key => $row){
            if($key == 0){
                $section->addText($heading[0], $fontStyle, array("align" => "right"));
            } else if($key == 3){
                $section->addText($heading[1] . ' ' . $heading[2] . ' ' . $heading[3], $fontStyle, array("align" => "right"));
            } else if($key == 5){
                $section->addText($heading[4] . ' ' . $heading[5], $fontStyle, array("align" => "right"));
            } else if($key == 6){
                $section->addText($heading[6], $fontStyle, array("align" => "right"));
            }
        }

        $section->addTextBreak(2);

        $section->addText("      " . $request->body, $fontStyle, array("align" => "left"));

        $section->addTextBreak(3);

        $section->addText($request->hormatlamak, $fontStyle, array("align" => "left"));

        $section->addText("          " . $request->businesman, $fontStyle);

        $section->addTextBreak(2);

        $code_number = Str::random(6);

        $section->addText('code-number: ' . $code_number, $fontStyle);

        $section->addTextBreak(3);

        $filePath = 'https://tds.gov.tm/' . app()->getlocale() . '/' . 'profile/';
        $qrCode = QrCode::format('png')->size(75)->generate($filePath . $code_number . '/docx');

        $section->addImage($qrCode);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $user_name = Auth::user()->first_name . "_" . Auth::user()->last_name . "_" . Auth::user()->id;

        $standart_path = "assets/user/" . $user_name;

        if (!File::exists($standart_path)) {
            File::makeDirectory($standart_path, 0777, true, true);
        }

        $standart_name = $standart_path . '/' . $user_name . '_' . $code_number  . ".docx";

        $objWriter->save($standart_name);

        $bolum = Section::findOrFail($request->bolum)->name_tm;

        $application = new Application();

        $application->code_number = $code_number;
        $application->bolum = $bolum;
        $application->user_id = Auth()->id();
        $application->ip_address = $request->ip();
        $application->address = $request->address;
        $application->phone_number = $application->filterNumber($request->phone_number);
        $application->file = $standart_name;

        $application->save();

        event(new ApplicationRegistered($application));

        if($request->button__type == 'download'){
            return \Response::download($standart_name);
        } else {
            return redirect()->route('profile.application', app()->getlocale() )->with('success-order', 'Your application sent successfully!');
        }
    }

    public function rss()
    {
        $news = News::where('category_id', 1)->get();

        $data = [

            'version' => 'https://jsonfeed.org/version/1',

            'title' => '«Türkmenstandartlary» baş döwlet gullugy',

            'home_page_url' => 'https://tds.gov.tm',

            'feed_url' => 'https://tds.gov.tm/' . app()->getlocale() . '/rss',

            'icon' => 'http://tds.gov.tm/img/tds-logo/tds-logo.webp',

            'favicon' => 'http://tds.gov.tm/img/tds-logo/tds-icon.gif',

            'items' => [],

        ];

        return response()->view('rss', compact('news'))->withHeaders([
            'Content-Type' => 'application/xml',
            'charset' => 'utf-8'
        ]);
    }

    public function news()
    {
        $news = News::where('category_id', 1)->latest()->get();

        return view('user-panel.news-section', compact('news'));
    }

    public function newsID($lang, $id, $slug)
    {
        $new = News::findOrFail($id);

        $new->view++;
        $new->update();
        
        $news = News::where('category_id', 1)->where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        return view('user-panel.news-id', compact('new','news'));
    }

    public function works()
    {
        $works = News::where('category_id', 2)->latest()->get();

        return view('user-panel.works-section', compact('works'));
    }

    public function worksID($lang, $id, $slug)
    {
        $work = News::findOrFail($id);
        
        $work->view++;
        $work->update();

        $works = News::where('category_id', 2)->where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        return view('user-panel.works-id', compact('work', 'works'));
    }

    public function websites()
    {
        $categories = Category::where('category_id', null)->get();

        $websites = News::where('category_id', 3)->latest()->get();

        return view('user-panel.websites-section', compact('categories', 'websites'));
    }

    public function contactUs()
    {
        $categories = Category::where('category_id', null)->get();

        return view('user-panel.contact-us', compact('categories'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:3', 'max:50'],
            'phone_number' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'email_checker'],
            'message' => ['required'],
        ]);

        $message = new Message;

        $message->username = $request->username;
        $message->phone_number = $request->phone_number;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->user_id = Auth::id();

        $message->save();

        event(new MessageSend($message));

        return back()->with('success-order', 'Your message sent successfully!');
    }

    public function eSign(Request $request)
    {
        return view('user-panel.e-sign');
    }
}
