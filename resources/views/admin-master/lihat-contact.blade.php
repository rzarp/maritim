@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Contact</h1>        
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
                    <h4>Simple</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contact as $ct)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $ct->name}}</td>
                          <td>{{ $ct->email}}</td>
                          <td> {{ $ct->message}} </td>
                          <td>
                            <form action="{{ route('contact.destroy',['id' => $ct->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('contact.detail',['id' => $ct->id]) }}" class="btn btn-info btn-sm">Lihat</a>
                                <button type="submit" class="btn btn-danger btn-sm delete-confirm">Hapus</button>
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
