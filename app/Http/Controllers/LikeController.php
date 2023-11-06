<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function togglelike(Review $review)
    {
        $user = auth()->user();
        $like = $user->likes()->where('review_id', $review->id)->
        first();
        
           if ($like) {
               $like->delete();
           } else {
               $user->likes()->create(['review_id' => $review->id]);
           }
           
           return back();
        
        
    }
    
    //
}
