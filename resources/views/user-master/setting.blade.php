@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Data Account</h1>        
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
                    <h4>Account</h4>
                  </div>
                  
                  <div class="card-body">
                    <table class="table data-table">
                      <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                     @foreach($user as $users)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    <form method="post" action="">
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="{{route ('edit.setting',['id' => $users->id]) }}">Edit</a>
                                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
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

{{-- @section('script')
<script>
    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('lihat.product')}}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },            
            {
                data: 'judul',
                name: 'judul',
            },
            {
                data: 'harga',
                name: 'harga',
            },
             {
                data: 'wa',
                name: 'wa',
            },
            {
                data: 'gambar',
                name: 'gambar',
                render: function(data) {
                return '<img width="100px" src="/'+data+'">'
            },
            },
            {
                data: 'desk',
                name: 'desk',
            },
            {
                data: 'alamat',
                name: 'alamat',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
    
</script>

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


@endsection --}}
