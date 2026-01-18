<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Игорь Нафранович | Разработчик web-приложений')</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{--снег--}}
    <link href="/css/snow.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" media="print">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Дополнительные стили -->
    @stack('styles')
</head>
<body>
    <!-- Навигация -->
    @include('components.header')

    <!-- Основной контент -->
    <main>
        @yield('content')
    </main>

    <!-- Футер -->
    @include('components.footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    
    <!-- Дополнительные скрипты -->
    @stack('scripts')
</body>
{{--снег--}}
<script src="/js/Snow.js"></script>
<script>
    new Snow ();
</script>
</html>
