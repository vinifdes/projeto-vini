<x-layout title="Series">
<a href="{{route('series.create')}}" class="btn btn-dark mb-2"> Adicionar </a>
    <ul class="list-group">
    @foreach($series as $serie)  
         <li class="list-group-item"> {{$serie->nome }}
        
        <!--<form action=" {/*route('series.destroy'*/)}}">
        @csrf
        <button class="btn btn-danger"> X</button>
        </form> -->
         
          </li>
     @endforeach
    </ul>
    
</body>
</html>
</x-layout>