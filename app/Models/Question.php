<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function user_rank()
    {
        return $this->belongsTo(User_rank::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function question_images()
    {
        return $this->hasMany(Question_image::class);
    }

    public function question_videos()
    {
        return $this->hasMany(Question_video::class);
    }
}
