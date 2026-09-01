<x-layout title="Anmeldungen">

    <h1> Alle Anmeldungen </h1>

    @forelse($anmeldungen as $a)
        <h2> {{ $a->name }} ({{ $a->created_at->format('d.m.Y H:i') }}) </h2>
        <p>
            Kurs: {{ $a->kurs->bezeichnung }}
            Teilnahme: {{ $a->teilnahme }}
            E-Mail: {{ $a->email }}
        </p>

        @if($a->startdaum)
            <p> Wunsch-Start: {{ $a->startdatum->format('d.m-Y') }} </p>
        @endif
        @if($a->bemerkung)
            <p> Bemerkung: {{ $a->bemerkung }} </p>
        @endif
    @empty
        <p> Noch keine Anmeldungen </p>
    @endforelse

</x-layout>