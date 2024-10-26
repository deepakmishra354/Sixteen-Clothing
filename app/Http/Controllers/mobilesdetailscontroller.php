<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mobilesmodel;
use Illuminate\Http\Request;

class mobilesdetailscontroller extends Controller
{
    //

    public function index(Request $request){
        $data = mobilesmodel::where("id", $request->id)->get(); 

        return view('frontend.pages.details',compact('data')); 
       }
}
