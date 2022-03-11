@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Create Star Count</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('store.star') }}" method="POST" enctype="multipart/form-data">
            @csrf
           

           

            <div class="form-group">
                <label for="exampleFormControlInput1">Text</label>
                <input type="text" name="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Text">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Number</label>
                <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Number">
              
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Icon</label>
                <input type="file" name="icon" class="form-control" id="exampleFormControlInput1" placeholder="Enter Icon">
              
            </div>
          

            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
               
            </div>
        </form>
    </div>
</div>

@endsection