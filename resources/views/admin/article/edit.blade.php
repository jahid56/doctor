<?php $active="profile"; ?>
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
        <li class="active">User profile</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('update') }}" role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') ? Request::old('name') : isset($doctor) ? $doctor->name : '' }}">
                </div>
                <div class="form-group">
                  <label for="institute">Institute Name</label>
                  <input type="text" class="form-control" name="institute" id="institute" {{ $errors->has('institute') ? 'class=has-error' : '' }} value="{{ Request::old('institute') ? Request::old('institute') : isset($doctor) ? $doctor->institute : '' }}">
                </div>

                <div class="form-group">
                  <label for="education">Degree</label>
                  <input type="text" class="form-control" name="education" id="education" {{ $errors->has('education') ? 'class=has-error' : '' }} value="{{ Request::old('education') ? Request::old('education') : isset($doctor) ? $doctor->education : '' }}">
                </div>

                <div class="form-group">
                  <label for="specialty">Specialty</label>
                  <input type="text" class="form-control" name="specialty" id="specialty" {{ $errors->has('specialty') ? 'class=has-error' : '' }} value="{{ Request::old('specialty') ? Request::old('specialty') : isset($doctor) ? $doctor->specialty : '' }}">
                </div>

                <div class="form-group">
                  <label for="phone">Mobile No.</label>
                  <input type="number" class="form-control" name="phone" id="phone" {{ $errors->has('phone') ? 'class=has-error' : '' }} value="{{ Request::old('phone') ? Request::old('phone') : isset($doctor) ? $doctor->phone : '' }}">
                </div>

                <div class="form-group">
                  <label for="time">Visiting Time</label>
                  <input type="text" class="form-control" name="time" id="time" {{ $errors->has('time') ? 'class=has-error' : '' }} value="{{ Request::old('time') ? Request::old('time') : isset($doctor) ? $doctor->time : '' }}">
                </div>

                <div class="form-group">
                  <label for="fee">Fee</label>
                  <input type="number" class="form-control" name="fee" id="fee" {{ $errors->has('fee') ? 'class=has-error' : '' }} value="{{ Request::old('fee') ? Request::old('fee') : isset($doctor) ? $doctor->fee : '' }}">
                </div>

                <div class="form-group">
                <label for="division">Division</label>
                

                  <select name="division_id">
                  @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name}}</option>
                    @endforeach
                  </select>
                   
                </div>

                <div class="form-group">
                <label for="district">District</label>
                

                  <select name="district_id">
                  @foreach($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name}}</option>
                    @endforeach
                  </select>
                   
                </div>

                <div class="form-group">
                <label for="dcategory">Category</label>
                

                  <select name="dcategory_id">
                  @foreach($dcategories as $dcategory)
                    <option value="{{ $dcategory->id }}">{{ $dcategory->name}}</option>
                    @endforeach
                  </select>
                   
                </div>

                <div class="form-group">
                  <label for="image">Chose the picture</label>
                  <input type="file" class="form-control" name="image" id="image" {{ $errors->has('image') ? 'class=has-error' : '' }} value="{{ Request::old('image') ? Request::old('image') : isset($photo) ? $photo->image : '' }}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <input type="hidden" name="id" value="{{ $doctor->id }}">
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection    

