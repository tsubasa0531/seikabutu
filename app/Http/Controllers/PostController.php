<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
class PostController extends Controller
{ 
    public function index(Post $post,Product $product)
    {
        return view('posts.index')->with(['products' => $product->get(),'reviews' => $post->getPaginateByLimit(1)]); 
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    
    
 
}
