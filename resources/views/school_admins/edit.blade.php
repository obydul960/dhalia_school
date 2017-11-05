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
                            <a href="{{ url('roles')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body">

                    {!! Form::open(['route' =>'roles.store','class' => 'form_advanced_validation','method' => 'POST','files' => true]) !!}
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'First Name',['class'=>'form-label']) }}
                            {{ Form::text('first_name', Input::old('first_name'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'2','required']) }}
                        </div>
                        <div class="help-info">Min. 2, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Last Name',['class'=>'form-label']) }}
                            {{ Form::text('last_name', Input::old('last_name'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'E-mail',['class'=>'form-label']) }}
                            {{ Form::email('email', Input::old('email'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
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
                            {{ Form::label('name', 'Mobile',['class'=>'form-label']) }}
                            {{ Form::number('mobile', Input::old('last_name'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="gender" id="male" value="0" class="with-gap">
                        <label for="male">Male</label>

                        <input type="radio" name="gender" id="female" value="1" class="with-gap">
                        <label for="female" class="m-l-20">Female</label>
                    </div>




                    <div class="form-group form-float">
                        <div class="form-line">
                            {{ Form::label('name', 'Birth Date',['class'=>'form-label']) }}
                            {{ Form::date('birth_date', Input::old('birth_date'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select class="form-control show-tick" name="user_id">
                                <option value="">-- Please Select School --</option>
                                <option>A</option>
                                <option>B</option>
                                {{--@foreach($userList as $user)--}}
                                {{--<option value="{{$user->id}}">{{$user->first_name.' '.$user->last_name}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="help-info">Min. 6, Max. 30 characters</div>
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


