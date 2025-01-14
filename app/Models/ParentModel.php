<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class ParentModel extends Model
{
    use App\Models\ParentModel;

public function run()
{
    ParentModel::create([
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'phone_number' => '123456789',
        'address' => '123 Main St',
        'profession' => 'Teacher',
        'office_address' => 'School Address',
    ]);
}

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
