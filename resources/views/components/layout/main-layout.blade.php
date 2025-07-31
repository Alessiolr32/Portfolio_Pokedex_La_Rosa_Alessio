<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} - {{ $title }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/pokeball.ico" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
  <x-layout.navbar />
  
  <main class="flex-fill">
    {{ $slot }}
  </main>
  
  <x-layout.footer />
</body>

</html>