<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>
<style>
    h2{
        color: green;
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
        <h2>
            About Us
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus modi dolore libero odio, id earum numquam vitae totam quos officiis, aliquid rem fugiat reprehenderit molestiae maxime sequi debitis dolor possimus.
            Numquam dolor, quos, quibusdam fuga minus hic sapiente doloremque exercitationem, commodi maiores accusamus tempora vel. Voluptatibus porro aut numquam vero, esse libero suscipit voluptas, sapiente consequuntur quae modi, cupiditate explicabo!
            Cumque molestias in sunt itaque officia eius quam impedit ducimus nemo id, quas earum. Fugit iure, eligendi, sint esse, quas eveniet repudiandae dolorem vel cum debitis incidunt labore perferendis consequuntur!
            Eaque quasi officiis obcaecati beatae rerum impedit minima, hic nemo modi inventore deserunt odio assumenda perspiciatis totam tempora dicta saepe excepturi, quidem ipsa provident mollitia unde itaque quibusdam! Modi, iste.
        </p>
    </main>
</body>
</html>