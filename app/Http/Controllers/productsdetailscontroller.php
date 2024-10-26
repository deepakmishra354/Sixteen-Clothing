<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mainpagemodel;
use Illuminate\Http\Request;

class productsdetailscontroller extends Controller
{
    //
    public function index(Request $request){
        $data = mainpagemodel::where("id", $request->id)->get(); 
 
        return view('frontend.pages.details',compact('data')); 
       }
}
