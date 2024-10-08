<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TARelatedToCourse extends Model
{
    use HasFactory;


    // A TA-course relationship belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A TA-course relationship belongs to a user (TA)
    public function ta()
    {
        return $this->belongsTo(User::class, 'user_id_ta', 'user_id');
    }

}
