<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts do Blog
        </h2>
    </x-slot>

    <div class="p-6" >
        <x-link-button href="{{ route('posts.criar') }}">
            + Novo Post
        </x-link-button>

        @foreach ($posts as $post)
            <div style="margin-top:20px; border-bottom:1px solid #ccc; padding-bottom:10px;">
                <h3>{{ $post->user->name }}</h3>
                <h3>{{ $post->title }}</h3>
                <p><strong>Categoria:</strong> {{ $post->category->name }}</p>
                <p>{{ $post->content }}</p>
                <x-link-button href="{{ route('posts.mostrar', $post->id) }}">Ver</x-link-button>
                <x-link-button href="{{ route('posts.editar', $post->id) }}">Editar</x-link-button>
                <x-link-button href="{{ route('posts.excluir', $post->id) }}">Excluir</x-link-button>
            </div>
        @endforeach
    </div>
</x-app-layout>
