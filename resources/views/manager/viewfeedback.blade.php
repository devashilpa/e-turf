@extends('manager.managerindexheader')
@section('managerbody')
<div class="container">
<table class="table table-success table-striped table-hover">
<tr>
    <th>Name</th>
    <th>email</th>
    <th>Contact Number</th>
    <th>Feedback</th>
</tr>
@foreach($result as $value)
<tr>
    <td>{{$value->name}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->contact_number}}</td>
    <td>{{$value->feedback}}</td>
</tr>
@endforeach
</table>
</div>
@endsection