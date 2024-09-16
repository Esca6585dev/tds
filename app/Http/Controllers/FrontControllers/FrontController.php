<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Ticket;
use Carbon\Carbon;
use Storage;
use QrCode;

class FrontController extends Controller
{
    public function index()
    {   
        $date = Carbon::now();

        $monthName = $date->locale('tk_TM')->monthName;
        $day = $date->day;

        $lastDayofMonth = $date->endOfMonth()->format('d');

        $beginLimit = $date->today()->format('Y-m-d');
        $endLimit = $date->endOfMonth()->format('Y-m-d');

        return view('front-end.main', compact('day', 'monthName', 'lastDayofMonth', 'beginLimit', 'endLimit'));
    }

    public function outbound(Request $request)
    {   
        $request->validate([
            'travel' => 'required',
            'passenger' => 'required',
            'routeFrom' => 'required',
            'routeTo' => 'required',
            'date1' => 'required',
            'date2' => 'required',
            'date3' => 'required',
        ]);

        $date = Carbon::now();

        $monthName = $date->locale('tk_TM')->monthName;
        $day = $date->day;

        $lastDayofMonth = $date->endOfMonth()->format('d');

        $beginLimit = $date->today()->format('Y-m-d');
        $endLimit = $date->endOfMonth()->format('Y-m-d');

        $routeFrom = $request->routeFrom;
        $routeTo = $request->routeTo;

        $travel = $request->travel;
        $passenger = $request->passenger;
        $date1 = $request->date1;
        $date2 = $request->date2;
        $date3 = $request->date3;
        
        return view('front-end.outbound', compact('day', 'monthName', 'lastDayofMonth', 'travel', 'passenger', 'beginLimit', 'endLimit', 'routeFrom', 'routeTo', 'date1', 'date2', 'date3'));
    }
    
    public function check(Request $request)
    {   
        $request->validate([
            'travel' => 'required',
            'passenger' => 'required',
            'routeFrom' => 'required',
            'routeTo' => 'required',
            'date1' => 'required',
            'date2' => 'required',
            'date3' => 'required',
            'depart_time' => 'required',
            'arrival_time' => 'required',
            'period' => 'required',
            'text' => 'required', 
            'price' => 'required',
            'type' => 'required',
        ]);

        $travel = $request->travel;
        $passenger = $request->passenger;
        $date1 = $request->date1;
        $date2 = $request->date2;
        $date3 = $request->date3;

        $price = $request->price;
        $type = $request->type;

        $depart_time = $request->depart_time;
        $arrival_time = $request->arrival_time;
        $period = $request->period;
        $text = $request->text;

        $date = Carbon::createFromFormat('Y-m-d', $date1);

        $monthName = $date->locale('tk_TM')->monthName;
        $day = $date->day;
        $year = $date->year;

        $lastDayofMonth = $date->endOfMonth()->format('d');

        $beginLimit = $date->today()->format('Y-m-d');
        $endLimit = $date->endOfMonth()->format('Y-m-d');

        $today = $date->today()->format('d.m.Y');
        $tommorow = Carbon::createFromDate($year, 0 . $date->month, $day+1)->format('d.m.Y');

        $routeFrom = $request->routeFrom;
        $routeTo = $request->routeTo;

        return view('front-end.check', compact('year', 'day', 'monthName', 'lastDayofMonth', 'travel', 
        'passenger', 'beginLimit', 'endLimit', 'routeFrom', 'routeTo', 'today', 'tommorow', 'date1', 'date2', 'date3',
        'depart_time', 'arrival_time', 'period', 'text', 'price', 'type'));
    }

    public function buyTicket(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'email' => 'required',
            'sex' => 'required',
            'document' => 'required',
            'first_name' => 'required',
            'passport_seria' => 'required',
            'passport_number' => 'required',
            'last_name' => 'required',
            'birth_day' => 'required',
            'birth_month' => 'required',
            'birth_year' => 'required',
            'seat_no' => 'required',
            'routeFrom' => 'required',
            'routeTo' => 'required',
            'depart_time' => 'required',
            'arrival_time' => 'required',
            'day' => 'required',
            'monthName' => 'required',
            'year' => 'required',
            'period' => 'required',
            'passenger' => 'required',
            'price' => 'required',
        ]);

        $uniqid = uniqid();
        
        $ticket = new Ticket;

        $ticket->phone_number = $request->phone_number;
        $ticket->email = $request->email;
        $ticket->sex = $request->sex;
        $ticket->document = $request->document;
        $ticket->first_name = $request->first_name;
        $ticket->passport_seria = $request->passport_seria;
        $ticket->passport_number = $request->passport_number;
        $ticket->last_name = $request->last_name;
        $ticket->birth_day = $request->birth_day;
        $ticket->birth_month = $request->birth_month;
        $ticket->birth_year = $request->birth_year;
        $ticket->seat_no = $request->seat_no;
        $ticket->pdf = 'tickets/' . $uniqid . '.pdf';
        $ticket->code = $uniqid;

        $ticket->save();

        Storage::disk('local')->makeDirectory('/pdf/order');
  
        $fileName = $uniqid . '.pdf';
        
        $pdf = Pdf::loadView('front-end.pdf', compact('ticket', 'request', 'uniqid'));
  
        $path = 'tickets/';
        
        $pdf->save($path  . $fileName);
     
        return redirect()->to(route('check-ticket', [app()->getlocale(), 'id' => $ticket->code ]));
    }

    public function checkTicket(Request $request)
    {
        $ticket = Ticket::where('code', $request->id)->first();

        return view('front-end.check-ticket', compact('ticket'));
    }
}
