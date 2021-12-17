@extends('layout.app')

@section('page-title', 'Comics')

@section('content')

<div class="jumbo"></div>
<div class="container">
    <div class="title">
        <h1>CURRENT SERIES</h1>
    </div>
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-2">
                <div class="card h-100">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h5 class="py-2">{{$comic['series']}}</h5>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
