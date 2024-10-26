<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clothemodel;
use Illuminate\Http\Request;

class clothefrontendcontroller extends Controller
{
    //
    public function index (){
        $data = clothemodel::paginate(3);
        return view('frontend.pages.clothes',compact('data'));
    }
}
