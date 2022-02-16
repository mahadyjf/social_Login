<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
  @yield('content')
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
