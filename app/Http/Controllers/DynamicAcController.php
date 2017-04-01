<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DynamicAcController extends Controller
{
    static public function GetAcDetail($id){
        //$AcDetail =
        return view('dynamicAc');
    }
}
