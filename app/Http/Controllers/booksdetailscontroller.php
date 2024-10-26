<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookmodel;
use Illuminate\Http\Request;

class booksdetailscontroller extends Controller
{
    //
    public function index(Request $request){
        $data = bookmodel::where("id", $request->id)->get(); 

        return view('frontend.pages.details',compact('data')); 
       }
}
