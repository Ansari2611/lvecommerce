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
    <div class="page-heading contact-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>contact us</h4>
                <h2>let’s get in touch</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="find-us">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="left-content">
                <h4 style="font-size: 50px">Contact Us</h4>
                <h2 style="font-size: 25px">Contact Information:</h2><br>
	            <p style="font-size: 18px">Email: <a href="mailto:contact@example.com">contact@example.com</a></p>
	            <p style="font-size: 18px">Phone: 555-555-5555</p>
	            <p style="font-size: 18px">Address: 123 Main St, India</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>


  

  {{-- footer --}}

@include('user.footer')

<!-- Bootstrap core JavaScript -->

@include('user.javascript')