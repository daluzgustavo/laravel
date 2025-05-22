<h1>💡 Keepinho</h1>
<h2>🗑️ Lixeira</h2>
<hr>

@if (session('sucesso'))
<div style="background-color: darkseagreen; border: 1px black solid; margin-top: 5px; margin-bottom: 5px; color: white; padding: 5px;">
    {{ session('sucesso') }}
</div>
@endif

@foreach ($notas as $nota)
    <div style="border:1px dashed green">
        {{ $nota->titulo }}
        <br>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.restaurar', $nota->id) }}">♻️ Restaurar</a>
    </div>
@endforeach
<hr>
<a href="{{ route('keep') }}">↩️ Voltar para o início</a>