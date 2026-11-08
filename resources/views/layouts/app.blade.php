<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Document' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}
</body>

</html>
