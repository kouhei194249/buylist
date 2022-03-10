<!DOCTYPE html>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1>所持金登録</h1>
        <form action="/saving"  method="POST">
      　@csrf
        <div class='possession_create'>
            <h2>登録</h2>
            <input type="number" name="saving[possession]" placeholder="￥所持金" value="{{ old('thing.possession') }}"/>
            <p class="possession_create_error" style="color:red">{{ $errors->first('thing.possession') }}</p>
        </div>
            <input type="submit" value="保存"/> 
        </form>   
            <div class="back">[<a href="/saving">戻る</a>]</div>
    </body>
</html>
@endsection