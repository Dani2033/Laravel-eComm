@extends('master')
@section("content")
<div class="custom-product container">
     <div class="col-sm-10 col-sm-offset-1">
        <div class="trending-wrapper">
            <h2>My cart</h2><br>
            <a class="btn btn-success" href="order_now">Order now</a><br><br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-6">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/remove_from_cart/{{$item->cart_id}}" style="margin-top:20px;" class="btn btn-warning" >Remove item</a>
             </div>
            </div>
            @endforeach
            <a class="btn btn-success" href="order_now">Order now</a><br><br>
          </div>

     </div>
</div>
@endsection
