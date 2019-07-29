<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function moduleIndex(){

		return view('page.admin.module.view');
	}

    public function moduleAdd(){

		return view('page.admin.module.add');
	}
}
