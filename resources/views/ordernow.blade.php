@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-6">
         <table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Price</td>
        <td>Rs. {{$total}}</td>
      </tr>
      <tr>
        <td>G.S.T</td>
        <td>Rs. {{$total*0.18}}</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>{{$total>10000?0:100}}</td>
      </tr>

      <tr>
        <td>Total Amount</td>
        <td>{{$total+($total>10000?0:100)+($total*0.18)}}</td>
      </tr>

    </tbody>
  </table>

    <form method="POST" action="orderplace">
    @csrf
  <div class="form-group">
    <textarea placeholder="Enter your address" name="address" class="form-control" required></textarea>
  </div>
  <div class="form-group">
  <label for="">Payment Method</label>   
    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>EMI</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>Cash On Delievery</span></p>
    
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>

    </div>
</div>
@endsection