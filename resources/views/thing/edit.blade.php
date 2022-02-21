<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/things/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__category_title'>
                    <h2>カテゴリー名</h2>
                    <input type='text' name='thing[category_title]' value="{{ $thing->category_title }}">
                </div>
                
                <div class='content__thing_title'>
                    <h2>商品名</h2>
                    <input type='text' name='thing[thing_title]' value="{{ $thing->thing_title }}">
                </div>
                
                
                <div class='content__price'>
                    <h2>値段</h2>
                    <input type='text' name='thing[price]' value="{{ $thing->price }}">
                </div>
                
                <div class='content__rank'>
                    <h2>優先順位</h2>
                    <input type='text' name='thing[rank]' value="{{ $thing->rank }}">
                </div>
                
                <div class='content__other'>
                    <h2>その他</h2>
                    <input type='text' name='thing[other]' value="{{ $thing->other }}">
                </div>
                
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>