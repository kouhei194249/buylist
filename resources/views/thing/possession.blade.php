<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
        
        </head>
    <body>
        <h1>所持金</h1>
        <div class='possession'>
            <input type="integer" name="thing[title]" placeholder="￥所持金" value="{{ old('thing.possession') }}"/>
            <input type="submit" value="保存"/>   
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>