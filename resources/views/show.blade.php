@extends('layout.app')

@section('page-title', 'Comics')

@section('content')

<div class="card">
    <img src="{{$comic['thumb']}}" alt="">
    <h5 class="py-2">{{$comic['series']}}</h5>
</div>

@endsection
