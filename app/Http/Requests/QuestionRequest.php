<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'question.game_id' => 'required|exists:games,id',
            'question.content' => 'required|string',
        ];
    }
}