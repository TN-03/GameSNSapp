<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>GameVerse</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            GameVerse
        </x-slot>
        <body>
            <h1>GamerVerse</h1>
            <form action="/posts" method="POST">
                @csrf
                <!--投稿者-->
                <input type="hidden" name='post[user_id]' value="{{ Auth::user()->id }}"/>
            
                <!--ゲーム選択ドロップダウンリスト-->
                <div class="gametitle">
                    <h2>ゲームを選択</h2>
                    <select name="post[game_id]">
                        <option value="">ゲームを選択してください</option>
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->title }}</option>
                        @endforeach
                    </select>
                    <p class="gametitle__error" style="color:red">{{ $errors->first('post.game_id') }}</p>
                </div>

                <!--投稿内容-->
                <div class="content">
                    <h2>投稿文</h2>
                    <textarea name="post[content]" placeholder="今日もゲームが楽しい！"></textarea>
                    <p class="contetn__error" style="color:red">{{ $errors->first('post.content') }}</p>
                </div>
                <input type="submit" value="投稿"/>
            </form>
            <div class="footer">
                <a href="/GameVerse">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>