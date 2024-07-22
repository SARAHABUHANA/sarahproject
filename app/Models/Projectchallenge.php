<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Challenge;
use App\Models\User;
use App\Models\Vot;

class Projectchallenge extends Model
{
    use HasFactory;
   
        protected $fillable = [
            'user_id', 'challenge_id', 'title', 'description', 'file_path', 'image' // إضافة حقل الصورة
        ];

        
        public function challenge()
        {
            return $this->belongsTo(Challenge::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function votes()
        {
            return $this->hasMany(Vote::class);
        }
}
