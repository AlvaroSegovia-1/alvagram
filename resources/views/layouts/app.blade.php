<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Alvagram - @yield('titulo')</title>

    </head>
    <body class="bg-gray-200">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Alvagram
                </h1>
                <nav class="flex gap-3 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear cuenta</a>
                </nav>
            </div>
            <main class="container mx-auto mt-10">
                <h2 class="font-black text-center text-3xl mb-10">
                    @yield('titulo')
                </h2>
                @yield('contenido')
            </main>
            <footer class="text-center p-5 text-gray-500 font-bold uppercase">
                Alvagram - Todos los derechos reservados 
                {{-- @php echo date ('Y')  @endphp --}}
                {{ now()->year }}

            </footer>
        </header>
    </body>
</html>