<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <h1>List produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>