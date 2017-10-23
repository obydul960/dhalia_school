<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Model\School_Year;
use Session;

class School_Year_Controller extends Controller
{
    //show school year list
    public function show_list(){
        $school_year_list = School_Year::get();
    	return view('school_year.list',compact('school_year_list'));
    }
    // school year create from
    public function create_form(){
    	return view('school_year.create');
    }
    // inserted school year 
    public function store(Request $request){
            $validator = Validator::make($request->all(), [
                'title'   => 'required|min:4|max:30'
            ]);
            if ($validator->fails()) {
                Session::flash('error', 'Request Failure');
                return redirect::to("school_year_create");
            } else {
                $school_year= new School_Year();
                $school_year->title = $request->get('title');
                $school_year->save();
                Session::flash('success', 'Request Successful');
                return redirect::to('school_year_list');
            }

    }
    // Edit school year
    public function school_year_edit($id){
            $school_year_edit=School_Year::where('id',$id)->first();
            return view('school_year.edit',compact('school_year_edit'));
    }
    public function School_year_update(Request $request,$id){
            $title =$request->get('title');
            if($title!=null){
                $check=School_Year::where('title',$title)->count();
                //dd($check);
                if($check > 0){
                    Session::flash('error', 'Academic Year Already Exists');
                    return redirect::to('school_year_list');
                }
                else {
                    $update = School_Year::where('id',$id)->update([
                        'title' => $request->get('title')
                    ]);
                    Session::flash('success', 'Academic Year Successful Update');
                    return redirect::to('school_year_list');
                }
            }

    }

    // Academic year status update
    public function school_year_status(Request $request,$id){
        $check_value = $request->get('status');
        if($check_value==1){
            $check = School_Year::where('status',$check_value)->count();
            if($check > 0){
                Session::flash('error', 'Academic Year Already Exists');
                return redirect::to('school_year_list');
            }else{
                $update = School_Year::where('id',$id)->update([
                    'status' => $request->get('status')
                ]);
                Session::flash('success', 'Academic Year Successful Update');
                return redirect::to('school_year_list');
            }
        }else{
            $update = School_Year::where('id',$id)->update([
                'status' => $request->get('status')
            ]);
            Session::flash('success', 'Academic Year Successful Update');
            return redirect::to('school_year_list');
        }
    }
    // Delete school year..
    public function school_year_delete($id){
            $school_year_delete = School_Year::where('id',$id)->delete();
            Session::flash('success', 'Request Successful');
            return redirect::to('school_year_list');

    }
}
