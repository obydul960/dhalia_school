<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Behavior_Model;
use Session;
use DB;

class Behavior_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $behavior_list = Behavior_Model::get();
        return view('behaviors.list',compact('behavior_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('behaviors.add');
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
            'title'   => 'required|min:4|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Request Failure');
            return redirect::to("behaviors/create");
        } else {
            $behavior= new Behavior_Model();
            $behavior->title = $request->get('title');
            $behavior->save();
            Session::flash('success', 'Successfully created Roles!');
            return redirect::to('behaviors');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $behavior = Behavior_Model::where('id',$id)->first();
        return view('behaviors.edit',compact('behavior'));
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
            'title'   => 'required|min:4|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Duration Already Exists');
            return Redirect::to('behaviors/' . $id . '/edit');
        } else {
            // store
            $behavior = Behavior_Model::find($id);
            $behavior->title = $request->get('title');
            $behavior->save();
            Session::flash('success', 'Successfully updated Duration!');
            return Redirect::to('behaviors');
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
        $behavior_delete = Behavior_Model::where('id',$id)->delete();
        Session::flash('success', 'Successfully deleted the Duration!');
        return redirect::to('behaviors');
    }
}
