<!DOCTYPE html>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>買い物リスト</h1>
        <div class='categories'>
            
            @foreach ($categories as $category)
                <div class='category'>
                    <h2 class='category_title'>
                    <a class="btn btn-primary"href="/things/category/{{ $category->id }}"role="button">{{ $category->category }} </a></h2>
                </div>
            @endforeach
        </div>
        <h2>[オプション]</h2>
            <h3 class='possession'>                
                <a class="btn btn-primary"href='/saving'role="button">所持金</h3></a>　
            <h3 class='new product'>
                <a class="btn btn-primary"href='/things/create'role="button">新規商品登録</h3></a>　
         <div class='paginate'>
            {{ $categories->links() }}
        </div>
    </body>
</html>
@endsection