<!DOCTYPE html>
<html lang="zxx" class="no-js">
        <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Dentist</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="/paciente/css/linearicons.css">
            <link rel="stylesheet" href="/paciente/css/font-awesome.min.css">
            <link rel="stylesheet" href="/paciente/css/bootstrap.css">
            <link rel="stylesheet" href="/paciente/css/magnific-popup.css">
            <link rel="stylesheet" href="/paciente/css/nice-select.css">                          
            <link rel="stylesheet" href="/paciente/css/animate.min.css">
            <link rel="stylesheet" href="/paciente/css/jquery-ui.css">            
            <link rel="stylesheet" href="/paciente/css/owl.carousel.css">
            <link rel="stylesheet" href="/paciente/css/main.css">
        </head>
    <body>
<!-- #Start header -->
        <header id="header" id="home">
                <div class="header-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                                <a href="index.html"><img src="/paciente/img/logo.png" alt="" title="" /></a>         
                            </div>
                            <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                                
                                <a class="btns" href="tel:+57 320 687 7796">+57 320 687 7796</a>
                                <a class="btns" href="mailto:camibh16@gmail.com">camibh16@gmail.com</a>
                {{-- Start guest --}}
                    @guest
                            
                                <a class="icons" href="{{ route('login') }}" style="background: none"><i class="material-icons" style="font-size:20px;color:#67bc00;">forward</i></a>
                            
                            
                        @if (Route::has('register'))
                                    <a class="icons" href="{{ route('register') }}" style="background: none"><i class="material-icons" style="font-size:20px;color:#67bc00">person_add</i></a>
                        @endif
                            
                        @else
                                <a class="icons" href="tel:+57 320 687 7796">
                                    <span class="fa fa-phone"></span>
                                </a>
                                <a class="icons" href="mailto:camibh16@gmail.com">
                                    <span class="fa fa-envelope"></span>
                                </a>

                                <a class="icons" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="fa fa-sign-out"></span>
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                    
                            </div>
                    @endguest
                {{-- End guest --}}

                

                        </div>                              
                    </div>
                </div>
                <div class="container main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                {{-- Start guest --}}
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                        @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                            </li>
                        @else

                          <li class="menu-active"><a href="{{ route('home') }}">Inicio</a></li>
                              <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a></li>
                                    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                    @endguest
                {{-- End guest --}}

                        </ul>
                      </nav><!-- #nav-menu-container -->
                    <div class="menu-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>              
                    </div>
                </div>
        </header>
<!-- #End header -->

<!-- #Start yield -->
        @yield('content')
<!-- #End yield -->

<!-- start footer Area -->      
    <footer class="footer-area section-gap">
                <div class="container">
                    

                    <div class="row footer d-flex justify-content-between">
                        <p class="col-lg- col-sm-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        <div class="col-lg-4 col-sm-12 footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
    </footer>
<!-- End footer Area -->

<!-- Start Script -->
                    <script src="/paciente/js/vendor/jquery-2.2.4.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="/paciente/js/vendor/bootstrap.min.js"></script>          
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
                    <script src="/paciente/js/easing.min.js"></script>            
                    <script src="/paciente/js/hoverIntent.js"></script>
                    <script src="/paciente/js/superfish.min.js"></script> 
                    <script src="/paciente/js/jquery.ajaxchimp.min.js"></script>
                    <script src="/paciente/js/jquery.magnific-popup.min.js"></script> 
                    <script src="/paciente/js/jquery-ui.js"></script>         
                    <script src="/paciente/js/owl.carousel.min.js"></script>                      
                    <script src="/paciente/js/jquery.nice-select.min.js"></script>                            
                    <script src="/paciente/js/mail-script.js"></script>   
                    <script src="/paciente/js/main.js"></script>
<!-- End Script -->  
    </body>
</html>