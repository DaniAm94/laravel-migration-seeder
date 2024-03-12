<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js')

    {{-- CDN --}}
    @yield('cdns')
</head>

<body>
    {{-- Header --}}
    <header class="text-center py-4 ">
        <div class="container-sm">
            <h1>Laravel Migration Seeder Factory | Trains</h1>
        </div>
    </header>

    {{-- main --}}
    <main>
        @yield('main-content')
    </main>

    {{-- Footer --}}
    <footer></footer>

</body>

</html>
