<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseGrade extends Model
{
    use HasFactory;

    // A course grade belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A course grade belongs to a student (user)
    public function student()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // A course grade belongs to a specific grade (A, B, etc.)
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'grade_id');
    }
}
