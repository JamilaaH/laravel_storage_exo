@extends('layout.index')

@section('content')
    @include('partial.nav')
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <div class="row">
                @foreach ($images as $image)
                    {{-- <img src={{asset('storage/img/' . $image->src)}} width ="30%" alt=""> --}}
                    @if (Str::after($image->src , '.') == "png")
                    <div class="col-6 text-center">
                        <p>image </p>
                        <img src={{asset('storage/img/'. $image->src)}} alt="image" width="30%">
                        <form action={{route('fichiers.destroy', $image->id)}} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </div>
                    @else
                    <div class="col-6 text-center">
                        <p>autre</p>
                        <p>{{$image->src}}</p>
                        <form action={{route('fichiers.destroy', $image->id)}} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection