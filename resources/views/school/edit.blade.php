<?php
/**
 * Created by PhpStorm.
 * User: PACER 24
 * Date: 10/24/2017
 * Time: 6:21 PM
 */
?>

@extends('layout.admin_master')
@section('content')

    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>School Roles Edit Form</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="{{ url('schools')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    {{ Form::model($school, array('route' => array('schools.update', $school->id), 'method' => 'PATCH','files' => true)) }}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$school->title}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" value="{{$school->email}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$school->address}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" value="{{$school->phone}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Student Card Prefix</label>
                            <input type="text" class="form-control" name="student_card_prefix" value="{{$school->student_card_prefix}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Student Card Background</label>
                            {{--<img src="uploads/student_card/{{$school->student_card_background}}" height="50px" width="50px">--}}
                            <input type="file" class="form-control" name="student_card_background" value="">
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
