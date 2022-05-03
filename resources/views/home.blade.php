<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
    <style>
        h1{
            color: rgb(101, 97, 97);
            text-align: center;
            padding-top: 3rem;
        }

        ul{
            text-align: center;
        }

        li{
            list-style-type: none;
            display: inline-block;
            padding: 0 2rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach ($array as $menu)
                    <li>
                        <a href="{{$menu['link']}}"> {{$menu['name']}} </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello World!</h1>
    </main>
</body>
</html>