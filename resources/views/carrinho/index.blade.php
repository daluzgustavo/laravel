<x-app-layout>
    <x-slot name="header">
        <h2>Carrinho de Compras</h2>
    </x-slot>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red">{{ session('error') }}</div>
    @endif

    @if(count($carrinho) > 0)
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Descricao</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrinho as $id => $item)
                        <td>{{ $item['nome'] }}</td>
                        <td>R$ {{ number_format($item['preco'], 2, ',', '.') }}</td>
                        <td>{{ $item['descricao'] }}</td>
                        <td><img src="{{ asset('storage/' . $item['imagem']) }}" width="150"></td>
                        <td><a href="{{ url('/carrinho/remover/' . $id) }}">Remover</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>O carrinho está vazio.</p>
    @endif
</x-app-layout>