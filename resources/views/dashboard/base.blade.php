<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Maritim &mdash; @if (isset($subtitle)) {{$subtitle}} @endif </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{asset('boostrap/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('boostrap/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('boostrap/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('boostrap/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('boostrap/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('boostrap/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('boostrap/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="{{url('/search')}}" method="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" name="search" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="/" class="js-logo-clone">Maritim</a>
              </div>
            </div>
            
            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
             @if (Auth::guest())
              <div class="site-top-icons">
                <ul>
                  <li><a href="{{route('home')}}"><span class="icon icon-person"></span></a></li>
                  {{-- <li><a href="#"><span class="icon icon-heart-o"></span></a></li> --}}
                  {{-- <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li> --}}
                </ul>
              </div> 
              @else
              <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
              <span class="item-text">Logout</span></a>
            </div>
            @endif
            

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
       @include('dashboard.navbar')
      </nav>
    </header>

    @yield('content')

    <footer class="site-footer border-top">
     @include('dashboard.footer')
    </footer>
  </div>

  <script src="{{asset('boostrap/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('boostrap/js/jquery-ui.js')}}"></script>
  <script src="{{asset('boostrap/js/popper.min.js')}}"></script>
  <script src="{{asset('boostrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('boostrap/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('boostrap/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('boostrap/js/aos.js')}}"></script>

  <script src="{{asset('boostrap/js/main.js')}}"></script>
    
  </body>
</html>