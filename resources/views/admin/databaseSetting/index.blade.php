<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Database Setting
        </h2>
    </x-slot>

   

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                    @endif
                        <div class="card-header">
                            Database Setting
                        </div>
                        <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">All Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Multi Image</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                               
                           
                            
                                <tr>
                                  
                                    <th scope="row">
                                        
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to Clear Database')" href=" {{ url('database/delete/allCate')}} "> Delete </a>
                                        </button>
                                       
                                    </th>
                                  
                                    <td>
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to Clear Database')" href=" {{ url('database/delete/brand')}} "> Delete </a>
                                        </button>
                                    </td>

                                    <td>  
                                        <button type="button" >
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure to Clear Database')" href=" {{ url('database/delete/multi')}} "> Delete </a>
                                        </button>
                                    </td>
                                   
                                    
                                </tr>
        
                       
                             
                         
                            </tbody>
                        </table>

                       
                    </div>
                </div>

               
                
            </div>
        </div>

    </div>

   
    
</x-app-layout>
