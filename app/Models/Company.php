<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

use App\Events\CompanyCreated;
use Illuminate\Support\Carbon;

/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $ref_id
 * @property string $name
 * @property string $reg_no
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|CompanyCommission[] $company_commissions
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @method static Builder|Company newModelQuery()
 * @method static Builder|Company newQuery()
 * @method static Builder|Company query()
 * @method static Builder|Company whereCreatedAt($value)
 * @method static Builder|Company whereId($value)
 * @method static Builder|Company whereName($value)
 * @method static Builder|Company whereRefId($value)
 * @method static Builder|Company whereRegNo($value)
 * @method static Builder|Company whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Company extends Model
{
    use Notifiable;

    protected $guarded = [''];
    protected $dispatchesEvents = [
      'created'=>CompanyCreated::class,
    ];

    /**
     * [Functin to return Company's commissions, a relationship function]
     * @return CompanyCommission[]|HasMany [all company commissions in array]
     */
    public function company_commissions()
    {
        return $this->hasMany('\App\Models\CompanyCommission');
    }


    /**
     * [Return stage 1 commission amount of Company]
     * @return CompanyCommission [Company first stage commission]
     */
    public function company_stage_1_commission()
    {
        return $this->company_commissions()
            ->where('commission_type_id',CommissionType::getStage1CommissionID())
            ->first();
    }

    /**
     * [Return stage 2 commission amount of Company]
     * @return CompanyCommission [Company second stage commission]
     */
    public function company_stage_2_commission()
    {
        return $this->company_commissions()
            ->where('commission_type_id',CommissionType::getStage2CommissionID())
            ->first();
    }

    /**
     * [Return annual commission amount of Company]
     * @return CompanyCommission [Company annual commission]
     */
    public function company_annual_commission()
    {
        return $this->company_commissions()
            ->where('commission_type_id',CommissionType::getAnnualCommissionID())
            ->first();
    }

    /**
     * [Check if a company has all commissions set]
     * @return bool isCompanyCommissionsSet
     */
    public function checkCompanyHasAllCommissions()
    {
        return CompanyCommission::where('company_id',$this->id)->count()>=3;
    }

    /**
     * [Function to create new company]
     * @param  int $ref_id [Reference Id number in LE Database]
     * @param  string $name   [Company Name]
     * @param  string $reg_no [Company Registration Number]
     * @return void
     */
    public static function createCompany($ref_id,$name,$reg_no)
    {
        self::create([
            "ref_id" => $ref_id,
            "name" => $name,
            "reg_no" => $reg_no
        ]);
    }

    /**
     * [Function to get all companies from LE db and compare with current records]
     * @param  object[] $companyList [A list of companies get from LE api]
     * @return null
     */
    public static function screenAndCreateCompany($companyList)
    {
        $currentCompaniesRegNo=self::all()->pluck('reg_no')->toArray();

        //Compare and get differences
        $differences=array_filter(
            $companyList,
            function ($e)  use ($currentCompaniesRegNo){
                return !in_array($e->registrationNo,$currentCompaniesRegNo);
            }
        );

        //Loop through differences, won't loop if no difference
        foreach ($differences as $difference)
        {
            self::create([
                "ref_id" => $difference->id,
                "name" => $difference->companyName,
                "reg_no" => $difference->registrationNo
            ]);
        }

        return null;
    }
}
