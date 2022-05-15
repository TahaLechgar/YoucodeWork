<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsProject extends Model
{
    use HasFactory;

    protected $table = 'project_student';

    public function projects(){
        return $this->belongsTo(Project::class);
    }

    public function students(){
        return $this->belongsTo(Student::class);
    }


}
