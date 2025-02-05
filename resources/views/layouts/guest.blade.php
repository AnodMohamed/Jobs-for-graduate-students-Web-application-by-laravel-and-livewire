<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <style>
      

        .navbar-brand{
            font-size: 23px;
            font-weight: 600;
            display: flex;
        }
        .navbar-brand h1{
            padding-right: 10px
        }
        /* mobile */
        @media (max-width: 575.98px) { 
          .logo h3{
            display: none;
          } 
      
        }
      </style>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div
        >
    </body>
</html>
