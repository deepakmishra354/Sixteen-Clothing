<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mainpagemodel;
use Illuminate\Http\Request;

class ourproductscontroller extends Controller
{
    //

    public function our_products(){
        $data = mainpagemodel::paginate(6);

        return view('frontend.pages.our-product',compact('data'));

    }
}
