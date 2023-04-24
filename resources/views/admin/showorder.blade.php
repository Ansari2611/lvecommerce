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

                <table>
                    <tr >
                        <th style="padding:20px">Customer Name</th>
                        <th style="padding:20px">Email</th>
                        <th style="padding:20px">Product Title</th>
                        <th style="padding:20px">Price</th>
                        <th style="padding:20px">Quantity</th>
                        <th style="padding:20px">Status</th>
                        <th style="padding:20px">Action</th>
                    </tr>

                    @foreach($order as $orders)


                
                    <tr style="background-color:black; border:2px solid white " align="center">
                        <td style="padding:20px">{{$orders->name}}</td>
                        <td style="padding:20px">{{$orders->email}}</td>
                        <td style="padding:20px">{{$orders->product_name}}</td>
                        <td style="padding:20px">{{$orders->price}}</td>
                        <td style="padding:20px">{{$orders->quantity}}</td>
                        <td style="padding:20px">{{$orders->status}}</td>
                        <td style="padding:20px">
                            <a href="{{url('updatestatus',$orders->id)}}" class="btn btn-success">Deliver Order</a>
                        </td>
                    </tr>

                    @endforeach
                </table>

            </div>
        </div>

   



        
       <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          
          
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