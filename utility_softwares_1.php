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
                <h3>Cloud and Shadow Mask Utility </h3>
                <img src="assets/img/utility_soft/cloud-uim-1.jpg" alt="Cloud Shadow Mask">
                <p> Clouds in remote sensing images are a source of information in different ways. Clouds play a critical role in the climate system and have importance in the energy balance of the atmosphere. Cloud cover can also provide information related to weather conditions and predictions. In Optical remote sensing the data acquired is affected by the presence of cloud. For studying land resources, the clouds block the features beneath it. In such cases, information on cloud pixels is a necessity for feature extraction. Delineation of clouds and cloud shadows is an important pre-processing step. Any reliable cloud delineation algorithm makes use of thermal band in addition to visible bands. In the absence of thermal band for Resourcesat-2 AWiFS images, an algorithm based on unsupervised classification exploiting spectral attributes is developed for automatic cloud and cloud shadow detection. (1) <a href="assets/pdf/utility_soft/CloudMask.rar">Download</a> (2) <a href="assets/pdf/utility_soft/cloudShdMsk_Usermanual.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>SWIR Band synthesis utility for IRS Resourcesat-2 LISS-4 Mx Data</h3>
                <img src="assets/img/utility_soft/SWIR-uim-2.jpg" alt="SWIR Band">
                <p> SWIR band finds its uses in many applications (snow and cloud detection etc.), Resourcesat Series satellites carry LISS-4 sensor which provides data at a spatial resolution of 5.8m in 4, 3, 2 bands. The SWIR band of in LISS-4 is synthesized using the spatial and spectral knowledge from LISS-3. This module generates synthesized SWIR band at a spatial resolution of LISS-4, by taking the inputs as LISS-3 (Layer stacked as B234), LISS-4 (Layer stacked as B2345) images along with their Meta files. The module accepts inputs in Geo-Tiff format and provides output in Geo-Tiff format. The S/W module has been developed using the coefficients derived from spectral transformation method to establish a relationship between B234 and B345 of LISS-3 image and applying these coefficients on B234 of LISS-4 Image to derive synthesized SWIR band. (1) <a href="assets/pdf/utility_soft/SWIRSynthesis.rar">Download</a> (2) <a href="assets/pdf/utility_soft/SWIRBandSnthesis_UserManual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>Resourcesat-2 HDF to GeoTiff conversion Utility</h3>
                <img src="assets/img/utility_soft/hdf-uim-3.jpg" alt="HDF to GeoTIFF">
                <p> HDF stands for Hierarchical Data Format. HDF5 is a library and multi object file format for storing scientific data. HDF5 is a completely new Hierarchical Data Format, consisting of a data format specification and a supporting library implementation. It is freely available and designed to address some of the limitations of the older HDF format and also to address current and anticipated requirements of modern systems and applications. Two versions of HDF are currently in widespread use: HDF4 and HDF5. HDF5 is adopted as one of the formats for product dissemination from ISRO's earth observation satellite RESOURCESAT-2. The HDF to GeoTIFF Conversion utility developed to allow a user to convert HDF5 Level 2 RAD/Geo data products for RESOURCESAT-2 AWiFS, LISS3, LISS4 (Mono, Mx modes) sensors into GeoTiff format to facilitate users to use these data in other applications which does not support HDF. (1) <a href="assets/pdf/utility_soft/RS2HDF5ToGeotiff_Run_Linux32bit.rar">Download 32 Bit Linux Version</a> (2) <a href="assets/pdf/utility_soft/RS2HDF5ToGeotiff_Run_Linux64bit.rar">Download 64 Bit Linux Version</a> (3) <a href="assets/pdf/utility_soft/RS2HDF5ToGeotiff_windows32bit.rar">Download 32 Bit Windows Version</a> (4) <a href="assets/pdf/utility_soft/RS2HDF5ToGeotiff_Run_Windows64bit.rar">Download 64 Bit Windows Version</a> (5) <a href="assets/pdf/utility_soft/SWIRBandSnthesis_UserManual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_1.php', this)" class="page-link active">1</a>
                <a href="utility_softwares_2.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_2.php', this)" class="page-link">2</a>
                <a href="utility_softwares_3.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_3.php', this)" class="page-link">3</a>
                <a href="utility_softwares_4.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_4.php', this)" class="page-link">4</a>
                <a href="utility_softwares_5.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_5.php', this)" class="page-link">5</a>
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