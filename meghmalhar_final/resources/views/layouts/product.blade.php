<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow: auto !important;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <title>{{ config('app.name', 'Meghmalhaar') }}</title>
<link rel="shortcut icon" type="image/png" href="{{ asset('image/meghmalhaar images/MM-Logo.png') }}"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prodview.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/easyzoom.min.css') }}" rel="stylesheet">
    
    
    <link href="{{ asset('zoom/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('zoom/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/image-slider.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/cart.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/nouislider.css') }}" rel="stylesheet" type="text/css">
     
    <!--<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"> -->
    
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">-->
   
</head>
<body style="height:100% !important;">
   <div id="loader"><div class="loader"></div></div>
    <div id="app">
        
         <!--  <nav class="navbar ftco_navbar navbar-expand-md navbar-light bg-white shadow-sm" style="display: none;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src='<?php echo asset('storage/MeghmalhaarLogo.jpg'); ?>'></a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                  
                    
                    <ul class="navbar-nav">
                       
                      <li class="nav-item">
                        <form class="searchbar">
                            <input type="search" placeholder="Search">
                        </form>
                      </li>
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                                <a class="nav-link" href=""><i class="fas fa-shopping-bag"></i></a>
                        </li>
                    </ul>
                    <a class="nav-link menu-link my-2 my-lg-0" href=""><i class="fas fa-bars"></i></a>
                </div>  
            </div>  
        </nav> -->

 <nav class="navbar navbar-expand-lg navbar-light" >
  
  

  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav mx-auto left">
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CLOTHING <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="{{ url('/mens_product/') }}">Mens</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/product/') }}">Womens</a></li>
              </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ACCESSORIES</a>
      </li>
    </ul>
     <ul class="navbar-nav mx-auto">
            <li class="nav-item" style="text-align: center;"> <a class="navbar-brand" href="{{ url('/home') }}"><img style="width: 80%;" src='<?php echo asset('image/meghmalhaar images/MM-Logo.png'); ?>'></a></li>
      </ul>
   
    <ul class="navbar-nav mx-auto right">
      
      <li class="nav-item">
        <a class="nav-link" href="#">JEWELLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
      </li>
      <li class="nav-item">

          
              <a class="nav-link" href="{{url('cart')}}"><i class="fas fa-shopping-bag"><span class="badge badge-pill badge-danger">@if(session('cart')) {{ count(session('cart')) }} @endif</span></i></a>
          
      </li>
       @guest               

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                    @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                    @endif
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <h6 style="text-transform: uppercase;" class="dropdown-header text-center"><i class="fas fa-user-circle"></i>  {{ Auth::user()->name }}</h6>
                                  <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-primary" href="#">Profile <i class="fas fa-address-card"></i>
                                    </a>
                                  <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

      
    </ul>
    
  </div>
  <!-- mobile navigation -->
  
  
  <div class="showmob" style="display:none">
      
          <div class="row" style="background-color:white;">
              <div class="col-2">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
              <div class="col-4">
                  <div class="logo">
                    <a class="navbar-brand" href="{{ url('/home') }}"><img style="width: 80%;" src='<?php echo asset('image/MeghmalhaarLogo.jpg'); ?>'></a>
                  </div>
              </div>
              <div class="col-6">
                  <div class="mobile-top-links">
        @guest               
    
                <span class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                        @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                        @endif
                    </div>
                </span>
            @else
                <span class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user"></i><span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <h6 style="text-transform: uppercase;" class="dropdown-header text-center"><i class="fas fa-user-circle"></i>  {{ Auth::user()->name }}</h6>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-primary" href="#">Profile <i class="fas fa-address-card"></i>
                        </a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </span>
            @endguest
              
                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
              
                <a class="nav-link" href="{{url('cart')}}"><i class="fas fa-shopping-bag"><span class="badge badge-pill badge-danger">@if(session('cart')) {{ count(session('cart')) }} @endif</span></i></a>
    
    
              </div>
              
          </div>
      </div>
      <div class="row" style="background-color: white;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <div class="container">
            <div id="accordion" class="accordion">
                <div class="card mb-0">
                    <div class="mb-card card-header collapsed" data-toggle="collapse" href="#collapseOne">
                        <a href="#" class="card-title">
                            CLOTHING
                        </a>
                    </div>
                    <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                        <div class="mb-sub-card <!--card-header collapsed-->" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a href="{{ url('/mens_product/') }}" class="card-title">
                             Mens
                            </a>
                        </div>
                        <div class="mb-sub-card <!--card-header collapsed-->" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a href="{{ url('/product/') }}" class="card-title">
                             Womens
                            </a>
                        </div>
                    </div>
                    <div class="mb-card <!--card-header collapsed-->" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <a href="#" class="card-title">
                         ACCESSORIES
                        </a>
                    </div>
                    <!--<div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                            craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </p>
                    </div>-->
                    <div class="mb-card <!--card-header collapsed-->" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <a href="#" class="card-title">
                          JEWELLERY
                        </a>
                    </div>
                    <!--<div id="collapseThree" class="collapse" data-parent="#accordion" >
                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS.
                        </div>
                    </div>-->
                    <div class="mb-card <!--card-header collapsed-->" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        <a href="#" class="card-title">
                          CONTACT
                        </a>
                    </div>
                    <!--<div id="collapseFour" class="collapse" data-parent="#accordion" >
                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS.
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        
      </div>
      </div>
    
  </div>
  
