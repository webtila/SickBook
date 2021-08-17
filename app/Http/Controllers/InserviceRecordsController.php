<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InserviceRecord;

class InserviceRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inservice.index')
        ->with('inservicerecords',InserviceRecord::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inservice.create');
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
            'rank'=>'required',
            'pat_name'=>'required',
            'comp_code'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'mob_no'=>'required',
            'approved_in'=>'required',
            'unit'=>'required'

        ]);

       

        InserviceRecord::create([
            'record_no'=>$request->input('record_no'),
            'rank'=>$request->input('rank'),
            'pat_name'=>$request->input('pat_name'),
            'comp_code'=>$request->input('comp_code'),
            'dob'=>$request->input('dob'),
            'address'=>$request->input('address'),
            'mob_no'=>$request->input('mob_no'),
            'unit'=>$request->input('unit'),
            'approved_in'=>$request->input('approved_in'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/inservice')->with('message','Record Added');
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
        return view('inservice.edit')
        ->with('inservicerecord',InserviceRecord::where('id',$id)->first());
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
            'rank'=>'required',
            'pat_name'=>'required',
            'comp_code'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'mob_no'=>'required',
            'approved_in'=>'required',
            'unit'=>'required'

        ]);
        InserviceRecord::where('id',$id)
        ->update([
            'record_no'=>$request->input('record_no'),
            'rank'=>$request->input('rank'),
            'pat_name'=>$request->input('pat_name'),
            'comp_code'=>$request->input('comp_code'),
            'dob'=>$request->input('dob'),
            'address'=>$request->input('address'),
            'mob_no'=>$request->input('mob_no'),
            'approved_in'=>$request->input('approved_in'),
            'unit'=>$request->input('unit'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/inservice')
        ->with('message','Inservice Staff data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inservicerecord=InserviceRecord::where('id',$id);
        $inservicerecord->delete();
        return redirect('/inservice')
        ->with('message','Inservice Record has been deleted');
    }
}
