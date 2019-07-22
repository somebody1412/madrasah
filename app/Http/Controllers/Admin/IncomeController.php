<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class IncomeController extends Controller
{
    public function invoiceIndex(){

		return view('page.admin.income.invoice.view');
	}

    public function invoiceAdd(){

		return view('page.admin.income.invoice.add');
	}


	public function revenueIndex(){

		return view('page.admin.income.revenue.view');
	}

	public function revenueAdd(){

		return view('page.admin.income.revenue.add');
	}

	public function customerIndex(){

		return view('page.admin.income.customer.view');
	}

	public function customerAdd(){

		return view('page.admin.income.customer.add');
	}

}
