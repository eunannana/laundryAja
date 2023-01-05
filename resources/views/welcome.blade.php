<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
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
                                Layanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/transaksi">
                                Transaksi
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
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
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

   <div id="hero">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-6">
                <h1 class="display-4">Welcome to <br> LaundryAja!</h1>
                <p class="mb-5">Your go-to-Laundry!</p>
            </div>
            <div class="col-md-6">
                <img src="images/soap.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
   </div>

   <div id="layanan">
       <div class="container">
           <div class="row text-center">
               <div class="col-md-12">
                   <h1>Layanan</h1>
               </div>
               @foreach ($layanan as $item)
                    <div class="col-lg-3 col-6">
                        <div class="card shadow my-4">
                            <div class="card-body">
                                <h2 class="mb-4">{{$item->nama}}</h2>
                                <p>Durasi : {{$item->durasi}} jam</p>
                                <p>Harga : Rp. {{number_format($item->harga)}}</p>
                            </div>
                        </div>
                    </div>
               @endforeach
           </div>
       </div>
   </div>

   <div id="lokasi">
       <div class="container">
           <div class="row text-center">
               <div class="col-md-12">
                   <h1>Lokasi</h1>
               </div>
               <div class="col-md-12 my-4">
                    <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=pahlawan%20semarang+(laravel%20laundry)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="1000" height="500" frameborder="0"></iframe> <a href='https://embedmap.org/'>embed google maps wordpress</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=9e3090867dfff3abaadb27be772df8b260c59144'></script>
               </div>
           </div>
       </div>
   </div>

   <div id="footer">
       <p class="text-center">Copyright LaundryAja 2023</p>
   </div>
</body>
</html>