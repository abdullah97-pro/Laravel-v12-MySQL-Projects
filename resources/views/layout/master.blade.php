<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fanaven - @yield('title')</title>

    <style>
        ul {
            list-style-type: none;
        }

        ul > p {
            color: red;
        }

        p {
            font-size: 30px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Header</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>
            Copyrights.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium magni exercitationem architecto sed atque corrupti nisi necessitatibus fugit nobis rerum ratione enim ad, ipsum vel, quas fuga dignissimos, voluptate harum.
        </p>
    </footer>

</body>
</html>