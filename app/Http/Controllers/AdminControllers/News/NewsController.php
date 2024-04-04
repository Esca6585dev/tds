<?php

namespace App\Http\Controllers\AdminControllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsEditRequest;
use App\Models\Category;
use App\Models\News;
use Image;
use Str;

class NewsController extends Controller
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

        $news = News::orderByDesc('id')->paginate($pagination);
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = News::fillableData();
    
                $news = News::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.news.news-table', compact('news', 'pagination'))->render();
        }

        return view('admin-panel.news.news', compact('news', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, News $news)
    {
        $parentCategories = Category::all();

        return view('admin-panel.news.news-form', compact('news', 'parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, NewsCreateRequest $request)
    {           
        if($request->file('image')){
            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/news/' . Str::slug($request->name_tm . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;
        }
        
        $news = new News;
        
        $news->name_tm = $request->name_tm;
        $news->name_en = $request->name_en;
        $news->name_ru = $request->name_ru;
        $news->name_tr = $request->name_tr;
        
        $news->text_tm = $request->text_tm;
        $news->text_en = $request->text_en;
        $news->text_ru = $request->text_ru;
        $news->text_tr = $request->text_tr;

        $news->view = $request->view;

        $news->url = $request->url;

        $news->created_at = $request->created_at;

        $news->category_id = $request->category_id;

        $news->image = $originalImage;
        
        $news->save();
        
        return redirect()->route('news.index', [ app()->getlocale() ])->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($lang, News $news)
    {
        return view('admin-panel.news.news-show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, News $news)
    {
        $parentCategories = Category::all();

        return view('admin-panel.news.news-form', compact('news', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update($lang, NewsEditRequest $request, News $news)
    {
        if($request->file('image')){
            $this->deleteFolder($news);

            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/news/' . Str::slug($request->name_tm . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;

            $news->image = $originalImage;
        }

        $news->name_tm = $request->name_tm;
        $news->name_en = $request->name_en;
        $news->name_ru = $request->name_ru;
        $news->name_tr = $request->name_tr;
        
        $news->text_tm = $request->text_tm;
        $news->text_en = $request->text_en;
        $news->text_tr = $request->text_tr;

        $news->view = $request->view;

        $news->url = $request->url;

        $news->created_at = $request->created_at;

        $news->category_id = $request->category_id;
        
        $news->update();
        
        return redirect()->route('news.index', [ app()->getlocale() ])->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, News $news)
    {
        $this->deleteFolder($news);

        $news->delete();

        return redirect()->route('news.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($news)
    {
        if($news->image){
            $folder = explode('/', $news->image);

            if($folder[2] != 'news-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
