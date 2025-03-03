@extends('layouts.main.home')
@section('container')
  <!-- Header Start -->
  <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
      <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0 custom-font">Sekolah Alam Baturraden - Purwokerto Life School</h4>
        <h1 class="display-3 font-weight-bold text-white">
          Mengembangkan Life Skills Siswa
        </h1>
        <p class="text-white mb-4">
          Menghasilkan lulusan dengan standar berakhlak mulia, memiliki logika berpikir yang baik, berjiwa pemimpin dan berjiwa bisnis.
        </p>
        <a href="https://docs.google.com/" class="btn btn-secondary mt-1 py-3 px-5">Trial Class</a>
        <a href="https://wa.me/6281220050121" class="btn btn-primary mt-1 py-3 px-5">Contact Us</a>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="{{ asset('assets/img/homepage/header.png') }}" alt="" />
      </div>
    </div>
  </div>
  <!-- Header End -->

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
            <span class="custom-font">SABar</span> School memiliki Program Pendidikan yang difokuskan terhadap Logika, Akhlak dan Life Skills Siswa, untuk menciptakan pribadi siswa yang unggul.
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

<!-- Team Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Our Founder</span>
      </p>
      <h1 class="mb-4">Founder of School</h1>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
          <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
          <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <h4>Dr. Mira Purnamasari S</h4>
        <i>Founder</i>
      </div>
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
          <img class="img-fluid w-100" src="{{ asset('assets/img/homepage/foto.jpg') }}" alt="" />
          <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <h4>Anas Rosyadi, S.E.</h4>
        <i>Founder</i>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


  <!-- Testimonial Start -->
  <div class="container-fluid py-5">
    <div class="container p-0">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Testimonial</span>
        </p>
        <h1 class="mb-4">What Parents Say!</h1>
      </div>
      <div class="owl-carousel testimonial-carousel">
        <div class="testimonial-item px-3">
          <div class="bg-light shadow-sm rounded mb-4 p-4">
            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
            "SABar School sangat memperhatikan perkembangan anak saya. Dia jadi lebih percaya diri dan aktif."
          </div>
          <div class="d-flex align-items-center">
            <img class="rounded-circle" src="{{ asset('assets/img/homepage/foto.jpg') }}" style="width: 70px; height: 70px" alt="Image" />
            <div class="pl-3">
              <h5>Budi Santoso</h5>
              <i>Orang Tua Siswa</i>
            </div>
          </div>
        </div>
        <div class="testimonial-item px-3">
          <div class="bg-light shadow-sm rounded mb-4 p-4">
            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
            "Kami sangat puas dengan kualitas pendidikan di SABar School. Anak kami selalu semangat bersekolah."
          </div>
          <div class="d-flex align-items-center">
            <img class="rounded-circle" src="{{ asset('assets/img/homepage/foto.jpg') }}" style="width: 70px; height: 70px" alt="Image" />
            <div class="pl-3">
              <h5>Lestari Widjaja</h5>
              <i>Orang Tua Siswa</i>
            </div>
          </div>
        </div>
        <div class="testimonial-item px-3">
          <div class="bg-light shadow-sm rounded mb-4 p-4">
            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
            "Lingkungan yang ramah dan guru yang profesional membuat anak saya merasa nyaman dan senang belajar."
          </div>
          <div class="d-flex align-items-center">
            <img class="rounded-circle" src="{{ asset('assets/img/homepage/foto.jpg') }}" style="width: 70px; height: 70px" alt="Image" />
            <div class="pl-3">
              <h5>Projo Pangestu</h5>
              <i>Orang Tua Siswa</i>
            </div>
          </div>
        </div>
        <div class="testimonial-item px-3">
          <div class="bg-light shadow-sm rounded mb-4 p-4">
            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
            "SABar School berhasil membentuk karakter anak saya menjadi lebih baik. Terima kasih atas dedikasinya!"
          </div>
          <div class="d-flex align-items-center">
            <img class="rounded-circle" src="{{ asset('assets/img/homepage/foto.jpg') }}" style="width: 70px; height: 70px" alt="Image" />
            <div class="pl-3">
              <h5>Andi Setiawan</h5>
              <i>Orang Tua Siswa</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <!-- Blog Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Latest Blog</span>
        </p>
        <h1 class="mb-4">Latest Articles From Blog</h1>
      </div>
      <div class="row pb-3">
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/semangat.JPG') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
              <h4 class="">Ajaran Baru, Semangat Baru</h4>
              <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Introduction</small>
                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
              </div>
              <p>
                Mari sambut tahun ajaran baru dengan semangat dan harapan baru di SABar School.
                Dalam blog ini, kita akan membahas bagaimana kita bisa memanfaatkan kesempatan ini untuk mencapai tujuan akademis dan pribadi.
              </p>
              <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/mimpi.jpg') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
              <h4 class="">Menggapai Mimpi Bersama</h4>
              <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Introduction</small>
                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
              </div>
              <p>
                Di SABar School, kami percaya bahwa setiap siswa memiliki potensi untuk meraih mimpi-mimpinya.
                Blog ini akan mengeksplorasi cara-cara kita bisa bekerja sama untuk membantu setiap siswa mencapai cita-citanya.
              </p>
              <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/homepage/peluang.JPG') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
              <h4 class="">Ajaran Baru, Peluang Baru</h4>
              <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Introduction</small>
                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
              </div>
              <p>
                Tahun ajaran baru membawa banyak peluang untuk belajar dan berkembang.
                Dalam blog ini, kita akan melihat bagaimana kita bisa memanfaatkan setiap peluang untuk mencapai kesuksesan di sekolah dan dalam kehidupan.
              </p>
              <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog End -->


  @endsection
