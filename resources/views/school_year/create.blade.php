
@extends('layout.admin_master')
@section('content')

<!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>School Year Create Form</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="{{ url('school_year_list')}}" class="btn btn-primary"><i class="material-icons" style="color: white;">settings_backup_restore</i> Back
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                             {!! Form::open(['url' => 'school_year_store','class' => 'form_advanced_validation','method' => 'post','files' => true]) !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" maxlength="30" minlength="4" required>
                                        <label class="form-label">School Year</label>
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