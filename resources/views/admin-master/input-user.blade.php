@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Input User</h1>        
    </div>

    {{-- @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        {{ session()->get('pesan') }}
    </div>
    </div>
    @endif --}}

    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input User</h4>
                  </div>
                  <div class="card-body">
                  <input name="user_id" type="hidden" value="">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                     <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Name" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control">
                        <option>0</option>
                        <option>1</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-danger" type="reset" value="Reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Input</button>
                    </div>
                  </div>
                </div>
              </div>     
    </div>

    </form> 
@endsection