@extends('layout.master')
@section('title','Orders')

@section('content')

    @foreach ($names as $name)
        <h1>{{ $name }}</h1>
    @endforeach

@endsection