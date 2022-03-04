@extends('admin.admin_master')

@section('admin')

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
                        Contact Us
                    </div>
                    <div class="container">

                        <form action="{{ url('contact/update/'.$contact->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="form-label mt-1">Name</label>
                              <input type="text" name="name" value=" {{ $contact->name }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                               
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label mt-1">Phone</label>
                                <input type="text" name="phone" value=" {{ $contact->phone }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label mt-1">Email</label>
                                <input type="text" name="email" value=" {{ $contact->email }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label mt-1">Subject</label>
                                <input type="text" name="subject" value=" {{ $contact->subject }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label mt-1">Message</label>
                                <input type="text" name="message" value=" {{ $contact->message }} " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                            </div>
    
              
                            
                            <button type="submit" class="btn btn-primary mt-2 mb-2">
                                update
                            </button>
                        </form>

                    </div>
                   

                  
                </div>
            
              
            </div>

           
            
        </div>
    </div>

</div>



@endsection