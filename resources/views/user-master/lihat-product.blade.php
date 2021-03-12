@extends('user-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Berita</h1>        
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
                    <h4>Product</h4>
                    <a class="btn btn-primary" href="{{route('input.product')}}">Input</a>
                  </div>
                  
                  <div class="card-body">
                    <table class="table data-table">
                      <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Wa</th>
                            <th scope="col">gambar</th>
                            <th scope="col">desk</th>
                            <th scope="col">alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($product as $p)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $p->judul}}</td>
                          <td>{{ $p->harga}}</td>
                          <td>{{ $p->wa}}</td>
                          <td><img width="150px" src="{{ asset($p->gambar) }}"/></td>
                          <td>{{ $p->desk}}</td>
                          <td>{{ $p->alamat}}</td>
                          <td>
                            <form action="{{ route('product.destroy',['id' => $p->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('product.edit',['id' => $p->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach --}}
                      </tbody> 
                    </table>
                  </div>
                </div>
              </div>
    </div>


    

    
@endsection

@section('script')
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


@endsection
