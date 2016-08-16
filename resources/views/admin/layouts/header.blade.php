<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin Panel</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="admin/user.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ $profile->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="admin/user.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ $profile->name }}
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer" <?php if($active == 'profile') {echo 'class="active"';} ?>>
                <div class="pull-left">
                  <a href="{!! URL::route('profile') !!}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $profile->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($active == 'dashboard') {echo 'class="active"';} ?>>
          <a href="{!! URL::route('admin') !!}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>
     
        <li <?php if($active == 'profile') {echo 'class="active"';} ?>>
          <a href="{!! URL::route('profile') !!}">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-users"></i> <span>Patient Details</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Appointment List</span>
          </a>
        </li>
        <li <?php if($active == 'mail') {echo 'class="active"';} ?>>
          <a href="{!! URL::route('mail') !!}">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
          </a>
        </li>
		
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>