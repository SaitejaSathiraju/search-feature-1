<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Earth and Climatic Studies</title>
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

      .main-content {
        flex: 1;
        min-width: 60%;
        padding-right: 30px;
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }

        /* .sidebar h3 {
          font-size: 16px !important;
        } */
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
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
                <h1 class="heading-title text-break text-center">Earth and Climatic Studies</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Earth and Climatic Studies</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Ocean Sciences</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="EARTH-main" id="EARTH-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Earth_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <div class="section">
                <h3>Generation of satellite derived Total Alkalinity (TA) & DIC (Dissolved inorganic carbon) maps</h3>
                <p id="myptag">New biochemical parameters like TA, DIC is being taken up for retrieval from satellite data. These parameter directly helps in estimating surface pCO2 in the ocean. This helps in budgeting of Aar-Sea CO2 flux. All these data has been uploaded in NICES portal for user community.</p>
              </div>
              <div class="section">
                <h3>Inherent Optical properties</h3>
                <p id="myptag">Ocean colour data retrieval basically depends on radiative transform equation. The main requirement is to understand the inherent optical properties of water (absorption and scattering) from which apperent optical properties can be derived that can be used in remote sensing data for retrieval of geo-physical parameters. We have procured IOP profiler instruments for measurement of IOP and uses for satellite data validation.</p>
              </div>
              <div class="section">
                <h3>Utilization of Hyperspectral data from contemporary satellite for retrieval of geophysical parameters</h3>
                <p id="myptag">The accurate estimation of Geophysical parameters in the turbid coastal waters will help in improving the coastal fisheries and local / regional climatic change studies. The Hyper spectral data collected in these waters will help us in understanding the spectral variability of green to low to high turbid regions is Howrah and Hooghly estuary. This spectra will serve as a base and reference spectra for the future field work and upcoming ocean colour sensors.</p>
              </div>
              <div class="section">
                <h3>Ocean modelling with assimilation of EO sensors data for ocean and coastal Circulation</h3>
                <p id="myptag">Modelling of Biogeochemical cycle framework for Earth System Studies Detection and mapping of Ocean surface features including oil spill Regional Carbon Cycle modelling Generation of Ocean geophysical products for NICES</p>
              </div>
              <div class="pagination">
                <a href="Apps_Earth_OS_More.php" onclick="loadPage('Apps_Earth_OS_More.php', this)" class="page-link">1</a>
                <a href="Apps_Earth_OS_More_2.php" onclick="loadPage('Apps_Earth_OS_More_2.php', this)" class="page-link ">2</a>
                <a href="Apps_Earth_OS_More_3.php" onclick="loadPage('Apps_Earth_OS_More_3.php', this)" class="page-link ">3</a>
                <a href="Apps_Earth_OS_More_4.php" onclick="loadPage('Apps_Earth_OS_More_4.php', this)" class="page-link ">4</a>
                <a href="Apps_Earth_OS_More_5.php" onclick="loadPage('Apps_Earth_OS_More_5.php', this)" class="page-link ">5</a>
                <a href="Apps_Earth_OS_More_6.php" onclick="loadPage('Apps_Earth_OS_More_6.php', this)" class="page-link ">6</a>
                <a href="Apps_Earth_OS_More_7.php" onclick="loadPage('Apps_Earth_OS_More_7.php', this)" class="page-link ">7</a>
                <a href="#" onclick="loadPage('Apps_Earth_OS_More_8.php', this)" class="page-link active">8</a>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Ocean Sciences');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

  function loadPage(pageUrl, element) {
    fetch(pageUrl).then(response => response.text()).then(data => {
      document.getElementById("main-content").innerHTML = data;
      // Update active class
      document.querySelectorAll(".page-link").forEach(el => el.classList.remove("active"));
      element.classList.add("active");
    });
  }

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