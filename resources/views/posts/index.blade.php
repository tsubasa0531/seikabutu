<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Menscosmetics</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
    <h1>Menscosmetics</h1>
    　<div class='posts'>
    　    <div class='post'>
    　        <h2 class='title'>review,category</h2>
    　        <p class='body'>skin care  </p>
    　    </div>
<form method="GET" action="{{ route('products.index') }}">
    <input type="search" placeholder="製品名を入力"name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>
        <button type="submit">検索</button>
        <button>
            <a href="{{ route('products.index') }}" class="text-white">
                クリア
            </a>
        </button>
    </div>
</form>
@foreach($products as $product)
   <a href="/posts/{{ $product->product_id }}">
        {{ $product->name }}
    </a>
    @endforeach
    extends('layouts.app')

@section('content')
    <div class="container">
        <h3>レビューを投稿する</h3>
        <form method="POST" action="{{ route('reviews.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" id="body" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>
    </div>
@endsection
 @foreach($reviews as $review)  
    @if (auth()->check())
   <form method="post"
 action="{{ route('like.toggle',$review) }}">
       @csrf
       <button type="submit" class="btn btn-link">
           {{ $review->likes->count() }} 
           いいね </button>
   </form>
@else
    <span>{{ $review->likes->count() }}
    いいね </span>
 @endif
 @endforeach
    　</div>
    　<body>