<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InserviceRecord;
use App\Models\Infamily;
use App\Models\ExService;
use App\Models\Exfamily;


class SearchRecordsController extends Controller
{
    public function search(){
       
      $search_text=$_GET['searchrecord'];
    //    $records = 
       
       
    //     return view('index');

    $option=$_GET['category'];
        if($option == 'inservice'){
            $records=InserviceRecord::where('record_no',$search_text)->orWhere('comp_code',$search_text)->get();
            return view('searchresult',compact('records'));
        }elseif($option == 'infamily'){
            $records=Infamily::where('record_no',$search_text)->orWhere('comp_code',$search_text)->get();
            return view('searchresult',compact('records'));
        }elseif($option == 'exservice'){
            $records=ExService::where('record_no',$search_text)->get();
            return view('searchresult',compact('records'));
        }elseif($option == 'exfamily'){
            $records=Exfamily::where('record_no',$search_text)->get();
            return view('searchresult',compact('records'));
        }else{
            $records= InserviceRecord::where('record_no',$search_text)->orWhere('comp_code',$search_text)->get();
            if($records->isEmpty()){
                $records=Infamily::where('record_no',$search_text)->orWhere('comp_code',$search_text)->get();
                if($records->isEmpty()){
                    $records=ExService::where('record_no',$search_text)->get();
                    if($records->isEmpty()){
                        $records=Exfamily::where('record_no',$search_text)->get();
                    }
                }
            }
            
            return view('searchresult',compact('records')); 
        }
    }
}
