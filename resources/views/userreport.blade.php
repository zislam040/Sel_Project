@extends('layout.app')
@section('content')
<div class="container" style="width: 50%">
<h3>User List:</h3>
<table class="table table-responsive table-hover">
      <tr>
       <th>Serial-No</th>
       <th>Name</th>
       <th>Email</th>
       <th>User_Name</th>
       <th class="text-center">Action</th>
      </tr>


        @php $i=0; @endphp
      @foreach($designation as $designations)
      @php $i++; @endphp
      
      <tr>
          <td>{{$i}}</td>
          <td>{{$designations->name}}</td>
          <td>{{$designations->email}}</td>
          <td>{{$designations->user_name}}</td>
          <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="#">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a class="btn btn-raised btn-danger btn-sm" href="#">
            <i class="fa fa-trash" aria-hidden="true"></i></a>
          <td>
          <td>
      </tr>

      @endforeach

</table>

</div>

<div class="text-center"style="margin-top: -800px";>
{{$designation->links()}}
</div>
@endsection