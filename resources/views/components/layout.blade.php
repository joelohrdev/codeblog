<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @vite('resources/css/app.css')
    <title>JL Code Blog</title>
</head>
<body class="max-w-screen min-h-screen px-4 py-12">
    {{ $slot }}
@livewireScripts
</body>
</html>
