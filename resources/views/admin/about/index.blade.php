
@extends('admin.admin_master')

@section('admin')

   

    <div class="py-12">
        <div class="container">
            <div class="row">
               <div class="container">
                <a href="{{ route('add.about')}}"><button class="btn btn-info"> Add Slider </button></a>
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
                            Home About
                        </div>
                        <table class="table table-striped">
                            <thead class="">
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Home Title</th>
                                <th scope="col" width="25%">Short Description</th>
                                <th scope="col" width="15%">Long Description</th>
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                    
                               
                               
                            @foreach ($homeabout as $about)
                            
                                <tr>
                                    <th scope="row">{{ $i++}}</th>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->short_dis}}</td>
                                    <td>  
                                        {{ $about->long_dis}}
                                    </td>
                                    <td>
                                    
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('slider/edit/'.$about->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('slider/delete/'.$about->id)}} "> Delete </a>
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