@extends('manager.managerindexheader')
@section('managerbody')
<div class="container">
    <table class="table table-hover table-striped table-success">
      <tr>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th>Gender</th>
          <th>User Name</th>
          <th>Password</th>
          <th>Status</th>
      </tr>
      @foreach($result as $value)
      <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->contact_number}}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->gender}}</td>
          <td>{{$value->user_name}}</td>
          <td>{{$value->password}}</td>
          <td>{{$value->status}}</td>
        
      </tr>
      @endforeach
    </table>
</div>
@endsection