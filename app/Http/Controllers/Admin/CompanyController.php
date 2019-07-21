<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Models\LeApi;
use App\Models\Company;

/**
 * Controller for admin company page
 */
class CompanyController extends Controller
{
    /**
     * Show company overview page
     * @return View [return company overview page]
     */
    public function index()
    {
        Company::screenAndCreateCompany(LeApi::admin_getCompanyList());

        $companiesWithoutCommission=[];
        $companies=Company::all();

        foreach ($companies as $company) {
            if (!($company->checkCompanyHasAllCommissions()))
                array_push($companiesWithoutCommission,$company);
        }

        return view('admin::company.index',compact('companiesWithoutCommission','companies'));
    }

    /**
     * Show certain company details page
     * @param  int $id [Compabt ID]
     * @return View     [redirect user to company detail page]
     */
    public function view($id)
    {
        $company=Company::find($id);
        return view('admin::company.view',compact('company'));
    }

    /**
     * Function to update company commission
     * @param  Request $request
     * @return View           [Redirect back to original page with message]
     */
    public function updateCommission(Request $request)
    {
        $company=Company::find($request->company_id);
        $company->company_stage_1_commission()->update(['amount'=>$request->stage1CommissionAmount]);
        $company->company_stage_2_commission()->update(['amount'=>$request->stage2CommissionAmount]);
        $company->company_annual_commission()->update(['amount'=>$request->annualCommissionAmount]);
        return redirect()->back()->with('success','Commissions updated');
    }
}
