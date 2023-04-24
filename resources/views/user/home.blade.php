<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.css')
   
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('user.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->

    @include('user.banner')

    <!-- Banner Ends Here -->

    {{-- product --}}
    @include('user.product')

  {{-- content --}}

  @include('user.content')

    
  
{{-- footer --}}

@include('user.footer')

    <!-- Bootstrap core JavaScript -->
 
@include('user.javascript')

  </body>

</html>
