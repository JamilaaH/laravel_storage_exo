@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <div class="jumbotron">
        <h1 class="display-6">Nouveau fichier</h1>
        <form action={{route('fichiers.store')}} method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img">votre image</label>
                <input type="file" class="form-control-file" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <hr class="my-4">
    </div>

@endsection