<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-link-button href="{{ route('posts.create') }}">
                        + Post
                    </x-link-button>

                    @foreach ($posts as $post)
                        <div style="border:1px solid black; margin: 10px; padding: 10px;">
                            <strong>Nome:</strong> {{ $post->name }} <br>
                            <strong>Título:</strong> {{ $produto->title }} <br>
                            <strong>Descrição:</strong> {{ $produto->descricao }} <br>
                            @if($produto->imagem)
                                <strong>Imagem:</strong> <br>
                                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" width="150">
                            @endif
                            <br>
                            <x-link-button href="{{ route('carrinho.add', $produto->id) }}">
                                Adicionar ao carrinho
                            </x-link-button>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
