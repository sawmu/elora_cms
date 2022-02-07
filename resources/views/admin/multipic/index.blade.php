<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Multi Image
        </h2>
    </x-slot>

   

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-group">
                        @foreach ($images as $multi)

                        <div class="col-md-4 mt-5">
                            <div class="card">
                                <img src="{{ asset($multi->image)}}" alt="multi-image">
                            </div>
                        </div>
                            
                        @endforeach
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Image
                        </div>
                        <div class="container">
                            <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-1">Image</label>
                                    <input type="file" name="image[]" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" multiple="">
                                      @error('image')
                                          <span class="badge bg-info text-dark">{{ $message }}</span>
                                      @enderror
                                  </div>
                                
                                <button type="submit" class="btn btn-primary mt-2 mb-2">
                                    Add Image
                                </button>
                            </form>

                        
                        </div>
                      
                    </div>
                    

                </div>
                
            </div>
        </div>

    </div>

   
    
</x-app-layout>
