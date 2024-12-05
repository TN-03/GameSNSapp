<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\QuestionRequest;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('user','game')->paginate(10);
        $games = Game::all();
        return view("questions.question",['questions' => $questions, 'games' => $games]);
    }

    public function create()
    {   
        $games = Game::all();
        $users = User::all();
        return view('questions.create',['games' =>$games, 'users'=>$users]);
    }

    

    public function store(Question $question, QuestionRequest $request)
    {
        
        $question =new Question();
        $input = $request['question'];
        $input['user_id'] = Auth::user()->id;
        $question->fill($input)->save();
        return redirect()->route('questions.index')->with('success','質問が投稿されました！');
    }
    

    public function delete(Question $question)
    {
        if (Auth::id() === $question->user_id) {
            $question->delete();
        }
        return redirect()->route('questions.index');
    }

}
