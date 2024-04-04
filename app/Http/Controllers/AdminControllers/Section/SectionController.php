<?php

namespace App\Http\Controllers\AdminControllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Image;
use Str;

class SectionController extends Controller
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
    public function index(Request $request, $lang, $sectionType, $pagination = 10)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        if($sectionType == 'all'){
            $sections = Section::orderByDesc('id')->paginate($pagination);
        } else if($sectionType == 'parent'){
            $sections = Section::whereNull('section_id')->orderByDesc('id')->paginate($pagination);
        } else if($sectionType == 'sub'){
            $sections = Section::whereNotNull('section_id')->orderByDesc('id')->paginate($pagination);
        } 
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = Section::fillableData();
    
                $sections = Section::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.section.section-table', compact('sections', 'sectionType', 'pagination'))->render();
        }

        return view('admin-panel.section.section', compact('sections', 'sectionType', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, $sectionType, Section $section)
    {
        $parentSections = Section::all();

        return view('admin-panel.section.section-form', compact('section', 'sectionType', 'parentSections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, $sectionType, SectionRequest $request)
    {
        if($request->file('image')){
            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/sections/' . Str::slug($request->name_tm . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;
        }

        $section = new Section;
        
        $section->name_tm = $request->name_tm;
        $section->name_en = $request->name_en;
        $section->name_ru = $request->name_ru;
        $section->name_tr = $request->name_tr;

        $section->desc_tm = $request->desc_tm;
        $section->desc_en = $request->desc_en;
        $section->desc_ru = $request->desc_ru;
        $section->desc_tr = $request->desc_tr;
        
        $section->image = $originalImage ?? null;

        $section->section_id = $request->section_id;
        
        $section->save();
        
        return redirect()->route('section.index', [ app()->getlocale(), $sectionType ])->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $sectionType, Section $section)
    {
        return view('admin-panel.section.section-show', compact('section', 'sectionType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $sectionType, Section $section)
    {
        $parentSections = Section::all();

        return view('admin-panel.section.section-form', compact('section', 'sectionType', 'parentSections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update($lang, $sectionType, SectionRequest $request, Section $section)
    {
        if($request->file('image')){
            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/sections/' . Str::slug($request->name_tm . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;

            $section->image = $originalImage;
        }

        $section->name_tm = $request->name_tm;
        $section->name_en = $request->name_en;
        $section->name_ru = $request->name_ru;
        $section->name_tr = $request->name_tr;

        $section->desc_tm = $request->desc_tm;
        $section->desc_en = $request->desc_en;
        $section->desc_ru = $request->desc_ru;
        $section->desc_tr = $request->desc_tr;

        $section->section_id = $request->section_id;
        
        $section->update();
        
        return redirect()->route('section.index', [ app()->getlocale(), $sectionType ])->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $sectionType, Section $section)
    {
        $this->deleteFolder($section);

        $section->delete();

        return redirect()->route('section.index', [ app()->getlocale(), $sectionType ])->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($section)
    {
        if($section->image){
            $folder = explode('/', $section->image);

            if($folder[2] != 'section-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
