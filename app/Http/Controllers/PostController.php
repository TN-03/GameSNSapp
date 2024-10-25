<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;


use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts'=>$post->getPaginateBylimit()]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post'=>$post]);
    }

    public function create()
    {
        $games = Game::all();
        $users = User::all();
        return view('posts.create',['games' => $games],['users' => $users]);
    }

    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
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
