@extends('user.userindexheader')
@section('usermainbody')

<section>
<div class="container" style="padding-top:150px;">
<table class="table table-hover table-success table-striped" style="font-size:15px">
    <tr>
        <th style="padding:20px;">name</th>
        <th style="padding:20px;">contact number</th>
        <th style="padding:20px;">Email</th>
        <th style="padding:20px;">Gender</th>
        <th style="padding:20px;">user name</th>
        <th style="padding:20px;">password</th>
    </tr>
    @foreach($result as $value)
    <tr>
    <td style="padding:20px;">{{$value->name}}</td>
    <td style="padding:20px;">{{$value->contact_number}}</td>
    <td style="padding:20px;">{{$value->email}}</td>
    <td style="padding:20px;">{{$value->gender}}</td>
    <td style="padding:20px;">{{$value->user_name}}</td>
    <td style="padding:20px;">{{$value->password}}</td>
    <td><a href="/useredit/{{$value->id}}">Edit</a></td>
    </tr>
    @endforeach
</table>
</div>
</section>




@endsection