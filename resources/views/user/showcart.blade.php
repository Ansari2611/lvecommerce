@include('user.css')
<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/redirect')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
           
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
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
    @if(session()->has('message'))

    <div class="container alert alert-success text-center" >
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
  
    </div>
    
    @endif
  </header>

  

   <form action="{{url('order')}}" method="post">
    @csrf

  <div style="padding:100px" align="center">
  <table>

    <tr>
        <th style="padding:10px; font-size:20px">Product Name</th>
        <th style="padding:10px; font-size:20px">Product Quantity</th>
        <th style="padding:10px; font-size:20px">Product Price</th>
        <th style="padding:10px; font-size:20px">Action</th>
        
        
    </tr>

    @foreach($cart as $carts)
    <tr style="background-color: black; color:white">
        <td style="padding:10px; ">
          <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
          {{$carts->product_title}}</td>


        <td style="padding:10px; font-size:20px">
          <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
          {{$carts->quantity}}</td>


        <td style="padding:10px; font-size:20px">
          <input type="text" name="price[]" value="{{$carts->price}}" hidden>
          {{$carts->price}}</td>


        <td style="padding:10px; font-size:20px"><a href="{{url('deletecart',$carts->id)}}" class="btn btn-danger">Delete</a></td>
        
        
    </tr>
    @endforeach

  </table>

    <button class="btn btn-success mt-4">Confirm Order</button>

    </form>
  </div>