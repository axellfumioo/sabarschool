@extends('layouts.main.home')
@section('container')
  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/img/homepage/about.jpeg') }}" alt="" />
        </div>
        <div class="col-lg-7">
          <p class="section-title pr-5">
            <span class="pr-2">Learn About Us</span>
          </p>
          <h1 class="mb-4">Sekolah Terbaik Untuk Anak Anda</h1>
          <p>
            SABar School memiliki Program Pendidikan yang difokuskan terhadap Logika, Akhlak dan Life Skills Siswa, untuk menciptakan pribadi siswa yang unggul.
          </p>
          <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
              <img class="img-fluid rounded" src="{{ asset('assets/img/homepage/about-2.jpg') }}" alt="" />
            </div>
            <div class="col-6 col-md-8">
              <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Metode Teladan
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Action Learning
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Outbond Learning and Green Therapy
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Learn to Maestro
                </li>
              </ul>
            </div>
          </div>
          <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facilities Start -->
  <div class="container-fluid pt-5">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Play Ground</h4>
              <p class="m-0">
                Kami memiliki Playground untuk bermain para siswa Paud s/d SD.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Music and Dance</h4>
              <p class="m-0">
                Tersedia fasilitas lengkap untuk mengasah keterampilan dibidang Music dan Dance.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Arts and Crafts</h4>
              <p class="m-0">
                Setiap passion siswa akan diberikan fasilitas untuk mengembangkan skillnya.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Safe Transportation</h4>
              <p class="m-0">
                Kami memiliki fasilitas ELF untuk mengantar-jemput siswa dengan aman.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Healthy food</h4>
              <p class="m-0">
                Sekolah memiliki program makan siang dengan menu yang terjamin sehat.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              <h4>Educational Tour</h4>
              <p class="m-0">
                Setiap tahun diadakan Study Tour untuk memperluas pengetahuan siswa.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facilities Start -->

  <!-- Team Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Teachers</span>
        </p>
        <h1 class="mb-4">Meet Our Teachers</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Tulang Yunus</h4>
          <i>Music Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Bunda Puput</h4>
          <i>Language Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Uncle Jo</h4>
          <i>Social Science Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Pak Januarso</h4>
          <i>Science Teacher</i>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

@endsection
