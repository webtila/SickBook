<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchRecordsController extends Controller
{
    public function search(Request $request){
       
      $search_text=$_GET['query'];
    //    $records = 
       
       
    //     return view('index');

    $option=$request->category;
        if($option == 'inservice'){
            // $records=InserviceRecord::where('record_no')->get();
            return view('index')
        ->with('inservicerecords',InserviceRecord::where('record_no',$request->searchrecord)->get());
        }
    }
}
