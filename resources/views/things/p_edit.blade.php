<!DOCTYPE HTML>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1>所持金編集</h1>
     <form action="/saving/{{ $saving->id}}" method="POST">
      　@csrf
      　@method('PUT')
        <div class='possession_edit'>
            <h2>編集</h2>
                <input type="number" name="saving[possession]" placeholder="￥所持金" value="{{ $saving->possession}}"/>
                <p class="possession_create_error" style="color:red">{{ $errors->first('saving.possession') }}</p>
        </div>
            <input type="submit" value="保存"/> 
        </form> 
            <div class="back">[<a href="/saving">戻る</a>]</div>
    </body>
</html>
@endsection