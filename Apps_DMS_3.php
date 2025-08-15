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

      #imgeos-modal,
      #imgeos-modal-1 {
        display: none;
        justify-content: center;
        align-items: center;
      }

      #imgeos-modal-div {
        width: 90%;
        background: white;
        border-radius: 8px;
        padding: 20px;
        display: flex;
        flex-direction: row;
        gap: 20px;
      }

      #modal-title-with-sidebar {
        font-size: 24px;
        font-weight: bold;
      }

      #modal-sidebar-div{
        flex: 1; background: #f9f9f9; padding: 10px; border-left: 1px solid #ccc;
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
                <h3>Landslides</h3>
                <p id="myptag">Landslides are the major disasters that occur due to terrain factors such as slope, lithology, geological structure, land use, lineament density, and geomorphology. NRSC has taken up Inventory of landslides and land slide hazard zonation mapping. Event based inventory, route-wise inventory, seasonal land slide inventory in hazard prone regions are carried out and information generated is hosted in Bhuvan-Landslides.</p>
              </div>
              <div class="section">
                <h3>Forest Fire</h3>
                <p id="myptag">Active forest fire monitoring using satellite data provides timely information on fires to State Forest Departments across India for forest fire control and management activities. Active fire monitoring uses satellite data from MODIS flying on the TERRA and AQUA spacecraft and Visible Infrared Imaging Radiometer Suite data from the Suomi National Polar- orbiting Partnership (SNPP-VIIRS). Satellite data is received and processed at IMGEOS, NRSC in near real-time. </p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Earthquakes</h3>
                <p id="myptag">Several research studies are conducted on various seismic events for understanding the cause and impact assessment. Damage assessment is carried out in case of the events like Sikkim earthquake (2011), J & K earth quake (2005).</p>
              </div>
              <div class="pagination">
                <a href="Apps_DMS.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS.php', this)" class="page-link">1</a>
                <a href="Apps_DMS_2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS_2.php', this)" class="page-link ">2</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_DMS_3.php', this)" class="page-link active">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>DISASTER SUPPORT</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/Palakkad_3D_figure-small.jpg" data-title="View of  Landslide Process">
                    <img src="assets/img/about/Picture3_4.png" />
                    <div class="image-overlay">Landslide</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/dmsp-forest fire locations-monthly_0.jfif" data-title="View of  Forest Fire locations - on Bhuvan Portal">
                    <img src="assets/img/about/Picture4_3.png" />
                    <div class="image-overlay">Forest Fire</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/dmsp-earthquake.jfif" data-title="View  of  high resolution images hosted on Bhuvan -in Earthquake damages areas">
                    <img src="assets/img/about/earthquake-build-small.png" />
                    <div class="image-overlay">Earth Quake Damage Assessment</div>
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
<div id="imgeos-modal-1" class="modal" >
  <div class="container" id="imgeos-modal-div">
    <span class="close">&times;</span>
    <!-- Left: Modal Content -->
    <div style="flex: 2; min-width: 0;">
      <h3 id="modal-title-with-sidebar">Forest Fire</h3>
      <p id="myptag"> Satellite based forest fire monitoring is one of disaster support activity from NRSC for providing timely information on forest fires locations to State Forest Departments across India to trigger the forest fire control and management activities. Active forest fire monitoring uses satellite data from MODIS flying on the TERRA and AQUA spacecraft and Visible Infrared Imaging Radiometer Suite data from the Suomi National Polar- orbiting Partnership (SNPP-VIIRS). </p>
      <p id="myptag"> Satellite data is received and processed at Data processing Centre of NRSC in near real-time and information is made available to users (FSI, state forest departments) within 30 minutes of completion of satellite data acquisition. Near real time space based information on active fires, fire burnt area and forest fire regimes during the past decade are provided. </p>
      <p id="myptag">Forest fire alerts are simultaneously web-published through Bhuvan porta. The most recent active forest fire locations and history since 2001 can be visualized through Bhuvan-Forest Fire Alerts. Near real time information on number of forest fires and locations is the key input for the forest department for taking up fire control measures. Forest fire regime analysis is also possible with the archived forest fire location database generated by NRSC.</p>
    </div>
    <!-- Right: Sidebar -->
    <div id="modal-sidebar-div">
      <h3><b>FOREST FIRE PRODUCT</b></h3>
      <div onclick="openLightbox(this)" data-large-src="assets/img/about/forestfire.png">
        <img src="assets/img/about/forestfire.png" style="width: 100%; height: auto;" alt="Forest Fire"/>
        <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.6); color: white; width: 100%; text-align: center;">Forest Fire</div>
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