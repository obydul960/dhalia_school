<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\School_Model;
use Session;
use File;

class School_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_info = School_Model::get();
        return view('school.list',compact('school_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.add');
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
            'email'   => 'required',
            'address'   => 'required|min:4|max:30',
            'phone'   => 'required',
            'student_card_prefix'   => 'required',
            'student_card_background'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
        if ($validator->fails()) {
            Session::flash('error', 'Request Failure');
            return redirect::to("schools/create");
        } else {
            $school= new School_Model();
            $school->title = $request->get('title');
            $school->email = $request->get('email');
            $school->address = $request->get('address');
            $school->phone = $request->get('phone');
            $school->student_card_prefix = $request->get('student_card_prefix');


            $image = $request->file('student_card_background');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/student_card');
            $image->move($destinationPath, $imageName);

            $school->student_card_background = $imageName;
            $school->save();
            Session::flash('success', 'Successfully created Roles!');
            return redirect::to('schools');
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
        $school = School_Model::where('id',$id)->first();
        return view('school.edit',compact('school'));
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
            'email'   => 'required',
            'address'   => 'required|min:4|max:30',
            'phone'   => 'required',
            'student_card_prefix'   => 'required',
            'student_card_background'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'school Already Exists');
            return Redirect::to('schools/' . $id . '/edit');
        } else {
            // store
            $school = School_Model::find($id);
            if(Input::hasFile('student_card_background')){
                $school->title = $request->get('title');
                $school->email = $request->get('email');
                $school->address = $request->get('address');
                $school->phone = $request->get('phone');
                $school->student_card_prefix = $request->get('student_card_prefix');
                if(Input::hasFile('student_card_background')){
                    $old_image = $school->student_card_background;
                    unlink('uploads/student_card/'.$old_image);
                }
                $image = $request->file('student_card_background');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/student_card');
                $image->move($destinationPath, $imageName);
                $school->student_card_background = $imageName;
                $school->save();

                // redirect
                Session::flash('success', 'Successfully updated role!');
                return Redirect::to('schools');
            }else{
                $school->title = $request->get('title');
                $school->email = $request->get('email');
                $school->address = $request->get('address');
                $school->phone = $request->get('phone');
                $school->student_card_prefix = $request->get('student_card_prefix');
                $school->save();
                // redirect
                Session::flash('success', 'Successfully updated role!');
                return Redirect::to('schools');
            }

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
        $school_delete = School_Model::where('id',$id)->first();
        if($school_delete->student_card_background !=null){
            $image = $school_delete->student_card_background;
            unlink('uploads/student_card/'.$image);
        }
        $delete = School_Model::where('id',$id)->delete();

        Session::flash('success', 'Successfully deleted the Roles!');
        return redirect::to('schools');
    }
}
