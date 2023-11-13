<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\User;

class FeedbackController extends Controller
{
    public function index()
    { 
        $feedbacks = Feedback::with('Comment')->paginate(2); // Adjust the number per page as needed.    
        return view('feedback.index', compact('feedbacks'));
    }

    public function find_by_id($id){
        $feedback = Feedback::where("id" , $id)->first();
        return view('feedback.details', compact('feedback'));
    }
    public function create()
    {
        // Show the feedback creation form

        
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $feedback = new Feedback([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'vote_count' => 0,
            'user_id' => auth()->user()->id,
            'status' => true,
        ]);

        $feedback->save();

        return redirect()->route('feedback.index');
    }
}
