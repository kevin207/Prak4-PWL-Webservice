<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->nama = $request->input('nama');
        $comment->komentar = $request->input('komentar');
        $comment->save();

        return response()->json([
            'status' => 200,
            'message' => 'Comment Added Succesfully',
        ]);
    }

    public function fetch(Request $request)
    {
        $comments = Comment::all();
        
        return response()->json([
            'status' => 200,
            'comments' => $comments
        ]);
    }
}
