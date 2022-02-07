<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Brand
        </h2>
    </x-slot>

   

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                    @endif
                        <div class="card-header">
                            All Brand
                        </div>
                        <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Image</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                               
                            @foreach ($brands as $brand)
                            
                                <tr>
                                    <th scope="row">{{ $brands->firstItem()+$loop->index }}</th>
                                    <td>{{ $brand->brand_name }}</td>
                                    <td>  
                                        <img src="{{ asset($brand->brand_image) }} "  style="height: 60px; width:60px" alt=" {{ $brand->brand_name }} ">
                                    </td>
                                    <td>
                                        @if ($brand->created_at == NULL)
                                        <span> No Date Set </span>
                                            
                                        @else
                                        {{ $brand->created_at->diffForHumans() }}
                                        @endif
                                    <td>
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('brand/edit/'.$brand->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('brand/delete/'.$brand->id)}} "> Delete </a>
                                        </button>
                                    </td>
                                </tr>
        
                            @endforeach
                             
                         
                            </tbody>
                        </table>

                        {{ $brands->links() }}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Brand
                        </div>
                        <div class="container">
                            <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label mt-1">Brand Name</label>
                                  <input type="text" name="brand_name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('brand_name')
                                        <span class="badge bg-info text-dark">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-1">Brand image</label>
                                    <input type="file" name="brand_image" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                      @error('brand_image')
                                          <span class="badge bg-info text-dark">{{ $message }}</span>
                                      @enderror
                                  </div>
                                
                                <button type="submit" class="btn btn-primary mt-2 mb-2">
                                    Add Brand
                                </button>
                            </form>

                        
                        </div>
                      
                    </div>
                    

                </div>
                
            </div>
        </div>

    </div>

   
    
</x-app-layout>
