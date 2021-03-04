<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h3>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h4>message</h4>
                <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/posts">back</a>]</div>
    </body>
</html>