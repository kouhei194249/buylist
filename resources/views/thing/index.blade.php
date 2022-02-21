<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>買い物リスト</h1>
        <div class='categories'>
            @foreach ($categories as $category)
                <div class='category'>
                    <h2 class='category_title'>{{ $category->category }}<a href='/things/category/{category}'></h2></a>
                </div>
            @endforeach
            <h3 class='possession'><a href='/category/{category}/possession'>所持金</h3></a>　　　　　　　　
            <h3 class='new product'><a href='/things/{things}/create'>新規商品</h3></a>　
    
        </div>
         <div class='paginate'>
            {{ $categories->links() }}
        </div>
    </body>
</html>















