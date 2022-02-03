<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                            Edit Category
                        </div>
                        <div class="container">
                            <form action="{{ url('category/update/'.$categories->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label mt-1">Category Name</label>
                                  <input type="text" name="category_name" value="{{ $categories->category_name}}" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('category_name')
                                        <span class="badge bg-info text-dark">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-2 mb-2">
                                    Add Category
                                </button>
                            </form>
                        </div>
                      
                    </div>
                    

                </div>
                
            </div>
        </div>

    </div>

   
    
</x-app-layout>
