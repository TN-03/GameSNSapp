{{-- resources/views/posts/post.blade.php --}}
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <!-- 投稿作成 -->
    <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
        <form action="{{ route('posts.store') }}" method="POST" class="flex items-center space-x-4 ">
            @csrf

            <!-- 投稿内容 -->
            <textarea name="post[content]" placeholder="今日もゲームが楽しい！"
                class="w-full h-10 p-2 rounded border-gray-300 resize-none"></textarea>
            <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>

            <!-- ゲーム選択ドロップダウンリスト -->
            <div class="gametitle">
                <select name="post[game_id]" class="rounded-lg border border-gray-300 p-2">
                    <option value="">ゲームを選択</option>
                    @foreach ($games as $game)
                        <option value="{{ $game->id }}">{{ $game->title }}</option>
                    @endforeach
                </select>
                <p class="gametitle__error" style="color:red">{{ $errors->first('post.game_id') }}</p>
            </div>

            <!-- 投稿ボタン -->
            <div class="group rounded-lg bg-indigo-400 hover:bg-gray-600">
                <input type="submit" value="投稿" class="text-black group-hover:text-white rounded px-2 py-1 cursor-pointer" />
            </div>
        </form>
    </div>
</div>

<!-- 投稿を表示 -->
<div class="posts max-w-7xl mx-auto sm:px-6 lg:px-8">
    @foreach ($posts as $post)
        <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
            <div class="flex items-center justify-between h-full">
                <div class="flex items-center">
                    <h2 class='username mr-2 text-gray-500'>{{ $post->user->name }}</h2>
                    <h2 class="gamename bg-indigo-400 rounded-lg text-10 text-center mr-2">{{ $post->game->title }}</h2>
                </div>

                <!-- 編集機能&削除機能 -->
                <div class="flex items-center">
                    @if (Auth::id() === $post->user_id)
                        <div class="edit mr-2">
                            <a href="/posts/{{ $post->id }}/edit">edit</a>
                        </div>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost( {{ $post->id }} )">delete</button>
                        </form>
                    @endif
                </div>
            </div>
            <!-- 投稿文表示 -->
            <p class='content text-center bg-white shadow-sm mb-2 mt-2'>{{ $post->content }}</p>

            <!-- コメント -->
            <button onclick="toggleCommentForm('{{ $post->id }}')">
                コメント数: {{ $post->comments->count() }}
            </button>
            <div class="comment" id="comment_{{ $post->id }}">
                <!-- コメント一覧 -->
                <div class="comments">
                    @foreach ($post->comments as $comment)
                        <div class="flex items-center">
                            <small class="comment_username text-gray-500 mr-2">{{ $comment->user->name }} ：</small>
                            <p>{{ $comment->content }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- コメント投稿フォーム -->
                <div class="comments-input">
                    <form action="{{ route('comments.store', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        <textarea name="comment[content]" placeholder="コメントを入力"></textarea>
                        @error('comment.content')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                        <input type="submit" value="コメント" class="text-size-auto bg-gray-500 rounded-lg" />
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    function toggleCommentForm(postId) {
        const commentDiv = document.getElementById(`comment_${postId}`);
        if (commentDiv.style.display === "none" || commentDiv.style.display === "") {
            commentDiv.style.display = "block";
        } else {
            commentDiv.style.display = "none";
        }
    }
</script>
