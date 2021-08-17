<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infamily;
class InfamilyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('infamily.index')
        ->with('infamilyrecords',Infamily::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infamily.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'record_no'=>'required',
            'pat_name'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'mob_no'=>'required',
            'ctz_no'=>'required',
            'comp_code'=>'required',
            'rank'=>'required',
            'ins_staff_name'=>'required',
            'rel'=>'required',
            'unit'=>'required',
            'approved_in'=>'required',


        ]);
        Infamily::create([
            'record_no'=>$request->input('record_no'),
            'pat_name'=>$request->input('pat_name'),
            'dob'=>$request->input('dob'),
            'address'=>$request->input('address'),
            'mob_no'=>$request->input('mob_no'),
            'ctz_no'=>$request->input('ctz_no'),
            'comp_code'=>$request->input('comp_code'),
            'rank'=>$request->input('rank'),
            'ins_staff_name'=>$request->input('ins_staff_name'),
            'rel'=>$request->input('rel'),
            'unit'=>$request->input('unit'),
            'approved_in'=>$request->input('approved_in'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/infamily')->with('message','Infamily Record Added Successfully');
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
        return view('infamily.edit')
        ->with('infamilyrecord',Infamily::where('id',$id)->first());
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
        $request->validate([
            'record_no'=>'required',
            'pat_name'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'mob_no'=>'required',
            'comp_code'=>'required',
            'rank'=>'required',
            'ins_staff_name'=>'required',
            'rel'=>'required',
            'unit'=>'required',
            'approved_in'=>'required'
        ]);
        Infamily::where('id',$id)
        ->update([
            'record_no'=>$request->input('record_no'),
            'pat_name'=>$request->input('pat_name'),
            'dob'=>$request->input('dob'),
            'address'=>$request->input('address'),
            'mob_no'=>$request->input('mob_no'),
            'comp_code'=>$request->input('comp_code'),
            'rank'=>$request->input('rank'),
            'ins_staff_name'=>$request->input('ins_staff_name'),
            'rel'=>$request->input('rel'),
            'unit'=>$request->input('unit'),
            'approved_in'=>$request->input('approved_in'),

        ]);
        return redirect ('/infamily')
        ->with('message','Infamily Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infamilyrecord=Infamily::where('id',$id);
        $infamilyrecord->delete();
        return redirect('/infamily')
        ->with('message','Infamily  Record has been deleted');
    }
}
