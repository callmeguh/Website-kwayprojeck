<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KWAY PROJECT DECORATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/logonavbar.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <style>
        .team-item .position-relative.overflow-hidden img {
            height: 350px;
            /* Atur tinggi gambar sesuai kebutuhan Anda */
            width: auto;
            /* Biarkan lebar gambar menyesuaikan proporsi aslinya */
            object-fit: cover;
            /* Untuk memastikan gambar terisi dengan baik */
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a class="btn btn-sm-square bg-white text-primary me-0"
                        href="https://www.instagram.com/kway.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="{{ asset('template/img/logonavbar.jpg') }}" alt="Gambar mobil"
                    class="me-3" style="width: 40px; height: 35px;">KWAY PROJECT</h2><br>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
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
                <a href="{{ route('kontak') }}"
                    class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('template/img/background.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">- Decoration Rental -
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">professional decoration services ready to help you create beautiful moments in your life.</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                   <!--   <img class="img-fluid" src="{{ asset('template/img/desaintransparant.png') }}" 
                                        alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('template/img/sas-catalog.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">- Kway Project
                                        -</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Providing Event Decoration Services in the Jabotabek Area
                                    </h1>
                                </div>
                             <!--    <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('template/img/KWAY.jpg') }}" alt="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Service Start -->
    <div id="start-service" class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Pelayanan Berkualitas</h5>
                            <p>kami berkomitmen untuk memberikan pelayanan terbaik yang melebihi harapan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dikerjakan Oleh Ahli</h5>
                            <p>kami percaya bahwa setiap detail dalam dekorasi harus dikerjakan dengan keahlian dan ketelitian. Oleh karena itu,
                                 kami bangga mempersembahkan tim ahli kami yang siap memberikan yang terbaik untuk acara Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>kami selalu berusaha untuk memberikan hasil terbaik dengan 
                                menggunakan peralatan modern dan teknologi terbaru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- about start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ asset('template/img/about.jpg') }}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, 0.8);">
                            <h1 class="display-4 text-white mb-0">1+ <span class="fs-4">YEARS</span></h1>
                            <h4 class="text-white">EXPERIENCE</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">- About Us -</h6>
                    <h1 class="mb-4"><span class="text-primary">KWAY PROJECT</span><br>merupakan tempat terbaik untuk
                        menyewa dekorasi acara anda !!</h1>
                    <p class="mb-4">Kami adalah penyedia layanan dekorasi profesional yang siap membantu Anda 
                        mewujudkan momen-momen indah dalam hidup Anda. Dengan berbagai pilihan dekorasi yang 
                        elegan dan berkualitas, kami hadir untuk mempercantik acara Anda.
                        <br>
                    <h6>Kenapa Harus KWAY PROJECT? </h6>
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
                    <a href="https://wa.me/+6281319331947" target="_blank"
                        class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i
                            class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- Service Start -->
    <div class="container-xxl service py-5" id="servis">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">- Our Catalog -</h6>
                <h1 class="mb-5">Explore Our Catalogue</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        @foreach($service as $key => $services)
                            <button
                                class="nav-link w-100 d-flex align-items-center text-start p-1 mb-1 {{ $key === 0 ? 'active' : '' }}"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-{{$key + 1}}" type="button">
                                <i class="fa fa-inbox fa-2x me-3"></i>
                                <h4 class="m-0">{{$services->nama}}</h4>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach($service as $key => $services)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="tab-pane-{{$key + 1}}">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100"
                                                src="/gambar/{{$services->foto}}" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-4">{{$services->title}}</h4>
                                        <p class="mb-4">{{$services->deskripsi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
               <a href="https://wa.me/+6281319331947" target="_blank"
                    class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i
                        class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">- Our Testimony -</h6>
                <h1 class="mb-5">Our Expert Testimony</h1>
            </div>
            <div class="row g-4">
                @php $count = 0; @endphp
                @foreach($teknisi as $teknisi)
                    @php    $count++; @endphp
                    @if ($count <= 4)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="/gambar/{{$teknisi->gambar}}" alt="">
                                </div>
                                <div class="bg-light text-center p-4">
                                    <h5 class="fw-bold mb-0">{{$teknisi->nama}}</h5>
                                    <small>{{$teknisi->role}}</small>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="/gambar/{{$teknisi->gambar}}" alt="">
                                </div>
                                <div class="bg-light text-center p-4">
                                    <h5 class="fw-bold mb-0">{{$teknisi->nama}}</h5>
                                    <small>{{$teknisi->role}}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Team End -->


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
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.instagram.com/kway.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
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
                        &copy; <a class="border-bottom" href="#">KWAY PROJECT</a>, All Right Reserved.
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