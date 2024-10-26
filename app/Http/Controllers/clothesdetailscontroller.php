<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clothemodel;
use Illuminate\Http\Request;

class clothesdetailscontroller extends Controller
{
    //
    public function index(Request $request){
        $data = clothemodel::where("id", $request->id)->get(); 

        return view('frontend.pages.details',compact('data')); 
       }
}
