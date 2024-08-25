<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Masjid Baiturrahman Puri 2</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-mjb.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Vuetify CSS -->
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">
    <div class="loader">
        <div class="loader-text"></div>
        <div class="dots-container">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-cente" style="background-color: rgb(24, 152, 24)">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">
                        <img src="assets/img/logo-mjb.png" alt="">
                        MJB Puri 2
                    </h1>

                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">Pembangunan</a></li>
                        {{-- <li><a href="#services">Sumber Dana</a></li> --}}
                        <li><a href="#pembangunan">Denah & Schedule Pembangunan </a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1 style="color: green">Pembangunan <span>Masjid Baiturrahman Puri 2</span></h1>
                        <div class="d-flex">
                            <a href="{{ route('login') }}" class="btn-get-started">Login</a>
                            <a href="assets/video/video.mp4"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Denah 3D</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->



        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pembangunan</h2>
                <p><span>Pembangunan</span> <span class="description-title">Masjid Baiturrahman</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        {{-- <img src="assets/img/sampul-mjb.png" alt="" class="img-fluid"> --}}
                        <!-- Slides with indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/sampul-mjb.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/gambar2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/gambar3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div><!-- End Slides with indicators -->

                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Assalamu' alaikum Warahmautullahi Wabarakatuh.</h3>
                            <p class="fst-italic">
                                Alhamdulillahi rabbil 'alamin, segala puji hanya kepada Allah SWT. Sholawat dan salam
                                semoga selalu tercurahkan keharibaan Baginda Nabi besar Muhammad Saw, kepada
                                keluarganya, sahabatnya dan mudah-mudahan kita sebagai umatnya mendapatkan syafa'atnya
                                di yaumul qiyamah nanti, Aamiin ya rabbal alamin.
                            </p>
                            <ul>
                                <li>
                                    <i class="bi bi-diagram-3" style="color: green"></i>
                                    <div>
                                        <h4>Renovasi Masjid Ja'mi Baiturrahman: Mewujudkan Kenyamanan Beribadah bagi
                                            1100 KK di Puri Kosambi 2</h4>
                                        <p>Dengan semakin bertambah dan berkembangnya jamaah masjid jalmi Baiturrahman
                                            dilingkungan puri kosambi 2 yang sebagian besar adalah warga muslim dengan
                                            jumlah 1100 KK melalui rapat DKM telah disepakati oleh pengurus DKM dan
                                            jamaah untuk melakukan renovasi masjid dengan target pencapaian meliputi
                                            penambahan lantai utama masjid dari 1 lantai menjadi 2 lantai.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-fullscreen-exit"style="color: green"></i>
                                    <div>
                                        <p>Berdasarkan dari pertimbangan diatas, maka peletakan batu pertama pembangunan
                                            Masjid Baiturrahman Puri 2 akan dilaksanakan pada tanggal 15 Juli 2024 oleh
                                            <strong> Bupati Karawang H. Aep Syaepuloh S.E</strong> beserta jajarannya.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <p>
                                Semoga Allah SWT senantiasa memberikan keleluasan dan keberkahan rezeki kepada kita
                                semua sehingga kita dapat melakukan amal soleh yang akan menjadi pemberat timbangan
                                kebaikan kita di yaumul qiyamah, Aamiin ya rabbal alamin..
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f5f8fd" fill-opacity="1"
                d="M0,128L30,138.7C60,149,120,171,180,154.7C240,139,300,85,360,80C420,75,480,117,540,149.3C600,181,660,203,720,186.7C780,171,840,117,900,80C960,43,1020,21,1080,26.7C1140,32,1200,64,1260,64C1320,64,1380,32,1410,16L1440,0L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-xl-4 col-md-8 d-flex justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"> <i class="bi bi-wallet2" style="color: green"></i></div>
                            <h4><a href="{{ route('tbl-donasi') }}" class="stretched-link">Tabel Donasi</a></h4>
                            <p>Tabel Penerimaan Donasi Masjid Baiturrahman Puri 2</p>
                        </div>
                    </div><!-- End Service Item -->


                    <div class="col-xl-4 col-md-8 d-flex justify-content-center" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-gift" style="color: green"></i></div>
                            <h4><a href="#" class="stretched-link" data-toggle="modal"
                                    data-target="#donasiModal">Open Donasi</a></h4>
                            <p>Sekecil apapun donasi Anda, akan sangat berarti bagi kami. Mari bersama-sama
                                membangun rumah Allah yang akan menjadi ladang pahala dan manfaat bagi kita
                                semua.</p>
                        </div>
                    </div>

                    {{-- modal donasi --}}

                    <div class="modal fade" id="donasiModal" tabindex="-1" aria-labelledby="donasiModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="donasiModalLabel">Open Donasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="v-responsive v-img">
                                        <img class="v-img__img v-img__img--contain" src="/assets/img/mandiri.png"
                                            style="width: 30%;">
                                    </div>
                                    <div class="ma-4">
                                        <div class="mb-4 d-flex justify-content-between">
                                            <p class="my-auto">No Rek: 173-00-6778888-6</p>
                                            <button class="btn btn-primary"
                                                onclick="copyToClipboard('173-00-6778888-6')">Copy</button>
                                        </div>
                                        <p>A/N : Masjid Baiturrahman</p>
                                    </div>
                                    <div class="card text-blue p-4 ">
                                        <div>Note:</div>
                                        <div>Setelah transfer donasi, mohon beritahu bendahara kami.</div>
                                    </div>
                                    <div class="card bg-light p-4 mt-2">
                                        <div class="text-green">
                                            <div class="mb-2">Bendahara: </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="my-auto">Herman Haidi</div>
                                                <button class="btn btn-success" onclick="contactWhatsApp()"><i
                                                        class="bi bi-whatsapp"></i> WhatsApp</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal --}}
                </div>

            </div>

            </div>

        </section>
        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-12">

                    <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-cash" style="color:green"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end=" {{ $totalDonasi ?? 'N/A' }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Total Dana</p>
                        </div>
                    </div><!-- End Stats Item -->


                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Portfolio Section -->
        <section id="pembangunan" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Denah & Schedule Pembangunan</h2>
                <p><span>Denah & Schedule&nbsp;</span> <span class="description-title"> Pembangunan MJB</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Denah</li>
                        <li data-filter=".filter-product">Schedule</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- schedule 1 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assets/img/Schedule1.jpg') }}" class="img-fluid"
                                alt="Schedule Pembangunan">
                            <div class="portfolio-info">
                                <h4>Schedule Pembangunan</h4>
                                <p>Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2 Ds. Duren, Kec. Klari,
                                    Karawang.</p>
                                <a href="{{ asset('assets/img/Schedule1.jpg') }}" title="Schedule Pembangunan"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 1 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb1.jpg') }}" class="img-fluid" alt="Tampak depan">
                            <div class="portfolio-info">
                                <h4>Tampak depan</h4>
                                <p>Tampak depan, Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2 Ds.
                                    Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb1.jpg') }}" title="Tampak Depan"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- schedule 2 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assets/img/Schedule2.jpg') }}" class="img-fluid"
                                alt="Schedule Pembangunan">
                            <div class="portfolio-info">
                                <h4>Schedule Pembangunan</h4>
                                <p>Jadwal Pelaksanaan Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2 Ds.
                                    Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/Schedule2.jpg') }}" title="Schedule Pembangunan"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 2 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb2.jpg') }}" class="img-fluid"
                                alt="Tampak samping">
                            <div class="portfolio-info">
                                <h4>Tampak samping</h4>
                                <p>Tampak samping, Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2 Ds.
                                    Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb2.jpg') }}" title="Tampak samping"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->



                        <!-- denah 3 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb3.jpg') }}" class="img-fluid"
                                alt="Tampak samping">
                            <div class="portfolio-info">
                                <h4>Tampak samping</h4>
                                <p>Tampak samping, Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2 Ds.
                                    Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb3.jpg') }}" title="Tampak samping"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 4 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb4.jpg') }}" class="img-fluid"
                                alt="Layout Ploting Area">
                            <div class="portfolio-info">
                                <h4>Layout Ploting Area</h4>
                                <p>Layout Ploting Area, Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2
                                    Ds. Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb4.jpg') }}" title="Layout Ploting Area"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 5 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb5.jpg') }}" class="img-fluid"
                                alt="Layout Rencana Foot Plat dan Bore Pile">
                            <div class="portfolio-info">
                                <h4>Layout Rencana Foot Plat dan Bore Pile</h4>
                                <p>Layout Rencana Foot Plat dan Bore Pile, Pembangunan Mesjid Jami Baiturrahman
                                    Perumahan Puri Kosambi 2 Ds. Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb5.jpg') }}"
                                    title="Layout Rencana Foot Plat dan Bore Pile"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 6 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb6.jpg') }}" class="img-fluid"
                                alt="Rencana Kolom Struktur">
                            <div class="portfolio-info">
                                <h4>Rencana Kolom Struktur .</h4>
                                <p>Rencana Kolom Struktur., Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi
                                    2 Ds. Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb6.jpg') }}" title="Rencana Pondasi Sloof"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 7 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb7.jpg') }}" class="img-fluid"
                                alt="Rencana Kolom Struktur Lt. 1">
                            <div class="portfolio-info">
                                <h4>Rencana Kolom Ring Blok</h4>
                                <p>Rencana Ring Balok (Ev. 4,50 mtr untuk Balok B1 & Ev. 4,30 mtr untuk Balok B2.).</p>
                                <a href="{{ asset('assets/img/denah_mjb7.jpg') }}"
                                    title="Rencana Kolom Struktur Lt. 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <!-- denah 8 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assets/img/denah_mjb8.jpg') }}" class="img-fluid"
                                alt="Rencana Pondasi Sloof">
                            <div class="portfolio-info">
                                <h4>Rencana Pondasi Sloof</h4>
                                <p>Rencana Pondasi Sloof, Pembangunan Mesjid Jami Baiturrahman Perumahan Puri Kosambi 2
                                    Ds. Duren, Kec. Klari, Karawang.</p>
                                <a href="{{ asset('assets/img/denah_mjb8.jpg') }}"
                                    title="Rencana Kolom Struktur Lt. 2" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->
                </div>


            </div>

        </section><!-- /Portfolio Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Puri Kosambi 2, Duren, Klari, Duren, Kec. Klari, Karawang, Jawa Barat 41371</p>
                                </div>
                            </div><!-- End Info Item -->

                            <a href="https://wa.me/6282123234253" class="info-item d-flex" data-aos="fade-up"
                                data-aos-delay="300" target="_blank">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 821-2323-4253</p>
                                </div>
                            </a>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63447.882135497326!2d107.29441586953125!3d-6.330157691358162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6976a8bfe263d9%3A0x65f7af3cbeffd912!2sMasjid%20Jami%20Baiturrahman!5e0!3m2!1sid!2sid!4v1722268585590!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="{{ route('pesan.store') }}" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="10" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: '{{ session('success') }}',
                                    })
                                </script>
                            @endif

                            @if ($errors->any())
                                <script>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        html: '{!! implode('<br>', $errors->all()) !!}',
                                    })
                                </script>
                            @endif
                        </form>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">


        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Salman fauzi</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://muhsalfazi-profile.netlify.app/">MuhSalfazi</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    {{-- loader website --}}
    <script>
        // JavaScript untuk menyembunyikan loader setelah halaman selesai dimuat
        window.addEventListener('load', function() {
            document.querySelector('.loader').style.display = 'none';
            document.querySelector('.content').style.display = 'block';
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- contact bendahara --}}
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Nomor REK telah disalin ke clipboard.');
            }, function() {
                alert('Failed to copy No Rek.');
            });
        }

        function contactWhatsApp - () {
            window.open('https://wa.me/6281297412347', '_blank');
        }
    </script>


</body>

</html>
