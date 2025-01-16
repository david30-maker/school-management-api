<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;

class Subject extends Model
{
    protected $fillable = ['name', 'teacher_id', 'student_id', 'time', 'during'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
}
