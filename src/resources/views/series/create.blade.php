<x-layout title="Formulário">

    <form action="/series/salvar" method="post">
        @csrf <!-- Adicione esta linha -->

        <div class="mb-3">
            <label class="form-label">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
