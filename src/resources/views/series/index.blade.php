<x-layout title="Series">
    <ul>
    @foreach($series as $serie)  
         <li> {{$serie }} </li>
     @endforeach
    </ul>
</body>
</html>
</x-layout>