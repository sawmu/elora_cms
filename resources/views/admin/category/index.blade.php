<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
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
                            All Category
                        </div>
                        <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                             
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->user_name->name }}</td>
                                    <td>
                                        @if ($category->created_at == NULL)
                                        <span> No Date Set </span>
                                            
                                        @else
                                        {{ $category->created_at->diffForHumans() }}
                                        @endif
                                    <td>
                                        <button type="button" >
                                            <a class="btn btn-primary" href=" {{ url('category/edit/'.$category->id)}} "> Edit</a>
                                        </button>
                                        <button type="button" >
                                            <a class="btn btn-danger" href=" {{ url('category/delete/'.$category->id)}} "> Delete </a>
                                        </button>
                                    </td>
                                </tr>
        
                            @endforeach
                             
                         
                            </tbody>
                        </table>

                        {{ $categories->links() }}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="container">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label mt-1">Category Name</label>
                                  <input type="text" name="category_name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
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
