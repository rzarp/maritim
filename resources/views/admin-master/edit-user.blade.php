@extends('admin-master.base')
@section('content')
<form action="{{ route('update.user',['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data User</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan Password" value="{{ $user->password }}">
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
                                        <option value="{{ $admin }}" {{ ($user->is_admin == $admin ) ? 'selected' : '' }}>{{ $admin }}</option>
                                        @endforeach
                                    @error('is_admin')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                    </select>
                                    </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary">Simpan</button>
                    </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection