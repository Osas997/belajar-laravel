<!doctype html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.1/dist/full.css" rel="stylesheet" type="text/css" />
   <title>Poliwangi | {{ $title }}</title>
</head>

<body>
   @include('partials.navbar')
   {{-- section --}}
   <div class="container mx-auto pt-16">
      @yield('main')
   </div>
   {{-- end section --}}
   <script src="js/script.js"></script>
</body>

</html>