<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>Blog Name</h1>
        {{Auth::user()}}
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>