<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Categorys</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='category_title'>カテゴリー名</h1>
        <div class='things'>
            <div  class='thing'>
                <h2 class='thing_title'><a href='/things/{thing}'>商品名１</h2></a> 
            　  <div class='bodys'>
            　       <h3 class='price'>値段１</h3>
            　　　　　  <p class='rank'>優先順位１</p>
　　　　　　　　    <p class='other'>その他１</p>      
　　　　　　　　</div>　
                <div class="back">[<a href="/">戻る</a>]</div>
            </div> 
        </div>   
    </body>
</html>