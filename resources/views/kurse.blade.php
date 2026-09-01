<x-layout title="Kurse">

    <h1>Das hier sind unsere Kurse</h1>
    <table>
        <caption>Kursübersicht</caption>
        @foreach ($kurse as $kurs)
            <tr>


                <th> {{ $kurs->bezeichnung }}</th>
                <td> {{ $kurs->beschreibung }}</td>


            </tr>

        @endforeach
    </table>

</x-layout>