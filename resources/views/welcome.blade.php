<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <h1>Welcome!</h1>
            <ul>
                <li>
                    <a href="{{ route('products.index') }}">Productos</a>
                </li>
                <li>
                    <a href="{{ route('sales.index') }}">Vender</a>
                </li>
            </ul>
        </div>
    </body>
</html>
