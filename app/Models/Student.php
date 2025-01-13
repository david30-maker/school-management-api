<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'email', 'phone_number', 'class_id', 'address'];

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
