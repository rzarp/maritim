@extends('dashboard.base')
@section('content')

 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Contact Us</h2>
          </div>
          <div class="col-md-6">
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
          <div class="col-md-6 ml-auto">
            <div class="p-4 border mb-3 z-depth-1-half map-container" id="map-container-google-1">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7355215928796!2d106.88729981449272!3d-6.166161662145976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5228fa16fcd%3A0xb255d86c2d4ba973!2sDispotmar%20Mabesal!5e0!3m2!1sid!2sid!4v1616608685011!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

