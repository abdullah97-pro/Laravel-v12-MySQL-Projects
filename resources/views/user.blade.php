<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
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

</body>
</html>