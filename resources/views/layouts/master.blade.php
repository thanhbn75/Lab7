<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header, footer { background: #f8f9fa; padding: 20px; text-align: center; }
        main { min-height: 400px; padding: 20px; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/home') }}">Trang chủ</a> | 
            <a href="{{ url('/contact') }}">Liên hệ</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>Bản quyền © 2024 - Laravel Course</p>
    </footer>
</body>
</html>