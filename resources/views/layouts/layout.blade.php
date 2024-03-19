<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Usuarios @yield('title')</title>
</head>
<body>
    <header class="bg-gray-300 drop-shadow-xl p-4">
        <nav class="flex justify-between">
            <div>
                <p>Crudable</p>
            </div>

            <div class="flex items-center gap-3 mr-2">
                <p>Login</p>
                <p>Register</p>
            </div>
        </nav>
    </header>
    @yield('content')
    
</body>
</html>