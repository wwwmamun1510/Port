@extends('layouts.starlight')

@section('fact')
active
@endsection

@section('title')
Edit fact
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
                    <h4 class="text-center">Edit Fact Information
                        <a href="{{ url('/fact') }}" class="btn btn-success float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-fact/'.$fact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Digit</label>
                            <input type="number" name="digit" value="{{$fact->digit}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$fact->title}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">ICON IMAGE</label>
                            <input type="file" name="icon_image" class="form-control">
                            <img src="{{ asset('public/uploads/facts/'.$fact->icon_image) }}" width="70px" height="70px" alt="Icon Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Fact</button>
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