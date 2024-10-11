<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party_request extends Model
{
    use HasFactory;

    public function looking_for_party()
    {
        return $this->belongsTo(Looking_for_party::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
