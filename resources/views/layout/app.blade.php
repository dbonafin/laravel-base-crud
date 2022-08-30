<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <Header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>

            <li>
                <a href="{{ route('comics.index') }}">Comics</a>
            </li>

            <li>
                <a href="{{ route('comics.create') }}">Create your comic book</a>
            </li>
        </ul>
    </Header>

    <main>
        @yield('main-content')
    </main>
</body>
</html>