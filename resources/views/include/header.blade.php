<header id="header">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Search">
								<i class="fa fa-search"></i>
							</form>
					   </div>
				   </div>
				</div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->

	<nav class="navbar navbar-inverse" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! URL::route('home') !!}">{!! Html::image('images/logo.png','logo') !!}</a>
			</div>
			
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li <?php if($active == 'home') {echo 'class="active"';} ?>><a href="{!! URL::route('home') !!}">Home</a></li>
					
					<li <?php if($active == 'about_us') {echo 'class="active"';} ?>><a href="{!! URL::route('about_us') !!}">About Us</a></li>
					
					<li <?php if($active == 'hospital') {echo 'class="active"';} ?> class="dropdown" >
						<a  href="#" class="dropdown-toggle" data-toggle="dropdown">Hospitals <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							@foreach($divisions as $division)

								<li><a href="{!! URL::route('district', $division['id']) !!}">{{ $division['name'] }}</a></li>

							@endforeach	
							
						</ul>
					</li>
					
					<li <?php if($active == 'doctor') {echo 'class="active"';} ?> class="dropdown" >
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">

						@foreach($divisions as $division)
								<li><a href="{!! URL::route('districts',$division['id']) !!}">{{ $division->name }}</a></li>

							@endforeach	
							
						</ul>
					</li>
					
					<li <?php if($active == 'contact') {echo 'class="active"';} ?>><a href="{!! URL::route('contact') !!}">Contact Us</a></li>
					
					<li <?php if($active == 'login') {echo 'class="active"';} ?>><a href="{!! URL::route('login') !!}">Login</a></li> 
					
					<li <?php if($active == 'register') {echo 'class="active"';} ?>><a href="{!! URL::route('register') !!}">Sign Up</a></li> 							
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
	
</header><!--/header-->