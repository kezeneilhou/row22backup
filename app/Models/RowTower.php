<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RowTower extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rowUser()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function rowProfile()
    {
        return $this->hasOne(LicenseeProfile::class,'user_id','user_id');
    }
}
