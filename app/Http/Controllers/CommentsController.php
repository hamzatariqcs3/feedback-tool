<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\User;

class CommentsController extends Controller
{
    public function store(Request $request) {
        
        $comment = new Comment([
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
            'status' => "1",
            'feed_id' => $request->input('feed_id'), 
        ]);

        $comment->save();

        return back();
    }
}
