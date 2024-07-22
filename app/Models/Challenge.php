<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectChallenge;
class Challenge extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'Specialty_name',
        'Award',
        'start_date',
        'end_date',
        
    ];



    public function projectchallenges()
    {
        return $this->hasMany(projectchallenge::class);
    }
 }
