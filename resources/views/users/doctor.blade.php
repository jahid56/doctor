<?php $active="doctor"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Particularity Doctor in {{ $district->name }}</h2>
            </div>
            
            <div class="row">
                <div class="features">
                    @foreach($dcategories as $dcategory)
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>{{ $dcategory->name }}</h2>
                            <h3><a  href="{!! URL::route('doctor_info', $doctor['id']) !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </section>
@stop