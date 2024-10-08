<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;




    // A course section belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A course section belongs to a teacher (user)
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id_teacher', 'user_id');
    }
}
