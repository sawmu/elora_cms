@extends('admin.admin_master')

@section('admin')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Edit Menu Item</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('social/update/'.$menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="MenuName">Name</label>
                <input type="text" name="name"  value=" {{ $menu->name }}" class="form-control" id="menu_name" placeholder="Enter Menu Name">
        
            </div>
            <div class="form-group">
                <label for="MenuLink">Icon</label>
                <input type="text" name="image" value=" {{ $menu->image }}" class="form-control" id="menu_link" placeholder="Enter Menu Link">
            </div>
            
            <div class="form-group">
                <label for="MenuLink">Link</label>
                <input type="text" name="link" value=" {{ $menu->link }}" class="form-control" id="menu_link" placeholder="Enter Menu Link">
            </div>
        
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update Menu</button>
            
            </div>
        </form>
    </div>
</div>
@endsection