@extends('admin.adminindex')
@section('mainbody')

<center>
<table class="table-hover table-success table-striped table-borderless">
<tr>
    <th style="padding:20px;">Name</th>
    <th style="padding:20px;">Contact Number</th>
    <th style="padding:20px;">Email</th>
    <th style="padding:20px;">Gender</th>
    <th style="padding:20px;">User Name</th>
    <th style="padding:20px;">Password</th>
    <th style="padding:20px;">status</th>
</tr>
@foreach($result as $value)
<tr>
    <td style="padding:20px;">{{$value->name}}</td>
    <td style="padding:20px;">{{$value->contact_number}}</td>
    <td style="padding:20px;">{{$value->email}}</td>
    <td style="padding:20px;">{{$value->gender}}</td>
    <td style="padding:20px;">{{$value->user_name}}</td>
    <td style="padding:20px;">{{$value->password}}</td>
    <td style="padding:20px;">{{$value->status}}</td>
   <td style="padding:20px;"><a href="/approve/{{$value->id}}">Approve</a></td>
   <td style="padding:20px;"><a href="/decline/{{$value->id}}">Decline</a></td>
</tr>
</center>
@endforeach
</table>
@endsection
