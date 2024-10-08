<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionType extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'permission_type_id', 'permission_type_id');
    }
}
