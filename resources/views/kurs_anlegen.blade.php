<x-layout title="Kurs anlegen">
    <h1>Hier kannst du einen neuen Kurs anlegen.</h1>
    <br>

    <form action="/kurse" method="POST" novalidate>
        @csrf
        <label for="bezeichnung">Bezeichnung:</label>
        <input type="text" id="bezeichnung" name="bezeichnung" value="{{ old('bezeichnung') }}">
        <x-error name="bezeichnung" />                            
        <br>

        <label for="beschreibung">Beschreibung:</label>
        <textarea id="beschreibung" name="beschreibung" rows="4" cols="50"
            placeholder="Bitte geben Sie hier eine kurze Beschreibung des Kurses ein."
            value="{{ old('beschreibung') }}"></textarea>
           </textarea>
        <x-error name="beschreibung" />   
        <br><br>    
        <button type="submit">Kurs anlegen</button>    
    </form>


</x-layout>