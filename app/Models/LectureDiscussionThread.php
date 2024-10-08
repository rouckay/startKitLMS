<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureDiscussionThread extends Model
{
    use HasFactory;


    // A discussion thread belongs to a lecture
    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecture_id', 'lecture_id');
    }

    // A discussion thread belongs to a user (participant)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
