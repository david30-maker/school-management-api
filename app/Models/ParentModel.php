<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class ParentModel extends Model
{
    protected $table = 'parents';
    protected $fillable = ['name', 'email', 'phone_number', 'address', 'profession', 'office_address'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
