<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseeProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'dot_reg_date' => 'datetime',
        'dot_reg_expiry' => 'datetime',
    ];
}
