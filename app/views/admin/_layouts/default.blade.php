<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Stone Secretary</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    @include('admin._partials.assets')

</head>
{{--<body>--}}
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
            <a href="#"><img id="logo" src="/images/logo.png" alt="Simpla Admin logo" /></a>
            <ul id="main-nav">
                @foreach($category as $key => $val)
                    <li>
                        <a href="/admin/page/{{$val->id}}" class="nav-top-item no-submenu">
                            {{$val->name}}
                        </a>
                        <ul>
                        @if(isset($subCategory[$val->id]))
                            @foreach($subCategory[$val->id] as $val)
                                <li>
                                    <a href="#">{{$val->name}}</a>
                                </li>
                                @endforeach
                        @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @yield('main')
</div>
</body>
</html>