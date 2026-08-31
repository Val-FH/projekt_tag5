<x-layout title="Anmeldung">
   {{-- Fehlerlisten-Ausgabe --}}
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $fehler)
                <li> {{ $fehler }} </li>
            @endforeach
        </ul>
    @endif

    <h1>Hier kannst du dich zu einem unserer Kurse anmelden.</h1>
    <br>

    <form action="/anmeldung" method="POST" novalidate>
        @csrf
        <label for="vorname">Vorname:</label>
        <input type="text" id="vorname" name="vorname" value="{{ old('vorname') }}" required>
       <x-error name="vorname" />                            
        <br>

        <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" value="{{ old('nachname') }}" required>
        <x-error name="nachname" /> 
        <br>

        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        <x-error name="email" />
        <br>

        <label for="kurs">Kurs:</label>
        <select id="kurs" name="kurs" required>
            <option value="">Bitte wählen</option>
            @foreach ($kurse as $key => $value)
                <option value="{{ $key }}" @selected(old('kurs') == $key)>{{ $key }}</option>
            @endforeach
        </select>
        <x-error name="kurs" />
                                    
        <br>

        <fieldset>
            <legend>Teilnahmeart</legend>
            <input type="radio" id="online" name="teilnahme" value="online" @checked(old('teilnahme') == 'online') required>
            <label for="online">Online</label>
            <input type="radio" id="vor_ort" name="teilnahme" value="vor_ort" @checked(old('teilnahme') == 'vor_ort') required>
            <label for="vor_ort">Vor Ort</label>
        </fieldset>
      <x-error name="teilnahme" /> 

        <label for="startdatum">Gewünschtes Startdatum</label>
        <input type="date" id="startdatum" name="startdatum" value="{{ old('startdatum') }}">
        <x-error name="startdatum" /> 
        <br>

        <label for="bemerkung">Bemerkung:</label><br>
        <textarea id="bemerkung" name="bemerkung" rows="4" cols="50"
            placeholder="Falls Sie weitere Fragen haben, schreiben Sie uns diese gerne hier !"
            value="{{ old('bemerkung') }}"></textarea>
        <x-error name="bemerkung" /> 
        <br>
        
         <fieldset>
        <legend>Möchten Sie die Datenschutzbestimmungen akzeptieren?</legend>

        <input type="checkbox" id="datenschutz" name="datenschutz" value="1" @checked(old('datenschutz') == '1') required>
        <label for="datenschutz_ja">Ja, ich akzeptiere die Datenschutzbestimmungen.</label> <br><br>

        </fieldset>
        <x-error name="datenschutz" /> 
         <br>

        <fieldset>
          <legend> Interessen</legend>    
          @foreach(['Backend', 'Frontend','Datenbank','Testing'] as $interesse)
            <input type="checkbox" id="interesse_{{ $interesse }}" name="interessen[]" value="{{ $interesse }}"
             @checked(in_array($interesse, old('interessen', [])))>
            <label for="interesse_{{ $interesse }}">{{ $interesse }}</label> <br>
          @endforeach
        </fieldset> 
        <x-error name="interessen" /> 
        <button type="submit">Anmelden</button>
    </form>


</x-layout>