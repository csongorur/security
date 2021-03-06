<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Security</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="btn btn-primary" href="{{ route('comments') }}">XSS - Comments</a></li>
            <li class="nav-item ml-3"><a class="btn btn-primary" href="{{ route('comments.pell') }}">XSS - Comments with Pell</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>