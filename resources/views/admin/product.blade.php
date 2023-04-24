<!DOCTYPE html>
<html lang="en">
  <head>
   
@include('admin.css')

<style>
    .title{
        color:white; 
        padding-top:25px; 
        font-size:25px;
        
  }
  label{
    display: inline-block;
    width: 200px;
  }

  .btn{
    
    
    border-radius: 50px;
  }

 
</style>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
     
      <!-- partial -->

      {{-- navbar include --}}
      
      @include('admin.navbar')

        <!-- partial -->

        <!-- content-wrapper -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">
                <h1 class="title" >Product Page</h1>

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}

            </div>

                @endif

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                <div class="mt-4">
                    <label for="" >Product Title </label>
                    <input style="color:black" type="text" placeholder="Enter Product Title" required class="ml-2" name="title">
                </div>

                <div class="mt-4">
                    <label for="" >Price </label>
                    <input style="color:black" type="number" placeholder="Enter Product Price" required class="ml-2" name="price">
                </div>

                <div class="mt-4">
                    <label for="" >Description </label>
                    <textarea  style="color:black" name="description" id="" cols="18" rows="5" required></textarea>
                </div>

                <div class="mt-4">
                    <label for="" >Quantity </label>
                    <input style="color:black" type="text" placeholder="Enter Product Title" required class="ml-2" name="quantity">
                </div>

                <div class="mt-4" style="margin-left: 150px" >
                    <label for="" >Upload Image </label>
                    <input type="file"  required class="ml-2" name="image">
                </div>

                <div class="mt-4">
                    
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>

                </form>


            </div>

           


        </div>

      
       <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          {{-- @include('admin.footer') --}}
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.javascript')
    <!-- End custom js for this page -->
  </body>
</html>