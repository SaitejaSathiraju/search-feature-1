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
                <h3>Image Fusion Utility </h3>
                <img src="assets/img/utility_soft/fusion-uim-4.jpg" alt="Image Fusion Utility">
                <p> Image fusion is the process of combining High spatial resolution panchromatic data with Low spatial resolution multispectral data to get High spatial and spectral resolution fused output. For improving the spatial resolution with improved spectral resolution several fusion methods are being used based on the requirements from the user. The widely used Fusion methods like Brovey, IHS and Synthetic Variable Ratio (SVR), High pass Filtering (HPF), YIQ fusion methods are provided as fusion techniques in this utility. The tool is platform independent and implemented using JAVA and GDAL libraries to support various file formats. (1) <a href="assets/pdf/utility_soft/ImageFusion.rar">Download</a> (2) <a href="assets/pdf/utility_soft/ImageFusion_UserManual.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>Image Viewer Utility</h3>
                <img src="assets/img/utility_soft/viewer-uim-5.jpg" alt="Image Viewer Utility">
                <p> Remote sensing satellites view the earth in different spectral bands, viz. near infrared (NIR), red, green, and blue bands and provides images at various spatial, radiometric and temporal resolutions. For visualizing these images an image viewer with capability of minimum radiometric enhancements is required. The Image viewer S/W module has been developed using the Open source Map windows software using Visual C# on windows platform to display the images, shape files and ASCII and Binary GRID files. Additionally it supports distance and area measurement on image. This software utility supports several file formats and various spatial and radiometric resolutions of Remote sensing Image data. It uses Mapwindows Active X control for image display. (1) <a href="assets/pdf/utility_soft/ImageViewer.rar">Download</a> (2) <a href="assets/pdf/utility_soft/ImageViewer_UserManual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>IRS Data product visualization software</h3>
                <img src="assets/img/utility_soft/IRSvisualise-uim-6.jpg" alt="IRS Data product visualization software">
                <p> The Standard products supplied by NRSC have path row or orbit number based referencing scheme and it is not implicitly possible for the user to visualize as to where in India the data is covered. The problem becomes more severe for national level projects where the data for the entire Indian region needs to be handled. The division of data here is usually on a state boundary based and hence it is required to quickly visualize the exact area and state where the data is covered. It is required many a time during a project to check the status of the already delivered products and to know as to data pertaining to which area is still pending to be delivered by NRSC. It has been perceived that if a sub-sampled image can be generated quickly along with the geo-information it can be easy to display all the sub-sampled images on the boundary to quickly identify the gaps in the received data. This utility is developed for quick plotting and preview of the IRS data received from NRSC data Centre and helps users in understanding the correctness of the data ordered by them. (1) <a href="assets/pdf/utility_soft/IRSDataProductsvisualisation.rar">Download</a> (2) <a href="assets/pdf/utility_soft/IRSDataProductsVisualization_Usermanual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="pagination">
                <a href="utility_softwares_1.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_1.php', this)" class="page-link">1</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_2.php', this)" class="page-link active">2</a>
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