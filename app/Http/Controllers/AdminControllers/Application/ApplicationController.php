<?php

namespace App\Http\Controllers\AdminControllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Requests\ApplicationRequest;
use Stevebauman\Location\Facades\Location;
use Auth;

class ApplicationController extends Controller
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

        $applications = Application::orderByDesc('id')->withTrashed()->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = Application::fillableData();

                $applications = Application::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->withTrashed()->paginate($pagination);
            }
            
            return view('admin-panel.application.application-table', compact('applications', 'pagination'))->render();
        }
        
        return view('admin-panel.application.application', compact('applications', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('application.index', [ app()->getlocale() ])->with('warning', 'Something went wrong.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('application.index', [ app()->getlocale() ])->with('warning', 'Something went wrong.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $id)
    {
        $application = Application::withTrashed()->find($id);

        $location = Location::get($application->ip_address);

        return view('admin-panel.application.application-show', compact('application', 'location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('application.index', [ app()->getlocale() ])->with('warning', 'Something went wrong.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->route('application.index', [ app()->getlocale() ])->with('warning', 'Something went wrong.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id, Request $request)
    {
        if(Auth::user()->username == 'admintds'){
            
            if($request->method == 'delete'){
                
                $application = Application::withTrashed()->find($id);
    
                $this->deleteFolder($application);

                $application->forceDelete();

                return redirect()->route('application.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');

            } else if($request->method == 'restore') {
                
                Application::onlyTrashed()->find($id)->restore();

                return redirect()->route('application.index', [ app()->getlocale() ])->with('success-restore', 'The resource was restored!');
            }

        } else {
            
            if($request->method == 'delete'){
                
                $application = Application::find($id);
                $application->delete();
                
                return redirect()->route('application.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');

            } else if($request->method == 'restore') {
                
                Application::onlyTrashed()->find($id)->restore();

                return redirect()->route('application.index', [ app()->getlocale() ])->with('success-restore', 'The resource was restored!');
            }
        }
    }

    public function deleteFolder($application)
    {
        if($application->file){
            $folder = explode('/', $application->file);

            if($folder[2] != 'application-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
