<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Disaster Management Support</title>
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
        object-fit: contain;
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

      .breadcrumb {
        padding: 10px 20px;
        font-size: 14px;
        color: #666;
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
        max-width: 1100px;
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

        .sidebar h3{
          font-size: 18px !important;
        }

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
      }

      #imgeos-modal, #imgeos-modal-1{
        display: none; justify-content: center; align-items: center;
      }

      #imgeos-modal-div{
        width: 90%; background: white; border-radius: 8px; padding: 20px; display: flex; flex-direction: row; gap: 20px;
      }

      #modal-title-with-sidebar{
        font-size: 24px; font-weight: bold;
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
                <h1 class="heading-title text-break text-center">Disaster Management Support</h1>
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
                <b>Disaster Management Support</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="DMS-main" id="DMS-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'App_DMS_services_list.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Flood</h3>
                <p id="myptag">Flood monitoring, mapping and dissemination to State and Central relief departments and to Ministry of Home Affairs (MHA), GOI is carried out during all major flood and cyclone events and support is provided to disaster management teams in near real time during flood relief and rehabilitations activites. </p>
                <a href="2019_Floods.php" target="_blank" id="myptag">Recent - Flood inundation-Views</a>
                <br />
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Cyclone</h3>
                <p id="myptag">Near real time Monitoring of cyclone track and providing the information on possible severity zones in view of the predicted land fall locations, mapping of flood inundations due to cyclones is the major activity that is carried out to support the disaster management teams. </p>
                <a href="2019_Cyclones.php" target="_blank" id="myptag">Recent - Cyclone Inundation -Views</a>
                <br />
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Agricultural Drought</h3>
                <p id="myptag">Methodologies for agricultural drought assessment and monitoring using multiple indices combing vegetation parameters , soil moisture, rainfall pattern etc. and national level drought assessment was carried out in NRSC since 1995 .</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_DMS.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS.php', this)" class="page-link">1</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS_2.php', this)" class="page-link active">2</a>
                <a href="Apps_DMS_3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS_3.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>DISASTER SUPPORT</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/bihar-2016-floods.png" data-title="Continuous Monitoring of Flood Inundation">
                    <img src="assets/img/about/bihar flood-icon.png" />
                    <div class="image-overlay">Flood</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/drought_0.png">
                    <img src="assets/img/about/Picture2_18.png" />
                    <div class="image-overlay">Drought Vulnerability</div>
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
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<!-- IMGEOS Modal -->
<div id="imgeos-modal" class="modal" >
  <div class="container" id="imgeos-modal-div">
    <span class="close">&times;</span>
    <!-- Left: Modal Content -->
    <div style="flex: 2; min-width: 0;">
      <h3 id="modal-title-with-sidebar">Flood</h3>
      <p id="myptag"> Flood monitoring, mapping and dissemination to State and Central relief departments and to Ministry of Home Affairs (MHA), GOI is carried out during all major flood and cyclone events and support is provided to disaster management teams in near real time during flood relief and rehabilitations activites. </p>
      <p id="myptag"> Satellite data from Indian Remote Sensing Satellites (IRS) and non IRS satellites (with the help of international charter requests) of all possible acquisitions from global satellites with varying spatial resolutions are utilized for flood mapping. Microwave satellite data is of highest use during flood occurrence and recession periods due to the limitations of cloud in optical data during cloudy conditions. </p>
      <p id="myptag"> Current and historic flood maps generated for major flood events in the states across country, Flood duration maps, Flood annual layers, Flood Hazard maps and related technical documents are hosted on as Disaster Services (NDEM Public): (Bhuvan-Flood). Flood forecasting is one of the major activities that is initiated with hydrological modeling utilizing high resolution LiDAR DEM, satellite derived land use / land cover information in flood prone river reaches in the country. </p>
      <p id="myptag"> National Flood Vulnerability Assessment System on Bhuvan provides scenario of topography, trends in spatial rainfall, spatial runoff, flood vulnerability index across the country at grid level along with few case studies and technical reports. </p>
      <p id="myptag">1. <a href="2019_Floods.php" target="_blank">2019</a>
      </p>
      <p id="myptag">2. <a href="2020_Floods.php" target="_blank">2020</a>
      </p>
    </div>
    <!-- Right: Sidebar -->
    <div style="flex: 1; background: #f9f9f9; padding: 10px; border-left: 1px solid #ccc;">
      <h3 style="font-weight: bold;">FLOOD PRODUCT</h3>
      <div style="position: relative; cursor: pointer;" onclick="openLightbox(this)" data-large-src="assets/img/flood/Picture6_0.png">
        <img src="assets/img/flood/Picture6_0.png" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Flood Inundation</div>
      </div>
      <br />
      <div style="position: relative; cursor: pointer;" onclick="openLightbox(this)" data-large-src="assets/img/flood/Picture7_0.png">
        <img src="assets/img/flood/Picture7_0.png" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Flood Hazard Zonation</div>
      </div>
      <br />
      <div style="position: relative; cursor: pointer;" onclick="openLightbox(this)" data-large-src="assets/img/flood/Picture10_0.png">
        <img src="assets/img/flood/Picture10_0.png" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Flood Vulnerability</div>
      </div>
      <br />
      <div style="position: relative; cursor: pointer;" onclick="openLightbox(this)" data-large-src="assets/img/flood/Picture9.png">
        <img src="assets/img/flood/Picture9.png" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Flood Early Warning</div>
      </div>
    </div>
  </div>
