<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';

    protected $fillable = [
        'course_name',
        'category_type',
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_type');
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function ratings()
    {
        return $this->hasMany(CourseRating::class);
    }

    public function studentGrading()
    {
        return $this->hasMany(StudentGrading::class);
    }

    public function termOfferings()
    {
        return $this->hasMany(CourseOffering::class);
    }

    public function teachers()
    {
        return $this->hasMany(TeacherRelatedToCourse::class);
    }

    public function ta()
    {
        return $this->hasMany(TARelatedToCourse::class);
    }

    public function graders()
    {
        return $this->hasMany(GraderRelatedToCourse::class);
    }

    public function details()
    {
        return $this->hasOne(CourseDetail::class);
    }
}
