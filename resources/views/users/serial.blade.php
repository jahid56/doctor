<?php $active="contact"; ?>
@extends('layouts.dashboard')
@section('content') 
<section id="contact-page">
    <div class="container">

    <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
       
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Drop Your Message</h3>
                    </div>
                    <form action="{{ route('serial.send') }}" method="post" id="contact-form">
                    <div class="panel-body">
                       
                        {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input class="form-control" name="email" id="email" value="{{ old('email') }}" type="email" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Mobile No *</label>
                                    <input class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}" type="number" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Date *</label>
                                    <input class="form-control" name="date" id="date" value="{{ old('date') }}" type="date" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Problem*</label>
                                    <textarea class="form-control" name="problem" id="problem" value="{{ old('problem') }}" type="text" required="required">
                                    </textarea>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Submit Serial</button>

                                <input type="hidden" value="{{Session::token() }}" name="_token"></input>

                            </fieldset>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop