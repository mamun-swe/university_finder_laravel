@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="shadow-sm p-3 bg-white">
                <h5 class="mb-0"><b>All University of {{$country}}</b></h5>
            </div>
        </div>

        <div class="col-12 mb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center"><p class="mb-0"><b>SL</b></p></td>
                        <td><p class="mb-0"><b>Name</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>World Rank</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>IELTS</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>GRE</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>TOFEL</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>CGPA</b></p></td>
                        <td><p class="mb-0"><b>Address</b></p></td>
                        <td><p class="mb-0"><b>Website</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>Action</b></p></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $university)
                    <tr>
                        <td class="text-center"><p class="mb-0">{{$key + 1}}</p></td>
                        <td><p class="mb-0 text-capitalize"><b>{{$university->university_name}}</b></p></td>
                        <td class="text-center"><p class="mb-0">{{$university->university_ranking}}</p></td>
                        <td class="text-center"><p class="mb-0">{{$university->ielts_score}}</p></td>
                        <td class="text-center"><p class="mb-0">{{$university->gre_score}}</p></td>
                        <td class="text-center"><p class="mb-0">{{$university->tofel_score}}</p></td>
                        <td class="text-center"><p class="mb-0">{{$university->bachelor_cgpa}}</p></td>
                        <td><p class="mb-0 text-capitalize">{{$university->address}}</p></td>
                        <td><p class="mb-0 text-lowercase">{{$university->website_link}}</p></td>
                        <td class="text-center">
                            <a href="{{route('university.edit', $university->id)}}" class="btn btn-sm btn-light text-black rounded-0 shadow-sm">Edit</a>
                            
                            <form action="{{route('university.destroy',$university->id)}}" method="post"
                                    onsubmit="return confirm('Are you sure ?')">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm rounded-0 shadow-sm border-0 text-white mt-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>



    </div>
</div>

@endsection