@extends('layouts.website')
@section('content')


<div class="account-index py-5">
    <div class="container pt-2 py-lg-5 mt-5">
        <div class="row mt-lg-5">
            <div class="col-12 text-center mb-4 mb-lg-5">
                <h3>Welcome {{Auth()->User()->name}}</h3>
                @if(!$userProfile)
                    <p>Update your profile with your information .</p>
                @else
                    <p>100 universities are mathcing with your profile .</p>
                @endif
            </div>

            @if(!$userProfile)


            <div class="col-12">
                <form action="{{route('account.update')}}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-12 py-3">
                            <h5>Basic Information</h5>
                        </div>
                    
                        <!-- Name -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Name</small>
                                <input type="text" class="form-control rounded-0 shadow-none" placeholder="Enter name" value="{{Auth()->User()->name}}" readonly>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_gender'))
                                    <small class="text-danger">Gender is required.</small>
                                @else 
                                    <small>Gender</small>
                                @endif
                                <select name="std_gender" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Blood Group -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_blood_grp'))
                                    <small class="text-danger">Blood group is required.</small>
                                @else 
                                    <small>Blood Group</small>
                                @endif
                                
                                <select name="std_blood_grp" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select blood group</option>
                                    <option value="a+">(A+)</option>
                                    <option value="a-">(A-)</option>
                                    <option value="b+">(B+)</option>
                                    <option value="b-">(B-)</option>
                                    <option value="o+">(O+)</option>
                                    <option value="o-">(O-)</option>
                                    <option value="ab+">(AB+)</option>
                                    <option value="ab-">(AB-)</option>
                                </select>
                            </div>
                        </div>

                        <!-- DOB -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_birth_date'))
                                    <small class="text-danger">Date of birth is required.</small>
                                @else 
                                    <small>Date of birth</small>
                                @endif
                                
                                <input type="date" name="std_birth_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- Adderss -->
                        <div class="col-12 py-3">
                            <h5>Address</h5>
                        </div>


                        <!-- Country -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_country'))
                                    <small class="text-danger">Country is required.</small>
                                @else 
                                    <small>Country</small>
                                @endif
                                
                                <select name="std_country" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Country</option>
                                    <option value="bd">Bangladesh</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                        </div>


                         <!-- City -->
                         <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_city'))
                                    <small class="text-danger">City is required.</small>
                                @else 
                                    <small>City</small>
                                @endif
                                
                                <input type="text" name="std_city" class="form-control rounded-0 shadow-none" placeholder="Enter your city">
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_state'))
                                    <small class="text-danger">State is required.</small>
                                @else 
                                    <small>State</small>
                                @endif
                                
                                <input type="text" name="std_state" class="form-control rounded-0 shadow-none" placeholder="Enter your state">
                            </div>
                        </div>

                        <!-- Conatct -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                @if($errors->has('std_contact'))
                                    <small class="text-danger">Contact is required.</small>
                                @else 
                                    <small>Contact</small>
                                @endif
                                <input type="number" name="std_contact" class="form-control rounded-0 shadow-none" placeholder="Enter your contact number">
                            </div>
                        </div>



                        <!-- Language Skill -->
                        <div class="col-12 py-3">
                            <h5>Language Skill</h5>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-4">
                                @if($errors->has('std_language'))
                                    <small class="text-danger">Select language .</small>
                                @else 
                                    <small>Select Language</small>
                                @endif
                                
                                <select id="std_language" name="std_language" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Language</option>
                                    <option value="ielts">IELTS</option>
                                    <option value="gre">GRE</option>
                                    <option value="pte">PTE</option>
                                    <option value="tofel">TOFEL</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!-- IELTS Score's -->
                    <div class="row ielts_score_row">
                        <!-- Total Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Total Score</small>
                                <input type="number" min="1" name="std_total_lng_score" class="form-control rounded-0 shadow-none" placeholder="Enter total score">
                            </div>
                        </div>

                        <!-- Listening Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Listening Score</small>
                                <input type="number" min="1" name="std_listening_score" class="form-control rounded-0 shadow-none" placeholder="Enter listening score">
                            </div>
                        </div>

                        <!-- Speaking Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Speaking Score</small>
                                <input type="number" min="1" name="std_speaking_score" class="form-control rounded-0 shadow-none" placeholder="Enter speaking score">
                            </div>
                        </div>

                        <!-- Writing Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Writing Score</small>
                                <input type="number" min="1" name="std_writing_score" class="form-control rounded-0 shadow-none" placeholder="Enter writing score">
                            </div>
                        </div>

                        <!-- Reading Score -->
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small>Reading Score</small>
                                <input type="number" min="1" name="std_reading_score" class="form-control rounded-0 shadow-none" placeholder="Enter reading score">
                            </div>
                        </div>
                    </div>

                    <!-- Other Score -->
                    <div class="row other_score">
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small>Total Score</small>
                                <input type="number" min="1" name="std_total_lng_score" class="form-control rounded-0 shadow-none" placeholder="Enter total score" >
                            </div>
                        </div>
                    </div>



                    <!-- Education -->
                    <div class="row">
                        <div class="col-12 py-3">
                            <h5>Education Info.</h5>
                        </div>

                        <!-- Country -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Country</small>
                                <select name="std_edu_country" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Country</option>
                                    <option value="bd">Bangladesh</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                        </div>

                        <!-- Institution -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Institution</small>
                                <input type="text" name="std_edu_intitution_name" class="form-control rounded-0 shadow-none" placeholder="Enter institution name">
                            </div>
                        </div>

                        <!-- Degree Name -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Degree</small>
                                <input type="text" name="std_edu_degree_name" class="form-control rounded-0 shadow-none" placeholder="Enter degree name">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Subject</small>
                                <input type="text" name="std_edu_subject_name" class="form-control rounded-0 shadow-none" placeholder="Enter subject name">
                            </div>
                        </div>

                        <!-- Start date -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Start date</small>
                                <input type="date" name="std_edu_start_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- End date -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>End date</small>
                                <input type="date" name="std_edu_end_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- Study duration -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Study Duration</small>
                                <input type="number" min="1" max="6" name="std_study_duration" class="form-control rounded-0 shadow-none" placeholder="Enter study duration">
                            </div>
                        </div>

                        <!-- CGPA Scale -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>CGPA Scale</small>
                                <input type="number" min="1" name="std_cgpa_scale" class="form-control rounded-0 shadow-none" placeholder="Enter CGPA scale">
                            </div>
                        </div>

                        <!-- CGPA -->

                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small>CGPA</small>
                                <input type="number" min="1" max="4" name="std_cgpa" class="form-control rounded-0 shadow-none" placeholder="Enter CGPA" >
                            </div>
                        </div>
                    </div>


                    <!-- Reference -->
                    <div class="row">
                        <div class="col-12 py-3">
                            <h5>Reference Info.</h5>
                        </div>

                        <!-- Faculty name -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Faculty name</small>
                                <input type="text" name="ref_faq_name" class="form-control rounded-0 shadow-none" placeholder="Enter faculty name">
                            </div>
                        </div>

                        <!-- Faculty contact -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Faculty contact no.</small>
                                <input type="number" name="ref_faq_contact" class="form-control rounded-0 shadow-none" placeholder="Enter contact no.">
                            </div>
                        </div>

                         <!-- Faculty email -->
                         <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Faculty e-mail</small>
                                <input type="text" name="ref_faq_email" class="form-control rounded-0 shadow-none" placeholder="Enter e-mail">
                            </div>
                        </div>

                        <!-- Faculty profession -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small>Faculty profession</small>
                                <input type="text" name="ref_faq_profession" class="form-control rounded-0 shadow-none" placeholder="Enter profession">
                            </div>
                        </div>

                         <!-- Faculty institution -->
                         <div class="col-12">
                            <div class="form-group">
                                <small>Faculty institution</small>
                                <input type="text" name="ref_faq_institution" class="form-control rounded-0 shadow-none" placeholder="Enter institution">
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="form_button trans_200 mt-3">Submit</button>
                        </div>
                    </div>

                </form>
            </div>


            @else
            <!-- Matching Universities -->
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>daffodil international university, Dhaka</h5>
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            </div>
                        </div>

                        
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5>daffodil international university, dhaka</h5>
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            </div>
                        </div>

                        
                    
                    </div>
                </div>
            @endif




        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.select2').select2();
});

$('.ielts_score_row').hide()
$('.other_score').hide()
$('#std_language').change(function(){
    if($('#std_language').val() == "ielts"){
        $('.ielts_score_row').show('slow')
        $('.other_score').hide()
    }else{
        $('.ielts_score_row').hide() 
        $('.other_score').show()
    }
})
</script>
@endsection