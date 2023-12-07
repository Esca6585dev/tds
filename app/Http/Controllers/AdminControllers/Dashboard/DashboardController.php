<?php

namespace App\Http\Controllers\AdminControllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use App\Models\Standart;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    public function index($categoryType)
    {
        $users = User::count();

        $applications = Application::count();

        $standarts = Standart::count();

        return view('admin-panel.dashboard.dashboard', compact('categoryType', 'users', 'applications', 'standarts'));
    }
}
