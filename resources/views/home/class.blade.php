@extends('layouts.main.home')
@section('container')
  <!-- Class Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Popular Classes</span>
        </p>
        <h1 class="mb-4">Classes for Your Kids</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/class-1.jpg') }}" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Outbond Class</h4>
              <p class="card-text">
                Untuk memperluas wawasan siswa terhadap dunia luar dan melatih mental siswa.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/class-2.jpeg') }}" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Business Class</h4>
              <p class="card-text">
                Pengembangan mental bisnis, agar siswa memiliki pengetahuan untuk mengelola suatu bisnis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/class-3.jpg') }}" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Green Lab Class</h4>
              <p class="card-text">
                Mengenalkan siswa terhadap alam dan tumbuh-tumbuhan, agar dapat melindungi dan menghargai ciptaan tuhan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Class End -->

@endsection
