@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Data User</h1>        
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

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>User</h4>
                    <a class="btn btn-primary" href="{{route('create.user')}}">Input</a>
                  </div>
                  
                  <div class="card-body">
                    <table class="table data-table">
                      <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Is_admin</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
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
                                            <button type="submit" class="btn btn-danger delete-confirm ">Delete</button>
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


    

    
@endsection

@section('script')

<script>
  $('body').on('click','.delete-confirm',function (event) {
    event.preventDefault();
    const url = $(this).attr('href');

    Swal.fire({
      title: 'Apakah Kamu Yakin ? ',
      text: "Hapus Data ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.value) {
        window.location.href = url;
      }
    })
  });
</script>


@endsection
