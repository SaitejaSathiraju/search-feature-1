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
      }

      .pagination {
        display: flex;
        justify-content: center;
        margin-top: 40px;
        font-size: 18px;
      }

      .pagination span {
        margin: 0 10px;
        font-weight: bold;
        cursor: pointer;
      }

      .pagination span.active {
        color: blue;
        text-decoration: underline;
      }

      .page {
        display: none;
      }

      .page.active {
        display: block;
      }

      .instrument-gallery {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
      }

      .instrument-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-bottom: 30px;
      }

      .instrument-card {
        width: 280px;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .instrument-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
      }

      .instrument-image-container {
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
        padding: 15px;
      }

      .instrument-image {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
      }

      .instrument-label {
        padding: 15px;
        text-align: center;
        background: #f8f9fa;
        border-top: 1px solid #eee;
      }

      .instrument-label h3 {
        margin: 0;
        color: #333;
        font-size: 1.2rem;
        font-weight: 600;
      }

      @media (max-width: 768px) {
        .instrument-row {
          flex-direction: column;
          align-items: center;
          gap: 20px;
        }

        .instrument-card {
          width: 90%;
        }
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
                <b>Atmospheric Instruments</b>
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
              <h3>Atmospheric Instruments</h3>
              <br />
              <div id="page1" class="page active">
                <p id="myptag">In-situ measurements of atmospheric parameters pertaining to solar energy (incoming and outgoing shortwave and longwave radiation) with a net radiometer and a pyranometer; aerosols with CIMEL Sunphotometer, Multiwavelength radiometer, aethelometer and Nephelometer; surface level trace gases (O3, NOx, SOx and CO) including CO2 with trace gas analysers and a high precision Greenhouse Gas Analyser respectively are measured on 24x7 basis at the Atmospheric Science Laboratory, NRSC Campus, Shadnagar. In addition, atmospheric columnar trace gases retrieval on clear sky days is operational at the same location using a ground based Fourier Transform Infrared spectrometer (FTIR). In addition, columnar O3, AOD and precipitable water vapor concentrations are measured using Microtops. These are supported by continuous observation of meteorological parameters with an Automatic Weather Station (AWS) on the same premises. For a more focused studies on boundary layer dynamics and its parameter retrieval, a 32m micro-meteorological tower with slow and fast response sensors has become recently operational at the Shadnagar campus.</p>
                <p id="myptag">Objective of these measurements is primarily to support the atmospheric research being carried out at NRSC and populate NICES with short as well as long term quality data on atmospheric parameters by the national users.</p>
              </div>
              <div id="page2" class="page">
                <div class="instrument-gallery">
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Aethalometer" data-entity-type="file" src="assets/img/apps/aethalometer_0.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Aethalometer</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Photometer" data-entity-type="file" src="assets/img/apps/photometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Photometer</h3>
                      </div>
                    </div>
                  </div>
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Pyranometer" data-entity-type="file" src="assets/img/apps/pyranometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Pyranometer</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Radiometer" data-entity-type="file" src="assets/img/apps/radiometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Radiometer</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="page3" class="page">
                <div class="instrument-gallery">
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Lidar" src="assets/img/apps/lidar.jpg" class="instrument-image" />
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Nephelometer" src="assets/img/apps/nephelometer.jpg" class="instrument-image" />
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Oanalyzer" src="assets/img/apps/oanalyzer.jpg" class="instrument-image" />
                      </div>
                    </div>
                  </div>
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Quartz" src="assets/img/apps/quartz.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Quartz Crystal Microbalance</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Lidar" src="assets/img/apps/lidar.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Micro Pulse Lidar</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Nephelometer" src="assets/img/apps/nephelometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Nephelometer</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagination">
                <span onclick="showPage(1)">1</span>
                <span onclick="showPage(2)">2</span>
                <span onclick="showPage(3)">3</span>
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
  function showPage(pageNumber) {
    // Hide all pages
    document.querySelectorAll('.page').forEach(page => {
      page.classList.remove('active');
    });
    // Show selected page
    document.getElementById('page' + pageNumber).classList.add('active');
    // Update pagination highlights
    document.querySelectorAll('.pagination span').forEach((span, index) => {
      if (index === pageNumber - 1) {
        span.classList.add('active');
      } else {
        span.classList.remove('active');
      }
    });
  }
  // Make Page 1 active on page load
  showPage(1);

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