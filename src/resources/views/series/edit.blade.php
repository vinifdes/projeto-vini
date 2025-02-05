<x-layout title="Editar série">

    <form action="{{route('series.update', $series->id)}}" method="post">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label class="form-label">Atualize o nome da série:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{$series->nome}}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>

</x-layout>
