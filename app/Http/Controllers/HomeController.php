<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Application;
use App\Models\Category;
use App\Models\Section;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user-panel.user-profile');
    }

    public function cart(Request $request, $lang, $pagination = 5)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = ['number', 'name_tm', 'name_en', 'name_ru'];

                $carts = Cart::with(['standart', 'user'], function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            return view('user-panel.user-cart-table', compact('carts', 'pagination'))->render();
        }

        return view('user-panel.user-cart', compact('pagination'));
    }

    public function application(Request $request, $lang, $pagination = 5)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        $categories = Category::where('category_id', null)->get();

        $applications = Application::orderByDesc('id')->where('user_id', Auth::id() )->withTrashed()->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = ['number', 'name_tm', 'name_en', 'name_ru'];

                $applications = Cart::with(['standart', 'user'], function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            return view('user-panel.user-application-table', compact('applications', 'pagination'))->render();
        }

        return view('user-panel.user-application', compact('applications', 'categories', 'pagination'));
    }

    public function applicationCreate()
    {
        $categories = Category::where('category_id', null)->get();

        $sections = Section::whereNull('section_id')->get();

        $childrenSections = Section::whereNotNull('section_id')->get();

        return view('user-panel.user-application-create', compact('categories', 'sections', 'childrenSections'));
    }

    public function letterhead(Request $request, $lang)
    {
        return view('user-panel.user-letterhead');
    }

    public function docx($lang, $code_number)
    {
        $categories = Category::where('category_id', null)->get();

        $docx = Application::where('code_number', $code_number)->first();

        return view('user-panel.user-docx', compact('docx', 'categories'));
    }

    public function profileEdit(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->company_name = $request->company_name;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;

        $user->update();

        DB::table('model_has_roles')->where('model_id',Auth::user()->id)->delete();

        $user->assignRole($request->roles);

        return __('The resource was updated!');
    }

    public function email()
    {
        $categories = Category::where('category_id', null)->get();

        $application = Application::findOrFail(70);

        $user = User::findOrFail($application->user_id);

        return view('emails.application-tds', compact('application', 'user', 'categories'));
    }
}
