<?php

namespace App\Listeners;

use App\Events\CompanyCreated;
use App\Models\CommissionType;
use App\Models\CompanyCommission;

class CreateCompanyCommission
{
    /**
     * [__construct description]
     *
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  CompanyCreated  $event
     * @return void
     */
    public function handle(CompanyCreated $event)
    {
        $companyId=$event->company->id;
        CompanyCommission::insert([
          [
            "commission_type_id"=>CommissionType::getStage1CommissionID(),
            "company_id"=>$companyId,
            "amount"=>0
          ],
          [
            "commission_type_id"=>CommissionType::getStage2CommissionID(),
            "company_id"=>$companyId,
            "amount"=>0
          ],
          [
            "commission_type_id"=>CommissionType::getAnnualCommissionID(),
            "company_id"=>$companyId,
            "amount"=>0
          ]
        ]);
    }
}
