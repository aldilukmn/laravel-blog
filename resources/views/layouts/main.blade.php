<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div class="d-flex flex-column vh-100">
    @include('components.header.navbar')
    <main class="flex-grow-1 my-5 d-flex gap-2">
      @yield('content')
    </main>
    @include('components.footer.footer')
  </div>
  <script src="js/script.js"></script>
</body>
</html>