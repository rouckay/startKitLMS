<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseInvolvement extends Model
{
    use HasFactory;


    // A course involvement belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    // A course involvement belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // Optionally, you can track the role involved (e.g., student, TA)
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }
}
