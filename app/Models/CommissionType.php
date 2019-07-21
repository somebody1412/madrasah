<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CommissionType
 *
 * @property int $id
 * @property string $class
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CommissionType newModelQuery()
 * @method static Builder|CommissionType newQuery()
 * @method static Builder|CommissionType query()
 * @method static Builder|CommissionType whereClass($value)
 * @method static Builder|CommissionType whereCreatedAt($value)
 * @method static Builder|CommissionType whereId($value)
 * @method static Builder|CommissionType whereName($value)
 * @method static Builder|CommissionType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CommissionType extends Model
{
    public static function getStage1CommissionID()
    {
        return self::where('name','stage_1')->first()->id;
    }

    public static function getStage2CommissionID()
    {
        return self::where('name','stage_2')->first()->id;
    }

    public static function getAnnualCommissionID()
    {
        return self::where('name','annual')->first()->id;
    }
}
