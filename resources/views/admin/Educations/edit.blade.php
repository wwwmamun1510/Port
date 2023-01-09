@extends('layouts.starlight')

@section('education')
active
@endsection

@section('title')
Edit education
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      </nav>
       <div class="sl-pagebody">
        <div class="">
        <div class="row">
            <div class="col-lg-6 m-auto">
              @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
               @endif
              <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Education Information
                        <a href="{{ url('/education') }}" class="btn btn-success float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                   <form action="{{ url('update-education/'.$education->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       <div class="form-group mb-3">
                            <label for="">Education Type</label>
                            <input type="text" name="education_type" value="{{$education->education_type}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Percentage</label>
                            <input type="text" name="percentage" value="{{$education->percentage}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Year</label>
                            <input type="text" name="year" value="{{$education->year}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Education</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection