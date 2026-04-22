<x-layouts::app :title="__('Wheather')">


    @foreach($prognoza as $grad => $temperatura)
        <p>Temperatura je {{ $temperatura }} stepena u {{ $grad }}</p>
    @endforeach

</x-layouts::app>
