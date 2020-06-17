@extends('layouts.website')
@section('content')

<div class="account-index py-5">
    <div class="container pt-2 py-lg-5 mt-5">
        <div class="row mt-lg-5">


        <div class="col-12">
                <form id="submit_form">
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
                                <small id="std_gender_msg"></small>
                                <select name="std_gender" id="std_gender" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
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
                                <small id="std_blood_grp_msg"></small>
                                <select name="std_blood_grp" id="std_blood_grp" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
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
                                <small id="std_dob_msg"></small>
                                <input type="date" name="std_birth_date" id="std_birth_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- Adderss -->
                        <div class="col-12 py-3">
                            <h5>Address</h5>
                        </div>


                        <!-- Country -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_country_msg"></small>
                                <select name="std_country" id="std_country" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                         <!-- City -->
                         <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_city_msg"></small>
                                <input type="text" name="std_city" id="std_city" class="form-control rounded-0 shadow-none" placeholder="Enter your city">
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_state_msg"></small>
                                <input type="text" name="std_state" id="std_state" class="form-control rounded-0 shadow-none" placeholder="Enter your state">
                            </div>
                        </div>

                        <!-- Conatct -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_contact_msg"></small>
                                <input type="number" name="std_contact" id="std_contact" class="form-control rounded-0 shadow-none" placeholder="Enter your contact number">
                            </div>
                        </div>



                        <!-- Language Skill -->
                        <div class="col-12 py-3">
                            <h5>Language Skill</h5>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small id="std_language_msg"></small>
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
                                <small id="std_total_ielts_lng_score_msg"></small>
                                <input type="number" min="1" name="std_total_ielts_lng_score" id="std_total_ielts_lng_score" class="form-control rounded-0 shadow-none" placeholder="Enter total score">
                            </div>
                        </div>

                        <!-- Listening Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_ielts_listening_score_msg"></small>
                                <input type="number" min="1" name="std_ielts_listening_score" id="std_ielts_listening_score" class="form-control rounded-0 shadow-none" placeholder="Enter listening score">
                            </div>
                        </div>

                        <!-- Speaking Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_ielts_speaking_score_msg"></small>
                                <input type="number" min="1" name="std_ielts_speaking_score" id="std_ielts_speaking_score" class="form-control rounded-0 shadow-none" placeholder="Enter speaking score">
                            </div>
                        </div>

                        <!-- Writing Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_ielts_writing_score_msg"></small>
                                <input type="number" min="1" name="std_ielts_writing_score" id="std_ielts_writing_score" class="form-control rounded-0 shadow-none" placeholder="Enter writing score">
                            </div>
                        </div>

                        <!-- Reading Score -->
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small id="std_ielts_reading_score_msg"></small>
                                <input type="number" min="1" name="std_ielts_reading_score" id="std_ielts_reading_score" class="form-control rounded-0 shadow-none" placeholder="Enter reading score">
                            </div>
                        </div>
                    </div>

                    <!-- Other Score -->
                    <div class="row other_score">
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small id="std_total_lng_score_msg"></small>
                                <input type="number" min="1" name="std_total_lng_score" id="std_total_lng_score" class="form-control rounded-0 shadow-none" placeholder="Enter total score" >
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
                                <small id="std_edu_country_msg"></small>
                                <select name="std_edu_country" id="std_edu_country" class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Institution -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_edu_intitution_name_msg"></small>
                                <input type="text" name="std_edu_intitution_name" id="std_edu_intitution_name" class="form-control rounded-0 shadow-none" placeholder="Enter institution name">
                            </div>
                        </div>

                        <!-- Degree Name -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_edu_degree_name_msg"></small>
                                <input type="text" name="std_edu_degree_name" id="std_edu_degree_name" class="form-control rounded-0 shadow-none" placeholder="Enter degree name">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_edu_subject_name_msg"></small>
                                <input type="text" name="std_edu_subject_name" id="std_edu_subject_name" class="form-control rounded-0 shadow-none" placeholder="Enter subject name">
                            </div>
                        </div>

                        <!-- Start date -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_edu_start_date_msg"></small>
                                <input type="date" name="std_edu_start_date" id="std_edu_start_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- End date -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_edu_end_date_msg"></small>
                                <input type="date" name="std_edu_end_date" id="std_edu_end_date" class="form-control rounded-0 shadow-none">
                            </div>
                        </div>

                        <!-- Study duration -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_study_duration_msg"></small>
                                <input type="number" min="1" max="6" name="std_study_duration" id="std_study_duration" class="form-control rounded-0 shadow-none" placeholder="Enter study duration">
                            </div>
                        </div>

                        <!-- CGPA Scale -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="std_cgpa_scale_msg"></small>
                                <input type="number" min="1" name="std_cgpa_scale" id="std_cgpa_scale" class="form-control rounded-0 shadow-none" placeholder="Enter CGPA scale">
                            </div>
                        </div>

                        <!-- CGPA -->

                        <div class="col-12">
                            <div class="form-group mb-4">
                                <small id="std_cgpa_msg">CGPA</small>
                                <input type="text" min="1" max="4" name="std_cgpa" id="std_cgpa" class="form-control rounded-0 shadow-none" placeholder="Enter CGPA" >
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
                                <small id="ref_faq_name_msg"></small>
                                <input type="text" name="ref_faq_name" id="ref_faq_name" class="form-control rounded-0 shadow-none" placeholder="Enter faculty name">
                            </div>
                        </div>

                        <!-- Faculty contact -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="ref_faq_contact_msg"></small>
                                <input type="number" name="ref_faq_contact" id="ref_faq_contact" class="form-control rounded-0 shadow-none" placeholder="Enter contact no.">
                            </div>
                        </div>

                         <!-- Faculty email -->
                         <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="ref_faq_email_msg"></small>
                                <input type="text" name="ref_faq_email" id="ref_faq_email" class="form-control rounded-0 shadow-none" placeholder="Enter e-mail">
                            </div>
                        </div>

                        <!-- Faculty profession -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-4">
                                <small id="ref_faq_profession_msg"></small>
                                <input type="text" name="ref_faq_profession" id="ref_faq_profession" class="form-control rounded-0 shadow-none" placeholder="Enter profession">
                            </div>
                        </div>

                         <!-- Faculty institution -->
                         <div class="col-12">
                            <div class="form-group">
                                <small id="ref_faq_institution_msg"></small>
                                <input type="text" name="ref_faq_institution" id="ref_faq_institution" class="form-control rounded-0 shadow-none" placeholder="Enter institution">
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="form_button trans_200 mt-3">Submit</button>
                        </div>
                    </div>

                </form>
            </div>


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


