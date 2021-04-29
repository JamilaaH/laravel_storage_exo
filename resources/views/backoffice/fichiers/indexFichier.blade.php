@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h1>store fichier</h1>
        <a href={{route('fichiers.create')}}>Ajouter un fichier</a>
        <div class="row">
            @foreach ($images as $image)
            <div class="col-6 text-center border border-light">
                <img src={{asset('storage/img/' . $image->src)}} alt="image" width = "25%">
                <p>{{$image->src}}</p>
                <form action={{route('fichiers.destroy', $image->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>

            </div>
            @endforeach

        </div>
    </div>
@endsection