<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentSubmission extends Model
{
    use HasFactory;

    // A submission belongs to an assignment
    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'assignment_id', 'assignment_id');
    }

    // A submission belongs to a user (student)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
