@extends('user.userindexheader')
@section('usermainbody')

<div class="container">
<h3 style="font-family: serif; padding-top:100px;text-align:center; color:yellow;"><u>Book</u></h3>
 <center>
 <form action="/bookAction/{id}" method="post" style="padding-top:30px;color:white">
     @csrf 
     @foreach($result as $value)
     <div class="form-group">
         <label for="uid">uid:</label>
         <input type="text" name="uid" id="uid"  class="form-control" value="{{$value->id}}">    
     <div class="form-group">
         <label for="turfname">Turf Name:</label>
   <input type="text" name="turf_name" id="turf_name"  class="form-control" value="{{$value->turf_name}}">
     </div>
     <div class="form-group">
         <label for="turfname">Turf Type:</label>
               <input type="text" name="turf_type" id="turf_type"  class="form-control" value="{{$value->turf_type}}">     
     </div>
     <div class="form-group">
         <label for="location">location:</label>
         <input type="text" name="location" id="location"  class="form-control" value="{{$value->location}}">    
     </div>
     <div class="form-group">
         <label for="rate">rate:</label>
         <input type="text" name="rate" id="rate"  class="form-control" value="{{$value->rate}}">    
     </div>
     @endforeach
     <div class="form-group">
         <label for="date">date</label>
         <input type="date" name="date" id="date" class="form-control">
     </div>
     <div class="form-group">
         <label for="time">time</label>
         <input type="time" name="time" id="time" class="form-control">
     </div>
     <div class="form-group">
         <input type="submit" value="book"name="book" id="book"class="btn btn-danger btn-md">
     </div>
    </form>
 </center>
</div>

@endsection