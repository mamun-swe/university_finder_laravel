@extends('layouts.website')
@section('content')


<!-- Universities -->

<div class="py-lg-5"></div>

<div class="courses mt-5">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Ranked University</h2>
				</div>
			</div>
			<div class="row courses_row">

				<!-- University -->
				@foreach($universities as $university)
				<div class="col-lg-4 course_col university_list mb-4">
					<div class="course">
						<div class="course_image"><img src="{{url('')}}/university_images/{{$university->image}}" class="img-fluid w-100"></div>
						<div class="course_body">
							<div class="course_title"><h4 class="mb-0"><a target="_blank" href="{{$university->website_link}}">{{$university->university_name}}</a></h4></div>
							<p class="text-muted mb-0">World Ranking {{$university->university_ranking}}</p>
							<div class="course_info">
								<p>{{$university->address}}</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach

				<div class="col-12">
					{{ $universities->links() }}
				</div>

			</div>
		</div>
    </div>


@endsection