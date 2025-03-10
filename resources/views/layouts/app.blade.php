<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title','Guía de fútbol femenino')</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 text-gray-900 flex flex-col h-screen justify-between">
    <header class="bg-blue-800 text-orange p-4">
        @include('partials.menu')
    </header>
    <main class="container mx-auto p-6">
        @yield('content')
    </main>
    <footer class="bg-blue-800 text-white text-center p-4">
        <p>&copy; 2025 Guía de fútbol femenino</p>
    </footer>
</body>
</html>