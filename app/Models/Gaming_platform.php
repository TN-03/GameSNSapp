<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaming_platform extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(user::class);
    }
}
