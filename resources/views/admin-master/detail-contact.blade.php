@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Edit About</h1>        
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
        <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Contact</h4>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items">
                      <i class="fas fa-list"></i> All Tickets
                    </a>

                    @foreach($contact as $ct)
                    <div class="tickets">
                      <div class="ticket-items" id="ticket-items">
                        <div class="ticket-item active">
                          <div class="ticket-title">
                            <h4>Contact</h4>
                          </div>
                          <div class="ticket-desc">
                            <div>Created at</div>
                            <div class="bullet"></div>
                            <div>{{$ct->created_at}}</div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                    @foreach($contact as $ct)
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="ticket-sender-picture img-shadow">
                            <img src="{{asset('assets/img/avatar/avatar-5.png')}}" alt="image">
                          </div>
                          <div class="ticket-detail">
                            <div class="ticket-title">
                              <h4>{{$ct->name}}</h4>
                            </div>
                            <div class="ticket-info">
                              <div class="text-primary font-weight-600">{{$ct->email}}</div>
                            </div>
                          </div>
                        </div>
                        <div class="ticket-description">
                            <p>Message : </p>
                          <p> {{$ct->message}}</p>
                          <div class="ticket-divider"></div>
                        </div>
                        <div class="form-group">
                        <a class="btn btn-secondary btn-lg" href="{{route('lihat.contact')}}" >
                          Back
                        </a>
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
              </div>   
    </div>

   

    </form> 
@endsection