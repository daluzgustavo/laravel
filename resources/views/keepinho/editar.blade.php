<h1>💡Keepinho</h1>

<form method="post" action="{{ route('kepp.editarGravar') }}">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}">
    <br>
    <textarea name="texto" cols="30" rows="10">{{ old('titulo', $nota->texto) }}</textarea>
    <br>
    <button type="submit">Editar nota</button>
</form>