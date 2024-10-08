<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    // protected $gaurded = [];
    protected $primaryKey = 'assignment_id';
    protected $fillable = [
        'assignment_id',
        'course_id',
        'description',
        'attached_files',
        'deadline',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function submissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function discussions()
    {
        return $this->hasMany(DiscussionBoardForAssignment::class);
    }
}
