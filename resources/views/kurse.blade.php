<x-layout title="Kurse">

    <h1>Das hier sind unsere Kurse</h1>
     
    <table>
        <caption>Kursübersicht</caption>
        @foreach ($kurse as $kurs)
       
            <tr>


                <th><h2> <a href="/kurs/{{ $kurs->id }}">{{ $kurs->bezeichnung }}</a></h2> </th>
                <td> {{ $kurs->beschreibung }}</td>
                <td> {{ $kurs->anmeldung->count() }}</td>


            </tr>

        @endforeach
    </table>

</x-layout>