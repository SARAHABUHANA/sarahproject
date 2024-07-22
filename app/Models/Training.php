<?php

namespace App\Models;
use App\Models\Company;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = ['company_id', 'user_id', 'title', 'about', 'Specialty_name'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
