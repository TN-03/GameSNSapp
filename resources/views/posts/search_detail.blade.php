{{-- resources/views/posts/search_detail.blade.php --}}
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="filter bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
        <h2 class="text-center text-indigo-600">Game</h2>
        <div class="game-list grid grid-cols-1 lg:grid-cols-2 gap-2 ">
            @foreach ($games as $game)
                <a href="{{ isset($selectedGameId) && $selectedGameId == $game->id ? route('index') : route('posts.by_game',$game ) }}" 
                    class="game-item text-center  rounded-lg
                    {{ isset($selectedGameId) && $selectedGameId == $game->id ? 'bg-indigo-500 text-white' : 'border-2 border-indigo-500 text-indigo-500' }}">
                    {{ $game->title }}
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- 投稿を表示 -->
<div class="detail max-w-7xl mx-auto sm:px-6 lg:px-8">

</div>