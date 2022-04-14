@extends('user.userindexheader')
@section('usermainbody')
<h2 style="font-family: serif; padding-top:60px; text-align:ceneter;">Turfs List</h2>    
    <div>
            <table class="table table-bordered table-success table-hover" style="color:white;">
                <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">location</td>          
                <td style="font-size:20px;">Description</td>
                <td style="font-size:20px;">Turf Price</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->turf_name}}</td>
                <td>{{$value->description}}</td>
                <td>{{$value->location}}</td>
                <td>{{$value->rate}}</td>
                <td><a href="/book/{{$value->id}}">Book</a></td>
                </tr>
                @endforeach
            </table>
        </div>

@endsection


