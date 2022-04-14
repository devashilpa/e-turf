@extends('user.userindexheader')
@section('usermainbody')
<div class="container">
    <h3 style="color:yellow; padding-top:90px;"><u>VIEW BOOK</u></h3>
    <table class="table-hover table-success" style="height:250px;width:100%;font-size:20px">
        <tr>
            <th> ID</th>
            <th>Turf Name</th>
            <th>Turf type</th>
            <th>Rate</th>
            <th>location</th>
            <th>date</th>
            <th>time</th>
            <th>status</th>
        </tr>
        @foreach($result as $value)
        <tr>
            @if($value->status=="booked")
        <td>{{$value->id}}</td>
            <td>{{$value->turf_name}}</td>
            <td>{{$value->turf_type}}</td>
            <td>{{$value->rate}}</td>
            <td>{{$value->location}}</td>
            <td>{{$value->date}}</td>
            <td>{{$value->time}}</td>
            <td>{{$value->status}}</td>
            <td><a href="/payment/{{$value->id}}">Payment</a></td>
            <td><a href="/delete/{{$value->id}}">Delete</a></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>


@endsection