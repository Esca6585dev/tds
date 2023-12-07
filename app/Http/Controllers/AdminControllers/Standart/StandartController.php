<?php

namespace App\Http\Controllers\AdminControllers\Standart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Standart;
use App\Http\Requests\StandartCreateRequest;
use App\Http\Requests\StandartEditRequest;
use Str;

class StandartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang, $pagination = 10)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        $standarts = Standart::orderByDesc('id')->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = ['number', 'name_tm', 'name_en', 'name_ru'];

                $standarts = Standart::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }

            return view('admin-panel.standart.standart-table', compact('standarts', 'pagination'))->render();
        }

        return view('admin-panel.standart.standart', compact('standarts', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, Standart $standart)
    {
        return view('admin-panel.standart.standart-form', compact('standart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StandartCreateRequest $request)
    {
        if(Standart::where('number', $request->number)->exists()) {
            return redirect()->route('standart.index', [ app()->getlocale() ])->with('warning', 'This TDS number already is exist!');
        } else {

            $standart = new Standart;

            $standart->number = strtoupper($request->number);
            $standart->name_tm = ucfirst($request->name_tm);
            $standart->name_en = ucfirst($request->name_en);
            $standart->name_ru = ucfirst($request->name_ru);

            $standart->save();

            return redirect()->route('standart.index', [ app()->getlocale() ])->with('success-create', 'The resource was created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standart  $standart
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Standart $standart)
    {
        return view('admin-panel.standart.standart-show', compact('standart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standart  $standart
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Standart $standart)
    {
        return view('admin-panel.standart.standart-form', compact('standart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Standart  $standart
     * @return \Illuminate\Http\Response
     */
    public function update($lang, StandartEditRequest $request, Standart $standart)
    {
        if(Standart::where('number', $request->number)->where('id', $standart->id)->exists()) {

            $standart->number = strtoupper($request->number);
            $standart->name_tm = ucfirst($request->name_tm);
            $standart->name_en = ucfirst($request->name_en);
            $standart->name_ru = ucfirst($request->name_ru);

            $standart->update();

            return redirect()->route('standart.index', [ app()->getlocale() ])->with('success-update', 'The resource was updated!');
        } else {
            return redirect()->route('standart.index', [ app()->getlocale() ])->with('warning', 'This TDS number already is exist!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standart  $standart
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Standart $standart)
    {
        $standart->delete();

        return redirect()->route('standart.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');
    }
}
