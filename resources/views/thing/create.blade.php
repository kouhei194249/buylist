<!DOCTYPE HTML>

@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1>Buy List</h1>
        <form action="/things" method="POST">
            @csrf
            <div class="category_title">
                <h2>カテゴリー名</h2>
                <input type="text" name="thing[category_title]" placeholder="カテゴリー名" value="{{ old('thing.category_title') }}"/>
                
                <p class="category_title__error" style="color:red">{{ $errors->first('thing.category_title') }}</p>
            </div>
            
            <div class="thing_title">
                <h2>商品名</h2>
                <textarea name="thing[thing_title]" placeholder="商品名" value="{{ old('thing.thing_title') }}"/>
                <p class="thing_title__error" style="color:red">{{ $errors->first('thing.thing_title') }}</p>
            </div>
            
            <div class="price">
                <h2>値段</h2>
                <textarea name="thing[price]" placeholder="金額">{{ old('thing.price') }}</textarea>
                <p class="price__error" style="color:red">{{ $errors->first('thing.price') }}</p>
            </div>
            <div class="rank">
                <h2>優先順位</h2>
                <select name="thing[rank]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
            </div>        
            <div class="other">
                <h2>その他</h2>
                 <textarea name="thing[other]" placeholder="その他情報">{{ old('thing.other') }}</textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
@endsection