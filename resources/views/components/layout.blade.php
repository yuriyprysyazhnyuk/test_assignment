<html>
<head>
    <title>{{ $title ?? 'Test Assignment' }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
<nav>
    <h3>Header</h3>
    <hr>
</nav>
{{ $slot }}
<footer>
    <hr/>
    2025
</footer>
</body>
</html>
