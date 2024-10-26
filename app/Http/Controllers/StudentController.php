<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        return view('admin.pages.student');
    }

    public function store(Request $request){
         
    $data= $request ->validate([
        'name' => 'required|max:30',
         'class' =>'required|numeric',
         'number' =>'required|numeric',
         'image'=>'required|image|mimes:jpeg,png',
    ]);
      $data = new StudentModel();
      $data->name = $request->name;
      $data->number = $request->number;
      $data->class = $request->class;
    
      if($request->file('image')){
        $file = $request->file('image');
        $filename =  rand(0,21233). '.' . $file->extension();
        $path = public_path('Student');
        $file->move($path , $filename);
        $data->image = $filename;
        $data->save();
       flash()->success('Student Form Submited Successfully !!');
  
        return redirect()->route('student-data');
      }
      else {
        flash()->error('Image Upload Error !!');
     } 
    }

    public function show_data(){

        $data = StudentModel::all();
        return view('admin.pages.student-data', compact('data'));
    }

    public function edit(Request $request){
        $data = StudentModel::where("id" , $request->id )->first();
        return view('admin.pages.student' , compact('data'));
    }

    public function update(Request $request){
        $data = StudentModel::where('id', $request->id)->first();
        $data->name = $request->name;
        $data->number = $request->number;
        $data->class = $request->class;
      
        if($request->file('image')){
            if (public_path('Student/' . $data->image)){
                unlink(public_path('Student/' . $data->image));
            }
         $file = $request->file('image');
        $filename =  rand(0,21233). '.' . $file->extension();
        $path = public_path('Student');
        $file->move($path , $filename);
          $data->image = $filename;
          $data->update();
         flash()->success('Student Form Updated Successfully !!');
    
          return redirect()->back();
        }
        else {
          flash()->error('Image Upload Error !!');
       } 
    }

    public function delete(Request $request) {
      $data = StudentModel::where('id', $request->id)->first();
  
  
      $imagePath = public_path('Student/' . $data->image);
      if (file_exists($imagePath)) { 
          unlink($imagePath);
      }
      
      $data->delete();
      flash()->warning('Student Deleted Successfully!');
      return redirect()->back();
  }
  
}
