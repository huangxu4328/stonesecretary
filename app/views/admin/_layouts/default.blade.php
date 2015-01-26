<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Stone Secretary</title>

    @include('admin._partials.assets')

</head>
<body>
<div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">Learn Laravel 4</a>

                @include('admin._partials.navigation')

            </div>
        </div>
    </div>

    <hr>

    @yield('main')

</div>
</body>
</html>