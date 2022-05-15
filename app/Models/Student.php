<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    public function projects(){
        return $this->belongsToMany(Project::class);
    }

    public function acceptedProjects()
    {
        return $this
            ->belongsToMany(Project::class)
            ->where('status', '=', 'ACCEPTED');
    }

//    public function userByEmail(String $email)
//    {
//        return $this->where('email', '=', $email);
//    }

    public function pendingProjects()
    {
        return $this
            ->belongsToMany(Project::class)
            ->where('status', '=', 'PENDING');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
