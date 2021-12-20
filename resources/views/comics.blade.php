@extends('layout.app')

@section('page-title', 'Comics')

@section('content')

<div class="jumbo"></div>
<div class="container">
    <div class="title">
        <h1>CURRENT SERIES</h1>
    </div>
    <div class="row pt-5">
        @foreach($comics as $index => $comic)
            <div class="col-2">
                <a href="{{ route('comic', ['id' => $index]) }}">
                    <div class="card h-100">
                        <img src="{{$comic['thumb']}}" alt="">
                        <h5 class="py-2">{{$comic['series']}}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="load_more text-center py-4">
        <button>LOAD MORE</button>
    </div>
</div>

@include('partials.banner')


@endsection
