<x-layout title="Kurse">

    <h1>Das hier sind unsere Kurse</h1>
    <table>
        <caption>Kursübersicht</caption>
        @foreach ($kurse as $key => $value)
            <tr>


                <th> {{ $key }}</th>
                <td> {{ $value }}</td>


            </tr>

        @endforeach
    </table>

</x-layout>