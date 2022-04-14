@extends('user.userindexheader')
@section('usermainbody')

<div class="container" style="padding-top:150px;">
<center>
<div class="col-sm-6" style="border:solid white;padding-top:20px; margin:20px">
<form action="/feedbackAction" method="post" style="color:white;" >
@csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="eneter name">
    </div>
    <div class="form-group">
    <label for="email">email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="eneter email">
    </div>
    <div class="form-group">
    <label for="contact_number">contact Number:</label>
        <input type="number" name="number" id="number" class="form-control" placeholder="eneter your contact number">
    </div>
    <div class="form-group">
    <label for="feedback">feedback:</label>
        <textarea name="message" id="message" class="form-control" placeholder="enter your message"></textarea>
    </div>
    <div class="form-group">
       <input type="submit" value="feedback"id="submit" name="submit" class="btn btn-md btn-danger">
    </div>
</form>
</div>
</center>
<div class="row-sm-6">
      <div>
      <img src="./images/img1.jpg" width="500" height="450" style="padding-bottom:85px; padding-top:20px;padding-left:90px;border-radius:25px;padding-right:20px;width:450px;height:420px;  " >
      </div>
    </div>
</div>

@endsection