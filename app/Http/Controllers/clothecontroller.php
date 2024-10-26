<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clothemodel;
use Illuminate\Http\Request;

class clothecontroller extends Controller
{
    //

    public function form(){
        return view('admin.pages.clothes');
    }

    public function store(Request $request){
 
        $validated = $request->validate([
           'image' =>'required|image|mimes:jpeg,png',
           'title' =>'required|max:20',
         'price' => 'required|numeric',
         'des' => 'required|max:555', 
           'reviews' =>'required|numeric',
        ]) ;
   
   
        $data = new clothemodel();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->des = $request->des;
        $data->reviews = $request->reviews;
        if($request->file('image')){
           $file = $request->file('image');
           $filename= rand(0,11323) .  '.' .$file->extension();
           $path = public_path('Clothes');
           $file->move($path , $filename);
           $data->image = $filename;
           }
        else {
           flash()->error('An unexpected error occurred.');
           return redirect()->back();   
         }
         $data->save();
         flash()->success('Products Added Successfully.');
         return redirect()->route('clothes-data');   
       }
       public function data_show(){
        $data = clothemodel::all();
        return view('admin.pages.clothes-data', compact('data'));
     }

     public function edit_data( Request $request){
        $data = clothemodel::where('id', $request->id)->first();
        return view('admin.pages.clothes-edit', compact('data'));
       }
       public function update_data(Request $request){
        $data = clothemodel::where('id', $request->id)->first();
        // dd($request->all());
        $data->title = $request->title;
        $data->price = $request->price;
        $data->des = $request->des;
        $data->reviews = $request->reviews;
        if ($request->file('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('Clothes/' . $data->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $file = $request->file('image');
            $filename= rand(0,11323) .  '.' .$file->extension();
            $path = public_path('Clothes');
            $file->move($path , $filename);
            $data->image = $filename;
            }
        //  else {
        //     flash()->error('An unexpected error occurred.');
        //     return redirect()->back();   
        //   }
    
          $data -> update();
          flash()->success('Products Updated Successfully.');
          return redirect()->route('clothes-data');   
       }
       public function delete(Request $request){

        $data = clothemodel::where('id', $request->id)->first();
        $oldImagePath = public_path('Clothes/' . $data->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
      $data->delete();
      flash()->warning('Clothe Data Deleted !');
      return redirect()->back();
    
       }

}
