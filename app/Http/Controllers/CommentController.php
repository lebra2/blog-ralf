<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "article_id" => "required",
        ]);

        $comment = new Comment();
        $comment->description = $request->content;
        $comment->article_id = $request->article_id;
        $comment->save();

        return back()->with("success","");

    }
}
