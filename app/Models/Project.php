<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{

    use HasFactory;

    public function excerpt($limit)
    {
        return Str::limit($this->description, $limit);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }



}
