@extends('indexheader')
@section('mainbody')
<h3 style="color:yellow; padding-top:90px; text-size:40px; text-align:center;"><b><u>LOGIN</u></b></h3>
<a href="/adminlogin" style="color:white;padding-left:100px"><u><b>Admin login</b></u></a>
<div class="container" style="padding-top:100px;">
    <center>
        <form action="/managerloginAction" method="post" style="color:white;">
            @csrf          
                <div class="form-group">
                  <label for="usr_name">User Name:</label>
                  <input type="text" name="user_name" id="user_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="LOG IN" name="login" id="login" class="btn btn-warning btn-md">
                </div>
        </form>
    </center>
</div>

@endsection