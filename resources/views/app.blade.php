<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="bg-gray-700">
    <header class="text-white bg-gray-800">
        @include('partials.nav')
    </header>
    <main class="max-w-7xl mx-auto p-8">
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
