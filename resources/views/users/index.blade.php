<?php $active="home"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
				<li data-target="#main-slider" data-slide-to="3"></li>
				<li data-target="#main-slider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="item" style="background-image: url(images/slider/4.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="item" style="background-image: url(images/slider/5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                <p class="lead">Our job is to provide new and modern service staff century . Planning services are launched in the following 3 .<br> More services will be added periodically </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
							<center>
								<i class="fa fa-user"></i>
								<h2>Doctor Admin Panel</h2>
							</center>
                            <h3>Speciality experienced and prominent doctors in the country can add , delete , update their services space , time , cost by sign up our page . So that it can be easy for the doctor to update with his patient</h3>              
                        </div>
                    </div><!--/.col-md-6-->
					
					<div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="feature-wrap">
							<center>	
								<i class="fa fa-user-md (doctor)"></i>
								<h2>Doctor Directory</h2>
							</center>	
							<h3>Speciality experienced and prominent doctors in the country , providing services space , time , cost a lot more information here . Through this service, we can easily give you a doctor's serials .</h3>
						</div>
					</div><!--/.col-md-6-->
					

                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
							<center>
								<i class="fa fa-hospital-o"></i>
								<h2>Hospital Directory</h2>
							</center>
                            <h3>The government approved a renowned hospital and improved quality of service address , doctor , patient viewing time, bed , pathological tests in various subjects including costs and find the information here . The bed and cabin bookings online , pathological tests , the doctor can be a serial for the meeting from the app </h3>
                        </div>
                    </div><!--/.col-md-6-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
@stop