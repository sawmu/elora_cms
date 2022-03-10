@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Silder</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
              
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Sub Title</label>
                <input type="text" name="subtitle" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
              
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Shape Mark</label>
                <input type="text" name="shape_mark" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
            </div>
          
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Button Name</label>
                <input type="text" name="btn_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Button Link</label>
                <input type="text" name="btn_link" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Youtube Name</label>
                <input type="text" name="youtube_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Youtube Link</label>
                <input type="text" name="youtube_link" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
            </div>
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
               
            </div>
        </form>
    </div>
</div>

@endsection