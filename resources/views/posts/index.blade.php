<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GameVerse') }}
        </h2>
    </x-slot>
    <style>
        .comment {
            display: none;
            margin-top: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="flex">
        <!--パーティ募集機能-->
        <div class="w-1/3 p-4">
            @include('posts.party')
        </div>

        <!--投稿-->
        <div class="w-2/3 p-4">
            @include('posts.post')
        </div>

        

        <!--検索機能＆ゲーム説明-->
        <div class="w-1/3 p-4">
            @include('posts.search_detail')
        </div>
    </div>

    <div class='pagination'>
        {{ $posts->links() }}
    </div>
</x-app-layout>