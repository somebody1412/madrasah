<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\QuestionOptions
 *
 * @property int $id
 * @property int|null $question_id
 * @property string|null $option
 * @property int|null $correct
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|QuestionOptions newModelQuery()
 * @method static Builder|QuestionOptions newQuery()
 * @method static Builder|QuestionOptions query()
 * @method static Builder|QuestionOptions whereCorrect($value)
 * @method static Builder|QuestionOptions whereCreatedAt($value)
 * @method static Builder|QuestionOptions whereId($value)
 * @method static Builder|QuestionOptions whereOption($value)
 * @method static Builder|QuestionOptions whereQuestionId($value)
 * @method static Builder|QuestionOptions whereUpdatedAt($value)
 * @mixin Eloquent
 */
class QuestionOptions extends Model
{
    //
}
