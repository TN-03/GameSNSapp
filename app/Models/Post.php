<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasmany(Like::class);
    }

    public function post_images()
    {
        return $this->hasMany(Post_image::class);
    }

    public function post_videos()
    {
        return $this->hasMany(Post_video::class);
    }

    public function game()
    {
       return $this->belongsTo(Game::class);
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
