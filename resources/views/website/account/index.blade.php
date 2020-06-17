@extends('layouts.website')
@section('content')


<div class="account-index py-5">
    <div class="container pt-2 py-lg-5 mt-5">
        <div class="row mt-lg-5">
            <div class="col-12 text-center mb-4 mb-lg-5">
                <h3>Welcome {{Auth()->User()->name}}</h3>
                    @if(count($matchUni) > 0)
                        <p>{{count($matchUni)}} universities are mathcing with your profile .</p>
                    @endif
            </div>

            
            <!-- Matching Universities -->
                <div class="col-12">

                    @if(count($matchUni) > 0)
                        <div class="accordion mb-4" id="accordionExample">
                            <div class="panel-group" id="posts">  

                                @foreach($matchUni as $university)
                                <div class="panel panel-default card">  
                                    <div class="panel-heading card-header">  
                                        <h5 class="panel-title mb-0">  
                                            <a href="#<?php echo $university->id; ?>" data-toggle="collapse" data-parent="#posts">{{$university->university_name}}</a>  
                                        </h5>  
                                    </div>  
                                    <div id="<?php echo $university->id; ?>" class="panel-collapse collapse">  
                                        <div class="panel-body card-body p-2 p-lg-3">  
                                            <p class="text-dark"><b>Applicant requirements</b></p>
                                            <ul>
                                                <li><p><span class="mr-2">World Ranking: </span>{{$university->university_ranking}}</p></li>
                                                <li><p><span class="mr-2">IELTS Score: </span>{{$university->ielts_score}}</p></li>
                                                <li><p><span class="mr-2">GRE Score: </span>{{$university->gre_score}}</p></li>
                                                <li><p><span class="mr-2">TOFEL Score: </span>{{$university->tofel_score}}</p></li>
                                                <li><p><span class="mr-2">PTE Score: </span>{{$university->pte_score}}</p></li>
                                                <li><p><span class="mr-2">Bachelor CGPA: </span>{{$university->bachelor_cgpa}}</p></li>
                                                <li><p><span class="mr-2 text-capitalize">Address: </span>{{$university->address}}</p></li>
                                                <li>
                                                    <p>
                                                        <span class="mr-2 text-dark"><b>Visit website to apply:</b> </span>
                                                        <a href="{{$university->website_link}}" target="_blank">{{$university->website_link}}</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>  
                                    </div>  
                                </div> 
                                @endforeach

                            </div>
                        </div>
                        {{ $matchUni->links() }}
                    @else
                        <div class="text-center">
                            <h4 class="text-danger">Any university doesn't matching with your profile.</h4>
                        </div>
                    @endif

                    
                </div>
           




        </div>
    </div>
</div>


@endsection