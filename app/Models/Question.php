<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Question
 *
 * @property int $id
 * @property string $question
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $correct
 * @property int $wrong
 * @property-read Collection|Answer[] $question_answer
 * @method static Builder|Question newModelQuery()
 * @method static Builder|Question newQuery()
 * @method static Builder|Question query()
 * @method static Builder|Question whereCorrect($value)
 * @method static Builder|Question whereCreatedAt($value)
 * @method static Builder|Question whereId($value)
 * @method static Builder|Question whereQuestion($value)
 * @method static Builder|Question whereUpdatedAt($value)
 * @method static Builder|Question whereWrong($value)
 * @mixin Eloquent
 */
class Question extends Model
{
    public function question_answer()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }
}
