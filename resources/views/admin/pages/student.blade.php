@extends('admin.main-layout')
@section('content')
<div class="main-content" style="min-height: 512px;">
  <section class="section">
    <div class="section-body">
      @if ($errors->any())
       @foreach ($errors->all() as $error)
         <ul style="color:red">
            <li>{{$error}}</li>
         </ul>
       @endforeach
      @endif
      <div class="form-modal-wrapper" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
        <form action="{{ isset($data) ? route('student-update', $data->id) : route('submit-form') }}" 
        method="post" enctype="multipart/form-data">
          @csrf 
          @if(isset($data))
              @method('PUT') 
          @endif

          <div class="form-group">
            <label>Upload Student Image</label>
            <input type="file" class="form-control" name="image">
            @if(isset($data) && $data->image)
              <img src="{{ asset('Student/' . $data->image) }}" alt="Current Image" style="height: 100px; width: 100px;">
            @endif
          </div>

          <div class="form-group">
            <label>Name</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ isset($data) ? $data->name : ''}}">
            </div>
          </div>

          <div class="form-group">
            <label>Class</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="Enter Class" name="class" value="{{ isset($data) ? $data->class : old('class') }}">
            </div>
          </div>

          <div class="form-group">
            <label>Number</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="Enter Number" name="number" value="{{ isset($data) ? $data->number : old('number') }}">
            </div>
          </div>
   
          <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ isset($data) ? 'Update' : 'Submit' }}</button>
            <button class="btn btn-danger" type="reset">Reset</button>
          </div>
        </form>
      </div>

    </div>
  </section>
</div>
@endsection
