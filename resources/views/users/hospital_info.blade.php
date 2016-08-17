<?php $active="hospital"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="blog" class="container">
        <div class="center">
            <h2>Hospital Information</h2>
            <h3 class="lead">The government approved a renowned hospital and improved quality of service address , doctor , patient viewing time, bed , pathological tests in various subjects including costs and find the information here .<br> The bed and cabin bookings online , pathological tests , the doctor can be a serial for the meeting from the app .</h3>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    <div class="blog-item">
                        <div class="row">
                            @foreach($hospitals as $hospital)  
                                <div class="col-xs-12 col-sm-4 blog-content">
                                </div>
                                
                                    <div class="col-xs-12 col-sm-6 blog-content">
                                        <h2>{{ $hospital->name }}</h2>
                                        <h5>Address : {{ $hospital->address }}</h5> 
                                        <h5>Ownership : {{ $hospital->ownership }}</h5>
                                        <h5>Start of activities : {{ $hospital->activities }}</h5>
                                        <h5>Number of beds : {{ $hospital->beds }}</h5>
                                        <h5>Number of doctor : {{ $hospital->doctors }}</h5>
                                        <h5>Phone No : {{ $hospital->phone }}</h5>
                                    </div>
                                
                                <div class="col-xs-12 col-sm-2 blog-content">
                                    <h2><a href="#">Share</a></h2>
                                    <ul class="social-share">
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <br><br>

                                    <a class="btn btn-success readmore" href="{!! URL::route('doctor_list', $doctor['id']) !!}">Doctor List</a>
                                </div>
                                @endforeach 
                            </div>
                           
                    </div><!--/.blog-item-->
                    @if($hospitals->lastPage() > 1)
                    
                        <ul class="pagination pagination-lg">
                        {!! $hospitals->render() !!}
                            
                        </ul><!--/.pagination-->
                    @endif
                </div><!--/.col-md-8-->

            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@stop