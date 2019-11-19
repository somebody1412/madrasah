<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\InvoiceTx;
use Illuminate\Support\Facades\Validator;

class IncomeController extends Controller
{
    public function invoiceIndex(Request $request){
		$searchQuery = $request->input("query");

		$invoices = InvoiceTx::with('customer')->orderBy('created_at','DESC');

		if ($searchQuery) {
            $invoices = $invoices->where(function ($query) use ($searchQuery) {
                $query->where('name', 'like', "%$searchQuery%")
                ->orWhere('email', 'like', "%$searchQuery%")
                ->orWhere('tax_no', 'like', "%$searchQuery%")
                ->orWhere('phone', 'like', "%$searchQuery%");
            });
		}

		$invoices = $invoices->get();

		return view('page.admin.income.invoice.view',compact('invoices'));
	}

    public function invoiceAdd(){
		$customers = Customer::all();
		return view('page.admin.income.invoice.add',compact('customers'));
	}

	public function invoiceStore(Request $request){
		
		$this->validate($request, [
			'file' => 'required',
			]);
			
			try {
				$fileName = 'Invoice'.time().'.'.request()->file->getClientOriginalExtension();
				$path = 'storage/invoice/' . $fileName;
				
				//upload image to server
				request()->file->move(public_path('storage/invoice/'), $fileName);
				
			} catch (Exception $e) {
				return redirect()->back()->with('err','File cant upload');
			}

		$customer = new InvoiceTx();
		$customer->customer_id = $request->customer;
		$customer->currency = $request->currency;
		$customer->invoice_date = $request->invoice_date;
		$customer->due_date = $request->due_date;
		$customer->invoice_no = $request->invoice_no;
		$customer->order_no = $request->order_no;
		$customer->item_name = $request->item;
		$customer->quantity = $request->quantity;
		$customer->price = $request->price;
		$customer->tax = $request->tax;
		$customer->total = $request->total;
		$customer->notes = $request->notes;
		$customer->category = $request->category;
		$customer->recurring = $request->recurring;
		$customer->file_url = $path;
		$customer->save();

		return redirect()->back()->with('success','Customer successfully added');
	}

    public function invoiceEdit($id){
		$invoice = InvoiceTx::find($id);
		$customers = Customer::all();

		if(!$invoice){
			return redirect()->back()->with('err','Invoice not available');
		}

		return view('page.admin.income.invoice.edit',compact('invoice','customers'));
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
