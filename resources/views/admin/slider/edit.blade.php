@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Silder</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('slider/update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Slider Title</label>
                <input type="text" value=" {{ $slider->title }} " name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
              
            </div>
          
          
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Slider Description</label>
                <textarea name="description" placeholder="{{ old('description', $slider->description) }}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input type="file" name="image" value=" {{ $slider->image }} class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <img src="{{ asset($slider->image)}}" style="width:400px; Height: 250px" alt="{{ $slider->title }}">
            </div>
            
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update</button>
               
            </div>
        </form>
    </div>
</div>

@endsection