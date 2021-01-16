<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="subpage">

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo">Jobber</a>
            <nav id="nav">
                <a href="job.html">Job Offers</a>
                <a href="about.html">About</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    <!-- Three -->
    <section id="three" class="wrapper">
        @yield('content')
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="flex">
                <div class="copyright">
                    &copy; Jobber
                </div>
                <ul class="icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100001836391069" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.linkedin.com/in/hristiyan-dimitrov-a044801a3/" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
                    <li><a href="https://github.com/hris-sys" class="icon fa-github"><span class="label">GitHub</span></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>