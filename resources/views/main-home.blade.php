<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Waste App</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <style>
        #map {
            width: 100%;
            height: 500px;
        }

    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />

    <!-- =======================================================
  * Template Name: Ninestars
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>Waste App</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Tempat Sampah</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>#MariBudayakan #BersihPangkalSehat</h1>
                    <h2>Ayo Budayakan Untuk Membuang Sampah Kamu Pada Tempat Yang Sudah di Sediakan.</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Lihat Tempat Sampah Sekitar</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('frontend/assets/img/hero-img.svg') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center about-img">
                    <div id="map"></div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Jenis Sampah</h2>
          <p>Contoh Jenis Sampah</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-general">Umum</li>
              <li data-filter=".filter-paper">Kertas</li>
              <li data-filter=".filter-plastic">Plastik</li>
              <li data-filter=".filter-glass">Kaleng & Kaca</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://www.conserve-energy-future.com/wp-content/uploads/2021/07/tissue-paper.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://www.conserve-energy-future.com/wp-content/uploads/2021/07/tissue-paper.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tisu"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Tisu</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://i0.wp.com/barisan.co/wp-content/uploads/2021/06/ashtray-pack-cigarettes_23-2148585878.jpeg?fit=626%2C417&ssl=1" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://i0.wp.com/barisan.co/wp-content/uploads/2021/06/ashtray-pack-cigarettes_23-2148585878.jpeg?fit=626%2C417&ssl=1" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bungkus dan Puntung Rokok"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Bungkus dan Puntung Rokok</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://grist.org/wp-content/uploads/2015/01/styrofoam-garbage1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://grist.org/wp-content/uploads/2015/01/styrofoam-garbage1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Styrofoam"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Styrofoam</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://www.universaleco.id/uploads/content/majun.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://www.universaleco.id/uploads/content/majun.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kain Bekas dan Sejenisnya"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Kain Bekas dan Sejenisnya</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://greeneration.org/en/wp-content/uploads/2022/07/Sampah-Masker-Bekas-Pakai-624x351-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://greeneration.org/en/wp-content/uploads/2022/07/Sampah-Masker-Bekas-Pakai-624x351-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Masker Non Medis"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Masker Non Medis</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2018/05/03/5aeaa6211351a-kertas-pembungkus-nasi_665_374.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://thumb.viva.co.id/media/frontend/thumbs3/2018/05/03/5aeaa6211351a-kertas-pembungkus-nasi_665_374.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bungkus Nasi"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Bungkus Nasi</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-general">
            <div class="portfolio-wrap">
              <img src="https://panmomo.com/uploads/images/products/gelpen_ballpoint_todayscolor_01_960.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://panmomo.com/uploads/images/products/gelpen_ballpoint_todayscolor_01_960.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ballpoint dan Spidol"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Ballpoint dan Spidol</h4>
                <p>Sampah Umum</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-paper">
            <div class="portfolio-wrap">
              <img src="https://dikemas.com/uploads/2021/07/BISNIS-UKM-2-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://dikemas.com/uploads/2021/07/BISNIS-UKM-2-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Boks Makanan"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Boks Makanan</h4>
                <p>Sampah Kertas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-paper">
            <div class="portfolio-wrap">
              <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/ideafoto/original/8158_5-langkah-mengurangi-sampah-kemasan.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/ideafoto/original/8158_5-langkah-mengurangi-sampah-kemasan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kotak Minuman"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Kotak Minuman</h4>
                <p>Sampah Kertas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-plastic">
            <div class="portfolio-wrap">
              <img src="https://akcdn.detik.net.id/visual/2019/11/21/f0d74245-1ec4-4aa8-b131-de905537c69a_169.jpeg?w=650" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://akcdn.detik.net.id/visual/2019/11/21/f0d74245-1ec4-4aa8-b131-de905537c69a_169.jpeg?w=650" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Botol Plastik"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Botol Plastik</h4>
                <p>Sampah Plastik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-plastic">
            <div class="portfolio-wrap">
              <img src="https://img.okezone.com/content/2020/07/04/320/2241282/fakta-larangan-kantong-plastik-di-dki-jakarta-ancaman-denda-rp25-juta-d81ROXaCtV.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://img.okezone.com/content/2020/07/04/320/2241282/fakta-larangan-kantong-plastik-di-dki-jakarta-ancaman-denda-rp25-juta-d81ROXaCtV.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kantong Plastik"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Kantong Plastik</h4>
                <p>Sampah Plastik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-plastic">
            <div class="portfolio-wrap">
              <img src="https://envira.id/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-13-at-17.05.59.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://envira.id/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-13-at-17.05.59.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Snack"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Snack</h4>
                <p>Sampah Plastik</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-glass">
            <div class="portfolio-wrap">
              <img src="https://gdb.voanews.com/B55C3C50-1122-4BEC-8843-24F10A4A09CE_w1200_r1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://gdb.voanews.com/B55C3C50-1122-4BEC-8843-24F10A4A09CE_w1200_r1.jpg0" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kaleng"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Kaleng</h4>
                <p>Sampah Kaleng & Kaca</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-glass">
            <div class="portfolio-wrap">
              <img src="https://siapdarling.id/uploads/infodarling/banner_20221205101726_template_image_detail__(2).png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://siapdarling.id/uploads/infodarling/banner_20221205101726_template_image_detail__(2).png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kaca"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Kaca</h4>
                <p>Sampah Kaleng & Kaca</p>
              </div>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Waste App</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Leaflet.js -->
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        let map, markers = [];
        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            navigator.geolocation.getCurrentPosition(
                (position) => {

                    const latPosition = position.coords.latitude;
                    const lngPosition = position.coords.longitude;

                    map = L.map('map', {
                        center: {
                            lat: latPosition,
                            lng: lngPosition,
                        },
                        zoom: 12
                    });

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap'
                    }).addTo(map);

                    initMarkers();

                }
            );
        }
        initMap();

        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($getJsonLocations); ?> ;

            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(
                    `<b>Location Name: </b>${data.position.location_name} <br/> <a href='report/${data.position.id}' class='btn btn-danger btn-sm'>Report the trash can is full</a>`
                );
                map.panTo(data.position);
                markers.push(marker)
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                    draggable: data.draggable
                })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked($event, index) {

        }

    </script>
</body>

</html>
