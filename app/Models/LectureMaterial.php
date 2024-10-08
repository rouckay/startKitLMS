<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureMaterial extends Model
{
    use HasFactory;



    // A lecture material belongs to a lecture
    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecture_id', 'lecture_id');
    }

    // A lecture material belongs to a material
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id', 'material_id');
    }
}
