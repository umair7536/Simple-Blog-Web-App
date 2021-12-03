<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="/app.css">
    <title>{{config('app.name',"Simple Blog")}}</title>
</head>
<body>
<header>
<div class="row">
    <nav>
        <div class="nav-wrapper grey darken-4">
            <a href="#" class="brand-logo l_side_padding">Simple Blog</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down r_side_padding">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
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
                <h5 class="white-text">Simple Blog</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="services">Services</a></li>
                    <li><a class="grey-text text-lighten-3" href="about">About Us</a></li>
                    <li><a class="grey-text text-lighten-3" href="contact">Contact Us</a></li>
                </ul>;
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © <?php echo date("Y") ?> Copyright Simple Blog
            <a class="grey-text text-lighten-4 right" href="/">More Links</a>
        </div>
    </div>
</footer>


</body>
</html>
