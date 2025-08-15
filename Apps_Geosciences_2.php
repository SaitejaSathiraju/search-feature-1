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
                <h3>Mineral Exploration</h3>
                <p id="myptag">Earth observation data provide valuable inputs for mineral exploration. Space borne earth observation data and their derived image products provide scope for mapping the host rock and regional structures contributed in localising mineral deposit. Specialised study using hyperspectral and multispectral satellite data provide valuable information on surface distribution of alteration rocks, cap rocks associated with mineral deposit.</p>
                <a class="read-more" data-modal="mineral-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Geo hazard studies</h3>
                <p id="myptag">The Geohazard studies are primarily focussed on landslides, earthquakes and volcanoes. High resolution satellite data are used for post disaster damage assessment and landslide inventory preparation in the case of landslide or earthquake.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Geo dynamic studies</h3>
                <p id="myptag">Monitoring crustal deformation using advanced space geodetic techniques such as the Global Positioning System (GPS) is useful for analyzing and quantifying seismic hazard in tectonically active areas.</p>
                <a class="read-more" data-modal="dynamic-modal" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Geosciences_1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_1.php', this)" class="page-link ">1</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_2.php', this)" class="page-link active">2</a>
                <a href="Apps_Geosciences_3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Geosciences_3.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>GEOSCIENCES APPLICATIONS </h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 6sm.jpg">
                    <img src="assets/img/geo/Figure 6sm-wp_0.jpg" ALT="Mineral Exploration" />
                    <div class="image-overlay">Mineral Exploration </div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 7sm_0.jpg">
                    <img src="assets/img/geo/Figure 7sm-wp_0.jpg" alt="Geohazard studies" />
                    <div class="image-overlay">Geohazard studies</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/geo/Figure 8sm.jpg">
                    <img src="assets/img/geo/Figure 8sm-wp.jpg" alt="Geodynamic studies" />
                    <div class="image-overlay">Geodynamic studies</div>
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
    <h3 class="modal-title">Mineral Exploration</h3>
    <p id="myptag">Earth observation data provide valuable inputs for mineral exploration. Space borne earth observation data and their derived image products provide scope for mapping the host rock and regional structures contributed in localising mineral deposit. Specialised study using hyperspectral and multispectral satellite data provide valuable information on surface distribution of alteration rocks, cap rocks associated with mineral deposit.</p>
    <p id="myptag">Ground water quality mapping is another important activity which is carried out by NRSC by organizing the seasonal quality data of geogenic contaminants, collected from wells by State Departments. The point data are interpolated in GIS environment for visualization in association with ground water prospect map, which differentiates the potable and non-potable groundwater sources.</p>
    <p id="myptag">High resolution remote sensing (HRS) data are used for mapping geological structures responsible for mineralisation. Geological themes identified using remote sensing data are integrated with ground geophysical, geochemical data to delineate prospective zone for exploration. Remote sensing studies were carried out for projects of bauxite, Chromite, diamond, Iron, Manganese, Phosphate etc. A joint study was taken with GSI for demonstrating optimum use of hyperspectral data for identifying mineralisation targets for detailed exploration. Prospectivity modelling for mineral deposit has been attempted for Bhukia and Zawar area, Rajasthan.</p>
  </div>
</div>
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Geo hazard studies</h3>
    <p id="myptag">The Geohazard studies are primarily focussed on landslides, earthquakes and volcanoes. High resolution satellite data are used for post disaster damage assessment and landslide inventory preparation in the case of landslide or earthquake. Major landslide events studied recently include Kerala-Karnataka-Tamil Nadu (2018), Mizoram-Tripura (2017) and Sikkim (2016). Landslide Hazard Zonation maps are made on 1:25,000 scale along major tourist and pilgrimage routes in the states of Himachal Pradesh and Uttarakhand. These maps is integrated with the rainfall forecast data to develop and issue landslide early warning through Bhuvan portal. In recent years several earthquakes struck India namely the Kashmir earthquake (2005), Sikkim earthquake (2011) and Nepal earthquake (2015). Post-disaster very high resolution (VHR) satellite data have been used to provide detailed information on damage and geological changes for a large area in a short time. In addition to these, the recent eruptions of the Barren Island volcano have also been monitored using temporal satellite data.</p>
  </div>
</div>
<div id="dynamic-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Geo dynamic studies</h3>
    <p id="myptag">Monitoring crustal deformation using advanced space geodetic techniques such as the Global Positioning System (GPS) is useful for analyzing and quantifying seismic hazard in tectonically active areas. Continuously Operating Reference Stations (CORS)that use GPS are being used to measure plate movements. NRSC plans for such CORS observations along major Himalayan thrusts belts (HFT/MBT/MCT and ISSZ). For this, nine CORS have been established in Dehradun, Uttarkashi, Batwari and Roorkee(in Uttarakhand) and Manali, Chandigarh, Pinjore (Haryana), Shimla and Sundernagar in Himachal Pradesh. The preliminary displacements from of each site from 2014 to 2018 has been estimated. The results of the observations are currently being analysed to.</p>
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