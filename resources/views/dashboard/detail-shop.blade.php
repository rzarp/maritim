@extends('dashboard.base')
@section('content')
     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Product</strong></div>
        </div>
      </div>
    </div>  
@foreach ($product as $p)
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset($p->gambar)}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$p->judul}}</h2>
            <p>{{$p->desk}}</p>
            <p class="mb-2">Informasi Penjual : {{$p->user['name']}}</p>
            <p><strong class="text-primary h4">{{$p->harga}}</strong></p>
           
            
            <p><a href="https://api.whatsapp.com/send?phone={{$p->wa}}" class="buy-now btn btn-sm btn-success">whatsapp</a></p>

          </div>
        </div>
      </div>
    </div>
    @endforeach

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
         <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
             @forelse($product_random as $pr)
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{asset($pr->gambar)}}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{ route('detail.shop',$pr->id) }}">{{$pr->judul}}</a></h3>
                    <p class="mb-0">{{$pr->desk}}</p>
                    <p class="mb-0">{{$pr->user['name']}}</p>
                    <p class="text-primary font-weight-bold">Rp. {{$pr->harga}}</p>
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