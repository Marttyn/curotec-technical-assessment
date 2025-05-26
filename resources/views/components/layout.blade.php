<html>
    <head>
        @vite('resources/css/app.css')
        @livewireStyles

        <title>{{ $title ?? 'Curotec Techinical Assessment' }}</title>
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
        @livewire('wire-elements-modal')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>
