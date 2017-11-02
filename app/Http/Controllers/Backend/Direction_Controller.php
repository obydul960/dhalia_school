<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Direction_Model;
use Session;
use DB;

class Direction_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direction_list = Direction_Model::get();
        return view('directions.list',compact('direction_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directions.add');
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
            'title'   => 'required|min:4|max:30',
            'duration'   => 'required|min:2|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Request Failure');
            return redirect::to("direction/create");
        } else {
            $direction= new Direction_Model();
            $direction->title = $request->get('title');
            $direction->duration = $request->get('duration');
            $direction->save();
            Session::flash('success', 'Successfully created Roles!');
            return redirect::to('direction');
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
        $duration = Direction_Model::where('id',$id)->first();
        return view('directions.edit',compact('duration'));
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
            'title'   => 'required|min:4|max:30',
            'duration'   => 'required|min:2|max:30'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Duration Already Exists');
            return Redirect::to('direction/' . $id . '/edit');
        } else {
            // store
            $duration = Direction_Model::find($id);
            $duration->title = $request->get('title');
            $duration->duration = $request->get('duration');
            $duration->save();
            Session::flash('success', 'Successfully updated Duration!');
            return Redirect::to('direction');
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
        $duration_delete = Direction_Model::where('id',$id)->delete();
        Session::flash('success', 'Successfully deleted the Duration!');
        return redirect::to('direction');
    }
}
