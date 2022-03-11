@extends('admin.admin_master')

@section('admin')



<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Star Count</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('star/update/') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Text 1</label>
                        <input type="text" value=" {{ $star->text1 }} " name="text1" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Text 2</label>
                        <input type="text" value=" {{ $star->text2 }} " name="text2" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Text 3</label>
                        <input type="text" value=" {{ $star->text3 }} " name="text3" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Number</label>
                        <input type="text" value=" {{ $star->number1 }} " name="number1" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Number</label>
                        <input type="text" value=" {{ $star->number2 }} " name="number2" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Number</label>
                        <input type="text" value=" {{ $star->number3 }} " name="number3" class="form-control" id="exampleFormControlInput1" placeholder="Enter Slider Title">
                    
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Icon</label>
                        <input type="file" name="icon1" value="{{ old($star->icon1) }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Icon</label>
                        <input type="file" name="icon2" value="{{ old($star->icon2) }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Icon</label>
                        <input type="file" name="icon3" value="{{ old($star->icon3) }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Shape Mark">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group text-center" >
                        <img style="width: 10%; background: rgb(133, 86, 86);" src="{{ asset($star->icon1)}}" style="width:400px; Height: 250px" alt="{{ $star->text1 }}">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <img style="width: 10%; background: rgb(133, 86, 86);" src="{{ asset($star->icon2)}}" style="width:400px; Height: 250px" alt="{{ $star->text2 }}">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <img style="width: 10%; background: rgb(133, 86, 86);" src="{{ asset($star->icon3)}}" style="width:400px; Height: 250px" alt="{{ $star->text3 }}">
                    </div>
                </div>
    
            </div>
         
            
            

            
            
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Save</button>
               
            </div>
        </form>
    </div>
</div>

@endsection