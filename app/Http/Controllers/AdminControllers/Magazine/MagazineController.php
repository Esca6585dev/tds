<?php

namespace App\Http\Controllers\AdminControllers\Magazine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\MagazineCreateRequest;
use App\Http\Requests\MagazineEditRequest;
use App\Models\Category;
use App\Models\Magazine;
use Image;
use Str;

class MagazineController extends Controller

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

        $magazines = Magazine::orderByDesc('id')->paginate($pagination);
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = Magazine::fillableData();
    
                $magazines = Magazine::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.magazine.magazine-table', compact('magazines', 'pagination'))->render();
        }

        return view('admin-panel.magazine.magazine', compact('magazines', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, Magazine $magazine)
    {
        return view('admin-panel.magazine.magazine-form', compact('magazine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, MagazineCreateRequest $request)
    {
        if($request->file('image')){
            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/magazine/' . Str::slug($request->name . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;
        }
        
        $magazine = new Magazine;
        
        $magazine->name = $request->name;
        $magazine->url = $originalImage;

        $magazine->save();
        
        return redirect()->route('magazine.index', [ app()->getlocale() ])->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Magazine $magazine)
    {
        return view('admin-panel.magazine.magazine-show', compact('magazine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Magazine $magazine)
    {
        return view('admin-panel.magazine.magazine-form', compact('magazine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update($lang, MagazineEditRequest $request, Magazine $magazine)
    {
        if($request->file('image')){
            $this->deleteFolder($magazine);

            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/magazine/' . Str::slug($request->name . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;

            $magazine->url = $originalImage;
        }

        $magazine->name = $request->name;

        $magazine->update();
        
        return redirect()->route('magazine.index', [ app()->getlocale() ])->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Magazine $magazine)
    {
        $this->deleteFolder($magazine);

        $magazine->delete();

        return redirect()->route('magazine.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($magazine)
    {
        if($magazine->image()){
            $folder = explode('/', $magazine->image());

            if($folder[2] != 'magazine-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
