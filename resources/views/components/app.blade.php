<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JL Code Blog</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="w-full h-auto py-14">
    <main>
        <div class="max-w-2xl mx-auto">
            {{ $slot }}
        </div>
    </main>
@livewireScripts
</body>
</html>
