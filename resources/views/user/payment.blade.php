@extends('user.userindex')
@section('usermainbody')

<div class="container" style="padding-top:200px">
       
<h2 style="color:yellow;text-align:center">Payment</h2>
@foreach($result as $value)
            <form action="/paymentAction/{id}" id="payment" method="post"style="color:white;font-size:15px">
                @csrf
                <div class="row form-group">
                   
                    <div class="col-md-12">
                        <label for="uid">UID</label>
                        <input type="text" name="uid" id="uid" class="form-control" value="{{$value->id}}" required>
                    </div>
                    </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="card_number">Card Number</label>
                        <input type="text" name="card_number" id="card_number" class="form-control" placeholder=" Card Number" pattern="[0-9]{10}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6">
                        <label for="name">Name on Card holder</label>
                        <input type="text" name="holder_name" id="holder_name" class="form-control" placeholder=" Name on Card" required>
                    </div>
                     <div class="col-sm-6">               
                        <label for="amount">Amount to pay</label>
                        <input type="number" name="amount" id="amount" class="form-control" value="{{$value->rate}}" placeholder=" Name on Card" required>

                </div>
            </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="expdate">Expiry Date</label>
                        <input type="date" id="expdate" name="expdate" required class="form-control">
                    </div>
                    <div class="col">
                        <label for="cvv">CVV</label>
                        <input type="password" pattern="[0-9]{3}" id="cvv" name="cvv" required class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 text-right">
                        <button type="reset" id="cancel" class="btn btn-secondary">Cancel</button>
                        <button type="submit" id="submit" class="btn btn-success">Pay Now</button>
                    </div>
</form>
@endforeach
</div>
<script>
    $('#payment').validate({
        rules:{
            card_number:{
                required:true
            },
            name:{
                required:true,
             
            },
            amount:{
                required:true
            },
            expdate:{
                required:true
            },
            cvv:{
                required:true
            }
        }
    });
</script>
@endsection