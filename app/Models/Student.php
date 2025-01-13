<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;
use App\Models\classMOdel;
use App\Models\ParentModel;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'email', 'phone_number', 'class_id', 'address'];

    public function classMOdels()
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
