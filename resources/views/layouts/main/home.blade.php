<!DOCTYPE html>
<html lang="id" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>SABar School | Sekolah Alam Baturaden</title>
    <meta name="title" content="SABar School | Sekolah Alam Baturaden">
    <meta name="description" content="SABar School di Purwokerto, Jawa Tengah, adalah sekolah berkualitas yang menawarkan pendidikan terbaik untuk jenjang SD, SMP, dan SMA. Kami berkomitmen untuk menciptakan lingkungan belajar yang mendukung, inovatif, dan akademis guna mempersiapkan siswa meraih kesuksesan di masa depan. Terletak di kawasan sejuk Baturaden, Purwokerto, SABar School menjadi pilihan tepat bagi orang tua yang mencari pendidikan unggulan dengan pendekatan holistik.">
    <meta name="keywords" content="sekolah di Purwokerto, sekolah Jawa Tengah, pendidikan, sekolah dasar, sekolah menengah, SMA, SMP, SD, sekolah berkualitas, sekolah terbaik di Purwokerto, best elementary school in Purwokerto, top junior high school Central Java, best high school in Jawa Tengah, affordable school in Purwokerto, environmental education school, green school in Indonesia, alternative education Indonesia, experiential learning school, character-based education, nature-based learning, outdoor education Indonesia, sekolah ramah lingkungan, sekolah berbasis karakter, sekolah berbasis alam di Jawa Tengah, pendidikan inovatif di Indonesia, metode pembelajaran kreatif, sekolah unggulan di Purwokerto, sekolah dengan pendekatan alam, pendidikan berkualitas di Indonesia, sekolah alam baturaden, sekolah alam purwokerto, sekolah alam jawa tengah">
    <meta name="author" content="SABar School">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://preview.sabarschool.com">
    <meta property="og:title" content="SABar School | Sekolah Alam Baturaden">
    <meta property="og:description" content="SABar School di Purwokerto, Jawa Tengah, menawarkan pendidikan berkualitas tinggi untuk SD, SMP, dan SMA dengan pendekatan alam dan berbasis karakter.">
    <meta property="og:image" content="{{asset("assets/img/seo/seo_image.png")}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://preview.sabarschool.com">
    <meta name="twitter:title" content="SABar School | Sekolah Alam Baturaden">
    <meta name="twitter:description" content="SABar School di Purwokerto, Jawa Tengah, menawarkan pendidikan berkualitas tinggi untuk SD, SMP, dan SMA dengan pendekatan alam dan berbasis karakter.">
    <meta name="twitter:image" content="{{asset("assets/img/seo/seo_image.png")}}">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Preconnect & Preload for Performance -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/lib/homepage/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/homepage/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/homepage/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/style.css') }}">
</head>


<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
                <img src="{{ asset('assets/img/homepage/logo-sabar.png') }}" style="width: 50px; height: 50px" alt="sabarlogo">
                <span class="text-primary custom-font">SABar</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{ url('') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('class') }}" class="nav-item nav-link">Classes</a>
                    <a href="{{ url('team') }}" class="nav-item nav-link">Teachers</a>
                    <a href="{{ url('gallery') }}" class="nav-item nav-link">Gallery</a>
                    <a href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{ url('/login') }}" class="btn btn-primary px-4">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- Container -->
    @yield('container')
    <!-- Container End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px">
                    <img src="{{ asset('assets/img/homepage/logo-sabar.png') }}" style="width: 50px; height: 50px" alt="sabarlogo">
                    <span class="text-white custom-font">SABar</span>
                </a>
                <p>
                    Purwokerto Life School adalah sister school concept dari Sekolah Alam Baturraden, dibawah entitas
                    SABar School dan Yayasan Masyarakat Madani Indonesia Baru.
                </p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="https://youtube.com/@sekolahalambaturraden9215"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="https://www.instagram.com/purwokertolifeschool"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="https://www.facebook.com/people/Pkbm-Alam-Purwokerrto/100074409699582/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>Purwokerto, Banyumas, Indonesia</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>purwokertolifeschool@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>(+62) 812-2005-0121</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Contact Us</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                            required="required" />
                    </div>
                    <div>
                        <a href="https://wa.me/6281220050121" class="btn btn-primary btn-block border-0 py-3">Send Message</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
            <p class="m-0 text-center text-white">
                &copy;
                <a class="text-primary font-weight-bold" href="#">SpaceCloud™</a>
                All Rights Reserved |

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed by
                <a class="text-primary font-weight-bold" href="https://spccloud.tanataone.com">SpaceCloud
                    Development</a>
                <br />Distributed By:
                <a href="https://spccloud.tanataone.com" target="_blank">Ivan Tanata</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/homepage/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/homepage/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/homepage/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/homepage/lightbox/js/lightbox.min.js') }}"></script>

    {{-- <!-- Contact Javascript File -->
    <script src="{{ asset('assets/lib/homepage/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="mail/contact.js"></script> --}}

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/homepage/main.js') }}"></script>
    <style>
        @font-face {
            font-family: 'Wishlist2009';
            src: url('/assets/font/Wishlist2009Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .custom-font {
            font-family: 'Wishlist2009', sans-serif;
        }

    </style>
</body>

</html>
