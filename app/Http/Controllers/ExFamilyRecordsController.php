<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exfamily;

class ExFamilyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exfamily.index')
        ->with('exfamilyrecords',ExFamily::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exfamily.create');
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
            'ctz_no'=>'required',
            'approved_in'=>'required',
            'mob_no'=>'required',
            'rel'=>'required',
            'rank'=>'required',
            'ex_staff_name'=>'required',
            'pension'=>'required',
            'book_expiry'=>'required',
        ]);
        Exfamily::create([
            'record_no'=>$request->input('record_no'),
            'pat_name'=>$request->input('pat_name'),
            'dob'=>$request->input('dob'),
            'ctz_no'=>$request->input('ctz_no'),
            'approved_in'=>$request->input('approved_in'),
            'mob_no'=>$request->input('mob_no'),
            'rel'=>$request->input('rel'),
            'rank'=>$request->input('rank'),
            'ex_staff_name'=>$request->input('ex_staff_name'),
            'pension'=>$request->input('pension'),
            'book_expiry'=>$request->input('book_expiry'),
            'user_id'=>auth()->user()->id

        ]);
        return redirect('/exfamily')->with('message','Exfamily Record has been added');
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
        return view('exfamily.edit')
        ->with('exfamilyrecord',Exfamily::where('id',$id)->first());
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
            'ctz_no'=>'required',
            'approved_in'=>'required',
            'mob_no'=>'required',
            'rel'=>'required',
            'rank'=>'required',
            'ex_staff_name'=>'required',
            'pension'=>'required',
            'book_expiry'=>'required',
        ]);
        ExFamily::create([
            'record'=>$request->input('record_no'),
            'pat_name'=>$request->input('pat_name'),
            'dob'=>$request->input('dob'),
            'ctz_no'=>$request->input('ctz_no'),
            'approved_in'=>$request->input('approved_in'),
            'mob_no'=>$request->input('mob_no'),
            'rel'=>$request->input('rel'),
            'rank'=>$request->input('rank'),
            'ex_staff_name'=>$request->input('ex_staff_name'),
            'pension'=>$request->input('pension'),
            'book_expiry'=>$request->input('book_expiry'),
        ]);
        return redirect('/exfamily')->with('message','Exfamily record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exfamilyrecord=ExFamily::where('id',$id);
        $exfamilyrecord->delete();
        return redirect('/exfamily')
        ->with('message','Exfamily  Record has been deleted');
    }
}
