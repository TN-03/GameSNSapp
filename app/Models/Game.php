<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function game_users()
    {
        return $this->hasMany(game_user::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function looking_for_partys()
    {
        return $this->hasMany(Looking_for_party::class);
    }

    public function getByGame(int $limit_count = 5)
    {
        return $this->posts()->with('game')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
