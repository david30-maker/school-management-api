<?php

namespace Modules\Attendance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;


class Attendance extends Model
{
    protected $fillable = ['student_id', 'date', 'status', 'remark'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
