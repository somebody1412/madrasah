<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ExpensesController extends Controller
{

	public function billIndex(){

		return view('admin.expenses.bill.view');
	}


	public function paymentIndex(){

		return view('admin.expenses.payment.view');
	}


	public function vendorIndex(){

		return view('admin.expenses.vendor.view');
	}
}
