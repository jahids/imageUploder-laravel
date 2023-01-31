<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function Teacher()
    {
        // hasone one to one
        return $this->hasOne(Crud::class, 'id', 'teacher_id');
    }
}
