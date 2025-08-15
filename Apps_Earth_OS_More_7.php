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
                <h3>Coastal Carbon Dynamics</h3>
                <p id="myptag">The study aims at understanding the Air-Sea CO2 flux for Indian ocean region. The objective includes estimation of Total Alkalinity, Dissolved Inorganic carbon and partial pressure of CO2 (pCO2) and Atmospheric CO2. This helps identifying the areas of CO2 source and sink in Indian ocean region. This is important in studying climate change and global warming phenomenon.</p>
              </div>
              <div class="section">
                <h3>Ocean colour data processing and validation</h3>
                <p id="myptag">Accuracy of satellite derived parameters depends on the sea-truth validation and reprocessing of satellite data with changed co-efficient from time to time. Percesion of data depends on stringent atmospheric correction. Hence it isimportant to have continuous reprocessing and validation of satellite derived geo-physical parameters.</p>
              </div>
              <div class="section">
                <h3>Ocean colour observational infrastructure establishment</h3>
                <p id="myptag">Validation and generation of regional co-effiecient to improve the satellite data quality, it is essential to establish observational network. In-situ dat collection in sea is rather difficult.</p>
                <p id="myptag">Hence we have established a state of art laboratory with instruments like HYPERPRO-II (Stlantic, USA) to measure under water light field, IO profiler ( wet Lab, USA) for measuring inherent optical properties i.e Absorption and scattering), Coulomter (UIC Ic, USA) for dissolved inorganic carbon, TA and pH analyser (Metrohm, Swizerland) for total alkalinity and pH, Fast Rate RepitationFlurometer (Chelsea, UK) for measurement of gross primary productivity and photosynthetic parameters, DO sensor (wetlab, USA) for dissolved oxygen and pCO2 sensor (wet Lab, USA) for measuring spartial pressure of CO2, LICOR-840A (Licor INC, USA) for atmospheric CO2 instruments for strengthening in-situ data base. The idea is to replace conventional lab measuring methods to sensor based measurement to avoid time and increase quality and volume of data set.</p>
              </div>
              <div class="pagination">
                <a href="Apps_Earth_OS_More.php" onclick="loadPage('Apps_Earth_OS_More.php', this)" class="page-link">1</a>
                <a href="Apps_Earth_OS_More_2.php" onclick="loadPage('Apps_Earth_OS_More_2.php', this)" class="page-link ">2</a>
                <a href="Apps_Earth_OS_More_3.php" onclick="loadPage('Apps_Earth_OS_More_3.php', this)" class="page-link ">3</a>
                <a href="Apps_Earth_OS_More_4.php" onclick="loadPage('Apps_Earth_OS_More_4.php', this)" class="page-link ">4</a>
                <a href="Apps_Earth_OS_More_5.php" onclick="loadPage('Apps_Earth_OS_More_5.php', this)" class="page-link ">5</a>
                <a href="Apps_Earth_OS_More_6.php" onclick="loadPage('Apps_Earth_OS_More_6.php', this)" class="page-link ">6</a>
                <a href="#" onclick="loadPage('Apps_Earth_OS_More_7.php', this)" class="page-link active">7</a>
                <a href="Apps_Earth_OS_More_8.php" onclick="loadPage('Apps_Earth_OS_More_8.php', this)" class="page-link">8</a>
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