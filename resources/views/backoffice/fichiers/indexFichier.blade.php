@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h1>store fichier</h1>
        <a href={{route('fichiers.create')}}>Ajouter un fichier</a>
        <div class="row">
            @foreach ($images as $image)
            <div class="col-4">
                <img src={{asset('storage/img/' . $image->src)}} alt="">
            </div>
            @endforeach

        </div>
    </div>
@endsection