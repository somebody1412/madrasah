<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CompanyCommission
 *
 * @property int $id
 * @property int $commission_type_id
 * @property int $company_id
 * @property float $amount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CompanyCommission newModelQuery()
 * @method static Builder|CompanyCommission newQuery()
 * @method static Builder|CompanyCommission query()
 * @method static Builder|CompanyCommission whereAmount($value)
 * @method static Builder|CompanyCommission whereCommissionTypeId($value)
 * @method static Builder|CompanyCommission whereCompanyId($value)
 * @method static Builder|CompanyCommission whereCreatedAt($value)
 * @method static Builder|CompanyCommission whereId($value)
 * @method static Builder|CompanyCommission whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CompanyCommission extends Model
{
    protected $guarded=[];

    public static function checkCompanyHasStage1Commission($company)
    {
        return self::where('commission_type_id',CommissionType::getStage1CommissionID())->where('company_id',$company->id)->exist();
    }

    public static function checkCompanyHasStage2Commission($company)
    {
        return self::where('commission_type_id',CommissionType::getStage2CommissionID())->where('company_id',$company->id)->exist();
    }

    public static function checkCompanyHasAnnualCommission($company)
    {
        return self::where('commission_type_id',CommissionType::getAnnualCommissionID())->where('company_id',$company->id)->exist();
    }
}
