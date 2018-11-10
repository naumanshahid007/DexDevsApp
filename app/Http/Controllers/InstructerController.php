<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructer;
use Illuminate\Support\Facades\Input;

class InstructerController extends Controller
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
        return view('addteacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Instructers = new Instructer;
        $Instructers->name = input::get('name');
        $Instructers->phone = input::get('phone');
        $Instructers->email = input::get('email');
        $Instructers->cnic = input::get('cnic');
        $Instructers->dob = input::get('dob');
        $Instructers->qualification = input::get('qualification');
        $Instructers->address = input::get('address');
        $Instructers->save();

        // return view('addteacher');
        return redirect('/add')->with('info','Data Saved Successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $instructers = Instructer::all();
        return view('allteacher',['instructers'=>$instructers]);
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
