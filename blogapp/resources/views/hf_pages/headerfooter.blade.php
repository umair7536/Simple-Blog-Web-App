<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/app.css">

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>      <!--  Ckeditor  -->



    <title>{{config('app.name',"Simple Blog")}}</title>
</head>
<body>
<header>
<div class="row">
    <nav>
        <div class="nav-wrapper grey darken-4">
            <a href="#" class="brand-logo l_side_padding">Simple Blog</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down r_side_padding">
                @guest
                    @if (Route::has('register'))
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/posts">Blogs</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a style="border-radius:15px" class="waves-effect waves-light red lighten-1 btn" href="/register"><i class="material-icons left">create</i><b>Create Blog</b></a></li>
                        <li><a style="border-radius:15px" class="waves-effect waves-light btn blue lighten-1" href="/login"><i class="material-icons left">login</i><b>Sign In</b></a></li>
                    @endif

                    @else
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/posts">Blogs</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a style="border-radius:15px" class="waves-effect waves-light red lighten-1 btn" href="/posts/create"><i class="material-icons left">create</i><b>Create Blog</b></a></li>
{{--                        <li><a style="border-radius:15px" class="waves-effect waves-light btn blue lighten-1" href="#"><i class="material-icons left">email</i><b>{{ Auth::user()->name }}</b></a></li>--}}
                    <li>
{{--                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">--}}
{{--                        <i class="material-icons">account_circle</i>Logout--}}
{{--                    </a>--}}
{{--                        <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">account_circle</i></a>--}}
                        <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href="#!">one</a></li>
                            <li><a href="#!">two</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a href="#!">three</a></li>
                            <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                            <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                        </ul>
                    </li>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>
        </div>
    </nav>
</div>
</header>

<br>

@yield('content')

<br>
<br>
<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Simple Blog</h5>
                <p class="grey-text text-lighten-4">You can use simple blog to write your blog and we are here to organize your blog content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="/posts">Blogs</a></li>
                    <li><a class="grey-text text-lighten-3" href="/about">About Us</a></li>
                    <li><a class="grey-text text-lighten-3" href="/contact">Contact Us</a></li>
                    <li><a class="grey-text text-lighten-3" href="/posts/create">Create Blog</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Sign In</a></li>


                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center-align">
            © <?php echo date("Y") ?> Copyright Simple Blog
        </div>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, options);
    });

    // Or with jQuery

    $('.dropdown-trigger').dropdown();
</script>

</body>
</html>
