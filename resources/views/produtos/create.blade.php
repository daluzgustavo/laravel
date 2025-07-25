<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1" type="text" name="nome"
                                :value="old('nome')" required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>

                        <!-- Imagem -->
                        <div>
                            <x-input-label for="preco" :value="__('Preço')" />
                            <x-text-input id="preco" class="block mt-1" type="number" name="preco"
                                :value="old('preco')" required autofocus autocomplete="preco" />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>

                        <!-- <div class="mt-4">
                            <x-input-label for="categoria_id" :value="__('Categoria')" />
                                <select id="categoria_id" name="categoria_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Selecione uma categoria</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                                {{ $categoria->nome }}
                                            </option>
                                        @endforeach
                                </select>
                            <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />
                        </div> -->

                        <!-- Descrição -->
                        <div>
                            <x-input-label for="descricao" :value="__('Descrição')" />
                            <x-textarea id="descricao" class="block mt-1" name="descricao"
                                required autofocus autocomplete="descricao">{{ old('descricao') }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>
                        
                        <!-- Imagem -->
                        <div>
                            <x-input-label for="imagem" :value="__('Imagem')" />
                            <x-text-input type="file" name="imagem" id="imagem" accept="image/*"/>
                            <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
                        </div>
                        <br>
                        <x-primary-button>
                            Gravar produto
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
