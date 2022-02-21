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
                        Social Icon 
                    </div>
                    <table class="table thead-light">
                        <thead class="">
                          <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="10%">Name</th>
                            <th scope="col" width="25%">Icon</th>
                            <th scope="col" width="30%">Link</th>
                            <th scope="col" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach ($menusocial as $menu)
                        
                            <tr>
                                <th scope="row">{{ $i ++ }}</th>
                                <td>{{ $menu->name }}</td>
                                <td><code>{{ $menu->image }}</code></td>
                                <td><code>{{ $menu->link }}</code></td>
                             
                                
                                <td>
                                    <button type="button" >
                                        <a class="btn btn-primary" href=" {{ url('social/edit/'.$menu->id)}} "> Edit</a>
                                    </button>
                                    <button type="button" >
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('social/delete/'.$menu->id)}} "> Delete </a>
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
                        <h2>Add a Menu Social</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.social') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="MenuName">Name</label>
                                <input type="text" name="name" class="form-control" id="menu_name" placeholder="Enter Name">
                        
                            </div>
                            <div class="form-group">
                                <label for="MenuLink">Icon</label>
                                <input type="text" name="image" class="form-control" id="menu_link" placeholder="Eg.mdi-access-point ">
                            </div>
                            <div class="form-group">
                                <label for="MenuLink">Link</label>
                                <input type="text" name="link" class="form-control" id="menu_name" placeholder="Enter Social Link">
                        
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