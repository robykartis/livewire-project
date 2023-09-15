<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function su()
    {
        $title = 'Dashboard';
        return view('admin.dashboard.su', compact('title'));
    }
    public function admin()
    {
        $title = 'Dashboard';
        return view('admin.dashboard.admin', compact('title'));
    }
    public function user()
    {
        $title = 'Dashboard';
        return view('admin.dashboard.user', compact('title'));
    }
}
