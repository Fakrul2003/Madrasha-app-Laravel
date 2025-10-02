<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   <style>
        /* Optional Custom Styles */
        .dropdown-menu {
            border-top: 3px solid #0d6efd;
        }
    </style>
</head>
<body class="p m-0">

    @include('partials.navbar')

    <main class="containe">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>