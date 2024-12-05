<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Looking_for_party;
use App\Models\Comment;


use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::with('comments','game')->paginate(10); // コメントも一緒に取得
        $games = Game::all();
        $looking_for_party = Looking_for_party::with(['user','game'])->get();
        
        return view('posts.index', [ 
            'posts' => $posts, 
            'games' => $games, 
            'looking_for_party' => $looking_for_party
         ]); 

    }

    public function byGame(Game $game = null)
    {   
        $selectedGameId = $game ? $game->id : null;

        if ($game) {
            $posts = Post::where('game_id', $game->id)->paginate(10);
            $looking_for_party = Looking_for_party::where('game_id',$game->id)->paginate(10);
        } else {
            $posts = Post::paginate(10);
            $looking_for_party = Looking_for_party::paginate(10);
        }

        $games = Game::all();

        return view('posts.index', compact('posts','games','looking_for_party','selectedGameId') );

    }


    public function create()
    {
        $games = Game::all();
        $users = User::all();
        return view('posts.create',['games' => $games,'users' => $users]);
    }

    public function store(Post $post, PostRequest $request)
    {
        $post =new Post();
        $input = $request['post'];
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();
        return redirect('/');
    }
    
    public function edit(Post $post)
    {
        $games = Game::all();
        return view('posts.edit',compact('post','games'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/GameVerse');
    }
}
