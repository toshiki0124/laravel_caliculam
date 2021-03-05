<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/posts" method="POST">
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。" value="{{ old('post.body') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <p class="botton"></p><input type="submit" value="保存"/></p>
        </form>
        <div class="back">[<a href="/posts">戻る</a>]</div>
    </body>
</html>