<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;
use App\Models\classMOdel;
use App\Models\ParentModel;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'email', 'phone_number', 'enrollment_number', 'dob', 'roll_no', 'address'];

    public function classModels()
    {
        return $this->belongsTo(classMOdel::class);
    }

    public function parentModels()
    {
        return $this->belongsTo(ParentModel::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
