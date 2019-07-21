<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Illuminate\Support\Carbon;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nric
 * @property string $email
 * @property string $name
 * @property string|null $password
 * @property int|null $exam_status_id
 * @property int|null $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read Collection|ExamRecord[] $user_examrecord
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereExamStatusId($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User whereNric($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRoleId($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [''];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function login($token,$nric,$user)
    {
        session(["user_token"=>$token]);
        session(["user_nric"=>$nric]);
        Auth::login($user, false);
    }

    public static function createAgent($nric,$email,$name)
    {
        return self::create([
            "nric"=>$nric,
            "email"=>$email,
            "name"=>$name,
            "role_id"=>Role::getAgentRoleId(),
            "exam_status_id"=>UserExamStatus::getFreshStatusId()
        ]);
    }

    public function isExamPassed()
    {
        return in_array($this->exam_status_id,UserExamStatus::getPassClass());
    }

    public function user_examrecord(){
        return $this->HasMany(ExamRecord::class, 'user_id', 'id');
    }
}
