<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-link-button href="{{ route('produtos.index') }}">
                        Adicionar produtos
                    </x-link-button>

                    @foreach ($produtos as $produto)
                        <div style="border:1px solid black; margin: 10px; padding: 10px;">
                            <strong>Nome:</strong> {{ $produto->nome }} <br>
                            <strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }} <br>
                            <strong>Descrição:</strong> {{ $produto->descricao }} <br>
                            @if($produto->imagem)
                                <strong>Imagem:</strong> <br>
                                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" width="150">
                            @endif
                            <br>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
