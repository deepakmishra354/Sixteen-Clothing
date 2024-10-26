<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mainpagemodel;
use Illuminate\Http\Request;

class mainfrontendcontroller extends Controller
{
    //
    public function main (){
        $data = mainpagemodel::all();
        return view('frontend.pages.main',compact('data'));
    }
}
