<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function record(){
        return $this->hasMany(Record::class, 'student_id', 'id');
    }

    public function parent_1(){
        return $this->belongsTo(ParentProfile::class, 'parent_id_1', 'id');
    }

    public function parent_2(){
        return $this->belongsTo(ParentProfile::class, 'parent_id_2', 'id');
    }
}
