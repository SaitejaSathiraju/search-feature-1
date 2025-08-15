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

      /* .sidebar {
        width: 450px;
        margin-left: auto;
      } */

      .sidebar h3 {
        color: #003366;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 0;
      }

      .image-gallery {
        margin-top: 20px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .image-item {
        position: relative;
      }

      .image-item img {
        width: 100%;
        height: auto;
        object-fit:contain;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .image-overlay {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 8px 12px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        width: calc(100% - 24px);
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .read-more {
        display: inline-block;
        margin-top: 10px;
        color: #0066cc;
        text-decoration: none;
        font-weight: bold;
      }

      .read-more:hover {
        text-decoration: underline;
      }

      .image-gallery {
        margin-top: 20px;
      }

      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.7);
      }

      .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 30px;
        border-radius: 8px;
        width: 80%;
        max-width: 1000px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        position: relative;
      }

      .close {
        position: absolute;
        top: 15px;
        right: 25px;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
      }

      .close:hover {
        color: #333;
      }

      .modal-title {
        color: #003366;
        margin-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }

        .sidebar {
          /* width: 100%;
          margin-left: 0; */
          order: 3; 
          margin-top: 20px;
        }

        .modal-content {
          width: 90%;
          margin: 20% auto;
        }

        /* .sidebar h3 {
          font-size: 14px !important;
        } */

          .image-overlay {
			  position: absolute;
			  background-color: rgba(0, 0, 0, 0.6);
			  color: white;
			  font-size: 10px;
			  text-align: center;
			  font-weight: bold;
			  border-radius: 4px;
			  width: calc(100% - 24px);
			}
      }

      .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        text-align: center;
      }

      .lightbox-content {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        max-width: 90%;
        max-height: 90%;
        margin: 0 auto;
      }

      .lightbox-content img {
        max-height: 80vh;
        max-width: 100%;
        border: 3px solid #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
      }

      .lightbox-content h3 {
        color: #fff;
        margin-bottom: 20px;
        font-size: 24px;
      }

      .close-lightbox {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
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
            <section class="col-lg-6">
              <div class="section">
                <h3>Co Tidal Map</h3>
                <p id="myptag">Sea level is an essential climatic variable (ECV). It has been measuring precisely through satellite altimeter. There are several oceanic processes contribute variability of sea level with tide being the major contributor. As tide is periodic and highly predictable, its</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Eddy Kinetic Energy</h3>
                <p id="myptag">Eddy Kinetic Energy represents dynamic fields indicate boundaries of mass convergence and divergence areas of the ocean environment. Associated with Mean Sea level Anomaly (MSLA) maps convey the areas of ocean water sinking and upwelling, which</p>
                <p id="myptag">Eddy Kinetic Energy information is hosted on Bhuvan-Eddy Kinetic Energy.</p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Ekman and Geostrophic Currents</h3>
                <p id="myptag">The ocean surface currents are estimated from satellite observations of surface wind from Oceansat-2 Scatterometer and Sea Surface height from SARAL AltiKa. The Ekman Surface current</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Earth_OS_More.php" onclick="loadPage('Apps_Earth_OS_More.php', this)" class="page-link">1</a>
                <a href="Apps_Earth_OS_More_2.php" onclick="loadPage('Apps_Earth_OS_More_2.php', this)" class="page-link ">2</a>
                <a href="#" onclick="loadPage('Apps_Earth_OS_More_3.php', this)" class="page-link active">3</a>
                <a href="Apps_Earth_OS_More_4.php" onclick="loadPage('Apps_Earth_OS_More_4.php', this)" class="page-link">4</a>
                <a href="Apps_Earth_OS_More_5.php" onclick="loadPage('Apps_Earth_OS_More_5.php', this)" class="page-link">5</a>
                <a href="Apps_Earth_OS_More_6.php" onclick="loadPage('Apps_Earth_OS_More_6.php', this)" class="page-link">6</a>
                <a href="Apps_Earth_OS_More_7.php" onclick="loadPage('Apps_Earth_OS_More_7.php', this)" class="page-link">7</a>
                <a href="Apps_Earth_OS_More_8.php" onclick="loadPage('Apps_Earth_OS_More_8.php', this)" class="page-link">8</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>SCATSAT</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img1_11.jpg" data-title="SCATSAT Ekman Currents">
                    <img alt="antenna1" src="assets/img/apps/img1_11.jpg" />
                    <div class="image-overlay">SCATSAT Ekman Currents</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img2_11.jpg" data-title="Eddy Kinetic Energy">
                    <img alt="bharati" src="assets/img/apps/img2_11.jpg" />
                    <div class="image-overlay">Eddy Kinetic Energy</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img3_9.jpg" data-title="SCATSAT Ekman Currents Composite">
                    <img alt="bharati" src="assets/img/apps/img3_9.jpg" />
                    <div class="image-overlay">SCATSAT Ekman Currents Composite</div>
                  </div>
                </div>
              </div>
            </aside>
            <div class="lightbox" id="lightbox">
              <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
              <div class="lightbox-content">
                <h3 id="lightbox-title"></h3>
                <img id="lightbox-image" src="" alt="">
              </div>
            </div>
            <div id="imgeos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Co Tidal Map</h3>
                <p id="myptag">Total alkalinity as the name suggest reflects the ability of seawater to resist acidification in oceanographic perspective. In almost all natural waters alkalinity is produced by dissolved carbon dioxide species, bicarbonates and carbonates. Knowing the total alkalinity and the buffering capacity of any one area of the ocean helps us to correlate changes that we see in biologyto what is happening with the chemistry in the atmosphere and the ocean and form an essential carbon parameter. Dissolved inorganic carbon DIC of the seawater sample is the sum of the concentrations of the dissolved inorganic carbon species. Since alkalinity (TA) and DIC are conservative therefore both are used in ocean carbon models. Both DIC and TA can be used to estimate the air-sea CO2 fluxes in combination with satellite based approach can help us to map the large scale spatio temporal distribution in the ocean and further discussed below.</p>
                <p id="myptag">Combined satellite data (Sea Level Anomalies, Mean Dynamic Topography and Sea Surface Temperature) and in-situ (Temperature and Salinity profiles) on a 1/4 degree regular grid (from http://marine.copernicus.eu/), satellite chlorophyll MODIS AQUA 4 KM resolution data (from https://podaac.jpl.nasa.gov/dataset/MODIS_Aqua_L3_CHLA_Daily_4km_) for computing the DIC values are used. These productsare now being available as a part of NICES programme at 1/4 degree resolution globally. Monthly products are generated for 2014-2017 and hosted on Bhuvan-Dissolved Inorganic Carbon.</p>
                <p id="myptag">Select NICES Project - Terrestrial Sciences –Dissolved Organic Carbon and List and view the data of the selected time period.</p>
              </div>
            </div>
            <div id="imgeos-modal-1" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Daily Tropical Cyclone Heat Potential</h3>
                <p id="myptag">Tropical cyclone heat potential (TCHP), is estimated using (a) sea surface height anomaly (SSHA) from the available altimeters, (b) sea surface temperature (SST) from Tropical Rainfall Measuring Mission (TRMM) Microwave Imager (TMI), and (c) the climatological values of the depth of the 26°C isotherm (D26) using Artificial Neural Networks approach. It is generated on a daily basis from 1998 to present with a one week time delay.</p>
                <p id="myptag">Daily Tropical cyclone heat potential (TCHP)information is generated since 1998 and hosted on Bhuvan-TCHP.</p>
                <p id="myptag">Select NICES Project - Terrestrial Sciences –Tropical cyclone heat potential and List and view the data of the selected time period. Technical Document(hyper link :TCHP_OHC&OMT)</p>
              </div>
            </div>
            <div id="imgeos-modal-2" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Ocean Heat Content</h3>
                <p id="myptag">Ocean Heat Content up to 700m depth (OHC700) is an important ocean climatic parameter required for atmospheric and oceanographic studies. This is obtained by summing the heat content of the ocean column from the sea surface to a depth of 700m.</p>
                <p id="myptag">Ocean Heat Content (OHC) and Ocean Mean Temperature (OMT) are important climatic parameters required for atmospheric and oceanic studies like cyclone and monsoon predictions and ocean heat transport estimations. Ocean Heat Content information is generated since 2001 and hosted on Bhuvan-OHC.</p>
                <p id="myptag">Select NICES Project - Terrestrial Sciences –Tropical cyclone heat content and List and view the data of the selected time period. Technical Document(hyper link :TCHP_OHC&OMT.</p>
                <p id="myptag">Ocean Mean temperatures and Heat Content information is generated since 2001 and hosted on Bhuvan-OMT-OHC.</p>
                <p id="myptag">Select NICES Project - Terrestrial Sciences –Ocean Mean temperatures and Heat Content and List and view the data of the selected time period. Technical Document(hyper link :TCHP_OHC&OMT)</p>
              </div>
            </div>
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

  function openLightbox(element) {
    const largeSrc = element.getAttribute('data-large-src');
    const title = element.getAttribute('data-title');
    document.getElementById('lightbox-image').src = largeSrc;
    document.getElementById('lightbox-title').textContent = title;
    document.getElementById('lightbox').style.display = 'block';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
  }
  // JavaScript for any interactive functionality
  document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded successfully');
    // Example: Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  });
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