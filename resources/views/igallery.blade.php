@extends('indexheader')
@section('mainbody')

<div class="container"  style="padding-top:200px;">

<div class="products">
      <div class="container" style="padding-bottom:300px;">
        <div class="row">
            <div class="row">
            @foreach($result as $value)
              <div class="col-md-4">
                <div class="product-item">
                 <img style="height: 400px; width: 400px;" class="img-fluid" src="./images/{{$value->image}}" alt="">
                  <div class="down-content">
                      <h4>{{$value->description}}</h4>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>


@endsection()