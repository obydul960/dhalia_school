<?php
/**
 * Created by PhpStorm.
 * User: PACER 24
 * Date: 10/24/2017
 * Time: 5:27 PM
 */
?>

@extends('layout.admin_master')
@section('content')

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>School Role Management</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{url('assin_permission/create')}}" class="dropdown-toggle btn btn-info">New Add</a>
                    </ul>
                </div>
                <div class="body">
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>Role Name</th>
                                <th>Permission Name</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Role Name</th>
                                <th>Permission Name</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($permissionList as $permission)
                                <tr>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->permission_name}}</td>
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
    {{--<script>--}}
    {{--$('button.rolesDelete').click(function() {--}}
    {{--var itemId = $(this).attr("data-item-id");--}}
    {{--rolesDelete(itemId);--}}
    {{--});--}}
    {{--function rolesDelete(itemId) {--}}
    {{--swal({--}}
    {{--title: "Are you sure?",--}}
    {{--text: "Are you sure that you want to delete this Item ?",--}}
    {{--type: "warning",--}}
    {{--showCancelButton: true,--}}
    {{--closeOnConfirm: false,--}}
    {{--confirmButtonText: "Yes, delete it!",--}}
    {{--confirmButtonColor: "#ec6c62"--}}
    {{--}, function() {--}}
    {{--$.ajax({--}}
    {{--method: "DELETE",--}}
    {{--url: "{{URL::to('/')}}/roles/" + itemId+"destroy",--}}
    {{--type: "DELETE"--}}
    {{--})--}}
    {{--.done(function(data) {--}}
    {{--swal("Deleted!", "Your item was successfully deleted!", "success");--}}
    {{--location.reload();--}}
    {{--})--}}
    {{--.error(function(data) {--}}
    {{--swal("Oops", "We couldn't connect to the server!", "error");--}}
    {{--location.reload();--}}
    {{--});--}}
    {{--});--}}
    {{--}--}}
    {{--</script>--}}

    <script>
        //ajax delete request
        $(document).ready(function(){
            $(".btn-danger").click(function(){
                alert('are you sure?');
                var tr = $(this).closest('tr');
                var id = $(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })
                $.aja
                {
                    url: '{{ url('roles') }}' + '/' + id,
                        type: 'DELETE',
                    data: {id: id },
                    success: function (data)
                    {
                        tr.fadeOut(1000, function(){
                            $(this).remove();
                        });
                    },
                });
        });
        });
    </script>
@endsection