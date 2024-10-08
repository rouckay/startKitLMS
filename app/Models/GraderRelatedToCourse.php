<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraderRelatedToCourse extends Model
{
    use HasFactory;

    // A grader-course relationship belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A grader-course relationship belongs to a user (grader)
    public function grader()
    {
        return $this->belongsTo(User::class, 'user_id_grader', 'user_id');
    }
}
