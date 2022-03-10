<!DOCTYPE html>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='category_title'>{{ $category_title}}</h1>
         <h3 class='possession'>所持金：{{$possession}}円</h3>
        <div class='things'>
            @foreach ($things as $thing)
                <div  class='thing'>
                    <h2 class='thing_title'>商品名：
                        <a href='/things/{{ $thing->id}}'>{{ $thing->name}}</a></h2>
            　       <h3 class='price'>価格：{{ $thing->price}}円</h3>
            　       <h3 class='rank'>優先度：{{ $thing->rank}}</h3>
　　　　　　　　    <h3 class='other'>その他：{{ $thing->other}}</h3>
　　　　　　　　</div>
　　　　　　@endforeach
　　　　<div class="back">[<a href="/">戻る</a>]</div>
        <div class='paginate'>
            {{ $things->links() }}
        </div>   
    </body>
</html>
@endsection