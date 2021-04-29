@extends('layout.index')

@section('content')
    @include('partial.bo.navAdmin')
    <div class="jumbotron">
        <h1 class="display-6">Edit</h1>
        <form action={{route('fichiers.update', $image->id)}} method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="img">votre image</label>
                <input type="file" class="form-control-file" name="img">
            </div>

            <div class="form-group">
                <label for="link">lien url</label>
                <input type="text" class="form-control" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <hr class="my-4">
    </div>

@endsection