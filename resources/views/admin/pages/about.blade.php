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
        <form action="{{route('submit-form')}}" method="post" enctype="multipart/form-data">
          @csrf 

          <div class="form-group">
            <label>Upload Member image</label>
            <input type="file" class="form-control" name="image">
          </div>

          <div class="form-group">
            <label>Name</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
          </div>

          <div class="form-group">
            <label>Position</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Position " name="position">
            </div>
          </div>
    
         

          <div class="form-group">
            <label> Description</label>
            <div class="input-group">
              <textarea class="form-control" placeholder="Enter  Description" name="des"></textarea>
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