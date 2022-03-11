
@extends('admin.admin_master')

@section('admin')

   

    <div class="py-12">
        <div class="container">
            <div class="row">
               <div class="container">
                <a href="{{ route('add.star')}}"><button class="btn btn-info"> Add Star Count </button></a>
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
                            All Star Count
                        </div>
                        <table class="table table-striped">
                            <thead class="">
                              <tr>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="15%">Icon</th>
                                <th scope="col" width="15%">Number</th>
                                <th scope="col" width="25%">Text</th>
                    
                                <th scope="col" width="15%">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                    
                               
                               
                            @foreach ($stars as $star)
                            
                                <tr>
                                    <th scope="row">{{ $i++}}</th>
                                    <td>{{ $star->icon }}</td>
                                    <td>{{ $star->number }}</td>
                                    <td>{{ $star->text}}</td>
                                
                                    <td>
                                    
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('star/edit/'.$star->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('star/delete/'.$star->id)}} "> Delete </a>
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