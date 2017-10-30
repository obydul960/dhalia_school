<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Permission;
use App\Models\Roles;
use App\User;
use Session;
use DB;

class Permission_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissionList = Permission::get();
        return view('permission.list',compact('permissionList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required|min:4|max:30',
            'display_name'   => 'required|min:4|max:30',
            'description'   => 'required|min:4|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Request Failure');
            return redirect::to("permission/create");
        } else {
            $role= new Permission();
            $role->name = $request->get('name');
            $role->display_name = $request->get('display_name');
            $role->description = $request->get('description');
            $role->save();
            Session::flash('success', 'Successfully created Roles!');
            return redirect::to('permission');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::where('id',$id)->first();
        return view('permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required|min:4|max:30',
            'display_name'   => 'required|min:4|max:30',
            'description'   => 'required|min:4|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Academic Year Already Exists');
            return Redirect::to('permission/' . $id . '/edit');
        } else {
            // store
            $permission = Permission::find($id);
            $permission->name = $request->get('name');
            $permission->display_name = $request->get('display_name');
            $permission->description = $request->get('description');
            $permission->save();

            // redirect
            Session::flash('success', 'Successfully updated role!');
            return Redirect::to('permission');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission_delete = Permission::where('id',$id)->delete();
        Session::flash('success', 'Successfully deleted the Roles!');
        return redirect::to('permission');
    }
}
