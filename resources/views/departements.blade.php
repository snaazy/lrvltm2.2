@extends('layout.app')

@section('title')

TM2

@endsection

@section('header')

<a class="navbar-brand" href="#">Programmation Web - TM2 : Exercice 2 </a>

@endsection

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



