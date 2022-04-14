@extends('admin.adminindex')
@section('mainbody')
<div class="container">
 <center>
 <table border="2px" class="table-success table-striped table-hover" style="padding-top:30px;width:100%;height:100%" >
        <tr style="padding:30px">
            <th style="padding:30px">Turf Name</th>
            <th style="padding:30px">Turf Type</th>
            <th style="padding:30px">Description</th>
            <th style="padding:30px">Location</th>
            <th style="padding:30px">rate</th>
            <th style="padding:30px">manager</th>
            <th style="padding:30px">status</th>
        </tr>
        @foreach($result as $value)
        <tr style="padding:30cm">
            <td style="padding:30px">{{$value->turf_name}}</td>
            <td style="padding:30px">{{$value->turf_type}}</td>
            <td style="padding:30px">{{$value->description}}</td>
            <td style="padding:30px">{{$value->location}}</td>
            <td style="padding:30px">{{$value->rate}}</td>
            <td style="padding:30px">{{$value->manager}}</td>
            <td style="padding:30px">{{$value->status}}</td>
            <td style="padding:30px"><a href="update/{$value->id}}">update</a></td>
        </tr>
        @endforeach
    </table>
 </center>
</div>
@endsection