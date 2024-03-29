<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pullrequest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/permission.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/apply.js') }}"></script>
    <title>ぷるっぷる</title>
</head>
<body>
    <div id="nav">
        <div id="nav_inner">
            <div id="icon">REQUEST HUB</div>
        </div>
    </div>
    @yield('contents')
</body>
</html>