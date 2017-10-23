
@extends('layout.admin_master')
@section('content')

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SCHOOL ACADEMIC YEAR</h2>
                            <ul class="header-dropdown m-r--5">
                                    <a href="{{url('school_year_create')}}" class="dropdown-toggle btn btn-info">New Add</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>School Year</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>School Year</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                     </tr>
                                </tfoot>
                                <tbody>
                                @foreach($school_year_list as $school_year)
                                    <tr>
                                        <td>{{$school_year->title}}</td>
                                        <td>
                                             @if($school_year->status==1)
                                            {!! Form::open(['url' =>['school_year_status',$school_year->id],'method' => 'post','files' => true]) !!}
                                                <input type="hidden" name="status" value="0">
                                                <button class="btn btn-danger waves-effect" type="submit" name="inacitve" ><i class="material-icons">highlight_off</i>Inactive</button>

                                            {!! Form::close() !!}
                                             @else
                                             {!! Form::open(['url' =>['school_year_status',$school_year->id],'method' => 'post']) !!}
                                                <input type="hidden" name="status" value="1">
                                                <button class="btn btn-success waves-effect" type="submit" name="active" ><i class="material-icons">done</i>Active</button>
                                             {!! Form::close() !!}
                                             @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary waves-effect" href=" {{url('school_year_edit')}}/{{$school_year->id}}"> <i class="material-icons">edit</i> Edit</a>
                                            <button class="schoolYearDelete btn btn-danger btn-sm waves-effect" type="submit" data-item-id="{{$school_year->id}}"> <i class="material-icons">delete</i> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            <!--- Swite message show  delete form main category by obydul date:28-7-16-->
            <script>
                $('button.schoolYearDelete').click(function() {
                    var itemId = $(this).attr("data-item-id");
                    schoolYearDelete(itemId);
                });
                function schoolYearDelete(itemId) {
                    swal({
                        title: "Are you sure?",
                        text: "Are you sure that you want to delete this Item ?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonText: "Yes, delete it!",
                        confirmButtonColor: "#ec6c62"
                    }, function() {
                        $.ajax({
                            method: "GET",
                            url: "{{URL::to('/')}}/school_year_delete/" + itemId,
                            type: "DELETE"
                        })
                            .done(function(data) {
                                swal("Deleted!", "Your item was successfully deleted!", "success");
                                location.reload();
                            })
                            .error(function(data) {
                                swal("Oops", "We couldn't connect to the server!", "error");
                                location.reload();
                            });
                    });
                }
            </script>
@endsection