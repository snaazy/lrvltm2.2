<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
      
    <table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departements as $departement)
        <tr>
            <td>{{ $departement->code }}</td>
            <td>{{ $departement->nom }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    </body>
</html>
