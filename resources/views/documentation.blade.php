<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation</title>
</head>
<style>
    h2{
        color: red;
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
        <section>
            <h2>Lorem 1</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quo amet soluta dolorem aliquam ducimus rem sint ex voluptas obcaecati, eum minima! Earum debitis nihil sint error deleniti aperiam excepturi?
            </p>
        </section>

        <section>
            <h2>Lorem 2</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quo amet soluta dolorem aliquam ducimus rem sint ex voluptas obcaecati, eum minima! Earum debitis nihil sint error deleniti aperiam excepturi?
            </p>
        </section>
    </main>
</body>
</html>