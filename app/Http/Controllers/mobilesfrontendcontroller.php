<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mobilesmodel;
use Illuminate\Http\Request;

class mobilesfrontendcontroller extends Controller
{
    //
    public function index (){
        $data = mobilesmodel::paginate(3);
        return view('frontend.pages.mobile',compact('data'));
    }
}
