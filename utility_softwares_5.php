<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Utility Software</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      .container li {
        font-size: 24px;
        color: #3f68b5;
      }

      .heading-title {
        word-break: break-word;
      }

      @media (max-width: 768px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
      }

      .main-content {
        flex: 1;
        min-width: 60%;
        padding-right: 30px;
      }

      .breadcrumb {
        padding: 10px 20px;
        font-size: 14px;
        color: #666;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .section img {
        float: left;
        margin-right: 15px;
        width: 190px;
        height: 190px;
        object-fit: cover;
      }

      .section p {
        text-align: justify;
        font-size: 20px;
      }

      .section a {
        color: blue;
        text-decoration: none;
        margin-right: 10px;
      }

      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Utility Software</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>Utility Software</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="IP-main" id="IP-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <div class="section">
                <h3>MUlti DATe Registration [MUDAT]</h3>
                <img src="assets/img/utility_soft/risat-13.jpg" alt="MUlti DATe Registration [MUDAT]">
                <p> MUDAT is a software package developed at AIPD/DPSG/SIPA, Space Applications Centre, Indian Space Research Organiation for registration of RISAT-1 multidate data. The utility performs registration of RISAT-1 Level-2 Georeferenced multidate products to the reference product and hence generates other dates registered products by resampling. The registered products are generated in the same format [CEOS / GeoTIFF] as the original product. <br /> (1) <a href="assets/pdf/utility_soft/MUDAT_V1.zip">Download</a> (2) <a href="assets/pdf/utility_soft/MUDAT_User_Manual_V1.0.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>PRIME WIN</h3>
                <img src="assets/img/utility_soft/primewin-14.jpg" alt="PRIME WIN">
                <p> PRIME WIN is an indigenous image processing package developed by RRSC, Nagpur, NRSC. The package envisages to encompass the most frequently used functionalities of digital image processing. The packages uses open source raster data structure 'GeoTiff' and handles all data types 8 – 32 bit, gray scale and palate color images. Shapefiles are used for handling vector data. (1) <a href="assets/pdf/utility_soft/primewinbrochure.pdf" target="_blank">Download Brochure</a> (2) <a href="assets/pdf/utility_soft/disk1.rar">Download PRIME WIN</a> (3) <a href="assets/pdf/utility_soft/pwsampledata.rar">Download Sample Data</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>Bhuvan App</h3>
                <img src="assets/img/utility_soft/mbhu_mobile-15.png" alt="Bhuvan App">
                <p> Bhuvan is accessible in smart phones. The major feature is 'Locate & Track' the position besides Visualization of High Resolution datasets. (1) <a href="assets/pdf/utility_soft/bhuvan.apk">Download</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>RISAT-1 CEOS products Extractor</h3>
                <img src="assets/img/utility_soft/risat2-16.jpg" alt="RISAT-1 CEOS products Extractor">
                <p> RISAT-1 CEOS products Extractor executable can be used to extract RISAT-1 CEOS products. <br /> (1) <a href="assets/pdf/utility_soft/SARC-View_v4.rar">Download</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="pagination">
                <a href="utility_softwares_1.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_1.php', this)" class="page-link">1</a>
                <a href="utility_softwares_2.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_2.php', this)" class="page-link">2</a>
                <a href="utility_softwares_3.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_3.php', this)" class="page-link">3</a>
                <a href="utility_softwares_4.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_4.php', this)" class="page-link">4</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_5.php', this)" class="page-link active">5</a>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Utility Software');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

    document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>