$("#std_gender_msg").html("Gender")
$("#std_blood_grp_msg").html("Blood group")
$("#std_dob_msg").html("Date of birth")
$("#std_country_msg").html("Country")
$("#std_city_msg").html("City")
$("#std_state_msg").html("State")
$("#std_contact_msg").html("Contact")
$("#std_language_msg").html("Select language")

$("#std_total_ielts_lng_score_msg").html("Total Score")
$("#std_ielts_listening_score_msg").html("Listening Score")
$("#std_ielts_speaking_score_msg").html("Speaking Score")
$("#std_ielts_writing_score_msg").html("Writing Score")
$("#std_ielts_reading_score_msg").html("Reading Score")

$("#std_total_lng_score_msg").html("Total Score")

$("#std_edu_country_msg").html("Country")
$("#std_edu_intitution_name_msg").html("Institution")
$("#std_edu_degree_name_msg").html("Degree")
$("#std_edu_subject_name_msg").html("Subject")
$("#std_edu_start_date_msg").html("Start date")
$("#std_edu_end_date_msg").html("End date")
$("#std_study_duration_msg").html("Study Duration")
$("#std_cgpa_scale_msg").html("CGPA Scale")
$("#std_cgpa_msg").html("CGPA")

$("#ref_faq_name_msg").html("Faculty name")
$("#ref_faq_contact_msg").html("Faculty contact no.")
$("#ref_faq_email_msg").html("Faculty e-mail")
$("#ref_faq_profession_msg").html("Faculty profession")
$("#ref_faq_institution_msg").html("Faculty institution")


