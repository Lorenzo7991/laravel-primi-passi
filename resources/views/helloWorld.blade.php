<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{ route('page1')}}">Page 1</a></li>
        </ul>
    </header>
    <main>

        <h1>{{ $title }}</h1>
        <p>{{ $message }}</p>
        <p>You are the {{ $randomNumber }}th visitor!</p>
    </main>
</body>
</html>