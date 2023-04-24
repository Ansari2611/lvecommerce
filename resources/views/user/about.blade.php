@include('user.css')

<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><h2>E-<em>Shopper</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>

            <li class="nav-item">

            @if (Route::has('login'))
           
                @auth

                <li class="nav-item">
                    <a class="nav-link" href="{{url('showcart')}}">
                      <i class="fa-solid fa-cart-shopping"></i>
                      Cart[{{$count}}]</a>
                  </li>


                   <x-app-layout>

                    
  
                   </x-app-layout>
                @else
                   <li> <a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endif
                @endauth
                
                   @endif

                     </li>


          </ul>
        </div>
      </div>
    </nav>
  </header>

   <!-- Page Content -->
   <div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>about us</h4>
            <h2>E-Shopper</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Background</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Who we are &amp; What we do?</h4>
            <p>Although our business has evolved over the years, one constant is customers’ desire for lower prices, better selection, and convenient services. Today, E-shoppers can find what they are looking for online and in person. From delivering fresh produce to their doorstep to creating and distributing movies, music, and more, we are always finding new ways to delight our customers..</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- footer --}}

@include('user.footer')

<!-- Bootstrap core JavaScript -->

@include('user.javascript')