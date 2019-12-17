@extends('deshbord_layout')

@section('content')


  <section>
    <div class="row">
      <div class="col-sm-2">

      </div>



      <div class="col-sm-8 ml-5 pt-5 ">
        <form class="form-group bg-info p-5" action="{{URL::to('/save-division')}}" method="post">
          @csrf
          <legend class="text-center font-weight-bold text-light">Add Division</legend>
          <div class="">
            <label class="font-weight-bold text-light" for="">Division Name</label>
            <input class="form-control-lg p-3 ml-3" type="text" name="division_name" value="">
          </div>
          <div class="">
            <label class="font-weight-bold text-light" for=""> Division Driscription</label>
            <input class="form-control-lg p-3 ml-3" type="text" name="division_discription" value="">
          </div>
          <div class="">
            <label class="font-weight-bold text-light" for=""> Publication Status</label>
            <input class="ml-3 " type="checkbox"  name="publication_status" value="1">
          </div>
          <div class="">
          <input class="ml-5 btn btn-light text-dark" type="submit"  name="status_submit" value="Upload">
          </div>


        </form>
      </div>




      <div class="col-sm-2">

      </div>
    </div>
  </section>

@endsection
