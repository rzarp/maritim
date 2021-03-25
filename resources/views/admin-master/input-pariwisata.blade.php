@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Input Pariwisata</h1>        
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
                    <h4>Input Pariwisata</h4>
                  </div>
                  <div class="card-body">
                  <input name="user_id" type="hidden" value="">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea class="form-control" rows="3" name="desk" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="3" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                    <label>Harga Tiket Masuk</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" name="harga" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Contact</label>
                      <input type="tel" name="wa" class="form-control" placeholder="Contact" required>
                    </div>
                    <div class="form-group">
                        <form>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Input Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
                          </div>
                        </form>
                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                    </div>

                     <div class="form-group">
                      <label>Fasilitas</label>
                      <textarea class="form-control" rows="3" name="" required></textarea>
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