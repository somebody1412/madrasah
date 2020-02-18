<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function record(){
        return $this->hasMany(Record::class, 'student_id', 'id');
    }
}
