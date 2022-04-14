@extends('user.userindexheader')
@section('usermainbody')
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="color:white;"><u>Gallery</u></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="products">
      <div class="container">
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


@endsection