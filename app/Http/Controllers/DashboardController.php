<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('admin.pages.dashboard.index');
    }

    public function joueurs_staffs_view(){
        return view('admin.pages.joueurs_staff.index');
    }
}
