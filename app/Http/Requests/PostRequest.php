<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post.game_id' => 'required|exists:games,id',
            'post.content' => 'required|string',
        ];
    }
}
