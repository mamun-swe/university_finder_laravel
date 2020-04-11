@extends('layouts.app')
@section('content')

<div class="container country-list">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-flex shadow-sm p-3 bg-white">
                <div>
                    <h5 class="mb-0"><b>Country List</b></h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('country.create')}}" class="btn btn-sm rounded-0 shodow-sm text-white btn-info">New Country</a>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center"><p class="mb-0"><b>SL</b></p></td>
                        <td><p class="mb-0"><b>Name</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>Flag</b></p></td>
                        <td class="text-center"><p class="mb-0"><b>Action</b></p></td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $key => $item)
                    <tr>
                        <td class="text-center"><p class="mb-0">{{$key + 1}}</p></td>
                        <td><p class="mb-0 text-capitalize">{{$item->country_name}}</p></td>
                        <td class="text-center"><img src="{{url('')}}/country_flag/{{$item->image}}" class="img-fluid"></td>
                        <td class="text-center">
                            <a href="{{route('country.edit', $item->id)}}" class="btn btn-light btn-sm rounded-0 shadow-sm border-0 text-dark">Edit</a>
                            <form action="{{route('country.destroy',$item->id)}}" method="post"
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