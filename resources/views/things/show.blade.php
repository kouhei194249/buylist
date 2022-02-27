<!DOCTYPE html>
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
　　　　　　　　</div>　
            </div>　
            <p class='edit'>[<a href='/things/{{ $thing->id}}/edit'>編集</a>]</p>
        <form action="/things/{{ $thing->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
        <button type="submit">削除</button> 
        </form>
        <div class="back">[<a href="/things/category/{{ $thing->category_id}}">戻る</a>]</div>
    </body>
</html>