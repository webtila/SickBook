<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InserviceRecord;
use App\Models\Infamily;
use App\Models\ExService;
use App\Models\ExFamily;
use DB;


class PagesController extends Controller
{
    Public function index(){
    $ins_count=DB::table('inservicerecords')->count();
    $inf_count=DB::table('infamilyrecords')->count();
    $exs_count=DB::table('exservicerecords')->count();
    $exf_count=DB::table('exfamilyrecords')->count();
        return view('index',compact('ins_count','inf_count','exs_count','exf_count'));
        
    }
}
