
@extends('admin.admin_master')

@section('admin')

   

    <div class="py-12">
        <div class="container">
            <div class="row">
               

                <div class="col-md-8">
                    @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success')}}
                    </div>   
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Add Brand
                        </div>

                        
                        <div class="container">
                           
                            <form action="{{ url('brand/update/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label mt-1">Brand Name</label>
                                  <input type="text" name="brand_name" value=" {{ $brand->brand_name }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('brand_name')
                                        <span class="badge bg-info text-dark">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-1">Brand image</label>
                                    <input type="file" name="brand_image" value=" {{ $brand->brand_image }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                      @error('brand_image')
                                          <span class="badge bg-info text-dark">{{ $message }}</span>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                      <img src="{{ asset($brand->brand_image)}}" style="width:400px; Height: 400px" alt="{{ $brand->brand_name }}">
                                  </div>
                                
                                <button type="submit" class="btn btn-primary mt-2 mb-2">
                                    update Brand
                                </button>
                            </form>

                        
                        </div>
                      
                    </div>
                    

                </div>
                
            </div>
        </div>

    </div>

   
    
@endsection
