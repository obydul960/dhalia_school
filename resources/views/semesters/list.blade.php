@extends('layout.admin_master')
@section('content')

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>School Role Management</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{url('semesters/create')}}" class="dropdown-toggle btn btn-info">New Add</a>
                    </ul>
                </div>
                <div class="body">
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            {{--@foreach($roles as $role)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$role->name}}</td>--}}
                                    {{--<td>{{$role->display_name}}</td>--}}
                                    {{--<td>{{$role->description}}</td>--}}
                                    {{--<td>--}}

                                        {{--{!! Form::open(['method' => 'DELETE','action' => ['roles/destroy', $role->id]]) !!}--}}
                                        {{--{{ Form::open(array('url' => 'roles/' . $role->id,'method' => 'DELETE', 'class' => 'pull-right')) }}--}}
                                        {{--{{ Form::model($role, array('route' => array('roles.destroy', $role->id), 'method' => 'DELETE')) }}--}}
                                        {{--<button type="button" class="btn btn-danger btn-small" id="{{$role->id}}">Delete</button>--}}
                                        {{--{!! Form::close() !!}--}}
                                        {{--<button class="rolesDelete btn btn-danger btn-sm waves-effect" type="button" data-item-id="{{$role->id}}"> <i class="material-icons">delete</i> Delete</button>--}}
                                        {{--{{ Form::open(array('url' => 'roles/' . $role->id, 'class' => 'pull-left')) }}--}}
                                        {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                                        {{--{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}--}}
                                        {{--{{ Form::close() }}--}}
                                        {{--<a class="btn btn-primary waves-effect" href="{{ URL::to('roles/' . $role->id . '/edit') }}" style="margin-left: 5px"> <i class="material-icons">edit</i> Edit</a>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
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