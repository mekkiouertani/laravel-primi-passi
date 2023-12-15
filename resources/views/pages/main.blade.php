<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main</title>

    <style>
        body {
            padding: auto;
            margin: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: black;
            margin-left: 50px;
        }

        nav {
            background-color: grey;
            padding: 10px;
            font-size: 2em;

        }

        main {
            margin: 10px 100px;
        }
    </style>
</head>

<body class="antialiased">
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/main">Main</a>
            <a href="/info">Info</a>
        </nav>
    </header>
    <main>
        <h2>Hello {{$name . ' ' . $surname . '!'}}</h2>
    </main>

</body>

</html>