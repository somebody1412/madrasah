<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Exam
 *
 * @property int $id
 * @property int $pass_question
 * @property int $total_question
 * @property string|null $exam_description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Exam newModelQuery()
 * @method static Builder|Exam newQuery()
 * @method static Builder|Exam query()
 * @method static Builder|Exam whereCreatedAt($value)
 * @method static Builder|Exam whereExamDescription($value)
 * @method static Builder|Exam whereId($value)
 * @method static Builder|Exam wherePassQuestion($value)
 * @method static Builder|Exam whereTotalQuestion($value)
 * @method static Builder|Exam whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Exam extends Model
{

}
