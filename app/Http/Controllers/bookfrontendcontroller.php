<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookmodel;
use Illuminate\Http\Request;

class bookfrontendcontroller extends Controller
{
    //
    public function index (){
        $data = bookmodel::paginate(3);
        return view('frontend.pages.book',compact('data'));
    }
}
