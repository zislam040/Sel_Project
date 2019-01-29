@extends('layout.app')
@section('content')
<div class="container" style="width: 50%">
<h3>Department List:</h3>
<table class="table table-responsive table-hover">
      <tr>
       <th>Serial-No</th>
       <th>User_Name</th>
       <th>Department</th>
       <th>Designation</th>
       <th class="text-center">Action</th>
      </tr>


        @php $i=0; @endphp
      @foreach($department as $departments)
      @php $i++; @endphp
      
      <tr>
          <td>{{$i}}</td>
          <td>{{$departments->user_name}}</td>
          <td>{{$departments->department}}</td>
          <td>{{$departments->designation}}</td>
          <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="#">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a class="btn btn-raised btn-danger btn-sm" href="#">
            <i class="fa fa-trash" aria-hidden="true"></i></a>
          <td>
      </tr>

      @endforeach

</table>

</div>

<div class="text-center"style="margin-top: -800px";>
{{$department->links()}}
</div>
@endsection