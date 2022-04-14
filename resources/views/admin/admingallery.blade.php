@extends('admin.adminindex')
@section('mainbody')


<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="text-align:center;"> <u>Gallery</u></h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
  <center>
  <form action="/admingalleryAction" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Gallery</button>
    </form>
  </center>
</div>
</div>


@endsection()