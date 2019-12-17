@extends('deshbord_layout')

@section('content')




    <!-- --------------------------------------------------start main content -------------------------------- -->


    <section class="d-flex">
      <div class="row">
        <div class="col-md-3 d-flex">

        </div>

        <div class="col-md-6 m-5 d-flex">
          <form class="form-group" action="{{URL::to('/save-status')}}" method="post" enctype="multipart/form-data">
            @csrf
            <legend class="text-center font-weight-bold" style="color:black ">Publish Status</legend>
            <div class="">
              <label class="font-weight-bold" for=""> Video Title</label>
              <input class="form-control px-5 mx-5" placeholder="Enter Your Video Title" type="text" name="status_title" value="">
            </div>
            <div class="">
              <label class="font-weight-bold" for=""> Upload Video
                <input class="form-control px-5 mx-5" style=" margin-left: 3px; height: 40px; width: 300px; border-radius: 5px;   "   placeholder="Enter Your product_image" type="file" name="status" value="">
                </label>
            </div>

            <div class="">
              <label class="font-weight-bold" for=""> Select City</label>
              <?php
                    $all_division_show=DB::table('tbl_division')
                              ->where('publication_status',1)
                              ->get();
               ?>
              <select class="form-control px-5 mx-5" class="" name="status_city">

                <option value="">Selct Your Division</option>
                @foreach($all_division_show as $v_show)
                    <option value="{{$v_show->division_id}}">{{$v_show->division_name}}</option>
                @endforeach


              </select>
            </div>


            <div class="">
              <label class="font-weight-bold" for=""> Video Short Discription</label>
              <input class="form-control px-5 mx-5" placeholder="Enter Your Short Discription" type="text" name="status_short_discription" value="">
            </div>

            <div class="">
              <label class="font-weight-bold" for=""> Video Long Discription</label>
              <input class="form-control px-5 mx-5" type="text" placeholder="Enter Your Long Discription" name="status_long_discription" value="">
            </div>

            <div class="">
              <label class="font-weight-bold" for=""> Publication Status</label>
              <input class="ml-5 " type="checkbox"  name="publication_status" value="1">

            </div>
            <div class="ml-5 p-2">

              <input class="ml-5 btn btn-dark text-light" type="submit"  name="status_submit" value="Submit">

            </div>
          </form>

        </div>

        <div class="col-md-3 d-flex">

        </div>
      </div>
    </section>







@endsection
