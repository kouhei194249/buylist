<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Buy List</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/things/{{ $thing->id }}" method="POST">
                @csrf
                @method('PUT')
               <div class="category_title">
                <h2>カテゴリー名</h2>
                <select name="thing[category_id]">
                    @foreach($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->category }}</option>
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
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
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