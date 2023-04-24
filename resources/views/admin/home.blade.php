<!DOCTYPE html>
<html lang="en">
  <head>
   
@include('admin.css')

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
        
        <div style="padding-bottom: " class="container-fluid page-body-wrapper">
          <div class="container" align="center">

        <h1 style="font-size: 30px; margin-top:150px">Welcome to Admin Page</h1>
        <div class="container mt-5"  >
          <p style= "30px;font-size:15px">
            Welcome to the Admin Dashboard for our e-commerce website! This dashboard provides a centralized location for managing and monitoring various aspects of our online store.<br>
            The dashboard also provides access to a variety of tools for managing products, categories, prices, discounts, and shipping options. You can easily add new products, update pricing, and manage inventory levels. You can also create and manage discount codes, set up shipping rules, and configure tax rates.
            Additionally, the dashboard includes features for managing orders, such as viewing order details, updating order statuses, and processing refunds or cancellations. You can easily see which orders require attention and take action as needed.
  
          </p>

        </div>
      

        </div>
        </div>

        {{-- @include('admin.body') --}}
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