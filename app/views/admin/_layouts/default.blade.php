<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Stone Secretary</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    @include('admin._partials.assets')

</head>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
            <a href="#"><img id="logo" src="/images/logo.png" alt="Simpla Admin logo" /></a>
            <ul id="main-nav">
                @foreach($categoryRes as $val){
                    {{$val->name}}
                }
                @endforeach

                <li> <a href="#/" class="nav-top-item no-submenu">
                        Dashboard </a> </li>
                <li> <a href="#" class="nav-top-item current">
                        Articles </a>
                    <ul>
                        <li><a href="#">Write a new Article</a></li>
                        <li><a class="current" href="#">Manage Articles</a></li>
                        <li><a href="#">Manage Comments</a></li>
                        <li><a href="#">Manage Categories</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> Pages </a>
                    <ul>
                        <li><a href="#">Create a new Page</a></li>
                        <li><a href="#">Manage Pages</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> Image Gallery </a>
                    <ul>
                        <li><a href="#">Upload Images</a></li>
                        <li><a href="#">Manage Galleries</a></li>
                        <li><a href="#">Manage Albums</a></li>
                        <li><a href="#">Gallery Settings</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> Events Calendar </a>
                    <ul>
                        <li><a href="#">Calendar Overview</a></li>
                        <li><a href="#">Add a new Event</a></li>
                        <li><a href="#">Calendar Settings</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> Settings </a>
                    <ul>
                        <li><a href="#">General</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Your Profile</a></li>
                        <li><a href="#">Users and Permissions</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    @yield('main')

</div>
</body>
</html>