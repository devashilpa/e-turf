@extends('admin.adminindex')
@section('mainbody')

<div class="container">
  <center>
  @foreach($result as $value)
<form action="/updateAction/{{$value->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" name="file" id="file"  class="form-control" placeholder="">
                <img src="/images/{{$value->image}}" height="100px" width="100px" >
            </div>
        </div>
        <div>
        <div class="form-group">
                <label for="description">description:</label>
                <input type="text" name="description" id="description" value="{{$value->description}}"class="form-control">
            </div>
        </div>
        <div>
            <input type="submit" value="image">
        </div>
    </form>
    @endforeach
  </center>
</div>
</div>

@endsection()