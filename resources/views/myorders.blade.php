@extends('master')
@section("content")
<div class="custom-product container">
     <div class="col-sm-10 col-sm-offset-1">
        <div class="trending-wrapper">
            <h2>My orders</h2><br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-9">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Adress : {{$item->address}}</h5>
                      <h5>Payment Staus : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection
