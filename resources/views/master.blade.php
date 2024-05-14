<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f5aca0c92c.js" crossorigin="anonymous"></script>
    <script src="node_modules\flowbite\dist\flowbite.min.js"></script>
    <script src=""></script>
    @vite(['resources/css/app.css'], ['resources/js/app.js', 'resources/img/'])
</head>
<body>
    @yield('content')
<script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
