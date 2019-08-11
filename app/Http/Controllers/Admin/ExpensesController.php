<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ExpensesController extends Controller
{
	public function billIndex(){

		return view('page.admin.expenses.bill.view');
	}

	public function billAdd(){

		return view('page.admin.expenses.bill.add');
    }

	public function billEdit(){

		return view('page.admin.expenses.bill.edit');
	}



	public function paymentIndex(){

		return view('page.admin.expenses.payment.view');
	}

	public function paymentAdd(){

		return view('page.admin.expenses.payment.add');
	}

	public function paymentEdit(){

		return view('page.admin.expenses.payment.edit');
	}



	public function vendorIndex(){

		return view('page.admin.expenses.vendor.view');
	}

	public function vendorAdd(){

		return view('page.admin.expenses.vendor.add');
	}

	public function vendorEdit(){

		return view('page.admin.expenses.vendor.edit');
	}
}
