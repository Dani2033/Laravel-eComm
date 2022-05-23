@extends('master')
@section("content")
<div class="custom-product container">

    <div class="col-sm-10">
        <h2>Order summary</h2><br>
        <table class="table">
            <tbody>
              <tr>
                <td>Ammount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/order_place" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="Online payment" name="payment"> <span>Online payment</span> <br> <br>
                  <input type="radio" value="EMI payment" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="Payment on Delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection
