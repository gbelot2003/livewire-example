<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Laravel</title>

    @livewireStyles
</head>
<body class="antialiased font-sans bg-gray-200">
    {{ $slot }}

     <!-- Scripts -->
     <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
    @trixassets
</body>
</html>
