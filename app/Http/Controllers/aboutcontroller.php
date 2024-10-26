<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\aboutadminmodel;
use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    //
    public function index(){
        $data = aboutadminmodel::all();
        return view('frontend.pages.about', compact('data'));
    }

        
}
