@extends('layout.app')

@section('title','Exo 2')


@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
  <a class="navbar-brand" href="#">Programmation Web - TM2 : Exercice 2</a>
</nav>
@endsection

@section('content')
<div class="container mt-5">
  <h2 class="text-center mb-4">Liste des départements</h2>
  <table class="table table-bordered table-hover shadow-sm">
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
</div>
@endsection
