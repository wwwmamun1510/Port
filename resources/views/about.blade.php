@extends('layouts.starlight')
@section('about')
active
@endsection

@section('title')
about
@endsection
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="{{url('/social')}}">Social</a>
<a class="breadcrumb-item" href="{{url('/sponsor')}}">Sponsor</a>
<a class="breadcrumb-item" href="{{url('/service')}}">Service</a>
<a class="breadcrumb-item" href="{{url('/logo')}}">Logo</a>
<a class="breadcrumb-item" href="{{url('/fact')}}">Fact</a>
<a class="breadcrumb-item" href="{{url('/education')}}">Education</a>
<a class="breadcrumb-item" href="{{url('/blog')}}">Blog</a>
<a class="breadcrumb-item" href="{{url('/area')}}">Area</a>
</nav>
<div class="sl-pagebody">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
             <h1 class="text-center">“Live as if you were to die tomorrow. Learn as if you were to live forever.” ― Mahatma Gandhi</h1>
             <p1 class="text-center">Spread the light of knowledge</p1>
          </div>
       </div>
     </div>
  </div>
 </div>
 </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection