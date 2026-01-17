@extends('layout.master')
@section('title','Users')

@section('content')
    <ul>
        @foreach ($users as $index => $user)
            @if ($user->name != "ali")
                <li>{{$index + 1}} <strong>Name:</strong> {{ $user->name }} - <strong>Email:</strong> {{ $user->email }}</li>
            {{-- @elseif ($user->name == "ali")
                <span>Ali you are not verified</span> --}}
            @elseif ($user->password == 12345)
                <p>Your password is week</p>
            @endif

        @endforeach
    </ul>
@endsection