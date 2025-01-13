<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Teacher;

class ClassModel extends Model
{
    protected $fillable = ['name', 'grade', 'teacher_id', 'subject_id', 'room_no'];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
}
