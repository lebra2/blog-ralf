<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function store(Article $article, Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->description = $request->comment;
        $comment->article_id = $article->id;
        $comment->save();

        return back()->with("success","Kommentaar lisatud.");

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()-with('success', 'Kommentaar kustutatud.');

    }
}
