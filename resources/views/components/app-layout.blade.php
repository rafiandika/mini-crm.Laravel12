<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Mini CRM' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow p-4">
        <h1 class="text-xl font-bold">Mini CRM</h1>
    </header>
    <main class="p-6">
        {{ $slot }}
    </main>
</body>
</html>
