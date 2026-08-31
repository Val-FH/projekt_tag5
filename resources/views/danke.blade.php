<x-layout title="Danke">


 <h1>Hallo {{ session('vorname') }} {{ session('nachname') }}, <br>
    Deine Anmeldung ist angekommen! <br>
    Vielen Dank für deine Anmeldung!</h1>
  <br>
   <p> Deine Anmeldung : <br>
    
    Vorname: {{ session('vorname') }} <br>
    Nachname: {{ session('nachname') }} <br>
    E-Mail: {{ session('email') }} <br>
    Kurs: {{ session('kurs') }} <br>
    Teilnahmeart: {{ session('teilnahme') }} <br>
    Gewünschtes Startdatum: {{ session('startdatum') }} <br>
    Bemerkung: {{ session('bemerkung') }} <br>
    Interessen: @if(session('interessen')) {{ implode(', ', session('interessen')) }} @endif <br>
    Datenschutzbestimmungen akzeptiert: {{ session('datenschutz') == '1' ? 'Ja' : 'Nein' }}
    
   </p>    


</x-layout>