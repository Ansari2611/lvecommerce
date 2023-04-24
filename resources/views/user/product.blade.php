<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <form action="" class="form-inline mb-3" style="float:right" method="">
            @csrf

            <input type="search" class="form-control" name="search" placeholder="search">
  
            <input type="submit" value="Search" class="btn ml-2 " style="background-color: black;color:white">
  
  
          </form>
        </div>

       

       
        @foreach ($data as $product)

        
            
       
        
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img  style="height:300px; width=150px" src="productimages/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>₹{{$product->price}}</h6>
              <p>{{$product->description}}</p>

              <form action="{{url('addcart',$product->id)}}" method="POST">
                @csrf

                <input type="number" min="1" value="1" class="form-control" name="quantity" style="width:100px;"><br>

                <button type="submit" class="btn " style="background-color:#fb641b;color:white ">
                  <i class="fa-solid fa-cart-shopping"></i>
                  Add to Cart</button>

                {{-- <input type="submit" class="btn btn-dark" value="Add to Cart"> --}}
                </form>
            
            </div>
          </div>
        </div>
        @endforeach

        @if(method_exists($data,'links'))

        <div class="d-flex justify-content-center">
          {{$data->links()}}
        </div>
        @endif

       


      </div>
    </div>
  </div>