<?php

namespace App\Http\Controllers;

use App\StaticAc;
use Illuminate\Http\Request;

use App\Http\Requests;

class StaticAcController extends Controller
{
    public function GetAcList(Request $request){
        return $this->GetAcStaticInfo($request);
    }

    public function GetIndex(Request $request){
        return view('dashboard')->with('value',['ac_count'=>StaticAc::count(),'ap_count'=>500,'user_count'=>2000]);
    }

    private function GetAcStaticInfo(Request $request){
        $Ac = StaticAc::all();
        return view('staticAc')->with('value',['data'=>$Ac]);
        //return $Ac;
    }
}
