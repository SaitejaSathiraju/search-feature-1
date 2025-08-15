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
                <h3>SigmaSAR (Beta version 3.0)</h3>
                <img src="assets/img/utility_soft/risat2-10.jpg" alt="SigmaSAR (Beta version 3.0)">
                <p> Software is developed at Microwave Remote Sensing and Data Processing Division, MRSDPD/MRS&GDPG/DPPA&WAA/NRSC to generate Sigma Naught Backscatter Images for Level-1 Ground Range, Level-1 Slant Range and Level-2 GeoTIFF data products of FRS-1 ,FRS-2, MRS and CRS acquisition modes of RISAT-1. (1) <a href="assets/pdf/utility_soft/SigmaSARV3.rar">Download</a> (2) <a href="assets/pdf/utility_soft/Manual_SigmaSAR.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>NCC Generation Utility for IRS Data</h3>
                <img src="assets/img/utility_soft/ncc_generator-11.jpg" alt="NCC Generation Utility for IRS Data">
                <p> Remote sensing satellites view the earth in different spectral bands, viz. near infrared (NIR), red, green, and blue bands. In the absence of a blue channel from IRS-1C/1D onwards, interpreter creates color images using near infrared, red, and green bands in what is known as a false color composite(FCC). FCC does not look like natural representation of earth system as we view the earth ith the naked eye. e.g. Green vegetated areas appear Red in FCC whereas on real world we see it as green. For a trained interpreter, this does not pose any problem. However, for the non-remote sensing professional, this becomes a handicap. To overcome this, there is a requirement to generate natural color composites (NCC) from the given false color composite. This needs the simulation of blue band and create NCC by combining it with green and red bands. The NCC S/W module has been developed using the coefficients derived using spectral transformation method to establish a relationship between false color and true color image pairs provided by a sensor with all the four bands. These coefficients seem to work on a large number of images of different seasons, provided similar spectral bands and terrain are used. With the demand from the users for the Natural Color Conversion software, the software utility is developed at NRSC for users to create NCC at their end by using different sensors data sets from IRS-Resourcesat-1 and Resourcesat-2 Multispectral data. (1) <a href="assets/pdf/utility_soft/IRSNCC.jar">Download</a> (2) <a href="assets/pdf/utility_soft/UserManual.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>PRANAV (Planning Imagery Requirements with ANalysis and Visualization)</h3>
                <img src="assets/img/utility_soft/pranav-12.jpg" alt="PRANAV (Planning Imagery Requirements with ANalysis and Visualization)">
                <p> PRANAV framework, originally developed for multiple satellites is customized for RISAT-1. This application is useful in determining suitable opportunities for imaging a specific region of interest based on time period, look angle, coverage etc. A user-friendly, easy to use Graphical User Interface is provided for viewing and ranking opportunities. (1) <a href="assets/pdf/utility_soft/PRANAV-R1.1.zip">Download</a> (2) <a href="assets/pdf/utility_soft/PRANAV-User-Manual.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="pagination">
                <a href="utility_softwares_1.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_1.php', this)" class="page-link">1</a>
                <a href="utility_softwares_2.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_2.php', this)" class="page-link">2</a>
                <a href="utility_softwares_3.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_3.php', this)" class="page-link">3</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_4.php', this)" class="page-link active">4</a>
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