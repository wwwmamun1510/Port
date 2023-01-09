@extends('layouts.starlight')

@section('service')
active
@endsection

@section('title')
Edit service
@endsection

@section('content')

 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
 <nav class="breadcrumb sl-breadcrumb">
 <a class="breadcrumb-item" href="{{url('/service')}}">Service</a>
 <span class="breadcrumb-item active">Edit Service</span>
 </nav>
<div class="sl-pagebody">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Service Policey Information
                        <a href="{{ url('/service') }}" class="btn btn-success float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-service/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Service Image</label>
                            <input type="file" name="service_image" class="form-control">
                            <img src="{{ asset('public/uploads/services/'.$service->service_image) }}" width="70px" height="70px" alt="Service Image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$service->title}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$service->description}}" class="form-control">
                         </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Service</button>
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