<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    public function projects(){
//photo à tester depuis Api
        return $this->belongsToMany(Project::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }    
}
