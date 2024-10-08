<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTerm extends Model
{
    use HasFactory;

    public function courseOfferings()
    {
        return $this->hasMany(CourseOffering::class, 'term_id', 'term_id');
    }
}
