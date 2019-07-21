<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class IncomeController extends Controller
{
    public function invoiceIndex(){

		return view('page.admin.income.invoice.view');
	}


	public function revenueIndex(){

		return view('page.admin.income.revenue.view');
	}


	public function customerIndex(){

		return view('page.admin.income.customer.view');
	}
}
