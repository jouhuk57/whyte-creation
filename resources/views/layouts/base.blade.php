<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Font awesome -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('assets/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.simpleLens.css') }}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!-- <link id="switcher" href="{{ asset('assets/css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('assets/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
    @livewireStyles
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
    
 
              </div>
        
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
          
                  @if(Route::has('login'))
                            @auth
							@if(Auth::user()->utype === 'ADM')
                            <li><a href="account.html">My Account</a></li>
                            <li class="menu-item" >
											<a title="Categories" href="{{ route('admin.categories')}}">Categories</a>
										</li>
                                        <li class="menu-item" >
											<a title="Sub Categories" href="{{ route('admin.subcategories')}}">Sub Categories</a>
										</li>
                                        <li class="menu-item" >
											<a title="Products" href="{{ route('admin.products')}}">Products</a>
										</li>
                            <li class="menu-item" >
										<a  href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
										</li>
										<form id="logout-form" method="POST" action="{{ route('logout')}}">
											@csrf
										</form>
							@endif

							@else
                            <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
							<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
							@endif
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  @livewire('menu-component')

 {{$slot}}



  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset ('assets/js/bootstrap.js') }}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ asset ('assets/js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ asset ('assets/js/jquery.smartmenus.bootstrap.js') }}"></script>  
  <!-- To Slider JS -->
  <script src="{{ asset ('assets/js/sequence.js') }}"></script>
  <script src="{{ asset ('assets/js/sequence-theme.modern-slide-in.js') }}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{ asset ('assets/js/jquery.simpleGallery.js') }}"></script>
  <script type="text/javascript" src="{{ asset ('assets/js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset ('assets/js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ asset ('assets/js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ asset ('assets/js/custom.js') }}"></script> 
  @livewireScripts
  </body>
</html>