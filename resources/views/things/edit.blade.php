<!DOCTYPE HTML>

@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1 class="title">商品編集</h1>
        <div class="content">
            <form action="/things/{{ $thing->id }}" method="POST">
                @csrf
                @method('PUT')
               <div class="category_title">
                <h2>カテゴリー名</h2>
                <select name="thing[category_id]">
                    @foreach($categories as $category)
                     @if($category->id==$thing->category_id)
                       <option value="{{ $category->id }}" selected>{{ $category->category }}</option>
                     @else
                         <option value="{{ $category->id }}">{{ $category->category }}</option>
                      @endif
                    @endforeach
                </select>
            </div>    
            <div class="thing_title">
                <h2>商品名</h2>
                <textarea type="text" name="thing[name]" placeholder="商品名">{{ $thing->name}}</textarea>
                <p class="thing_title__error" style="color:red">{{ $errors->first('thing.name') }}</p>
            </div>
            <div class="thing_price">
                <h2>値段</h2>
                <input type="number" name="thing[price]" placeholder="値段" value="{{ $thing->price}}"/>
                <p class="thing_price__error" style="color:red">{{ $errors->first('thing.price') }}</p>
            </div>
            <div class="thing_rank">
                <h2>優先度</h2>
                <select name="thing[rank]"> 
                @foreach($numbers as $number)
                    @if($number==$thing->rank)
                    <option value="{{$number}}" selected>{{$number}}</option>
                      @else
                       <option value="{{$number}}" >{{$number}}</option>
                      @endif
                       @endforeach
                </select>
                <p class="thing_rank__error" style="color:red">{{ $errors->first('thing.rank') }}</p>
            </div>
            <div class="thing_other">
                <h2>その他</h2>
                <textarea type="text" name="thing[other]" placeholder="その他">{{ $thing->other}}</textarea>
            </div>
            <input type="submit" value="保存"/>
            </form>
            <div class="back">[<a href="/things/{{ $thing->id }}">戻る</a>]</div>
        </div>
    </body>
</html>
@endsection