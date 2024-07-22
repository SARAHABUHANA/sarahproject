<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Comment;
use Auth;


class CommentController extends Controller
{
    public function store(Request $request)
{
    $comment = new Comment();
    $comment->user_id = auth()->user()->id;
    $comment->project_id = $request->id;
    $comment->body = $request->body;
    $comment->save();

    return redirect()->back();
}


public function update(Request $request, $id)
{
    $comment = Comment::find($id);
    $comment->body = $request->body;
    $comment->save();

    return redirect()->back();
}

public function destroy($id)
{
    $comment = Comment::find($id);
    $comment->delete();

    return redirect()->back();
}

}
