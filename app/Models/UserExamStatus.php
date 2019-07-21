<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\UserExamStatus
 *
 * @property int $id
 * @property string $class
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|UserExamStatus newModelQuery()
 * @method static Builder|UserExamStatus newQuery()
 * @method static Builder|UserExamStatus query()
 * @method static Builder|UserExamStatus whereClass($value)
 * @method static Builder|UserExamStatus whereCreatedAt($value)
 * @method static Builder|UserExamStatus whereId($value)
 * @method static Builder|UserExamStatus whereName($value)
 * @method static Builder|UserExamStatus whereUpdatedAt($value)
 * @mixin Eloquent
 */
class UserExamStatus extends Model
{
    protected $table="user_exam_status";

    const FAIL_FRESH = 1;
    const PASS_PASS = 2;
    const PASS_RETAKE = 3;
    const FAIL_FAIL = 4;
    const FAIL_REOPEN = 5;
    const FAIL_INEXAM = 6;
    CONST STATUS=[
        self::FAIL_FRESH => 'Fresh',
        self::PASS_PASS => 'Pass',
        self::PASS_RETAKE => 'Retake',
        self::FAIL_FAIL => 'Fail',
        self::FAIL_REOPEN => 'Reopen',
        self::FAIL_INEXAM => 'In Exam'
    ];

    public static function getPassClass()
    {
        return self::where('class','pass')->pluck('id')->toArray();
    }

    public static function getFailClass()
    {
        return self::where('class','fail')->pluck('id')->toArray();
    }

    public static function getFreshStatusId()
    {
        return self::where('name','fresh')->first()->id;
    }

    public static function getFailStatusId()
    {
        return self::where('name','fail')->first()->id;
    }

    public static function getStatus($status_id) {
        return self::STATUS[$status_id];
    }
}
