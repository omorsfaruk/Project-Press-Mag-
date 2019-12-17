@extends('deshbord_layout')

@section('content')



    <section class="">
      <table class="table table-striped table-bordered bootstrap-datatable datatable" style="width: 1000px">
        <thead class="">
          <tr>
            <th>Video ID</th>
            <th>Video Name</th>
            <th>Status Video</th>
            <th> Short Discriptin</th>
            <th> long discription</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody class="" >
          @foreach($db_status as $v_status)
        <tr>
          <td>{{$v_status->status_id}}</td>
          <td class="center">{{$v_status->status_title}}</td>
          <td class="center"><img style="height:80px; width: 80px;   " src="{{$v_status->status}}" alt=""> </td>
          <td class="center">{{$v_status->status_short_discription}}</td>
          <td class="center">{{$v_status->status_long_discription}}</td>


          <td class="center">
           @if($v_status->publication_status==1)
            <span class="label label-success">Active</span>
           @else
           <span class="label label-success">Unactive</span>
           @endif
          </td>


          <td class="center">
            @if($v_status->publication_status==1)
            <a class="btn btn-success" href="{{URL::to('/unactive-status/'.$v_status->status_id)}}">
              <i class="halflings-icon white thumbs-down"></i>
            </a>
            @else
            <a class="btn btn-success" href="{{URL::to('/active-status/'.$v_status->status_id)}}">
              <i class="halflings-icon white thumbs-up"></i>
            </a>
            @endif
            <a class="btn btn-info" href="{{URL::to('/edit-status/'.$v_status->status_id)}}">
              <i class="halflings-icon white edit"></i>
            </a>
            <a class="btn btn-danger" href="{{URL::to('/delete-status/'.$v_status->status_id)}}">
              <i class="halflings-icon white trash"></i>
            </a>
          </td>
        </tr>

        </tbody>
        @endforeach
      </table>
    </section>

@endsection
