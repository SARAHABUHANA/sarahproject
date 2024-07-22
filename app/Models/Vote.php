<?php

namespace App\Models;
use App\Models\Project;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'user_id', 'vote'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function user()
    { 
        return $this->belongsTo(User::class);
    }
}
