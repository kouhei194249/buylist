<!DOCTYPE html>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buy List</title>
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='category_title'>{{ $category}}</h1>
        <div class='things'>
            <div  class='thing'>
                <h2 class='thing_title'>商品名：{{ $thing->name }}</h2>    
            　  <div class="content">
            　      <div class="content__thing">
            　          <h3>詳細</h3>
            　               <h3>価格：{{ $thing->price }}円</h3>
            　　　　        　  <h3>優先度：{{ $thing->rank }}</h3>
　　　　　　　　            <h3>その他：{{ $thing->other}}</h3>
　　　　　　　　            @if ($thing->image_path)
                                <!-- 画像を表示 -->
                                <img src="https://buylist-backet.s3.ap-northeast-1.amazonaws.com/{{ $thing->image_path }}">
                            @endif
　　　　　　　　    </div>　
                </div>
            </div>
        </div>
            <p class='edit'><a class="btn btn-secondary"href='/things/{{ $thing->id}}/edit'role="button">編集</a></p>
        <form action="/things/{{ $thing->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
        <button type="button" class="btn btn-danger">削除</button> 
        </form>
        
        <div class="back"><a class="btn btn-light"href="/things/category/{{ $thing->category_id}}"role="button">戻る</a></div>
    </body>
</html>
@endsection