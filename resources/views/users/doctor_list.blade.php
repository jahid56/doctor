<?php $active="hospital"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="blog" class="container">
        <div class="center">
            <h2>Doctors Profile</h2>
            <h3 class="lead">Take the doctor 's appointment from registered doctors List . <br>No one else will not be a victim of wrong treatment</h3>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    <div class="blog-item">
                        <div class="row">
                        @foreach($doctors as $doctor)        
                            <div class="col-xs-12 col-sm-4 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="{{ asset('uploads/logo/' . $photo->image) }}" width="100%" alt="" /></a>
                            </div>
                            
                                <div class="col-xs-12 col-sm-6 blog-content">
                                    <h2><a href="#">{{ $doctor->name }}</a></h2>
                                    <h5>Education : {{ $doctor->education }}</h5> 
                                    <h5>Hospital : {{ $doctor->hospital }}</h5>
                                    <h5>Fee : {{ $doctor->fee }}</h5>
                                    <h5>Phone No : {{ $doctor->phone }}</h5>
                                    
                                </div>
                             
                            <div class="col-xs-12 col-sm-2 blog-content">
                                <h2><a href="#">Share</a></h2>
                                <ul class="social-share">
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                <h5>Fee : {{ $doctor->fee }}</h5>
                                <a class="btn btn-success" href="#">Give Your Serial</a>
                            </div>
                        @endforeach
                        </div>

                    </div><!--/.blog-item-->
                        
                    @if($doctors->lastPage() > 1)
                    
                        <ul class="pagination pagination-lg">
                        {!! $doctors->render() !!}
                            
                        </ul><!--/.pagination-->
                    @endif
                </div><!--/.col-md-8-->

            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@stop