<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Agriculture</title>
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
        max-width: 800px;
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

        .sidebar h3 {
          font-size: 14px !important;
        }

        .modal-content {
          width: 90%;
          margin: 20% auto;
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
                <h1 class="heading-title text-break text-center">Agriculture</h1>
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
                <b>Agriculture</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Agriculture-main" id="Agriculture-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Applications_Agri_Servicelist.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Fibre Crop Information System</h3>
                <p style="text-align:justify; font-size: 20px;">Cotton and jute are most important fibre crops of our country. A Fibre Crop Information System is developed using geo-spatial technologies. This will aid in geneartion of spatial fibre crop database and ollection of field level observations, centralized monitoring and assessment of cotton and jute crop condition.</p>
                <a class="read-more" data-modal="imgeos-modal" style="text-align:justify; font-size: 20px;">Read more</a>
              </div>
              <div class="section">
                <h3>Tea Area Development & Management</h3>
                <p style="text-align:justify; font-size: 20px;">Tea Board of India require the inventory of tea garden including small growers, monitoring of uprooted and replanted areas. Collaborative study has been conducted by NRSC to support the Tea Board, Tea Research Associations, Tea Gardens and Tea Industries with the adoption of geospatial technologies for better coordination, garden management and informed decision making</p>
                <a class="read-more" data-modal="ageos-modal" style="text-align:justify; font-size: 20px;">Read more</a>
              </div>
              <div class="section">
                <h3>Carbon in Studies in Agro - Climatic Zones</h3>
                <p style="text-align:justify; font-size: 20px;">Quantitative assessment of carbon/moisture fluxes and energy balance components over the different agro ecosystems is carried out with intensive collection of data related to carbon and moisture dynamics on top of the canopy and relevant bio-meteorological parameters, biophyscal parameters of the crops using eddy covariance flux towers. Quantitative assessment of the carbon and moisture fluxes over the selected (rice, pulse, cotton, jute) agro-ecosystem, assessment of the net ecosystem carbon balance and its causative factors, upscaling the carbon and water/energy fluxes to regional scale using remotely sensed proxies.</p>
              </div>
              <div class="pagination">
                <a href="Agr_Apps.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps.php', this)" class="page-link">1</a>
                <a href="Agr_Apps_1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps_1.php', this)" class="page-link">2</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps_2.php', this)" class="page-link active">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>AGRICULTURE PRODUCTS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/AG-fibre Crop Information Systems.png">
                    <img alt="antenna1" src="assets/img/about/Picture1_8.png" />
                    <div class="image-overlay">Fibre Crop Information</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/AG-TEA AREA  DEVLOPEMNT.png">
                    <img alt="bharati" src="assets/img/about/Picture2_6.png" />
                    <div class="image-overlay">Tea Area Development</div>
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
    <h3 class="modal-title">Fibre Crop Information System </h3>
    <p style="text-align:justify; font-size: 20px;">Cotton and jute are most important fibre crops of our country. A Fibre Crop Information System is developed using geo-spatial technologies. This will aid in geneartion of spatial fibre crop database and ollection of field level observations, centralized monitoring and assessment of cotton and jute crop condition.</p>
    <p style="text-align:justify; font-size: 20px;">Monitoring and assessment of fibre crop prospects is facilitated with space-based observations and customised mobile application for collection field data through centralized web service on Bhuvan. This has facilitated the collection of significant amount of field based observations (about 12,000 over cotton crop in 9 states; about 2000 observations over jute crop in 4 states during 2016-17) . NRSC efforts have benifitted the Ministry of Textiles, GOI as the crop status reports are being generated through near real time monitoring of growth and development of fibre crops and aiding in efficient policy making. Sustainable use/optimal management of resources, mobile apps for field data collection, geo-tagging of the offices/establishments/ centers related to these crops, data visualization and automatic report generation, analysis are being done on Bhuvan portal.</p>
  </div>
</div>
<!-- AGEOS Modal -->
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Tea Area Development & Management</h3>
    <p style="text-align:justify; font-size: 20px;">Tea Board of India require the inventory of tea garden including small growers, monitoring of uprooted and replanted areas. Collaborative study has been conducted by NRSC to support the Tea Board, Tea Research Associations, Tea Gardens and Tea Industries with the adoption of geospatial technologies for better coordination, garden management and informed decision making.</p>
    <p style="text-align:justify; font-size: 20px;">Satellite data was used for estimating spatial variability of crown densities of shade trees, spatial database of tea gardens with section details, land-use, shade tree density for facilitating the administrative linkages among Tea Board of India, large gardens, bought leaf factories, small growers and Industry. Tea Garden Management Information System (MIS) is developed for this project to update the information on monitoring of uprooting and re-planting activities towards rejuvenation over a large area with minimum effort and manpower. Study has been done for Tea gardens of Jalpaiguri and Dibrugarh in Assam State.</p>
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