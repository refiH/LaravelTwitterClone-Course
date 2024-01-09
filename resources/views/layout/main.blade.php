<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>

  {{-- Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,500;6..12,600;6..12,700&display=swap"
    rel="stylesheet">

  @vite('resources/js/app.js')
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
  <main class="mx-auto h-full">

    {{-- Nav --}}
    @include('layout.nav')

    <section class="section">
      @yield('content')
    </section>
  </main>
</body>

</html>
