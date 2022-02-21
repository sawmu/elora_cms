@extends('admin.admin_master')

@section('admin')

<div class="py-12">
   
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success')}}
                    </div>   
                @endif
                    <div class="card-header">
                        Navagation 
                    </div>
                    <table class="table thead-light">
                        <thead class="">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Link</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach ($menuItems as $menu)
                        
                            <tr>
                                <th scope="row">{{ $i ++ }}</th>
                                <td>{{ $menu->name }}</td>
                                <td><code>{{ $menu->link }}</code></td>
                                <td>
                                    @if ($menu->status == 'Enabled')
                                    <span class="mb-2 mr-2 badge badge-success">{{ $menu->status }}</span>
                                        
                                    @else
                                    <span class="mb-2 mr-2 badge badge-secondary">{{ $menu->status }}</span> 
                                    @endif
                                    
                                    {{-- <span class="mb-2 mr-2 badge badge-pill badge-info">  </span> --}}
                                </td>
                                
                                <td>
                                    <button type="button" >
                                        <a class="btn btn-primary" href=" {{ url('menu/edit/'.$menu->id)}} "> Edit</a>
                                    </button>
                                    <button type="button" >
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('menu/delete/'.$menu->id)}} "> Delete </a>
                                    </button>
                                </td>
                            </tr>
    
                        @endforeach
                         
                     
                        </tbody>
                    </table>

                  
                </div>
               
            </div>

            <div class="col-md-4">       
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add a Menu Item</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.menu') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="MenuName">Name</label>
                                <input type="text" name="name" class="form-control" id="menu_name" placeholder="Enter Menu Name">
                        
                            </div>
                            <div class="form-group">
                                <label for="MenuLink">Link</label>
                                <input type="text" name="link" class="form-control" id="menu_link" placeholder="Enter Menu Link">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect12">Status</label>
                                <select class="form-control" id="menu_status" name="status">
                                    <option>Enabled</option>
                                    <option>Disabled</option>
                                    
                                </select>
                               
                            </div>
                        
                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                <button type="submit" class="btn btn-primary btn-default">Add menu Item</button>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    

</div>

@endsection