<?php $active="login"; ?>
@extends('layouts.dashboard')
@section('content') 
<section id="login">

    <div class="container">



        <form class="form-horizontal" role="form" method="POST" action="{{ route('resetPost',['token' => $token]) }}">


        <table class="table" style="width: 50%; margin: 0 auto;">

            @if(count($errors)>0)
            <tr>
                <td colspan="2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </td>
            </tr>
            @endif

            <tr>
                <td colspan="2">
                    <h1 class="well text-center" style="color: red;">Send Password Reset Link</h1>
                </td>
            </tr>
            <tr>
                <td>Enter your Email</td>
                <td>{!! Form::email("email") !!}</td>
            </tr>

            <tr>
                <td>Enter your Password</td>
                <td>{!! Form::password("password") !!}</td>
            </tr>
            <tr>
                <td>Confirm your Password</td>
                <td>{!! Form::password("password_confirmation") !!}</td>
            </tr>
            <tr>
                <td colspan="2">
                    {!! Form::submit('Submit',array('class' => 'btn')) !!}
                </td>
            </tr>

            <tr>
                <td>
                    <input type="hidden" value="{{ Session::token() }}" name="_token"></input>
                </td>
            </tr>
        </table>
        {!!Form::close()!!}
</section>

@stop