<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Geosciences</title>
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

        .sidebar h3 {
          font-size: 12px !important;
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Geosciences</h1>
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
                <b>Geosciences</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Geosciences-main" id="Geosciences-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'App_geo_services_list.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Geo environmental studies</h3>
                <p id="myptag">Geoenvironmental studies deals with the geogenic components like rocks, relief, groundwater and geodynamic phenomena. The complex properties of these components affect the quality of environment and the landscape exploitation.</p>
                <a class="read-more" data-modal="mineral-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Mapping of Coal Fire Areas</h3>
                <p id="myptag">In order to manage effectively the coal fire menace, it is essential to know the exact location and extent of the fire affected areas. Coal fire mapping carried out in the past conducting an airborne campaign in 1989 and using Landsat-5 TM data over Jharia coalfield, Jharkhand , Raniganj coalfield, West Bengal in 2001.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Geotechnical Studies</h3>
                <p id="myptag">Satellite data are useful for selection of sites for identification hydroelectric dams. High resolution IKONOS data were used for mapping on 1:5,000 scale in Middle project in Arunachal Pradesh. Detail study was carried out using IKONOS data around dam site with emphasis on shear zone identification. </p>
                <a class="read-more" data-modal="dynamic-modal" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Geosciences_1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_1.php', this)" class="page-link ">1</a>
                <a href="Apps_Geosciences_2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_2.php', this)" class="page-link ">2</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_3.php', this)" class="page-link active">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>GEOSCIENCES APPLICATIONS </h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 9 sm.jpg">
                    <img src="assets/img/geo/Figure 9 wp.jpg" ALT="Geo environmental studies" />
                    <div class="image-overlay">Geo environmental studies </div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 10sm.jfif">
                    <img src="assets/img/geo/Figure 10sm -wp.jfif" alt="Coal fire and land subsidence" />
                    <div class="image-overlay">Coal fire and land subsidence</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 11sm.jpg">
                    <img src="assets/img/geo/geotechnical-wp.jpg" alt="Geo technical Studies" />
                    <div class="image-overlay">Geo technical Studies</div>
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
<div id="mineral-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Geo environmental studies</h3>
    <p id="myptag">Geoenvironmental studies deals with the geogenic components like rocks, relief, groundwater and geodynamic phenomena. The complex properties of these components affect the quality of environment and the landscape exploitation.</p>
    <p id="myptag">The geomorphic units along with the lithology are considered to be key element to define the environment of erosion/deposition and surface dynamics. Integration of the geomorphic sub-provinces based on the spatial extent of the quaternary deposits has helped in identification of few geo-environmental zones in parts of Bengal Delta. These zones have been characterized based on its stability, potentiality for agricultural practices, urban planning and scope of reclamation, hence providing an important input to town planners.</p>
  </div>
</div>
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Mapping of Coal Fire Areas</h3>
    <p id="myptag">In order to manage effectively the coal fire menace, it is essential to know the exact location and extent of the fire affected areas. Coal fire mapping carried out in the past conducting an airborne campaign in 1989 and using Landsat-5 TM data over Jharia coalfield, Jharkhand , Raniganj coalfield, West Bengal in 2001. Further coal fire of the Jharia Coalfield was mapped for 2003 and 2006, using ETM+ and ASTER data, respectively. This type of activity was further carried out in 2012 and 2017 to update the status of coal fire in the Jharia coal field. In addition to this, land subsidence detection in the Jharia coalfield was carried out using differential Interferometry. A similar study is being undertaken for Oil India Limited in Assam to detect subsidence due to hydrocarbon extraction.</p>
  </div>
</div>
<div id="dynamic-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Geotechnical Studies</h3>
    <p id="myptag">Satellite data are useful for selection of sites for identification hydroelectric dams. High resolution IKONOS data were used for mapping on 1:5,000 scale in Middle project in Arunachal Pradesh. Detail study was carried out using IKONOS data around dam site with emphasis on shear zone identification. Structural weak zones e.g. faults and shear were also mapped which helped to identify locations of dam axis. Similar study has been carried out in Tawang Valley for dam site suitability using Cartosat-1 data.Oil pipeline alignment studies have been carried out for IOCL. Reservoir sedimentation studies are also being carried out for NHPC for Teesta stage IV dam.</p>
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