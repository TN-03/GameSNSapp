<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Looking_for_party extends Model
{
    use HasFactory;
    protected $table = "looking_for_partys";

    protected $fillable=[
        'content',
        'game_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function party_requests()
    {
        return $this->hasMany(party_request::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

}
