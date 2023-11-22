@extends('layout')

@section('content')
    <h1>Créer un nouveau utilisateur</h1>
    <form action="/clients" method="POST">
        @include('includes.forms')
        <button type="submit" class="btn btn-primary">Ajouter un utilisateur</button>
    </form>
@endsection