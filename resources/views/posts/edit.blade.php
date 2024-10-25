<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="gametitle">
                    <h2>ゲームを選択</h2>
                    <select name="post[game_id]">
                        <option value="">ゲームを選択してください</option>
                        @foreach ($games as $game)
                        <option value="{{ $game->id }}" {{ $game->id == $post->game_id ? 'selected' : '' }}>{{ $game->title }}</option>
                        @endforeach
                    </select>
                <div class='content__title'>
                    <h2>投稿文</h2>
                    <input type='text' name='post[title]' value="{{ $post->content }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="footer">
            <a href="/GameVerse">戻る</a>
        </div>
    </body>
</html>