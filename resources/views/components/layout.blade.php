<html>
    <head>
        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Curotec Techinical Assessment' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
