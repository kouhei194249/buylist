<!DOCTYPE html>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1>所持金</h1>
        <div class='possession'>
        <h3 class='possession_create'> 
            <a class="btn btn-primary"href='/saving/p_create'role="button">登録</h3></a>
        <h3 class='possession_edit'> 
            <a class="btn btn-secondary"href='/saving/p_edit'role="button">編集</h3></a>
        </div>
        <div class="back"><a class="btn btn-light"href="/"role="button">戻る</a></div>
    </body>
</html>
@endsection