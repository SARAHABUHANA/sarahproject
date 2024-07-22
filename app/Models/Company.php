<?php

namespace App\Models;
use App\Models\User;
use App\Models\Job;
use App\Models\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','image','Specialty_name','description'];
   

    public function user()
{
    return $this->belongsTo(User::class);
}

public function jobs()
{
    return $this->hasMany(Job::class);
}

public function trainings()
{
    return $this->hasMany(Training::class);
}
}
