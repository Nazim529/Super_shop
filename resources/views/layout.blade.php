<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Super_shop</title>
    <link href="[{{ asset('css/app.css) }}" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js')}}" type="text/js"></script>
</body>
</html>