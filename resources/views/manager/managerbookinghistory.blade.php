@extends('manager.managerindexheader')
@section('managerbody')
<div class="container" style="padding-top:150px;">
<table class="table table-hover table-success table-striped" style="font-size:20px;">
<tr>
   <th>id</th>
   <th>uid</th>
   <th>turf name</th>
   <th>turf type</th>
   <th>rate</th>
   <th>location</th>
   <th>date</th>
   <th>time</th>
   <th>status</th>
</tr>
@foreach($result as  $value)
<tr>
    <td>{{$value->id}}</td>
    <td>{{$value->uid}}</td>
    <td>{{$value->turf_name}}</td>
    <td>{{$value->turf_type}}</td>
    <td>{{$value->rate}}</td>
    <td>{{$value->location}}</td>
    <td>{{$value->date}}</td>
    <td>{{$value->time}}</td>
    <td>{{$value->status}}</td>
</tr>
@endforeach
</table>
</div>


@endsection