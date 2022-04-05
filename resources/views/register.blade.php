@extends('indexheader')
@section('mainbody')
<h3 style="color:yellow;text_size:50px; text-align:center; padding-top:90px;padding-bottom:50px"><u><b>REGISTER</b></u></h3>
<a href="/managerregister" style="color:white;padding-left:100px"><b><u>Manager register</u></b></a>
<div class="container" style="padding-top:70px;">
    <center>       
    <form action="/registerAction" method="post" style="color:white;">
        @csrf
    <div class="col">
        <div class="form-group">        
            <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="contact_number">Contact number:</label>
        <input type="number" name="contact_number" id="contact_number" mix="11" class="form-control">
        </div>
        <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="email" class="form-control">
           </div>
            <div class="form-group">
                    <label for="gender">Gender:</label>
                male <input type="radio" name="gender" id="gender1" >
                female  <input type="radio" name="gender" id="gender1" >
            </div>
           <div class="form-group">
                    <label for="user_name">User Name:</label>
                   <input type="text" name="user_name" id="user_name" class="form-control">
           </div>
           <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" name="password" id="password" class="form-control">
           </div>
           <div class="form-group">
               <input type="submit" value="Register" id="register" class="btn btn-warning btn-md">
           </div>
          </div>
    </form>
    </center>
</div>
@endsection