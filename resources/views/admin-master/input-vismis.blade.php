@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Input Visi & Misi</h1>        
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

    <form action="{{ route('vismis.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Visi & Misi</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Visi</label>
                      <textarea class="form-control" rows="3" name="visi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Misi</label>
                      <textarea class="form-control" rows="3" name="misi" required></textarea>
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