@extends('dashboard.base')
@section('content')
  <div class="bg-light py-0">
      {{-- <div class="container"> --}}
        {{-- <div class="row"> --}}
          {{-- <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Berita</strong></div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 order-2">
            <div class="row">
              <div class="col-md-12 mb-1">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Berita All</h2></div>
              </div>
            </div>
            <div class="row">
            @forelse ($berita as $b)
              <div class="col-6 col-md-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href=""><img src="{{asset($b->gambar)}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3 class="text-truncate"><a href="{{ route('detail.berita',$b->id) }}">{{$b->judul}}</a></h3>
                    <p class="mb-0 text-truncate">{{$b->desk}}</p>
                    {{-- <p class="text-primary font-weight-bold">$50</p> --}}
                  </div>
                </div>
              </div>
              @empty 
              <h1>Tidak ada Data Berita</h1>
             
            @endforelse
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                  <ul>
                    {{ $berita->links() }}
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-9 order-2">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
              </div>
            </div>
            <div class="row mb-5">
            @forelse($product as $p)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="#"><img src="{{asset($p->gambar)}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{ route('detail.shop',$p->id) }}">{{$p->judul}}</a></h3>
                    <p class="mb-0">{{$p->desk}}</p>
                    <p class="mb-0">{{$p->user['name']}}</p>
                    <p class="text-primary font-weight-bold">Rp.{{$p->harga}}</p>
                  </div>
                </div>
              </div>
            @empty
            <p class="text-justify bold">Data Kosong</p>
            @endforelse
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                  <ul>
                    {{ $product->links() }}
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection