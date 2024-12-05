<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function storeComment(Request $request, Post $post, Comment $comment)
    {
        #$post =new Comment();
        $input['content'] = $request['comment']['content'];
        $input['user_id'] = Auth::user()->id;
        $input['post_id'] = $request['post']['id'];
        $comment->fill($input)->save();
        return redirect('/');
    }
}
