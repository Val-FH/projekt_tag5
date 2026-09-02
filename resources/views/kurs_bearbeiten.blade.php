<x-layout title="Kurs bearbeiten">

    <form action="/kurse/{{ $kurs->id }}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <label for="bezeichnung">Bezeichnung:</label>
        <input type="text" id="bezeichnung" name="bezeichnung" value="{{ old('bezeichnung', $kurs->bezeichnung) }}">
        <x-error name="bezeichnung" />
        <br>

        <label for="beschreibung">Beschreibung:</label>
        <textarea id="beschreibung" name="beschreibung" rows="4" cols="50"
            placeholder="Bitte geben Sie hier eine kurze Beschreibung des Kurses ein."
            value="{{ old('beschreibung', $kurs->beschreibung) }}"></textarea>
        <x-error name="beschreibung" />
        <br><br>
        <button type="submit">Kurs aktualisieren</button>
    </form>

</x-layout>