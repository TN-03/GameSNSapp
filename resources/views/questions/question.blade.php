<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GameVerse') }}
        </h2>
    </x-slot>

    <style>
        .answer {
            display: none;
            margin-top: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <!-- 投稿作成 -->
    <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
        <form action="{{ route('questions.store') }}" method="POST" class="flex items-center space-x-4 ">
            @csrf

            <!-- 投稿内容 -->
            <textarea name="question[content]" placeholder="質問を投稿" class="w-full h-10 p-2 rounded border-gray-300 resize-none"></textarea>
            <p class="content__error" style="color:red">{{ $errors->first('question.content') }}</p>

            <!-- ゲーム選択ドロップダウンリスト -->
            <div class="gametitle">
                <select name="question[game_id]" class="rounded-lg border border-gray-300 p-2">
                    <option value="">ゲームを選択</option>
                    @foreach ($games as $game)
                        <option value="{{ $game->id }}">{{ $game->title }}</option>
                    @endforeach
                </select>
                <p class="gametitle__error" style="color:red">{{ $errors->first('question.game_id') }}</p>
            </div>

            <!-- 投稿ボタン -->
            <div class="group rounded-lg bg-indigo-400 hover:bg-gray-600">
                <input type="submit" value="投稿" class="text-black group-hover:text-white rounded px-2 py-1 cursor-pointer" />
            </div>
        </form>
    </div>
</div>


<!-- 投稿を表示 -->
<div class="questions max-w-7xl mx-auto sm:px-6 lg:px-8">
    @foreach ($questions as $question)
        <div class="bg-white h-auto shadow-sm sm:rounded-lg mt-4 mb-4 px-4 py-4">
            <div class="flex items-center justify-between h-full">
                <div class="flex items-center">
                    <h2 class='username mr-2 text-gray-500'>{{ $question->user->name }}</h2>
                    <h2 class="gamename bg-indigo-400 rounded-lg text-10 text-center mr-2">{{ $question->game->title }}</h2>
                </div>

                <!-- 編集機能&削除機能 -->
                <div class="flex items-center">
                    @if (Auth::id() === $question->user_id)
                        <div class="edit mr-2">
                            <a href="/questions/{{ $question->id }}/edit">edit</a>
                        </div>
                        <form action="/questions/{{ $question->id }}" id="form_{{ $question->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost( {{ $question->id }} )">delete</button>
                        </form>
                    @endif
                </div>
            </div>
            <!-- 投稿文表示 -->
            <p class='content text-center bg-white shadow-sm mb-2 mt-2'>{{ $question->content }}</p>


            <!-- コメント -->
            <button onclick="toggleAnswerForm('{{ $question->id }}')">
                回答数: {{ $question->answers->count() }}
            </button>
            <div class="answer" id="answer_{{ $question->id }}">
                <!-- コメント一覧 -->
                <div class="answers">
                    @foreach ($question->answers as $answer)
                        <div class="flex items-center">
                            <p>回答者：{{ $answer->content }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- コメント投稿フォーム -->
                <div class="comments-input">
                    <form action="{{ route('answers.store', ['question' => $question->id]) }}" method="POST">
                        @csrf
                        <textarea name="answer[content]" placeholder="回答を入力"></textarea>
                        @error('answer.content')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                        <input type="submit" value="回答" class="text-size-auto bg-gray-500 rounded-lg" />
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    function toggleAnswerForm(questionId) {
        const answerDiv = document.getElementById(`answer_${questionId}`);
        if (answerDiv.style.display === "none" || answerDiv.style.display === "") {
            answerDiv.style.display = "block";
        } else {
            answerDiv.style.display = "none";
        }
    }
</script>


</x-app-layout>