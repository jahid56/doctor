<?php $active="hospital"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>District in {{ $division->name }}</h2>
            </div>
            
            <div class="row">
                <div class="features">
                    @foreach($division->districts as $district)
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                
                                <h2>{{ $district->name }}</h2>
                                <h3><a  href="{!! URL::route('hospital', $district['id']) !!}"> View Details</a></h3>

                            </div>
                        </div><!--/.col-md-4-->
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
@stop