<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaundryAja</title>
    <link rel="icon" type="image/x-icon" href="/public/images/washingmachine.ico">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />


</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/layanan">
                                Service
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/transaksi">
                                Transaction
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/progres">
                                Progress
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif --}}
                        @else
                        <li class="nav-item dropdown">
                            @include('layouts/sidebar-collapse')

                            <div class="d-none d-sm-none d-md-block">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero_area">
        <div class="hero_bg_box">
            <img src="images/mybg.jpg" alt="">
        </div>

        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <div class="carousel_btn_box">
                        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Hello!
                                        </h1>
                                        <p style="font-size: 35px;">
                                            Welcome to LaundryAja!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/washingmachine.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Get to Know About Us!
                                        </h1>
                                        <p style="font-size: 35px;">
                                            LaundryAja is Your-go-to Laundry!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/iron.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            What laundry service do you need?
                                        </h1>
                                        <p style="font-size: 35px;">We have all of your need!</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/blanket.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <div id="layanan">
        <section class="service_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Services
                    </h2>
                </div>
                <div class="service_container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box b1">
                                <div class="img-box">
                                    <img src="images/s1.png" alt="" class="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Regular
                                    </h5>
                                    <p>
                                        Duration : 48 Hours <br>
                                        Price : 10k/kg
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box b2">
                                <div class="img-box">
                                    <img src="images/s2.png" alt="" class="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Express
                                    </h5>
                                    <p>
                                        Duration : 24 Hours <br>
                                        Price : 25k/kg
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box b3">
                                <div class="img-box">
                                    <img src="images/s3.png" alt="" class="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Super-Express
                                    </h5>
                                    <p>
                                        Duration : 12 Hours <br>
                                        Price : 20k/kg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </section>

        <!-- end service section -->
    </div>

    <div id="lokasi">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>Find Us!</h1>
                </div>
                <div class="col-md-12 my-4">
                    <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=pahlawan%20semarang+(laravel%20laundry)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="1000" height="500" frameborder="0"></iframe> <a href='https://embedmap.org/'></a>
                    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=9e3090867dfff3abaadb27be772df8b260c59144'></script>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <p class="text-center">Copyright LaundryAja 2023</p>
    </div>
</body>

<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script src="js/custom.js"></script>

</html>