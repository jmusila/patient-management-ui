<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... -->

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- ... -->
</head>
<body>
    <!-- ... -->

    @yield('content')

    <!-- ... -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- ... -->
</body>
</html>
