
@extends('admin.admin_master')

@section('admin')

   

    <div class="py-12">
        <div class="container">
            <div class="row">
               <div class="container">
                <a href="{{ route('add.slider')}}"><button class="btn btn-info"> Add Slider </button></a>
                <br><br>
               </div>
                
                <div class="col-md-12">
                    <div class="card">
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                         @endif
                        <div class="card-header">
                            All Slider
                        </div>
                        <table class="table table-striped">
                            <thead class="">
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Title</th>
                                <th scope="col" width="15%">Sub-Title</th>
                                <th scope="col" width="25%">Shape Mark</th>
                                <th scope="col" width="25%">Description</th>
                                
                                <th scope="col" width="15%">Image</th>
                                <th scope="col" width="25%">Btn Name</th>
                                <th scope="col" width="25%">Btn Link</th>
                                <th scope="col" width="25%">Youtube</th>
                                <th scope="col" width="25%">Youtube Link</th>
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                    
                               
                               
                            @foreach ($sliders as $slider)
                            
                                <tr>
                                    <th scope="row">{{ $i++}}</th>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->subtitle }}</td>
                                    <td>{{ $slider->shape_mark}}</td>
                                    <td>{{ $slider->description}}</td>
                                   
                                    <td>  
                                        <img src="{{ asset($slider->image) }} "  style="height: 60px; width:60px" alt=" {{ $slider->title }} ">
                                    </td>
                                    <td>{{ $slider->btn_name}}</td>
                                    <td>{{ $slider->btn_link}}</td>
                                    <td>{{ $slider->youtube_name}}</td>
                                    <td>{{ $slider->youtube_link}}</td>
                                    <td>
                                    
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('slider/edit/'.$slider->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('slider/delete/'.$slider->id)}} "> Delete </a>
                                        </button>
                                    </td>
                                </tr>
        
                            @endforeach
                             
                         
                            </tbody>
                        </table>

                      
                    </div>
                  
                </div>

               
                
            </div>
        </div>

    </div>

   
@endsection