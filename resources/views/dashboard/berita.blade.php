@extends('dashboard.base')
@section('content')
  <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Berita</strong></div>
        </div>
      </div>
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
              {{-- <div class="col-6 col-md-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="{{asset('boostrap/images/cloth_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="{{asset('boostrap/images/cloth_1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">Polo Shirt</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div> --}}
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
@endsection