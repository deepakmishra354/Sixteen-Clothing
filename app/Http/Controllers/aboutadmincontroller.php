<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\aboutadminmodel;
use Illuminate\Http\Request;

class aboutadmincontroller extends Controller
{
    //

    public function form(){
        return view('admin.pages.about');
    }

    public function store(Request $request){
 
        $validated = $request->validate([
           'image' =>'required|image|mimes:jpeg,png',
           'position' =>'required|max:20',
         'des' => 'required|max:255', 
        ]) ;
   
   
        $data = new aboutadminmodel();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->des = $request->des;
        if($request->file('image')){
           $file = $request->file('image');
           $filename= rand(0,11323) .  '.' .$file->extension();
           $path = public_path('About');
           $file->move($path , $filename);
           $data->image = $filename;
           }
        else {
           flash()->error('An unexpected error occurred.');
           return redirect()->back();   
         }
         $data->save();
         flash()->success('Member Added Successfully.');
         return redirect()->route('about-data');   
        }
   
       public function data_show(){
        $data = aboutadminmodel::all();
        return view('admin.pages.about-data', compact('data'));
     }
     public function edit_data( Request $request){
        $data = aboutadminmodel::where('id', $request->id)->first();
        return view('admin.pages.about-edit', compact('data'));
       }
     
       public function update_data(Request $request){
        $data = aboutadminmodel::where('id', $request->id)->first();
        // dd($request->all());
        $data->name = $request->name;
        $data->position = $request->position;
        $data->des = $request->des;
        if ($request->file('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('About/' . $data->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $file = $request->file('image');
            $filename= rand(0,11323) .  '.' .$file->extension();
            $path = public_path('About');
            $file->move($path , $filename);
            $data->image = $filename;
            }
          $data -> update();
          flash()->success('Member Updated Successfully.');
          return redirect()->route('about-data');   
       }
       public function delete(Request $request){

        $data = aboutadminmodel::where('id', $request->id)->first();
        $oldImagePath = public_path('About/' . $data->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
      $data->delete();
      flash()->warning('Member Deleted !');
      return redirect()->back();
    
       }
}
