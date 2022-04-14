@extends('admin.adminindex')
@section('mainbody')

<div class="container">
    <table class="table table-hover table-success table-striped">
<tr>
    <th>uid</th>
    <th>CARD NUMBER</th>
    <th>HOLDER NAME</th>
    <th>AMOUNT</th>
    <th>EXPIRY DATE</th>
    <th>CVV</th>
</tr>
@foreach($result as $value)
<tr>
    <td>{{$value->uid}}</td>
    <td>{{$value->card_number}}</td>
    <td>{{$value->holder_name}}</td>
    <td>{{$value->amount}}</td>
    <td>{{$value->expdate}}</td>
    <td>{{$value->cvv}}</td>
</tr>
@endforeach
    </table>
</div>

@endsection