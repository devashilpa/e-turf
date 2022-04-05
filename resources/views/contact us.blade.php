@extends('indexheader')
@section('mainbody')
<h3 style="color:yellow;padding-top:80px; text-align:center;"><b><u>Feedback</u></b></h3>
<div class="container" style="padding-top:50px;">
<div class="col-sm-6" style="border:solid white;padding-top:20px; margin:20px">
    <div>
    <center>
  <form action="/contactAction" method="post" style="color:white;">
       @csrf
       <div class="col">
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="name" id="name" class="form-control" placeholder="enter your name">
           </div>
          <div class="row">

          <div class="col-sm-6">
          <div class="form-group">
             <label for="name">email</label>
             <input type="email" name="email" id="email" class="form-control" placeholder="enter your email">
           </div>
          </div>
           <div class="col-sm-6">
           <div class="form-group" >
             <label for="contact_number">Contact Number</label>
             <input type="number" name="contact_number" id="contact_number" max="11" min="10" class="form-control" placeholder="enter your number">
           </div>
           </div>
          </div>
           <div class="form-group">
               <label for="feedback">Feedback</label>
               <textarea name="feddback" id="feedback"class="form-control" placeholder="entr your message"></textarea>
           </div>
           <div class="form-group">
               <input type="submit" value="Enter" name="submit" id="submit"class="btn btn-warning btn-md">
           </div>
       </div>
   </form>
  </center>
    </div>
</div>
<div class="row-sm-6">
      <div>
      <img src="./images/img6.jpg" width="500" height="450" style="padding-bottom:85px; padding-top:20px;padding-left:90px" class="rounded-circle" >
      </div>
    </div>
</div>

@endsection