<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourseDetail extends Model
{
    use HasFactory;

    // A student course detail belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A student course detail belongs to a user (student)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
