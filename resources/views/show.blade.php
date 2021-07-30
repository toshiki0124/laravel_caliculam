<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta namge="viewport" cntent="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">S
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content_post">
                <p>{{ $post->body }}</p>
                <p class='updated_at'>{{ $post->updated_at }}</p>
            </div>
        </div>
        <div class="footer">
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            
            <form action="/posts/{{ $post->id }}" id="form_delete" method="POST">
                @method('DELETE')
                <button type="submit">delete</button>
                
                <input type="submit" style="display:none">
                <p class='delete'>[<span onclick="return deletePost(this)">delete</span>]</p>
                
            </form>
            
            <a href="/posts">戻る</a>
        </div>
        
        <script>
            function deletePost(e) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？'))　{
                    document.getElementBy('form_delete').submit();
                }
            }
        </script>
        
    </body>
</html>