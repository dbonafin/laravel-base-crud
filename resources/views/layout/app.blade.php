<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body {
            background-color: bisque
        }
        div {
            margin: 20px 0;
        }
    </style>
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
        </ul>
    </Header>

    <main>
        @yield('main-content')
    </main>
</body>
</html>