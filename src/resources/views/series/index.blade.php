<x-layout title="Series">
<a href="{{route('series.create')}}" class="btn btn-dark mb-2"> Adicionar </a>
@isset($mensagemSucesso) 
<div class="alert alert-success"> 
{{$mensagemSucesso}}  
</div> 
@endisset
@isset($mensagemCriada) 
<div class="alert alert-success"> 
{{$mensagemCriada}}  
</div> 
@endisset
    <ul class="list-group">
    @foreach($series as $serie)  
         <li class="list-group-item d-flex  justify-content-between aling-items-center"> {{$serie->nome }}
        <div class="d-flex gap-2">
        <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary">Editar</a>

        <form action=" {{route('series.destroy', $serie->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger"> X</button>
        <!--<input type="hidden" name="id" value="{ //$serie->id }}"> -->
        </form> 
        </div>
         
          </li>
     @endforeach
    </ul>
    
</body>
</html>
</x-layout>