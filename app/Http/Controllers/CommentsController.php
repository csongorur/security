<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index')->with([
            'comments' => $comments
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $comment = new Comment([
            'body' => $request->get('body')
        ]);

        $comment->save();

        return redirect()->back();
    }

    public function delete(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
