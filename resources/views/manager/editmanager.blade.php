@extends('manager.managerindexheader')
@section('managerbody')


<h3 style="color:black;text_size:50px; text-align:center; padding-top:90px;padding-bottom:50px"><u><b>REGISTER</b></u></h3>
<div class="container" style="padding-top:70px;">
    <center>     
        @foreach($result as $value)
    <form action="/editmanagerAction/{id}" method="post" style="color:black;">
        @csrf
    <div class="col">
        <div class="form-group">        
            <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$value->name}}">
        </div>
        <div class="form-group">
            <label for="contact_number">Contact number:</label>
        <input type="number" name="contact_number" id="contact_number" mix="11" class="form-control" value="{{$value->contact_number}}">
        </div>
        <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$value->email}}">
           </div>
            <div class="form-group">
                    <label for="gender">Gender:</label>
                male <input type="radio" name="gender" id="gender1"value="male">
                female  <input type="radio" name="gender" id="gender1" value="female" >
            </div>
           <div class="form-group">
                    <label for="user_name">User Name:</label>
                   <input type="text" name="user_name" id="user_name" class="form-control" value="{{$value->user_name}}">
           </div>
           <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" name="password" id="password" class="form-control" value="{{$value->password}}">
           </div>
           <div class="form-group">
               <input type="submit" value="Register" id="register" class="btn btn-warning btn-md">
           </div>
          </div>
    </form>
    @endforeach
    </center>
</div>


@endsection