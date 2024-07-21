<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_information_id',
        'education_level',
        'college',
        'university',
        'year',
        'marks',
        'position',
        'attempt',
    ];
}
