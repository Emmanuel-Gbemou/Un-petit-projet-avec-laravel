<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title> @yield('title',config('APP_NAME'))</title>
    </head>
    <body>

       
        <main role="main">
            @yield('content')
        </main>
        <footer>
            <p class="">&copy; Copyright {{date('Y')}}
                @if(!Route::is('app_about'))
                &middot;  <a href="{{ route('app_about')}}">About Us</a></p>
                @endif

         
        </footer>
      
    </body>
</html>

