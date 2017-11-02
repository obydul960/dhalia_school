
@extends('layout.admin_master')
{{--@section('content')--}}

    {{--<!-- Advanced Validation -->--}}
    {{--<div class="row clearfix">--}}
        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
            {{--<div class="card">--}}
                {{--<div class="header">--}}
                    {{--<h2>School Role Create Form</h2>--}}
                    {{--<ul class="header-dropdown m-r--5">--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="{{ url('roles')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="body">--}}

                    {{--{!! Form::open(['route' =>'roles.store','class' => 'form_advanced_validation','method' => 'POST','files' => true]) !!}--}}
                    {{--<div class="form-group form-float">--}}
                        {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<select class="form-control show-tick" name="school_year_id">--}}
                                    {{--<option value="">-- Please Select User --</option>--}}
                                    {{--@foreach($school_year as $year)--}}
                                        {{--<option value="{{$year->id}}">{{$year->title}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group form-float">--}}
                        {{--<div class="form-line">--}}
                            {{--{{ Form::label('name', 'Title Name',['class'=>'form-label']) }}--}}
                            {{--{{ Form::text('title', Input::old('title'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}--}}
                        {{--</div>--}}
                        {{--<div class="help-info">Min. 4, Max. 30 characters</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group form-float">--}}
                        {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="form-line">--}}
                                        {{--<input type="text" class="datepicker form-control" placeholder="Please choose a date...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="form-line">--}}
                                        {{--<input type="text" class="timepicker form-control" placeholder="Please choose a time...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="form-line">--}}
                                        {{--<input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-line">--}}
                            {{--{{ Form::label('name', 'Start Date',['class'=>'form-label']) }}--}}
                            {{--{{ Form::text('description', Input::old('description'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}--}}
                        {{--</div>--}}
                        {{--<div class="help-info">Min. 4, Max. 30 characters</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group form-float">--}}
                        {{--<div class="form-line">--}}
                            {{--{{ Form::label('name', 'End Date',['class'=>'form-label']) }}--}}
                            {{--{{ Form::text('description', Input::old('description'), ['class' => 'form-control','maxlength'=>'30','minlength'=>'4','required']) }}--}}
                        {{--</div>--}}
                        {{--<div class="help-info">Min. 4, Max. 30 characters</div>--}}
                    {{--</div>--}}

                    {{--<button class="btn btn-info waves-effect" type="submit"><i class="material-icons">cancel</i> Cancle</button>--}}
                    {{--<button class="btn btn-primary waves-effect" type="submit"> <i class="material-icons">check_circle</i> SUBMIT</button>--}}

                    {{--{!! Form::close() !!}--}}
                {{--<!--DateTime Picker -->--}}
                    {{--<div class="row clearfix">--}}
                        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                            {{--<div class="card">--}}
                                {{--<div class="header">--}}
                                    {{--<h2>--}}
                                        {{--DATETIME PICKER--}}
                                        {{--<small>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></small>--}}
                                    {{--</h2>--}}
                                    {{--<ul class="header-dropdown m-r--5">--}}
                                        {{--<li class="dropdown">--}}
                                            {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
                                                {{--<i class="material-icons">more_vert</i>--}}
                                            {{--</a>--}}
                                            {{--<ul class="dropdown-menu pull-right">--}}
                                                {{--<li><a href="javascript:void(0);">Action</a></li>--}}
                                                {{--<li><a href="javascript:void(0);">Another action</a></li>--}}
                                                {{--<li><a href="javascript:void(0);">Something else here</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="body">--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<div class="form-line">--}}
                                                    {{--<input type="text" class="datepicker form-control" placeholder="Please choose a date...">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<div class="form-line">--}}
                                                    {{--<input type="text" class="timepicker form-control" placeholder="Please choose a time...">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<div class="form-line">--}}
                                                    {{--<input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--#END# DateTime Picker -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- #END# Advanced Validation -->--}}



{{--@endsection--}}

@section('content')


    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{URL::asset('admin_assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="{{URL::asset('admin_assets/plugins/waitme/waitMe.css')}}" rel="stylesheet" />


        <!--DateTime Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATETIME PICKER
                            <small>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="timepicker form-control" placeholder="Please choose a time...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# DateTime Picker -->
    </div>
</section>



<!-- Autosize Plugin Js -->
<script src="{{URL::asset('admin_assets/plugins/autosize/autosize.js')}}"></script>

<!-- Moment Plugin Js -->
<script src="{{URL::asset('admin_assets/plugins/momentjs/moment.js')}}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{URL::asset('admin_assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>


<script src="{{URL::asset('admin_assets/js/pages/forms/basic-form-elements.js')}}"></script>


@endsection