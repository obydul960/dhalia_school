<?php
/**
 * Created by PhpStorm.
 * User: PACER 24
 * Date: 10/24/2017
 * Time: 5:26 PM
 */
?>

@extends('layout.admin_master')
@section('content')

    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>School Role Create Form</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="{{ url('schools')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body">

                    {!! Form::open(['route' =>'schools.store','class' => 'form_advanced_validation','method' => 'POST','files' => true]) !!}
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Title',['class'=>'form-label']) }}
                            {{ Form::text('title', Input::old('title'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'E-mail',['class'=>'form-label']) }}
                            {{ Form::email('email', Input::old('email'), ['class' => 'form-control','required']) }}
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Address',['class'=>'form-label']) }}
                            {{ Form::text('address', Input::old('address'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Phone',['class'=>'form-label']) }}
                            {{ Form::number('phone', Input::old('phone'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Student Card Prefix',['class'=>'form-label']) }}
                            {{ Form::text('student_card_prefix', Input::old('student_card_prefix'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Student Card Background',['class'=>'form-label']) }}
                            {{ Form::file('student_card_background', Input::old('student_card_background'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                    </div>

                    <button class="btn btn-info waves-effect" type="submit"><i class="material-icons">cancel</i> Cancle</button>
                    <button class="btn btn-primary waves-effect" type="submit"> <i class="material-icons">check_circle</i> SUBMIT</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Advanced Validation -->



@endsection


