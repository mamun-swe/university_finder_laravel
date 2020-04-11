@extends('layouts.website')
@section('content')


<div class="account-index py-5">
    <div class="container pt-2 py-lg-5 mt-5">
        <div class="row mt-lg-5">
            <div class="col-12 text-center mb-4 mb-lg-5">
                <h3>Welcome Jhon</h3>
                <p>Give your documents, we suggest better university .</p>
            </div>

            <div class="col-12">
                <form action="" method="post">
                    <div class="row">

                        <!-- Country -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3 mb-lg-4">
                                <small class="text-muted">Choose Country</small>
                                <select class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Country</option>
                                </select>
                            </div>
                        </div>

                        <!-- Faculty -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3 mb-lg-4">
                                <small class="text-muted">Choose Faculty</small>
                                <select class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Faculty</option>
                                </select>
                            </div>
                        </div>

                        <!-- Language -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3 mb-lg-4">
                                <small class="text-muted">Choose Language</small>
                                <select class="form-control rounded-0 shadow-none select2" style="width: 100%;">
                                    <option value="" selected>Select Language</option>
                                </select>
                            </div>
                        </div>

                        <!-- Language Score -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3 mb-4">
                                <small class="text-muted">Language Score</small>
                                <input type="number" class="form-control rounded-0 shadow-none" min="1" placeholder="Language Score">
                            </div>
                        </div>

                        <!-- CGPA -->
                        <div class="col-12">
                            <div class="form-group mb-3 mb-4">
                                <small class="text-muted">Bachelor CGPA</small>
                                <input type="number" class="form-control rounded-0 shadow-none" min="1" placeholder="Enter CGPA">
                            </div>
                        </div>

                        <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info rounded-0 shadow-none text-white py-2">Find University</button>
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
</script>
@endsection