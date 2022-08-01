@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-12">
        <div class="trending-wrapper">
            <h1 style="  text-align: center;
    font-weight: bold;">Result for Products</h1>
            {{-- <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br> --}}
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider" style="   display: flex;
    align-items: center;">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
            <div class="col-12 text-center">
          <a class="btn btn-large btn-success" style="width: 200px" href="ordernow">Order Now</a> <br> <br>
        </div>
     </div>
</div>
@endsection 