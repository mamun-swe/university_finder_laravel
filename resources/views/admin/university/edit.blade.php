@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="shadow-sm p-3 bg-white">
                <h5 class="mb-0"><b>Edit University Information</b></h5>
            </div>
        </div>

        @if($data)
        <div class="col-12 mb-4">
            <div class="card rounded-0 shadow-sm border-0">
                <div class="card-body py-4 py-lg-5 px-lg-5">
                    @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                    <form action="{{route('university.update', $data->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <!-- University Name -->
                        <div class="form-group mb-3">
                            @if($errors->has('university_name'))
                                <small class="text-danger">{{ $errors->first('university_name') }}</small>
                            @else 
                                <small class="text-muted"><b>University Name</b></small>
                            @endif
                            <input type="text" class="form-control rounded-0 shadow-none" name="university_name" value="{{$data->university_name}}">
                        </div>


                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <!-- University ranking -->
                                <div class="form-group mb-3">
                                    @if($errors->has('university_ranking'))
                                        <small class="text-danger">{{ $errors->first('university_ranking') }}</small>
                                    @else 
                                        <small class="text-muted"><b>University ranking</b></small>
                                    @endif
                                    <input type="number" class="form-control rounded-0 shadow-none" name="university_ranking" value="{{$data->university_ranking}}" min="1">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- IELTS Score -->
                                <div class="form-group mb-3">
                                    @if($errors->has('ielts_score'))
                                        <small class="text-danger">{{ $errors->first('ielts_score') }}</small>
                                    @else 
                                        <small class="text-muted"><b>IELTS Score</b></small>
                                    @endif
                                    <input type="text" class="form-control rounded-0 shadow-none" name="ielts_score" value="{{$data->ielts_score}}" min="1">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- GRE Score -->
                                <div class="form-group mb-3">
                                    @if($errors->has('gre_score'))
                                        <small class="text-danger">{{ $errors->first('gre_score') }}</small>
                                    @else 
                                        <small class="text-muted"><b>GRE Score</b></small>
                                    @endif
                                    <input type="text" class="form-control rounded-0 shadow-none" name="gre_score" value="{{$data->gre_score}}" min="1">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- TOFEL Score -->
                                <div class="form-group mb-3">
                                    @if($errors->has('tofel_score'))
                                        <small class="text-danger">{{ $errors->first('tofel_score') }}</small>
                                    @else 
                                        <small class="text-muted"><b>TOFEL Score</b></small>
                                    @endif
                                    <input type="text" class="form-control rounded-0 shadow-none" name="tofel_score" value="{{$data->tofel_score}}" min="1">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- PTE Score -->
                                <div class="form-group mb-3">
                                    @if($errors->has('pte_score'))
                                        <small class="text-danger">{{ $errors->first('pte_score') }}</small>
                                    @else 
                                        <small class="text-muted"><b>PTE Score</b></small>
                                    @endif
                                    <input type="text" class="form-control rounded-0 shadow-none" name="pte_score" value="{{$data->bachelor_cgpa}}" min="1">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- Bachelor CGPA -->
                                <div class="form-group mb-3">
                                    @if($errors->has('bachelor_cgpa'))
                                        <small class="text-danger">{{ $errors->first('bachelor_cgpa') }}</small>
                                    @else 
                                        <small class="text-muted"><b>Bachelor CGPA</b></small>
                                    @endif
                                    <input type="text" class="form-control rounded-0 shadow-none" name="bachelor_cgpa" value="{{$data->bachelor_cgpa}}" min="1">
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group mb-3">
                            @if($errors->has('address'))
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                            @else 
                                <small class="text-muted"><b>Address</b></small>
                            @endif
                            <input type="text" class="form-control rounded-0 shadow-none" name="address" value="{{$data->address}}">
                        </div>

                        <!-- Website Link -->
                        <div class="form-group mb-3">
                            @if($errors->has('website_link'))
                                <small class="text-danger">{{ $errors->first('website_link') }}</small>
                            @else 
                                <small class="text-muted"><b>Website Link</b></small>
                            @endif
                            <input type="text" class="form-control rounded-0 shadow-none" name="website_link" value="{{$data->website_link}}">
                        </div>

                        <button type="submit" class="btn btn-info btn-block text-white rounded-0 text-white"><b>UPDATE UNIVERSITY</b></button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection