@extends('layouts.website')
@section('content')

<!-- Home -->

    <div class="home">
		<div class="home_background" style="background-image: url('{{asset('website/static/index_background.jpg')}}');"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title text-black">Find Dream University</h1>
						<div class="home_button trans_200"><a href="{{route('login')}}">get started</a></div>
					</div>
				</div>
            </div>
        </div>
        <div class="custom-overlay"></div>
    </div>
    

    <!-- Country -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_slider_container">
						
						<!-- Country Slider -->

						<div class="owl-carousel owl-theme language_slider">

							<!-- Flag -->
							@foreach($data as $country)
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="{{url('')}}/country_flag/{{$country->image}}" alt=""></div>
									<div class="lang_name text-capitalize">{{$country->country_name}}</div>
								</a>
							</div>
							@endforeach

						</div>

						<div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
    </div>
    

    <!-- Universities -->

	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">World Ranked University</h2>
				</div>
			</div>
			<div class="row courses_row">

				<!-- University -->
				@foreach($universities as $university)
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="{{url('')}}/university_images/{{$university->image}}" class="img-fluid w-100" alt=""></div>
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

			</div>
		</div>
    </div>
    

    <!-- Testimonials -->

	<div class="instructors">
		<div class="instructors_background" style="background-image: url('{{asset('website/static/instructors_background.png')}}');"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Students comment</h2>
				</div>
			</div>
			<div class="row instructors_row">

				<!-- Testimonial -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{url('')}}/admin/testimonials/instructor_1.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
					</div>
				</div>

				<!-- Testimonial -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{url('')}}/admin/testimonials/instructor_2.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
					</div>
				</div>

				<!-- Testimonial -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="{{url('')}}/admin/testimonials/instructor_3.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
						<div class="instructor_title">Teacher</div>
						<div class="instructor_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
    </div>
    

    <!-- Register -->

	<div class="register">
		<div class="container">
			<div class="row">
				
				<!-- Register Form -->

				<div class="col-lg-6">
					<div class="register_form_container">
						<div class="register_form_title">Create Account Free</div>
						<form action="#" id="register_form" class="register_form">
							<div class="row register_row">
								<div class="col-lg-6 register_col">
									<input type="text" class="form_input" placeholder="Name" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="email" class="form_input" placeholder="Email" required="required">
								</div>
								<div class="col-lg-6 register_col">
									<input type="tel" class="form_input" placeholder="Phone">
								</div>
								<div class="col-lg-6 register_col">
									<input type="password" class="form_input" placeholder="Password">
								</div>
								<div class="col-12 register_col">
									<input type="password" class="form_input" placeholder="Confirm Password">
								</div>
								<div class="col-12">
									<button type="submit" class="form_button trans_200">get it now</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Register Timer -->

				<div class="col-lg-6">
					<div class="register_timer_container">
						<div class="register_timer_title">Register Now</div>
						<div class="register_timer_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
						</div>
						<div class="timer_container">
							<ul class="timer_list">
								<li><div id="day" class="timer_num">00</div><div class="timer_ss">days</div></li>
								<li><div id="hour" class="timer_num">00</div><div class="timer_ss">hours</div></li>
								<li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
								<li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection