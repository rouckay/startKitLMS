<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentDiscussionThread extends Model
{
    use HasFactory;


    // An assignment discussion thread belongs to an assignment
    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'assignment_id', 'assignment_id');
    }

    // An assignment discussion thread belongs to a user (participant)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
