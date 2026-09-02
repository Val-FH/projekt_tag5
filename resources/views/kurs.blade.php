<x-layout title="Kurs" >

    <h1>{{ $kurs->bezeichnung }}</h1>
    <p>{{ $kurs->beschreibung }}</p>

    <h2> Anmeldungen {{ $kurs->anmeldung->count() }}</h2>
    @forelse($kurs->anmeldung as $a)
    <p> {{ $a->vorname }} {{ $a->nachname }}     
        {{ $a->created_at->format('d.m.Y H:i') }}
    @if($a->interest->count())
         Interessen: {{ $a->interest->pluck('interessen')->implode(', ') }} 
    @endif
    @empty
        <p> Noch keine Anmeldungen </p>     
    </p>        
    @endforelse   
    
    <p> <a href="/kurse/{{ $kurs->id }}/edit">Kurs bearbeiten</a> </p>
    <p> <a href="/kurse">Alle Kurse anzeigen</a> </p>
</x-layout>