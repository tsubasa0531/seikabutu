<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            ]);
            
            $review = new Review;
            $review->user_id = auth()->user()->id;
            $review->title = $validatedData['title'];
            $review->body = $validatedData['body'];
            $review->save();
            
            return redirect()->route('review.index');
    }
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }
}
