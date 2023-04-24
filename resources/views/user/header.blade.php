<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><h2>E-<em>Shopper</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="">
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