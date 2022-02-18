<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/carousel.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>
<style>
    /*************navbar*************** */
    .container {
        position: absolute;
        margin: 48px;
        width: auto;
    }

    /* The navbar */
    .topnav {
        overflow: hidden;
        padding-left: 121px;
        font-weight: bold;
        padding-top: 3px;
        margin-top: -38px;
}

    /* Navbar links */
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 35px 25px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
        outline: none;
    }

    .topnav a:hover {
        color: red;
    }


    /*****************************Header************************/
    #header #topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 7px 50px;
        background: var(--main-color, #1A2B48);
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0%;
        text-decoration: none;
        outline: none;
    }


    #header #topbar .socials {
        display: inline-block;
        border-right: 1px solid #374969;
    }

    ul.st-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    #header #topbar .socials li:first-child a {
        padding-left: 0;
    }

    #header #topbar .socials li a {
        padding-left: 18px;
        padding-right: 18px;
        color: #D1D4DA;
        font-size: 14px;
    }

    #header #topbar .topbar-items {
        display: inline-block;
    }

    ul.st-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    #header #topbar .topbar-items li a {
        color: #FFF;
        font-weight: 400;
        font-size: 12px;
    }

    #header #topbar .topbar-right {
        font-size: 14px;
    }

    #header #topbar .topbar-items li:not(:last-child) {
        border-right: 1px solid rgba(255, 255, 255, 0.2);
    }

    #header #topbar .topbar-items li {
        padding-left: 18px;
        padding-right: 18px;
        display: inline-block;
    }

    .dropdown,
    .dropup {
        position: relative;
    }

    #header #topbar .topbar-right .dropdown-menu {
        right: 0;
        left: auto;
    }

    #header #topbar .dropdown-menu {
        min-width: auto;
        background: var(--main-color, #1A2B48);
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    }

    img.emoji {
        font-size: 30px !important;
        position: relative !important;
        top: 6px !important;
    }

    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }

    .logo {
        margin-right: 30px;
        float: left;
        margin-top: -28px;
    }

    .logo img {
        max-height: 81px;
        max-width: 100%;
    }
</style>

<body>


    @section('header')
    <header id="header">
        <div id="topbar">
            <div class="topbar-left">
                <ul class="st-list socials">
                    <li>
                        <a href="https://www.facebook.com/Dazonn-Travels-102881285495609" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/dazonn_travels/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="st-list topbar-items">
                    <li class="hidden-xs hidden-sm"><a href="mailto:contactus@dazonntravels.com" target="">contactus@dazonntravels.com</a></li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="st-list topbar-items">
                    <li class="topbar-item link-item ">
                        <a href="" class="login"><img draggable="false" role="img" class="emoji" alt="🇮🇳" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f1ee-1f1f3.svg"> +91-176-243-5089</a>
                    </li>
                    <li class="topbar-item link-item ">
                        <a href="" class="login"><img draggable="false" role="img" class="emoji" alt="🇺🇸" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f1fa-1f1f8.svg"> +1- 929-421-7136</a>
                    </li>
                    <li class="topbar-item login-item">
                        <a href="" class="login" data-toggle="modal" data-target="#st-login-form">Login</a>
                    </li>
                    <li class="topbar-item signup-item">
                        <a href="" class="signup" data-toggle="modal" data-target="#st-register-form">Sign Up</a>
                    </li>
                    <li class="dropdown dropdown-currency hidden-xs hidden-sm">
                        <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INR <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/?currency=USD">USD</a>
                            </li>
                            <li><a href="/?currency=EUR">EUR</a>
                            </li>
                            <li><a href="/?currency=AUD">AUD</a>
                            </li>
                            <li><a href="/?currency=SGD">SGD</a>
                            </li>
                            <li><a href="/?currency=CAD">CAD</a>
                            </li>
                            <li><a href="/?currency=CNY">CNY</a>
                            </li>
                            <li><a href="/?currency=COP">COP</a>
                            </li>
                            <li><a href="/?currency=EGP">EGP</a>
                            </li>
                            <li><a href="/?currency=FJD">FJD</a>
                            </li>
                            <li><a href="/?currency=GBP">GBP</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @show
    @section('sidebar')
    <div class="container">
        <a href="https://dazonntravels.com/" class="logo hidden-xs">
            <img src="//i0.wp.com/dazonntravels.com/wp-content/uploads/2020/01/Final_logo_3.png" alt="">
        </a>
        <div class="topnav">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT US</a>
            <a href="#contact">FAQ</a>
            <a href="#news">BLOG</a>
            <a href="#contact">FLIGHTS</a>
            <a href="#about">CONTACT US</a>
        </div>
    </div>
    <div>
        @show
        @yield('bgimage')
     
<!-- Javascript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>

</html>