@extends('dashboard.base')
@section('content')

 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Any Question ?</h2>
          </div>
          <div class="col-md-12">
            <div class="col-md-12">
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
            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
              @csrf  
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_name" class="text-black">Name </label>
                    <input type="text" class="form-control" id="c_name" name="name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="" required>
                  </div>
                </div>
                

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="message" id="c_message" cols="30" rows="7" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
          {{-- <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>

          </div> --}}
        </div>
      </div>
    </div>

@endsection