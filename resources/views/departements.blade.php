@extends('layout.app')

@section('content')
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
@endsection
