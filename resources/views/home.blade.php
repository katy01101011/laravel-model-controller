<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <ul>
                @foreach ($movies as $movie)
                <li>
                    <h2>{{ $movie['title'] }}</h2>
                    <h3>{{ $movie['original_title'] }}</h3>
                    <h4>{{ $movie['nationality'] }}</h4>
                    <small>{{ $movie['date'] }}</small>
                    <h2>Voto {{ $movie['vote'] }}</h2>
                </li>  
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        margin-top: 6rem;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 2rem
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between
    }

    li {
        width: calc(100% / 5 - 2rem);
        margin-bottom: 4rem;
        list-style: none;
        border: 1px solid black;
        text-align: center;
        padding-top: 2rem;
    }

</style>