</div>
<div id="imgeos-modal-1" class="modal" style="display: none; justify-content: center; align-items: center;">
  <div class="container" id="imgeos-modal-div">
    <span class="close">&times;</span>
    <!-- Left: Modal Content -->
    <div style="flex: 2; min-width: 0;">
      <h3 id="modal-title-with-sidebar">Cyclone</h3>
      <p id="myptag"> NRSC is providing the information from various sources viz. MOSDAC, Joint typhoon warning centre, etc, on near real time depiction of cyclone track and generating information on possible severity zones in view of the predicted land fall locations. Mapping of flood inundations due to cyclones is the major activity that is carried out to support the disaster management teams. </p>
      <p id="myptag"> Maps and Information generated during recent cyclone events e.g. Gaja, Titli, Vardah,Nada, Nilofer, HudHud, Phailin are hosted on Bhuvan. Mobile applications were developed for facilitating geo tagging of several damaged assets and incident reporting. They were used for field reporting during HUDHUD cyclone. These are meant for utilization by the State Governments and view the data on Bhuvan for analysis </p>
      <p id="myptag">
        <b>
          <u>Images captured during Cyclone Events :</u>
        </b>
      </p>
      <p id="myptag">1. <a href="2019_Cyclones.php" target="_blank">2019</a>
      </p>
      <p id="myptag">2. <a href="2021_Cyclone_Nivar.php" target="_blank">2020 (AMPHAN)</a>
      </p>
    </div>
    <!-- Right: Sidebar -->
    <div style="flex: 1; background: #f9f9f9; padding: 10px; border-left: 1px solid #ccc;">
      <h3 style="font-weight: bold;">CYCLONE PRODUCT</h3>
      <div style="position: relative; cursor: pointer;" onclick="openLightbox(this)" data-large-src="assets/img/about/Picture1_10.png">
        <img src="assets/img/about/Picture1_10.png" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Cyclone Tracking</div>
      </div>
    </div>
  </div>
</div>
<div id="imgeos-modal-2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Agricultural Drought</h3>
    <p id="myptag">Methodologies for agricultural drought assessment and monitoring using multiple indices combing vegetation parameters , soil moisture, rainfall pattern etc. and national level drought assessment was carried out in NRSC since 1995 . Recently, the technology was transferred to Mahalanobis National Crop Forecast Centre of Department of Agriculture, Cooperation & Farmers welfare, Ministry of Agriculture & Farmers Welfare, Government of India and supported institutionalization.</p>
    <p id="myptag">Presently, research and operational studies are being carried out for identification of agricultural drought vulnerable blocks for long-term drought management and also to provide space Inputs towards to crop insurance and agricultural banking agencies . Presently, agricultural Drought Vulnerability – Assessment and Mapping at Sub-district level for Madhya Pradesh and Maharashtra states (Ministry of Agriculture & Farmers Welfare/ Insurance Companies) is being studied.</p>
    <p id="myptag">Fortnightly NDVI products are generated by NRSC and is disseminated to the users as a regular product through NRSC data Centre for agricultural drought asessement. MODIS satellite derived vegetation indices are also provided in conjunction with IRS data derived information. Various meteorological, spectral indicators and soil moisture index information across the country are hosted in Bhuvan-Drought.</p>
  </div>
</div>
<script>
  localStorage.setItem('activeMenuItem', 'Applications');
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