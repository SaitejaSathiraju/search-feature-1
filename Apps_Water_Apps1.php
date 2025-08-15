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
        width: 350px;
        height: 150px;
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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Apps_Water_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Reservoir Sedimentation</h3>
                <p id="myptag">Reservoirs lose their storage capacity due to sedimentation. Periodic assessment of sedimentation rates is essential to ascertain the current reservoir live storage capacity for efficient and productive management of water resources. Conventionally, assessment of sediment deposition in the reservoir is carried out either by inflow-outflow measurement</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Water Resources Assessment</h3>
                <p id="myptag">Estimates of Water resources availability of the country is vital in planning of new dams and optimal management of available water resources. Central Water Commission (CWC) estimated Water resources potential of India as 1,869 Billion Cubic Metre (BCM) in 1993.</p>
              </div>
              <div class="section">
                <h3>Pre-Feasibility Studies of Proposed Irrigation Projects</h3>
                <p id="myptag">Satellite data would provide wealth of information for preparation of Pre-Feasibility Reports, Feasibility Reports and Detailed Project Reports in the context of Interlinking of Rivers are River Surveys, Reservoir Capacity Assessment, Reservoir Sedimentation, Submergence Area analysis, Rehabilitation & Reconstruction, Link Alignment, Canal</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Water_Apps.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps.php', this)" class="page-link">1</a>
                <a href="Apps_Water_Apps1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps1.php', this)" class="page-link active">2</a>
                <a href="Apps_Water_Apps2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps2.php', this)" class="page-link">3</a>
                <a href="Apps_Water_Apps3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Water_Apps3.php', this)" class="page-link">4</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>WATER RESOURCES </h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/reservoir1.png">
                    <img alt="antenna1" src="assets/img/apps/reservoir1.png" />
                    <div class="image-overlay">Reservoir Sedimentation</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/reservoir2_1.png">
                    <img alt="bharati" src="assets/img/apps/reservoir2_1.png" />
                    <div class="image-overlay">Water Resources Assessment</div>
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
    <h3 class="modal-title">Reservoir Sedimentation</h3>
    <div class="image-item">
      <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/Picture1_13.png" />
      <div class="image-item">
        <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/Picture2_11.png" />
        <div class="image-item">
          <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/Picture3_7.png" />
          <hr />
          <p id="myptag">Reservoirs lose their storage capacity due to sedimentation. Periodic assessment of sedimentation rates is essential to ascertain the current reservoir live storage capacity for efficient and productive management of water resources. Conventionally, assessment of sediment deposition in the reservoir is carried out either by inflow-outflow measurement method or by hydrographic survey. Hydrographic survey method is in practice for quite long time in India and elsewhere which is time consuming and costly.</p>
          <p id="myptag">Multi-temporal satellite data have been used as an aid to capacity survey of many reservoirs in a cost and time effective manner in India. While this technique helps in revising capacity table between minimum and maximum draw down level observed in satellite data, loss of dead storage capacity can be obtained only through conventional hydrographic surveys. Reservoir sedimentation surveys of 124 reservoirs of National Action Plan were executed by NRSC /DOS/Others. Similar techniques are being utilized by several State / Central Departments.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Pre-Feasibility Studies of Proposed Irrigation Projects</h3>
    <div class="image-item">
      <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/prefeasibility1.png" />
      <div class="image-item">
        <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/prefeasibility2.png" />
        <div class="image-item">
          <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/prefeasibility3.png" />
          <div class="image-item">
            <img id="Irrg_Image" alt="bharati" src="assets/img/Apps/prefeasibility4_0.png" />
            <hr />
            <p id="myptag">Satellite data would provide wealth of information for preparation of Pre-Feasibility Reports, Feasibility Reports and Detailed Project Reports in the context of Interlinking of Rivers are River Surveys, Reservoir Capacity Assessment, Reservoir Sedimentation, Submergence Area analysis, Rehabilitation & Reconstruction, Link Alignment, Canal Network Planning, Sites for Online New Storages, Conveyance System, Land irrigability assessment, Ideal Site Selection of Dam, Land Use/Land Cover analysis, Cropping System Analysis and Command Area Survey.</p>
            <p id="myptag">A study was carried out in KenBetwa river link region to help the finalisation of probable dam sites , potential command areas, submergence areas at varying proposed contour levels. CartoDEM plays an important role in addition to the high resolution satellite data from Indian Remote Sensing sensors.The high resolution satellite with stereo imaging capability is providing digital elevation models and multi-spectral information is providing terrain characterization to carry out submergence area analysis identifying the stretches of fertile lands, forests, villages and towns that would submerge and command area analysis to arrive at optimal solutions for efficient water use systems and strategies.</p>
          </div>
        </div>
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