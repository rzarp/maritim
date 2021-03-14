@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Input User</h1>        
    </div>

    @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        {{ session()->get('pesan') }}
    </div>
    </div>
    @endif

    <form action="{{ route('store.user') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                      <input type="text" name="name" class="form-control" placeholder="Name" required value="{{old ('name')}}">
                      @error('name')
                          <div class="text-danger">
                              {{ $message}}
                          </div>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Name" required value="{{old ('email')}}">
                      @error('email')
                          <div class="text-danger">
                              {{ $message}}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Password" value="{{old ('password')}}">
                      @error('password')
                          <div class="text-danger">
                              {{ $message}}
                          </div>
                      @enderror
                  </div>
                    <div class="form-group">
                      <label for="is_admin">Is_Admin</label>
                      <select name="is_admin" class="form-control">
                          <option value=""></option>
                          @foreach($is_admin as $admin)
                          <option value="{{ $admin }}" {{ (old ('is_admin') == $admin ) ? 'selected' : '' }}>{{ $admin }}</option>
                          @endforeach
                      @error('is_admin')
                          <div class="text-danger">
                              {{ $message}}
                          </div>
                      @enderror
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