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
                        <li><a href="{{ route('welcome') }}" class="active">Home</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Tabel Penerimaan Donasi Masjid Baiturrahaman</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="current">Tabel Penerimaan Donasi </li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
   <section id="portfolio-details" class="portfolio-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Tabel Penerimaan Donasi </h5> --}}
                                <div class="table-responsive ">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tex-center">No</th>
                                                <th scope="col" class="tex-center">Nama</th>
                                                <th scope="col" class="tex-center">Nominal Uang</th>
                                                <th scope="col" class="tex-center">Kategori</th>
                                                <th scope="col" class="tex-center">Tanggal Donasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $counter = 1 @endphp
                                            @foreach ($donasi as $d)
                                                <tr>
                                                    <th scope="row" class="tex-center">{{ $counter++ }}</th>
                                                    <td class="tex-center">
                                                        {{ htmlspecialchars($d->name, ENT_QUOTES, 'UTF-8') }}
                                                    </td>
                                                    <td class="tex-center">
                                                        {{ htmlspecialchars($d->nominal_uang, ENT_QUOTES, 'UTF-8') }}
                                                    </td>
                                                    <td class="tex-center">
                                                        {{ htmlspecialchars($d->kategori, ENT_QUOTES, 'UTF-8') }}
                                                    </td>
                                                    <td class="tex-center">
                                                        {{ $d->tgl_donasi ? \Carbon\Carbon::parse($d->tgl_donasi)->format('d-m-Y') : '-' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

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
   <a href="https://wa.me/6282123234253" id="whatsapp-link" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-whatsapp"></i>
</a>



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
    {{-- end --}}
    @section('scripts')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/umd/simple-datatables.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const dataTable = new simpleDatatables.DataTable(".datatable");
            });
        </script>
        {{-- chat wa --}}
       <script>
    document.getElementById('whatsapp-link').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah perilaku default
        window.open('https://wa.me/6282123234253', '_blank'); // Membuka WhatsApp di tab baru
    });
</script>


    </body>

    </html>
