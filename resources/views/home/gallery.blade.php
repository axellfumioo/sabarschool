@extends('layouts.main.home')
@section('container')
  <!-- Gallery Start -->
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Gallery</span>
        </p>
        <h1 class="mb-4">Our SABar School Gallery</h1>
      </div>
      <div class="row">
        <div class="col-12 text-center mb-2">
          <ul class="list-inline mb-4" id="portfolio-flters">
            <li class="btn btn-outline-primary m-1 active" data-filter="*">
              All
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".first">
              On Stage
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".second">
              In Nature
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".third">
              Drawing
            </li>
          </ul>
        </div>
      </div>
      <div class="row portfolio-container">
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/class-3.jpg') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/class-3.jpg') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/semangat.JPG') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/semangat.JPG') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/mimpi.jpg') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/mimpi.jpg') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/peluang.JPG') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/peluang.JPG') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/class-2.jpeg') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/class-2.jpeg') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
          <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/class-1.jpg') }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
              <a href="{{ asset('assets/img/homepage/class-1.jpg') }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery End -->
@endsection
