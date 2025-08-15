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

      .image-gallery {
        margin-top: 20px;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
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
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Terrestrial Studies</b>
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
                <h3>Net Eco System productivity–MODIS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 2001-2014. This model is driven by time varying normalized difference vegetation index (NDVI), climate parameters (air-temperature, precipitation, solar radiation) and land cover and soil attribute maps.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Net primary productivity–GIMMS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2 exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 1981-2006.</p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Net primary productivity–MODIS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2 exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 1981-2006.</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Monitoring dust storms in Thar Desert region</h3>
                <p id="myptag">Dust storms are common in arid and semi-arid areas of Thar Desert region. Minute dust particles eroded from Indian Thar desert region especially during the summer months create a blanket of dust haze over western India and the Indo-Gangetic Plains. Study has been carried out over Thar Desert region using INSAT 3Dand MODIS L1B satellite data. Several algorithms such as IR Split window technique, Normalized Difference Dust Index (NDDI), Sand Dust Index, Band Rationing, Modified Normalized Vegetation Index and various band compositions have been applied to discriminate dust pixels from other features. Infrared Difference Dust Index (IDDI), spatial coherence technique have been applied to discriminate dust pixels using INSAT-3D data. The validation of the output shows reasonable agreement with Aerosol Optical Depth (AOD), PM10, wind speed and visibility data.</p>
              </div>
              <div class="pagination">
                <a href="Apps_Earth_terre_More.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More.php', this)" class="page-link ">1</a>
                <a href="Apps_Earth_terre_More_2.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_2.php', this)" class="page-link">2</a>
                <a href="Apps_Earth_terre_More_3.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_3.php', this)" class="page-link ">3</a>
                <a href="Apps_Earth_terre_More_4.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_4.php', this)" class="page-link ">4</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_5.php', this)" class="page-link active">5</a>
              </div>
            </section>
            <div id="imgeos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Net Eco System productivity–MODIS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 2001-2014.</p>
                <p id="myptag">This model is driven by time varying normalized difference vegetation index (NDVI), climate parameters (air-temperature, precipitation, solar radiation) and land cover and soil attribute maps. Besides that a number biome-specific parameters (such as Light Use Efficiency, C/N ratio) in the model are tuned to the values for accounting regional heterogeneity of the ecosystem response accurately. NPP and NEP products were analyzed for understanding seasonal, inter-annual and climatic variability of these parameters over India and published. This is the second edition product of NPP &NEP. It is simulated from 2001-2014 and the NDVI data is derived from MODIS in place of the GIMMS NDVI in the first edition.</p>
                <p id="myptag">Net Ecosystem Productivity derived from MODIS datasets is hosted on Bhuvan-NEP-MODIS</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Net Ecosystem productivity MODIS.Technical Document(hyper link :Net Productivity)</p>
              </div>
            </div>
            <div id="imgeos-modal-1" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Net primary productivity–GIMMS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2 exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 1981-2006.</p>
                <p id="myptag">This model is driven by time varying normalized difference vegetation index (NDVI), climate parameters (air-temperature, precipitation, solar radiation) and land cover and soil attribute maps. Besides that a number biome-specific parameters (such as Light Use Efficiency, C/N ratio) in the model are tuned to the values for accounting regional heterogeneity of the ecosystem response accurately. NPP and NEP products were analyzed for understanding seasonal, inter-annual and climatic variability of these parameters over India and published in the following references.</p>
                <p id="myptag">Net Primary Productivity derived from GIMMS datasets is hosted on Bhuvan-NPP-GIMMS</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences –Net Primary productivity –GIMMS. Technical Document(hyper link :Net Productivity)</p>
              </div>
            </div>
            <div id="imgeos-modal-2" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Net primary productivity–MODIS</h3>
                <p id="myptag">The Carnegie-Ames-Stanford Approach (CASA) terrestrial ecosystem model is implemented for simulating long-term monthly Net Primary Productivity (NPP), Net Ecosystem Productivity (NEP), Soil Respiration, Soil Organic Content and associated CO2exchange parameters between India terrestrial ecosystem and atmosphere at 5 km grids during 2001-2014.</p>
                <p id="myptag">This model is driven by time varying normalized difference vegetation index (NDVI), climate parameters (air-temperature, precipitation, solar radiation) and land cover and soil attribute maps. Besides that a number biome-specific parameters (such as Light Use Efficiency, C/N ratio) in the model are tuned to the values for accounting regional heterogeneity of the ecosystem response accurately. NPP and NEP products were analyzed for understanding seasonal, inter-annual and climatic variability of these parameters over India and published. This is the second edition product of NPP &NEP. It is simulated from 2001-2014 and the NDVI data is derived from MODIS in place of the GIMMS NDVI in the first edition.</p>
                <p id="myptag">Net Primary Productivity derived from MODIS datasets is hosted on Bhuvan-NPP-MODIS</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Net Primary productivity – GIMMS. Technical Document(hyper link :Net Productivity)</p>
              </div>
            </div>
          </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Terrestrial Studies');
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
  // Modal functionality
  document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const modals = document.querySelectorAll('.modal');
    const readMoreLinks = document.querySelectorAll('.read-more');
    const closeButtons = document.querySelectorAll('.close');
    // Open modal when Read more is clicked
    readMoreLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const modalId = this.getAttribute('data-modal');
        document.getElementById(modalId).style.display = 'block';
      });
    });
    // Close modal when X is clicked
    closeButtons.forEach(button => {
      button.addEventListener('click', function() {
        this.closest('.modal').style.display = 'none';
      });
    });
    // Close modal when clicking outside content
    window.addEventListener('click', function(e) {
      if (e.target.classList.contains('modal')) {
        e.target.style.display = 'none';
      }
    });
    // Close modal with ESC key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        modals.forEach(modal => {
          modal.style.display = 'none';
        });
      }
    });
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