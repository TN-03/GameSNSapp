<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function looking_for_partys()
    {
        return $this->hasMany(Looking_for_party::class);
    }

    public function gaming_platform()
    {
        return $this->belongsTo(Gaming_platform::class);
    }

    public function notifications()
    {
        return $this->hasMany(notification::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function game_users()
    {
        return $this->hasMany(Game_user::class);
    }

    public function user_ranks()
    {
        return $this->hasMany(User_rank::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
