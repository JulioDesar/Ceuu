<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Ceuu' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-gray-100">
    <div class="min-h-screen flex flex-col">
        <x-header />
        
        <main class="flex-grow container mx-auto px-4 py-8">
            {{ $slot }}
        </main>
        
        <x-footer />
    </div>
</body>
</html>