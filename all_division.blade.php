@extends('deshbord_layout')

@section('content')



    <section>
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Division ID</th>
            <th>Division Name</th>
            <th>Division Discription</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        @foreach($all_division as $v_division)
        <tbody>
        <tr>
          <td>{{$v_division->division_id}}</td>
          <td class="center">{{$v_division->division_name}}</td>
          <td class="center">{{$v_division->division_discription}}</td>
          <td class="center">
            @if($v_division->publication_status==1)
            <span class="label label-success">Active</span>
            @else
              <span class="label label-success">Unactive</span>

            @endif
          </td>
          <td class="center">
              @if($v_division->publication_status==1)
            <a class="btn btn-success" href="{{URL::to('/unactive-division/'.$v_division->division_id)}}">
              <i class="halflings-icon white thumbs-down"></i>
            </a>
              @else
                <a class="btn btn-success" href="{{URL::to('/active-division/'.$v_division->division_id)}}">
                  <i class="halflings-icon white thumbs-up"></i>
                </a>
              @endif

            <a class="btn btn-info" href="{{URL::to('/edit-division/'.$v_division->division_id)}}">
              <i class="halflings-icon white edit"></i>
            </a>
            <a class="btn btn-danger" href="{{URL::to('/delete-division/'.$v_division->division_id)}}">
              <i class="halflings-icon white trash"></i>
            </a>
          </td>
        </tr>

        </tbody>
        @endforeach
      </table>
    </section>

@endsection
