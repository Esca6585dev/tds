<?php

namespace App\Http\Controllers\AdminControllers\Text;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\TextRequest;
use App\Models\Category;
use App\Models\Text;
use Image;
use Str;

class TextController extends Controller
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

        $texts = Text::orderByDesc('id')->paginate($pagination);
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = ['name_tm', 'name_en', 'name_ru'];
    
                $texts = Text::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.text.text-table', compact('texts', 'pagination'))->render();
        }

        return view('admin-panel.text.text', compact('texts', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, Text $text)
    {
        $parentCategories = Category::all();

        return view('admin-panel.text.text-form', compact('text', 'parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, TextRequest $request)
    {   
        $text = new Text;
        
        $text->name_tm = $request->name_tm;
        $text->name_en = $request->name_en;
        $text->name_ru = $request->name_ru;
        $text->category_id = $request->category_id;
        
        $text->save();
        
        return redirect()->route('text.index', [ app()->getlocale() ])->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Text $text)
    {
        return view('admin-panel.text.text-show', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Text $text)
    {
        $parentCategories = Category::all();

        return view('admin-panel.text.text-form', compact('text', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update($lang, TextRequest $request, Text $text)
    {
        $text->name_tm = $request->name_tm;
        $text->name_en = $request->name_en;
        $text->name_ru = $request->name_ru;
        $text->category_id = $request->category_id;
        
        $text->update();
        
        return redirect()->route('text.index', [ app()->getlocale() ])->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Text $text)
    {
        $text->delete();

        return redirect()->route('text.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');
    }
}
