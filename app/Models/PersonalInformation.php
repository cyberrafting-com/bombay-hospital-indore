<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    public function educationDetails()
    {
        return $this->hasMany(EducationDetail::class);
    }
}



// use HasFactory;: This line is used for Laravel's model factories, which are useful for testing and seeding your database with fake data.

// public function educationDetails(): This method defines the relationship.

// return $this->hasMany(EducationDetail::class);: This line tells Laravel that the PersonalInformation model can have many related EducationDetail models.