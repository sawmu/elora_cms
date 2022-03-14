
@extends('admin.admin_master')

@section('admin')

   

    <div class="py-12">
        <div class="container">
            <div class="row">
               <div class="container">
                <a href="{{ route('add.project')}}"><button class="btn btn-info"> Add Project </button></a>
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
                            All Project
                        </div>
                        <table class="table table-striped">
                            <thead class="">
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Image</th>
                                <th scope="col" width="15%">Title</th>
                                <th scope="col" width="25%">Sub Title</th>
                                <th scope="col" width="25%">Link</th>

                                
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                    
                               
                               
                            @foreach ($projects as $project)
                            
                                <tr>
                                    <th scope="row">{{ $i++}}</th>
                                    <td>  
                                        <img src="{{ asset($project->image) }} "  style="height: 60px; width:60px" alt=" {{ $project->title }} ">
                                    </td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->subtitle }}</td>
                                    <td>{{ $project->link }}</td>

                                   
                               
                                   
                                    
                                  
                                    <td>
                                    
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('project/edit/'.$project->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('project/delete/'.$project->id)}} "> Delete </a>
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