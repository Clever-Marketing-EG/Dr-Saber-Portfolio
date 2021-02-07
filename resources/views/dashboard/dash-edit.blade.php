@extends('dashboard/layoutmaster')
@section('content')
<div class="col-6 mx-auto p-4 m-5 border-light shadow-sm">
    <h3 class="pb-3">Article Form </h3>
    <div class="form-style">
    <form>
      <div class="form-group pb-3">
        <div class="form-inline col-md-10 col-sm-9 col-xs-12">
            <input type="file" class=" btn  btn-md file-uploader pull-left">
        </div>
        <div class="articlename"><input type="text" name="article" id="article"class="form-control"></div>
      </div>

      <div class="form-group pb-3">
        <div class="articlename"><input type="text" name="article" id="article"class="form-control"></div>
      </div>
      <div class="form-group pb-3">
        <div class="articlename"><input type="text" name="article" id="article"class="form-control"></div>
      </div>
      <div class="d-flex align-items-center justify-content-between">


    </div>
       <div class="pb-2">
      <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
       </div>
    </form>


    </div>

    </div>
    </div>

@endsection
