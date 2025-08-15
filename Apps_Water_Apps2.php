<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Water Resources</title>
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
        /* height: 300px; */
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

      .breadcrumb a {
        color: #0066cc;
        text-decoration: none;
      }

      .breadcrumb a:hover {
        text-decoration: underline;
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

        .sidebar  h3{
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
        text-align: justify;
      }

      #Irrg_Image {
        width: 400px;
        height: 220px;
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
                <h1 class="heading-title text-break text-center">Water Resources</h1>
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
                <b>Water Resources</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Water-main" id="Water-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Water_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Mapping & Monitoring of Surface Water Bodies</h3>
                <p id="myptag">Mapping and monitoring of surface water bodies across the country are being monitored with automated water bodies extraction algorithms that were developed to process huge daily acquired satellite data from multiple sensors across the IRS satellites.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Snow Cover Mapping and Monitoring</h3>
                <p id="myptag">Snow in the Himalayas is a vital water resource to India and the snowmelt runoff occurring mostly during summer months constitute a substantial part of water resources of the river systems like Indus, Ganga and Brahmaputra. Snow cover mapping is done</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>River Engineering</h3>
                <p id="myptag">River migration and river control works from the major elements in the flood plain management Satellite data provided accurate delineation of river configuration and the status of flood/river control works.</p>
                <a class="read-more" data-modal="ageos-modal1" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Water_Apps.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps.php', this)" class="page-link">1</a>
                <a href="Apps_Water_Apps1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps1.php', this)" class="page-link">2</a>
                <a href="Apps_Water_Apps2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps2.php', this)" class="page-link active">3</a>
                <a href="Apps_Water_Apps3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps3.php', this)" class="page-link ">4</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>WATER RESOURCES </h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/waterbodies.png">
                    <img alt="antenna1" src="assets/img/apps/waterbodies.png" />
                    <div class="image-overlay">Water Bodies Monitoring</div>
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
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Surface water</h3>
    <div class="image-item">
      <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/waterbodiesind.png" />
      <div class="image-item">
        <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/Picture10_1.png" />
        <hr />
        <p id="myptag"> Mapping and monitoring of surface water bodies across the country are being monitored with automated water bodies extraction algorithms that were developed to process huge daily acquired satellite data from multiple sensors across the IRS satellites. These algorithms helps to map water bodies information of varying sizes at different time intervals ( >50 Ha – fortnight, >2 ha –Monthly, >0.25ha at seasonal time interval). Due to presence of cloud cover, the daily processed data are time-composited is made available.</p>
        <p id="myptag"> Sensors onboard Resourcesat 2, Resourcesat 2A are the primary satellites responsible for the generation of surface water bodies information and to host in Bhuvan –WBIS.</p>
        <p id="myptag">Water spread information generated is also used to generate grid-wise (grid size of 5 km x 5 km) water body fraction product for download through Bhuvan-Water Bodies as “National Information System for Climate and Environment Studies (NICES)” database These information is is data is useful in hydrological modelling, drought assessment, surface water dynamics analysis, etc.e available.</p>
        <p id="myptag">This version 2.0 of WBIS has new geospatial tools for (i) graphical visualisation of multi-date water spread area; (ii) regional water spread area analysis, (iii) spatio-temporal visualisation of water spread and (iv) to identify potential water bodies for inland fisheries cultivation.</p>
      </div>
    </div>
  </div>
</div>
<!-- AGEOS Modal -->
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Snow Cover Mapping and Monitoring</h3>
    <div class="image-item">
      <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/snow1.png" />
      <div class="image-item">
        <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/snow2.png" />
        <div class="image-item">
          <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/snow3_0.png" />
          <div class="image-item">
            <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/snow4.png" />
          </div>
          <hr />
          <p id="myptag">Snow in the Himalayas is a vital water resource to India and the snowmelt runoff occurring mostly during summer months constitute a substantial part of water resources of the river systems like Indus, Ganga and Brahmaputra. Snow cover mapping is done using remote sensing data regularly. Snow cover, with relatively high albedo, appears very bright on standard False Colour Composite (FCC) images and is easily differentiated with other land cover features.</p>
          <p id="myptag">The prior information on availability of quantity of snowmelt during critical summer months is essential in planning the reservoir operations. Development of snow melt runoff models, both seasonal (3 months) and short term (16 days), for forecasting during summer months (Apr-May-Jun) in 5 basins (Chenab, Beas, Sutlej, Yamuna and Ganga) is done using remote sensing inputs. During the years 2012 to 2016 seasonal forecast was provided for April to June months by 1st April. Six short term forecasts were provided on time for each 16-day period during April, May and June months of each year.</p>
          <p id="myptag">The satellite derived inputs such as snow cover, snow albedo, snow surface temperature and snow emissivity along with field data was used in computing net radiation. The net radiation forms the basis in estimating snow melt runoff using energy balance method in spatially distributed approach. The basin wise models and necessary data were transferred to CWC along with training support for internalization and usage at their end.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="ageos-modal1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">River Engineering</h3>
    <div class="image-item">
      <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/river1.png" />
      <div class="image-item">
        <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/river2.png" />
        <hr />
        <p id="myptag">River migration and river control works from the major elements in the flood plain management Satellite data provided accurate delineation of river configuration and the status of flood/river control works.</p>
        <p id="myptag">Most of the flood prone rivers in India change their course frequently after every flood wave attacking strategic locations at different times. Hence it is necessary to understand the behavior of the river and its latest configuration so as to plan the flood control measures effectively. At the same time it is equally important to monitor the existing flood control structures from time to time to avoid breaches in view of the frequent changes in river configuration. Using conventional techniques to collect the information is not cost effective and time effective. Mapping of river configuration and flood control works of river can be mapped using high resolution satellite data. NRSC has been carrying out this activity based on the user needs.</p>
      </div>
    </div>
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