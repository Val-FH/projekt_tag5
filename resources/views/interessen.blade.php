<x-layout title="Interessen">
    <h1> Mögliche Interessen </h1>

    @forelse($interessen as $inter )
        <p> {{ $inter->interessen }} </p>
    @empty
        <p>Momentan keine Interessen </p>
    @endforelse
</x-layout>