// Form Submission
$("#submit_form").submit(function(event){
    event.preventDefault()

    var data = {
        std_gender: $("#std_gender").val(),
        std_blood_grp: $("#std_blood_grp").val(),
        std_birth_date: $("#std_birth_date").val(),
        std_country: $("#std_country").val(),
        std_city: $("#std_city").val(),
        std_state: $("#std_state").val(),
        std_contact: $("#std_contact").val(),

        std_language: $("#std_language").val(),

        std_total_ielts_lng_score: $("#std_total_ielts_lng_score").val(),
        std_ielts_listening_score: $("#std_ielts_listening_score").val(),
        std_ielts_speaking_score: $("#std_ielts_speaking_score").val(),
        std_ielts_writing_score: $("#std_ielts_writing_score").val(),
        std_ielts_reading_score: $("#std_ielts_reading_score").val(),

        std_total_lng_score: $("#std_total_lng_score").val(),

        std_edu_country: $("#std_edu_country").val(),
        std_edu_intitution_name: $("#std_edu_intitution_name").val(),
        std_edu_degree_name: $("#std_edu_degree_name").val(),
        std_edu_subject_name: $("#std_edu_subject_name").val(),
        std_edu_start_date: $("#std_edu_start_date").val(),
        std_edu_end_date: $("#std_edu_end_date").val(),
        std_study_duration: $("#std_study_duration").val(),
        std_cgpa_scale: $("#std_cgpa_scale").val(),
        std_cgpa: $("#std_cgpa").val(),

        ref_faq_name: $("#ref_faq_name").val(),
        ref_faq_contact: $("#ref_faq_contact").val(),
        ref_faq_email: $("#ref_faq_email").val(),
        ref_faq_profession: $("#ref_faq_profession").val(),
        ref_faq_institution: $("#ref_faq_institution").val(),
    }

    if(!data.std_gender){
        $("#std_gender_msg").html("Gender is required").css("color", "brown")
    }

    if(!data.std_blood_grp){
        $("#std_blood_grp_msg").html("Blood group is required").css("color", "brown")
    }

    if(!data.std_birth_date){
        $("#std_dob_msg").html("Date of birth is required").css("color", "brown")
    }

    if(!data.std_country){
        $("#std_country_msg").html("Country is required").css("color", "brown")
    }

    if(!data.std_city){
        $("#std_city_msg").html("City is required").css("color", "brown")
    }

    if(!data.std_city){
        $("#std_city_msg").html("City is required").css("color", "brown")
    }

    if(!data.std_state){
        $("#std_state_msg").html("State is required").css("color", "brown")
    }

    if(!data.std_contact){
        $("#std_contact_msg").html("Contact is required").css("color", "brown")
    }

    if(!data.std_language){
        $("#std_language_msg").html("Language is required").css("color", "brown")
    }

    // IELTS data validation
    if(data.std_language == "ielts"){
        if(!data.std_total_ielts_lng_score){
            $("#std_total_ielts_lng_score_msg").html("Total Score is required").css("color", "brown")
        }

        if(!data.std_ielts_listening_score){
            $("#std_ielts_listening_score_msg").html("Listening Score is required").css("color", "brown")
        }

        if(!data.std_ielts_speaking_score){
            $("#std_ielts_speaking_score_msg").html("Speaking Score is required").css("color", "brown")
        }

        if(!data.std_ielts_writing_score){
            $("#std_ielts_writing_score_msg").html("Writing Score is required").css("color", "brown")
        }

        if(!data.std_ielts_reading_score){
            $("#std_ielts_reading_score_msg").html("Reading Score is required").css("color", "brown")
        }
    }
    
    if(data.std_language != "ielts"){
        if(data.std_language && !data.std_total_lng_score){
            $("#std_total_lng_score_msg").html("Total score is required").css("color", "brown")
        }
    }

    if(!data.std_edu_country){
        $("#std_edu_country_msg").html("Country is required").css("color", "brown")
    }

    if(!data.std_edu_intitution_name){
        $("#std_edu_intitution_name_msg").html("Institution is required").css("color", "brown")
    }

    if(!data.std_edu_intitution_name){
        $("#std_edu_degree_name_msg").html("Degree is required").css("color", "brown")
    }

    if(!data.std_edu_subject_name){
        $("#std_edu_subject_name_msg").html("Subject is required").css("color", "brown")
    }

    if(!data.std_edu_start_date){
        $("#std_edu_start_date_msg").html("Start date is required").css("color", "brown")
    }

    if(!data.std_edu_end_date){
        $("#std_edu_end_date_msg").html("End date is required").css("color", "brown")
    }

    if(!data.std_study_duration){
        $("#std_study_duration_msg").html("Study Duration is required").css("color", "brown")
    }

    if(!data.std_cgpa_scale){
        $("#std_cgpa_scale_msg").html("CGPA Scale is required").css("color", "brown")
    }

    if(!data.std_cgpa){
        $("#std_cgpa_msg").html("CGPA is required").css("color", "brown")
    }

    if(!data.ref_faq_name){
        $("#ref_faq_name_msg").html("Faculty name is required").css("color", "brown")
    }

    if(!data.ref_faq_contact){
        $("#ref_faq_contact_msg").html("Faculty contact is required").css("color", "brown")
    }

    if(!data.ref_faq_email){
        $("#ref_faq_email_msg").html("Faculty e-mail is required").css("color", "brown")
    }

    if(!data.ref_faq_profession){
        $("#ref_faq_profession_msg").html("Faculty profession is required").css("color", "brown")
    }

    if(!data.ref_faq_institution){
        $("#ref_faq_institution_msg").html("Faculty institution is required").css("color", "brown")
    }

    if(
        data.std_gender && 
        data.std_blood_grp && 
        data.std_birth_date && 
        data.std_country && 
        data.std_city && 
        data.std_state && 
        data.std_contact && 
        data.std_language && 
        
        data.std_edu_country && 
        data.std_edu_intitution_name && 
        data.std_edu_degree_name && 
        data.std_edu_subject_name && 
        data.std_edu_start_date && 
        data.std_edu_end_date && 
        data.std_study_duration && 
        data.std_cgpa_scale && 
        data.std_cgpa && 
        data.ref_faq_name && 
        data.ref_faq_contact && 
        data.ref_faq_email && 
        data.ref_faq_profession && 
        data.ref_faq_institution
        ){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                type : 'POST',
                url:"{{route('account.update')}}",
                data: data,
                success : function(response) {
                    console.log(response)
                    if(response == 'success'){
                        window.location.reload();
                    }
                }
            })
    }

})

        
</script>

@endsection