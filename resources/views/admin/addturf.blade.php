@extends('admin.adminindex')
@section('mainbody')
<div class="container">

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-9">
            <center>
            <form action="/addturfAction" method="post" style="background-color:pink;padding-top:30px;border: solid red" >
             @csrf
            <div class="col">
         <div class="form-group">
             <label for="turf_name">Turf Name:</label>
             <input type="text" name="turf_name" id="turf_name" class="form-control">
         </div>
         <div class="form-group">
             <label for="location">Location:</label>
             <input type="text" name="location" id="location" class="form-control">
         </div>
         <div class="form-group">
            <label for="rate">Rate:</label>
            <input type="number" name="rate" id="rate" class="form-control">
         </div>
         <div class="form-group">
             <label for="manager">manager</label>
            <select name="manager" id="manager"class="form-control">
              <option value="" >-----------select-----------</option>
              @foreach($result as $value)
              @if($value->status=="Approve")
              <option value="{{$value->id}}">{{$value->name}}</option>
            @endif
            @endforeach
            </select>
         </div>
         <div class="form-group">
           <input type="submit" value="Add" name="add" id="add" class=" btn btn-warning btn-md">
         </div>
     </div>
 </form>
            </center>
            </div>
        </div>
</div>

@endsection