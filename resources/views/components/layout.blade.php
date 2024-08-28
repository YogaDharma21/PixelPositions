<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
</head>

<body>

    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{ Vite::assets('images/logo.png') }}" alt="">
                </a>
            </div>
            <div>Link</div>
            <div>Jobs</div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
