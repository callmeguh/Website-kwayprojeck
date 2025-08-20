<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KWAY PROJECT DECORATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/logonavbar.jpg') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
                <div class="row gx-0 d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                            @foreach($location as $lokasi)
                            <small class="fa fa-map-marker-alt text-primary me-2"></small>
                            <small>{{$lokasi->lokasi}}</small>
                            @endforeach
                        </div>
                    <!--    <div class="h-100 d-inline-flex align-items-center py-3">
                            <small class="far fa-clock text-primary me-2"></small>
                            <small>SENIN - MINGGU : 08.30-16.30 WIB&nbsp;||&nbsp;JUMAT LIBUR</small>
                        </div> -->
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                            <small class="fa fa-phone-alt text-primary me-2"></small>
                            <small>+6281319331947</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/kway.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Topbar End -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="{{ asset('template/img/logonavbar.jpg') }}" alt="Gambar mobil" class="me-3" style="width: 40px; height: 35px;">KWAY PROJECT</h2><br>
        
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('service') }}" class="dropdown-item">Catalog</a>
                        <!-- <a href="{{ route('partchevy') }}" class="dropdown-item">Part</a> -->
                        <a href="{{ route('team') }}" class="dropdown-item">Testimony</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portofolio</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('partvespa') }}" class="dropdown-item">link to social media</a>
                    </div>
                </div>
                <a href="{{ route('kontak') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <!-- <a href="{{ route('dashboard') }}" id="loginBtn" class="btn btn-primary py-4 px-lg-5" target="_blank">Login<i class="fa fa-arrow-right ms-3"></i></a>
                <script>
                document.getElementById("loginBtn").addEventListener("click", function(event) {
                    var isAdmin = confirm("Apakah Anda yakin ingin masuk ke halaman login? Hanya admin yang dapat mengaksesnya.");
                    if (!isAdmin) {
                        event.preventDefault(); // Menghentikan tindakan bawaan dari tombol login
                    }
                });
                </script> -->
        </div>
    </nav>
    <!-- Navbar End -->



<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('template/img/background.jpg') }});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<!-- Page Header End -->


<!-- about start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('template/img/logonavbar.jpg') }}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, 0.8);">
                            <h1 class="display-4 text-white mb-0">1+ <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">- About Us -</h6>
                    <h1 class="mb-4"><span class="text-primary">KWAY PROJECT</span><br>merupakan tempat terbaik untuk
                        menyewa dekorasi acara anda !!</h1>
                    <p class="mb-4">Kami adalah penyedia layanan dekorasi profesional yang siap membantu Anda mewujudkan momen-momen indah dalam hidup Anda. Dengan berbagai pilihan dekorasi yang elegan dan berkualitas, kami hadir untuk mempercantik acara Anda.


                        <br>
                        <h6>Kenapa Harus Kway Project? </h6>
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Pengalaman dan Keahlian</h6>
                                    <span>Dengan bertahun-tahun pengalaman dalam industri dekorasi, tim kami memiliki keahlian dan 
                                        pengetahuan untuk menghadirkan dekorasi yang sempurna untuk setiap acara.</span>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Kreativitas Tanpa Batas</h6>
                                        <span>Kami selalu berusaha untuk berinovasi dan membawa ide-ide segar ke setiap proyek. Dari tema klasik hingga modern, 
                                            kami dapat menyesuaikan dekorasi sesuai dengan visi Anda.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Pelayanan Pelanggan yang Luar Biasa</h6>
                                        <span>Kami mengutamakan kepuasan pelanggan dan berkomitmen untuk memberikan layanan yang ramah dan profesional.
                                             Tim kami selalu siap membantu dan menjawab setiap pertanyaan Anda.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">04</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Kualitas Terbaik</h6>
                                    <span>Kami menggunakan bahan-bahan berkualitas tinggi untuk memastikan dekorasi yang indah dan tahan lama.
                                         Setiap detail diperhatikan dengan seksama untuk memberikan hasil yang memukau.</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">05</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Harga yang Kompetitif</h6>
                                    <span>Kami menawarkan harga yang bersaing tanpa mengorbankan kualitas. Dengan berbagai paket yang dapat disesuaikan,
                                         kami memastikan Anda mendapatkan nilai terbaik untuk setiap anggaran.</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">06</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Waktu Penyelesaian yang Tepat</h6>
                                    <span>Kami menghargai waktu Anda dan selalu berusaha untuk menyelesaikan setiap proyek tepat waktu,
                                         sehingga Anda bisa fokus pada hal-hal lain yang lebih penting.</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="https://wa.me/+6281319331947" class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->



    
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    @foreach($location as $lokasi)
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$lokasi->lokasi}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281319331947</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>puja.purwaningsih@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/kway.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Free Transport</h4>
                    <h6 class="text-light">Under 5 KM</h6>
                    <p class="mb-4">Next 50K/KM</p>
                    <h6 class="text-light">Start From Cluster Agung Indah Panongan</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="#servis">Engagement Decorations</a>
                    <a class="btn btn-link" href="#servis">Birthday Decorations</a>
                    <a class="btn btn-link" href="#servis">Aqiqah Decorations</a>
                    <a class="btn btn-link" href="#servis">Thanksgiving Decorations</a>
                    <a class="btn btn-link" href="#servis">Reunion Decorations</a>
                    <a class="btn btn-link" href="#servis">Money Bouquet</a>
                    <a class="btn btn-link" href="#servis">Flower Bouquet</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">KWAY PROJECK</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://www.instagram.com/lembayungsenja_06?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">Teguh Muhamad Ridhuwan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>