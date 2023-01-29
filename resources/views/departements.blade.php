@extends('layout.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departements as $departement)
        <tr>
            <td class="align-middle">{{ $departement->no }}</td>
            <td class="align-middle">{{ $departement->nom }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection