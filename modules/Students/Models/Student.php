<?php

namespace Modules\Students\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'email', 'phone_number', 'enrollment_number', 'dob', 'roll_no', 'address'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
