<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function subject(){
        return $this->hasMany(Subject::class, 'exam_id', 'id');
    }
}
