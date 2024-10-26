@extends('admin.main-layout')
@section('content')
<div class="main-content" style="min-height: 512px;">
  <section class="section">
    <div class="section-body">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <ul style="color:red">
            <li>{{ $error }}</li>
          </ul>
        @endforeach
      @endif
      <div class="form-modal-wrapper" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
        <form action="{{route('main-submit-form' , $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf 

          <div class="form-group">
            <label>Upload Product image</label>
            <input type="file" class="form-control" name="image" value="{{$data->image}}">
          </div>

          <div class="form-group">
            <label>Enter Product Title</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Product Title" name="title" value="{{$data->title}}">
            </div>
          </div>

          <div class="form-group">
            <label>Enter Product Price</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="Enter Product Price" name="price" value="{{$data->price}}" >
            </div>
          </div>
    
          <div class="form-group">
            <label>Enter Product Reviews</label> 
            <input type="number" class="form-control" placeholder="Enter Product Reviews" name="reviews"  value="{{$data->reviews}}">
          </div>

          <div class="form-group">
            <label>Enter Product Description</label>
            <div class="input-group">
              <textarea class="form-control" placeholder="Enter Product Description" name="des">{{$data->des}}</textarea>
            </div>
          </div>
   
          <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-danger" type="reset">Reset</button>
          </div>
        </form>
      </div>

    </div>
  </section>
</div>

@endsection


