<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\ClassModel;

class Attendance extends Model
{
    protected $fillable = ['student_id', 'date', 'status', 'remark'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class);
    }
}