</nav> 
        <main class="py-4">
            @yield('content')
        </main>  
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color: #ebe8e8;">
 
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Meghmalhaar</h5>
        <p>503, Akshar Stadia<br>Next to Allen Classes,<br>B/h. Patel Avenue, Off S.G. Highway,
          <br>Bodakdev, Ahmedabad-380054.
        </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <p>
          +91 98252 00167<br>nehali@meghmalhaar.com<br>nehali.kothari@gmail.com
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Navigation</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="#">Clothing</a>
          </li>
          <li>
            <a href="#!">Jewellery</a>
          </li>
          <li>
            <a href="#!">Accessories</a>
          </li>
          <!--<li>
            <a href="#!">SALE</a>
          </li>-->
          <li>
            <a href="#!">Contact Us</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase">FOLLOW US</h5>
        <a href="#" class="fa fa-facebook" style="border-radius: 50%;"></a>
        <a href="#" class="fa fa-twitter" style="border-radius: 50%;"></a>
       </div>
    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Meghmalhaar:
    <a href="https://mdbootstrap.com/education/bootstrap/">All rights reserved</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </div>



    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     
   <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- <script src="{{ asset('js/easyzoom.js') }}" defer></script> -->
  <!-- <script src="{{ asset('js/easyzoominit.js') }}" defer></script> -->
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>
  <script src="{{ asset('zoom/zoomsl.js') }}" defer></script>
  <script src="{{ asset('zoom/script.js') }}" defer></script>
   <script src="{{ asset('js/jquery.lazy.min.js') }}" defer></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
  <script src="{{ asset('js/image-slider.js') }}" defer></script>
  
  <!-- Range slider js -->
    <script src="{{ asset('js/nouislider.js') }}" defer></script>
 

<script type="text/javascript">
  $(document).ready(function(){
   var s = skrollr.init();
  });
  jQuery(document).ready(function() {
    jQuery("img.lazy").lazy({
        effect: "fadeIn",
        effectTime: 2000,
        threshold: 0
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
      
    $('li.dropdown').hover(function() {
      /*alert('dfghg');*/
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
       $('body').css('overflow','scroll');
       $('html').css('overflow','scroll');
    $('.sec-1').hide();
    
    $(window).on('load',function(){
        $('#loader').css('display','none');
         $('.sec-1').show();
    });
    
     setTimeout(function() {
         $('#loader').css('display','none');
         $('.sec-1').show();
     }, 15000); 
  }); 

</script>
<script>
    $(document).ready(function(){
        var width = $( window ).width();
        if(width <= '767'){
            $('.showmob').css('display','block');
        }
    });
</script>

  @yield('scripts')
</body>
</html>
