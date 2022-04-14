@extends('admin.adminindex')
@section('mainbody');
<div class="container">

<table class="table table-success table-hover table-striped">
  <tr>
      <th>image</th>
      <th>description</th>
  </tr>
  @foreach($result as $value)
  <tr>
      <td><img src="/images/{{$value->image}}" height="200px" width="200px"></td>
      <td>{{$value->description}}</td>
      <td><a href="updategallery/{{$value->id}}">update</a></td>
      <td><a href="deletegallery/{{$value->id}}">delete</a></td>
  </tr>
  @endforeach
</table>
</div>



@endsection