

@extends('layouts.newfrontLayout.frontend_design')
@section('content')
<section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('img/newfrontend_img/images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
                  <div class="col-md-4 contact-info ftco-animate bg-light p-4">
                      <div class="row">
                          <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Address:</span>House # 333, Sen Para, Porbata, Mirpur, 1216</p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Phone:</span> <a href="tel://+880 167 730 2051">+880 167 730 20518</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:info@photodesignexpert.com  ">info@photodesignexpert.com  </a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:contact@photodesignexpert.com">contact@photodesignexpert.com</a></p>
              </div>
              
                      </div>
                  </div>
                  <div class="col-md-1"></div>
                  
                    <div class="col-md-6 ftco-animate">
                        @if(session('status'))
                        <div class="alert alert-success">
                          {{session('status')}}
                        </div>
                        @endif
                        <form   class="contact-form" name="contact" id="order" action="{{ url('/send-mail')}}" method="post">{{ csrf_field() }}
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                              </div>
                              </div>
                          </div>
                        
                          <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                          </div>
                        </form>
                        
                    </div>
      </div>
    </div>
  </section>

  <div id="map" class="map"></div>
@endsection