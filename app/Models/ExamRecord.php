<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ExamRecord
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $question_id
 * @property int|null $answer_id
 * @property int $correct
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Question|null $examRecord_Question
 * @method static Builder|ExamRecord newModelQuery()
 * @method static Builder|ExamRecord newQuery()
 * @method static Builder|ExamRecord query()
 * @method static Builder|ExamRecord whereAnswerId($value)
 * @method static Builder|ExamRecord whereCorrect($value)
 * @method static Builder|ExamRecord whereCreatedAt($value)
 * @method static Builder|ExamRecord whereId($value)
 * @method static Builder|ExamRecord whereQuestionId($value)
 * @method static Builder|ExamRecord whereUpdatedAt($value)
 * @method static Builder|ExamRecord whereUserId($value)
 * @mixin Eloquent
 */
class ExamRecord extends Model
{
    protected $guarded = ['id'];

    public function examRecord_Question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
