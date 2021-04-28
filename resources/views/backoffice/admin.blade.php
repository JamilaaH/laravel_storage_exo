@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <div class="jumbotron">
        <h1 class="display-4">Back Office - Dashboard</h1>
        <a href={{route('fichiers.index')}} class="btn btn-primary">Fichier</a>
    </div>

@endsection