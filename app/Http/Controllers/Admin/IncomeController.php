<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use Illuminate\Support\Facades\Validator;

class IncomeController extends Controller
{
    public function invoiceIndex(){

		return view('page.admin.income.invoice.view');
	}

    public function invoiceAdd(){

		return view('page.admin.income.invoice.add');
	}

    public function invoiceEdit(){

		return view('page.admin.income.invoice.edit');
	}




	public function revenueIndex(){

		return view('page.admin.income.revenue.view');
	}

	public function revenueAdd(){

		return view('page.admin.income.revenue.add');
	}

	public function revenueEdit(){

		return view('page.admin.income.revenue.edit');
	}




	public function customerIndex(Request $request){
		$searchQuery = $request->input("query");
		$customers = Customer::orderBy('created_at','DESC');
		if ($searchQuery) {
            $customers = $customers->where(function ($query) use ($searchQuery) {
                $query->where('name', 'like', "%$searchQuery%")
                ->orWhere('email', 'like', "%$searchQuery%")
                ->orWhere('tax_no', 'like', "%$searchQuery%")
                ->orWhere('phone', 'like', "%$searchQuery%");
            });
		}

		$customers = $customers->get();
		return view('page.admin.income.customer.view',compact('customers'));
	}

	public function customerAdd(){

		return view('page.admin.income.customer.add');
	}

	public function customerStore(Request $request){
		$validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:customers,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('err',"Email must be unique");
		}
		
		$customer = new Customer;
		$customer->name = $request->name;
		$customer->email = $request->email;
		$customer->tax_no = $request->tax_no;
		$customer->currency = $request->currency;
		$customer->phone = $request->phone;
		$customer->website = $request->website;
		$customer->address = $request->address;
		$customer->save();

		return redirect()->back()->with('success','Customer successfully added');
	}

	public function customerEdit($id){
		$customer = Customer::find($id);

		if(!$customer){
			return redirect()->back()->with('err','Customer not available');
		}

		return view('page.admin.income.customer.edit',compact('customer'));
	}

	public function customerUpdate(Request $request){

		$customer = Customer::find($request->id);

		if(!$customer){
			return redirect()->back()->with('err','Customer not available');
		}
		$customer->name = $request->name;
		$customer->email = $request->email;
		$customer->tax_no = $request->tax_no;
		$customer->currency = $request->currency;
		$customer->phone = $request->phone;
		$customer->website = $request->website;
		$customer->address = $request->address;
		$customer->save();

		return redirect()->back()->with('success','Customer successfully updated');
	}

	public function customerDelete(Request $request){

		$customer = Customer::find($request->id);
		if(!$customer){
			return redirect()->back()->with('err','Customer not available');
		}

		$customer->delete();

		return redirect()->back()->with('success','Customer successfully deleted');

	}

}
