<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>編集画面</h1>
        <div class="content">
            <form action='/posts/{{ $post->id }}' method='POST'>
                @method('PUT')
                <div class='title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='body'>
                    <h2>本文</h2>
                    <textarea type='text' name='post[body]' placeholder="今日も1日お疲れ様でした。">{{ $post->body }}</textarea>
                </div>
                <p class="botton"><input type="submit" value="保存"></p>
            </form>
        </div>
        <div class="back">[<a href="/posts/{{ $post->id }}">戻る</a>]</div>
    </body>
</html>