<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1>Buy List</h1>
    <form action="/saving"  method="POST">
      　@csrf
      　@method('PUT')
        <div class='possession'>
            <h2>所持金</h2>
            <input type="text" name="saving[possession]" placeholder="￥所持金" value="{{ old('thing.possession') }}"/>
        </div>
            <input type="submit" value="保存"/>   
    </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>