@extends('layout.index')

@section('content')
    @include('partial.nav')
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            @foreach ($images as $image)
                {{-- <img src={{asset('storage/img/' . $image->src)}} width ="30%" alt=""> --}}
                @if (Str::after($image->src , '.') == "png")
                    <p>image </p>
                    <img src={{asset('storage/img/'. $image->src)}} alt="image" width="30%">
                @else
                    <p>autre</p>
                    <p>{{$image->src}}</p>
                @endif
            @endforeach
        </div>
    </div>
@endsection