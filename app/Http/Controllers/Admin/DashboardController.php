<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function overview(){
    	return view('page.admin.dashboard');
    }
}
