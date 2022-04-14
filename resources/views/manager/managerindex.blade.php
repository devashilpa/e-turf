@extends('manager.managerindexheader')
@section('managerbody')


@foreach($result as $value)
    <h2 style="color:red; text-size:20px; text-align:center; padding-top:150px; text-transform:uppercase;">welcome {{$value->name}}...!</h2>
    @endforeach


@endsection