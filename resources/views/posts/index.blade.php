<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Menscosmetics</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    　<h1>男性のための化粧品口コミサイト〜普段使ってる化粧品を口コミしよう〜</h1>
    　<div class='posts'>
    　    <div class='post'>
    　        <h2 class='title'>review,category</h2>
    　        <p class='body'>skin care  </p>
    　    </div>
<form method="GET" action="{{ route('products.index') }}">
    <input type="seartch" placeholder="製品名を入力"name="search" value="@if (isset($search)) {{ $search }} @endif">
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
       
    　</div>
    　</body>