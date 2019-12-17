@extends('user_deshbord_layout')

@section('content')



    <section class="">
      <table class="table table-striped table-bordered bootstrap-datatable datatable" style="width: 1000px">
        <thead class="">
          <tr>

            <th>Video Name</th>
            <th>Status Video</th>
            <th> Short Discriptin</th>
            <th> long discription</th>

            <th>Actions</th>
          </tr>
        </thead>

        <tbody class="" >


          @foreach($user_all_post as $v_post)
        <tr>
          <td class="center">{{$v_post->status_title}}</td>
          <td class="center"><img style="height:80px; width: 80px;   " src="{{$v_post->status}}" alt=""> </td>
          <td class="center">{{$v_post->status_short_discription}}</td>
          <td class="center">{{$v_post->status_long_discription}}</td>
          <td class="center">
            <a class="btn btn-danger" href="{{URL::to('/delete-user-status/'.$v_post->user_post_id)}}">
              <i class="halflings-icon white trash"></i>
            </a>
          </td>
        </tr>


        @endforeach
            </tbody>
      </table>
    </section>

@endsection
