@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-flex shadow-sm p-3 bg-white">
                <div>
                    <h5 class="mb-0"><b>Edit Country</b></h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('country.index')}}" class="btn btn-sm rounded-0 shodow-sm text-white btn-info">Country List</a>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="card rounded-0 shadow-sm border-0">
                <div class="card-body py-4 py-lg-5 px-lg-5">
                    @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                    <form action="{{route('country.update', $data->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <!-- Country Name -->
                        <div class="form-group mb-3">
                            @if($errors->has('country_name'))
                                <small class="text-danger">{{ $errors->first('country_name') }}</small>
                            @else 
                                <small class="text-muted"><b>Country Name</b></small>
                            @endif
                            <input type="text" class="form-control rounded-0 shadow-none" name="country_name" value="{{$data->country_name}}">
                        </div>

                        <button type="submit" class="btn btn-info btn-block text-white rounded-0 text-white"><b>UPDATE COUNTRY</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection