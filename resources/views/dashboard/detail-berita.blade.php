@extends('dashboard.base')
@section('content')
     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Berita</strong></div>
        </div>
      </div>
    </div>  
@foreach ($berita as $b)
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset($b->gambar)}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$b->judul}}</h2>
            <p>{{$b->desk}}</p>
            <p class="mb-2">Author : {{$b->user['name']}}</p>
            
          </div>
        </div>
      </div>
    </div>
    @endforeach

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Berita Lainnya</h2>
          </div>
        </div>
         <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
             @forelse($berita_random as $br)
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{asset($br->gambar)}}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3 class="text-truncate"><a href="{{ route('detail.berita',$b->id) }}">{{$br->judul}}</a></h3>
                    <p class="mb-0 text-truncate">{{$br->desk}}</p>
                    
                  </div>
                </div>
              </div>
               @empty
              <p>asdasda</p>
            </div>
          @endforelse
          </div>
        </div>
        </div>
      </div>
    </div>

@endsection