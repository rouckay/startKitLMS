<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
    use HasFactory;

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'payment_mode_id', 'payment_mode_id');
    }
}
