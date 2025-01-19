<?php

namespace Modules\Teacher\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ClassModel;
use App\Models\Subject;


class Teacher extends Model
{
    protected $fillable = ['name', 'age', 'email', 'phone_number', 'address'];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
