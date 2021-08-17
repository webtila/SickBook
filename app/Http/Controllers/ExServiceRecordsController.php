<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExService;

class ExServiceRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exservice.index')
        ->with('exservicerecords',ExService::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exservice.create');
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
            'pension'=>'required',
            'ctz_no'=>'required',
            'dob'=>'required',
            'mob_no'=>'required',
            'approved_in'=>'required',
            'book_expiry'=>'required',


        ]);
        ExService::create([
            'record_no'=>$request->input('record_no'),
            'rank'=>$request->input('rank'),
            'pat_name'=>$request->input('pat_name'),
            'pension'=>$request->input('pension'),
            'ctz_no'=>$request->input('ctz_no'),
            'dob'=>$request->input('dob'),
            'mob_no'=>$request->input('mob_no'),
            'approved_in'=>$request->input('approved_in'),
            'book_expiry'=>$request->input('book_expiry'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/exservice')->with('message','Exservice Record Added Successfully');
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
        return view('exservice.edit')
        ->with('exservicerecord',ExService::where('id',$id)->first());
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
            'pension'=>'required',
            'ctz_no'=>'required',
            'dob'=>'required',
            'mob_no'=>'required',
            'approved_in'=>'required',
            'book_expiry'=>'required',

        ]);
        ExService::create([
            'record_no'=>$request->input('record_no'),
            'rank'=>$request->input('rank'),
            'pat_name'=>$request->input('pat_name'),
            'pension'=>$request->input('pension'),
            'ctz_no'=>$request->input('ctz_no'),
            'dob'=>$request->input('dob'),
            'mob_no'=>$request->input('mob_no'),
            'approved_in'=>$request->input('approved_in'),
            'book_expiry'=>$request->input('book_entry'),

        ]);
        return redirect('/exservice')->with('message','Exservice Record has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exservicerecord=ExService::where('id',$id);
        $exservicerecord->delete();
        return redirect('/exservice')
        ->with('message','Infamily  Record has been deleted');
    }
}
