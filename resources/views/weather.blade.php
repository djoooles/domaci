<x-layouts::app :title="__('Wheather')">

    @foreach($prognoza as $grad => $temperatura)
        <p>Trenutno je {{ $temperatura }} Stepena u gradu {{ $grad }}</p>
    @endforeach

</x-layouts::app>
