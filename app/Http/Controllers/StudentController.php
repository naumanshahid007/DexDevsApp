<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Student;
use App\Course;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $courses = Course::all();
        return view('addstudent',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storestudent(Request $request)
    {
        
        $students = new Student;
        $students->student_name = input::get('stname');
        $students->student_phone = input::get('stnumber');
        $students->student_gardian = input::get('gname');
        $students->student_gardian_phone = input::get('gnumber');
        $students->student_gender = input::get('gender');
        $students->student_email = input::get('aemail');
        $students->student_address = input::get('address');
        $students->course_name = input::get('cname');
        $students->course_duration = input::get('cname');
        $students->course_fee = input::get('cfee');
        $students->course_instructer = input::get('cteacher');
        $students->course_start_month = input::get('cstartmonth');
        $students->course_end_month = input::get('cendmonth');
        $students->course_start_date = input::get('cstartdate');
        $students->course_end_date = input::get('cendtdate');
        $students->student_reg_fee = input::get('regfee');
        $students->student_total_fee = input::get('totalfee');
        $students->date = input::get('ddate');

        
        


        $students->save();
     return redirect('/addstudent')->with('info','Data Saved Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = Student::all();
        return view('allstudent',['students'=>$students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
