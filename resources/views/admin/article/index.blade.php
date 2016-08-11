@extends('admin.dashboard')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Personal</a></li>
              <li><a href="#timeline" data-toggle="tab">Education</a></li>
              <li><a href="#settings" data-toggle="tab">Employment</a></li>
              <li><button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Update</button></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <p>Name : </p>
                        </span>
                    
                  </div>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                        <span class="username">
                          <p>Father's Name : </p>
                        </span>
                  </div>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                        <span class="username">
                          <p>Address : </p>
                        </span>
                  </div>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                        <span class="username">
                          <p>Email : </p>
                        </span>
                  </div>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                        <span class="username">
                          <p>Mobile No : </p>
                        </span>
                  </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline item -->
                  <li>

                    <div class="timeline-item">

                      <div class="timeline-body">
                            <span class="username">
                              <p>Institute Name : </p>
                            </span>
                      </div>
                    </div>
                  </li>

                  <li>

                    <div class="timeline-item">

                      <div class="timeline-body">
                            <span class="username">
                              <p>Degree : </p>
                            </span>
                      </div>
                    </div>
                  </li>

                  <li>

                    <div class="timeline-item">

                      <div class="timeline-body">
                            <span class="username">
                              <p>Specialty : </p>
                            </span>
                      </div>
                    </div>
                  </li>

                  <li>

                    <div class="timeline-item">

                      <div class="timeline-body">
                            <span class="username">
                              <p>Year Of Passing : </p>
                            </span>
                      </div>
                    </div>
                  </li>
                  
                  <!-- END timeline item -->
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">

                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <p>Hospital Name : </p>
                        </span>
                    
                  </div>
                </div>

                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <p>Time : </p>
                        </span>
                    
                  </div>
                </div>
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop