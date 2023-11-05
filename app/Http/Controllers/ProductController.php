<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{

    //
    public function index(Request $request,Product $product)
    { 
        
        
        $search = $request->input('search');
        
        $query = Product::query();
        
        if ($search) {
            $spaceConversion = mb_convert_kana($search, 's');
            
            $wordArraySearched =preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $product　= $query->paginate(20);

        }
        return view('posts.index')
            ->with([
                'products' => $product,
                'search' => $search,
            ]);
    }
}
