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
                <b>Ocean Instruments</b>
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
              <h3>Ocean Instruments</h3>
              <br />
              <div id="page2" class="page">
                <div class="instrument-gallery">
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="TITRANDO TOTAL ALKALINITY (TA) ANALYZER" data-entity-type="file" src="assets/img/apps/TITRANDO.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>TITRANDO TOTAL ALKALINITY (TA) ANALYZER</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="SBE 19plus CTD Profiler" data-entity-type="file" src="assets/img/apps/SBE_19plus_CTD_Profiler.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>SBE 19plus CTD Profiler</h3>
                      </div>
                    </div>
                  </div>
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Fast Repetition Rate Fluorometer" data-entity-type="file" src="assets/img/apps/Fast_Repetition_Rate_Fluorometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Fast Repetition Rate Fluorometer</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Hyperspectral Underwater Radiometer" data-entity-type="file" src="assets/img/apps/Hyperspectral_Underwater_Radiometer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Hyperspectral Underwater Radiometer</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="page1" class="page active">
                <div class="instrument-gallery">
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="Inherent Optical Profiler" data-entity-type="file" src="assets/img/apps/Inherent_Optical_Profiler.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>Inherent Optical Profiler</h3>
                      </div>
                    </div>
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="LiCOR-840A CO2/H2O Analyzer" data-entity-type="file" src="assets/img/apps/LiCOR-840A_CO2H2O_Analyzer.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>LiCOR-840A CO2/H2O Analyzer</h3>
                      </div>
                    </div>
                  </div>
                  <div class="instrument-row">
                    <div class="instrument-card">
                      <div class="instrument-image-container">
                        <img alt="UIC CM140 Coulometer for DIC measurement" data-entity-type="file" src="assets/img/apps/UIC_CM140_Coulometer_for_DIC_measurement.jpg" class="instrument-image" />
                      </div>
                      <div class="instrument-label">
                        <h3>UIC CM140 Coulometer for DIC measurement</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagination">
                <span onclick="showPage(1)">1</span>
                <span onclick="showPage(2)">2</span>
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