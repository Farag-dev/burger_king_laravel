<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" ,{{ str_replace('_', '-', app()->getLocale()) }}> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Burger_King| @yield('title')</title>
         <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />

        <!-- Animate -->
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootsnav.css') }}">
        <!-- Color style -->
        <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />

        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="{{ asset('frontend/images/logo.png') }}" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-close"></i></a>
                <div class="widget">
                    <h6 class="title">Our Menu</h6>
                    <ul class="link">
                        <form action="{{ route('allproducts') }}" method="get" >
                            @csrf
                            <li  style="margin-bottom: 10px;" ><a href="/allproducts"class="btn btn-warning btn-block text-white"><span style="color: white;">Meals</span></a></li>
                            <li style="margin-bottom: 10px;"><input href="/allproducts" type="submit" value="burger" name="category"class="btn btn-warning btn-block" ></li>
                            <li style="margin-bottom: 10px;"><input href="/allproducts" type="submit" value="pizza" name="category"class="btn btn-warning btn-block" ></li>
                            <li style="margin-bottom: 10px;"><input href="/allproducts" type="submit" value="drinks" name="category" class="btn btn-warning btn-block"></li>
                            <li style="margin-bottom: 10px;"><input href="/allproducts" type="submit" value="fries" name="category" class="btn btn-warning btn-block" ></li>
                        </form>

                        <li><a href="{{ route('cart') }}">Your Cart</a></li>
                        <li class="nav-item">
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                          </li>

                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>

        <!-- Header -->
        <header id="hello">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">
                            <h3>-introducing-</h3>
                            <h1>FATTY BURGER</h1>

                            <div class="inner_banner">
                                <div class="banner_content">
                                    <p>A double layer of sear-sizzled 100% pure beef mingled with special sauce on a sesame seed bun and topped with melty American cheese, crisp lettuce, minced onions and tangy pickles.</p>
                                    <p>*Based on pre-cooked patty weight.</p>
                                </div>
                                <div class="stamp">
                                    <img src="{{ asset('frontend/images/stamp.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            <p class="caption">*Limited Time Only</p>


        </header><!-- Header end -->


 @yield('content')


    <!-- Footer -->
    <footer>
        <!-- Container -->
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                    <div class="subscribe">
                        <h4>Working hourse</h4>
                        <p> Monday-Friday 06:00-23:00</p>
                        <p> Sat-Sun 08:00-22:00 </p>



                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                    <div class="contact_us">
                        <h4>Contact Us</h4>
                        <a href="">info@junkyburget.com</a>

                        <address>
                            Jalan Awan Hijau, Taman OUG<br />
                            58200 Kuala Lumpur <br />
                            Malaysia <br />
                        </address>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                    <div class="basic_info">
                        <a href=""><img class="footer_logo" src="images/footer_logo.png" alt="Burger" /></a>

                        <ul class="list-inline social">
                            <li><a href="" class="fa fa-facebook"></a></li>
                            <li><a href="" class="fa fa-twitter"></a></li>
                            <li><a href="" class="fa fa-instagram"></a></li>
                        </ul>

                        <div class="footer-copyright">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                Made with
                                <i class="fa fa-heart"></i>
                                by
                                <a target="_blank" href="#">Eng FaragEsam</a> <br />
                                {{ date('Y') }}. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- Container end -->
    </footer><!-- Footer end -->


    <!-- scroll up-->
    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div><!-- End off scroll up-->

    <!-- JavaScript -->
    <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Bootsnav js -->
    <script src="{{ asset('frontend/js/bootsnav.js') }}"></script>



    <!--main js-->
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
