<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        $view = view('comments.index')->with([
            'comments' => $comments
        ]);

        $header = [];

        /*$header = [
            'Content-Security-Policy' => 'default-src \'self\''
        ];*/

        return response($view, 200, $header);
    }

    public function indexPell()
    {
        $comments = Comment::all();

        $view = view('comments.indexPell')->with([
            'comments' => $comments
        ]);

        $header = [];

        /*$header = [
            'Content-Security-Policy' => 'default-src \'self\''
        ];*/

        return response($view, 200, $header);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $body = $request->get('body');

        /*if (preg_match('/<script>/', $request->get('body'))) {
            abort(404);
        }*/

        //$body = preg_replace('/<script>/', '', $request->get('body'));

        $comment = new Comment([
            'body' => $body
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
