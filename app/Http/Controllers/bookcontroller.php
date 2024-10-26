<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookmodel;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    //

    public function form(){
        return view('admin.pages.book');
    }

    public function store(Request $request){
 
        $validated = $request->validate([
           'image' =>'required|image|mimes:jpeg,png',
           'title' =>'required|max:20',
         'price' => 'required|numeric',
         'des' => 'required|max:255', 
           'reviews' =>'required|numeric',
        ]) ;
   
   
        $data = new bookmodel();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->des = $request->des;
        $data->reviews = $request->reviews;
        if($request->file('image')){
           $file = $request->file('image');
           $filename= rand(0,11323) .  '.' .$file->extension();
           $path = public_path('Books');
           $file->move($path , $filename);
           $data->image = $filename;
           }
        else {
           flash()->error('An unexpected error occurred.');
           return redirect()->back();   
         }
         $data->save();
         flash()->success('Products Added Successfully.');
         return redirect()->route('book-data');   
       }
       public function data_show(){
        $data = bookmodel::all();
        return view('admin.pages.book-data', compact('data'));
     }
     public function edit_data( Request $request){
        $data = bookmodel::where('id', $request->id)->first();
        return view('admin.pages.book-edit', compact('data'));
       }
 
       public function update_data(Request $request){
        $data = bookmodel::where('id', $request->id)->first();
        // dd($request->all());
        $data->title = $request->title;
        $data->price = $request->price;
        $data->des = $request->des;
        $data->reviews = $request->reviews;
        if ($request->file('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('Books/' . $data->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $file = $request->file('image');
            $filename= rand(0,11323) .  '.' .$file->extension();
            $path = public_path('Books');
            $file->move($path , $filename);
            $data->image = $filename;
            }
        //  else {
        //     flash()->error('An unexpected error occurred.');
        //     return redirect()->back();   
        //   }
    
          $data -> update();
          flash()->success('Products Updated Successfully.');
          return redirect()->route('book-data');   
       }

       public function delete(Request $request){

        $data = bookmodel::where('id', $request->id)->first();
        $oldImagePath = public_path('Books/' . $data->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
      $data->delete();
      flash()->warning('Book Data Deleted !');
      return redirect()->back();
    
       }
}


