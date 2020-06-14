@extends('layouts.app')
@section('content')

<div class="container py-lg-2">
   <div class="row">

       <div class="col-12 col-md-6 col-lg-3 mb-4">
           <div class="card rounded-0 shadow border-0 text-center py-5 bg-gradient-primary">
                <div class="card-body">
                    <h6 class="mb-0 text-white"><b>{{$admin}}</b></h6>
                    <h5 class="mb-0 text-white"><b>Admin</b></h5>
                </div>
           </div>
       </div>

       <div class="col-12 col-md-6 col-lg-3 mb-4">
           <div class="card rounded-0 shadow border-0 text-center py-5 bg-gradient-primary">
                <div class="card-body">
                    <h6 class="mb-0 text-white"><b>{{$user}}</b></h6>
                    <h5 class="mb-0 text-white"><b>User</b></h5>
                </div>
           </div>
       </div>

       <div class="col-12 col-md-6 col-lg-3 mb-4">
           <div class="card rounded-0 shadow border-0 text-center py-5 bg-gradient-primary">
                <div class="card-body">
                    <h6 class="mb-0 text-white"><b>{{$country}}</b></h6>
                    <h5 class="mb-0 text-white"><b>Country</b></h5>
                </div>
           </div>
       </div>

       <div class="col-12 col-md-6 col-lg-3 mb-4">
           <div class="card rounded-0 shadow border-0 text-center py-5 bg-gradient-primary">
                <div class="card-body">
                    <h6 class="mb-0 text-white"><b>{{$university}}</b></h6>
                    <h5 class="mb-0 text-white"><b>University</b></h5>
                </div>
           </div>
       </div>

   </div>
</div>
@endsection
