{{-- resources/views/posts/party.blade.php --}}
<div class=" bg-white rounded max-w-7xl mx-auto sm:rounded-lg mt-4 mb-4 px-4 py-4">
    <h2 class="underline text-center">パーティ募集</h2>
    <div class="party-content">
        @foreach ($looking_for_party as $party)
            <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
                <div class="flex items-center justify-between h-full">
                    <div class="flex items-center">
                        <h2 class='username mr-2 text-gray-500'>{{ $party->user->name }}</h2>
                        <h2 class="gamename bg-indigo-400 rounded-lg text-10 text-center mr-2">{{ $party->game->title }}</h2>
                    </div>
                    <p class='content text-center bg-white shadow-sm mb-2 mt-2'>{{ $party->content }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- パーティ募集作成 -->
    <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
        <form action="{{ route('looking_for_partys.store') }}" method="POST" class="flex items-center space-x-4 ">
            @csrf

            <!-- 投稿内容 -->
            <textarea name="content" placeholder="今日もゲームが楽しい！" class="flex-auto h-10 p-2 rounded border-gray-300 resize-none"></textarea>
            <p class="content__error" style="color:red">{{ $errors->first('content') }}</p>

            <!-- ゲーム選択ドロップダウンリスト -->
            <div class="gametitle">
                <select name="game_id" class=" flex-auto rounded-lg border border-gray-300 p-2">
                    <option value="">game</option>
                    @foreach ($games as $game)
                        <option value="{{ $game->id }}">{{ $game->title }}</option>
                    @endforeach
                </select>
                <p class="gametitle__error" style="color:red">{{ $errors->first('game_id') }}</p>
            </div>

            <!-- 投稿ボタン -->
            <div class="group rounded-lg bg-indigo-400 hover:bg-gray-600">
                <input type="submit" value="投稿" class="text-black group-hover:text-white rounded px-2 py-1 cursor-pointer" />
            </div>
        </form>
    </div>
</div>
