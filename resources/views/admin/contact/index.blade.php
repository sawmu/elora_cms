@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
        <div class="row">
           
            
            <div class="col-md-12">
                <div class="card">
                    @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success')}}
                    </div>   
                     @endif
                    <div class="card-header">
                        Contact Us
                    </div>
                    <table class="table table-bordered">
                        <thead class="">
                          <tr>
                           
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="10%">Name</th>
                            <th scope="col" width="10%">Phone</th>
                            <th scope="col" width="10%">Email</th>
                            <th scope="col" width="10%">Subject</th>
                            <th scope="col" width="25%">Message</th>
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @php($i = 1)
                                
                           
                           
                        @foreach ($contacts as $key => $contact)
                        
                            <tr id="tr_{{$contact->id}}">
                                
                                <th scope="row">{{ $contacts->firstItem()+$loop->index }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone}}</td>
                                <td>{{ $contact->email}}</td>
                                <td>{{ $contact->subject}}</td>
                                <td>{{ $contact->message}}</td>
                                
                                <td>
                                
                                    <button type="button" >
                                        <a class="btn btn-primary" href=" {{ url('contact/edit/'.$contact->id)}} "> Edit</a>
                                    </button>
                                    <button type="button" >
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href=" {{ url('contact/delete/'.$contact->id)}} "> Delete </a>
                                    </button>
                                </td>
                            </tr>
    
                        @endforeach
                         
                     
                        </tbody>
                    </table>

                  
                </div>
                {{ $contacts->links() }}
              
            </div>

           
            
        </div>
    </div>

</div>








@endsection

