@extends('admin-master.base')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User</h3>
                <div class="card-tools">
                 <a href="{{route('create.user')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('pesan'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('pesan') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Is_Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                            <tr>
                                <td>{{ $users['id'] }}</td>
                                <td>{{ $users['name'] }}</td>
                                <td>{{ $users['email'] }}</td>
                                <td>{{ $users['is_admin'] }}</td>
                                <td class="text-center">
                                    <form method="post" action="{{route ('destroy.user',['id' => $users->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="{{route ('edit.user',['id' => $users->id]) }}">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection