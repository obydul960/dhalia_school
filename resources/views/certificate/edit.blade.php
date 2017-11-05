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
                            <a href="{{ url('roles')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    {{ Form::model($roles, array('route' => array('roles.update', $roles->id), 'method' => 'PATCH')) }}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Roles Name</label>
                            <input type="text" class="form-control" name="name" value="{{$roles->name}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Display Name</label>
                            <input type="text" class="form-control" name="display_name" value="{{$roles->display_name}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$roles->description}}" maxlength="30" minlength="4" required>
                        </div>
                        <div class="help-info">Min. 4, Max. 30 characters</div>
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
