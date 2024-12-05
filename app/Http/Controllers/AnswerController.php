<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AnswerController extends Controller
{
    public function storeAnswer(Request $request,Question $question, Answer $answer)
    {
        #$post =new Comment();
        $input['content'] = $request['answer']['content'];
        $input['user_id'] = Auth::user()->id;
        $input['question_id'] = $request['question']['id'];
        $answer->fill($input)->save();
        return redirect('/');
    }
}
