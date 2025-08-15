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

        .sidebar {
          /* width: 100%;
          margin-left: 0; */
          order: 3; 
          margin-top: 20px;
        }

        .sidebar h3 {
          font-size: 16px !important;
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
                <b>Cryosphere Studies</b>
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
                <h3>Snow Cover Fraction</h3>
                <p id="myptag">Snow cover is dynamic in nature and melts based on local temperature variations in different time periods. Satellite sensors can provide synoptic coverage at frequent intervals which facilitates mapping, monitoring of dynamics of snow cover.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag"><b>Read more</b></a>
              </div>
              <div class="section">
                <h3>Snow Melt Freeze</h3>
                <p id="myptag">A methodology to detect and monitor snow melt and freeze from microwave scatterometer data (OSCAT) onboard OCEANSAT2 and QuikSCAT data is developed.</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag"><b>Read more</b></a>
              </div>
              <div class="section">
                <h3>Snow Melt in Antarctica</h3>
                <p id="myptag">Spatio-temporal dynamics of surface melting over Antarctica is of importance in understanding the response of ice shelves to climate change. Normalised radar backscatter is sensitive to the water content of snow. </p>
                <a class="read-more" data-modal="ageos-modal1" id="myptag"><b>Read more</b></a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>CRYOSPHERE STUDIES</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img1_16.jpg" data-title="View of the parameters utilised for understanding the concept of multi-parameter evaluation to assess risk for estimating the crop insurance products.">
                    <img alt="antenna1" src="assets/img/apps/img1_16.jpg" />
                    <div class="image-overlay">Snow Cover Fraction</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img2_17.jpg">
                    <img alt="bharati" src="assets/img/apps/img2_17.jpg" />
                    <div class="image-overlay">Snowmelt and Freeze Dynamics</div>
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
            <!-- IMGEOS Modal -->
            <div id="imgeos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Snow Cover Fraction</h3>
                <p id="myptag">Snow cover is dynamic in nature and melts based on local temperature variations in different time periods. Satellite sensors can provide synoptic coverage at frequent intervals which facilitates mapping, monitoring of dynamics of snow cover. Automated Snow Cover Extraction (ASCE) Algorithm developed is used for quick processing of satellite data and extraction of Snow Cover Area (SCA). Further Snow Cover Fraction (SCF) as fraction of snow cover area over 3'x3' grid area was estimated.</p>
                <p id="myptag">Fortnightly Snow cover fraction from 2014--2018 is hosted on Bhuvan-Snow Cover Fraction .</p>
                <p id="myptag">Select NICES Project – Cryospheric products –Snow cover fraction, List and view the data of the selected time period. Technical Document(hyper link :Snow Cover Fraction)</p>
              </div>
            </div>
            <!-- AGEOS Modal -->
            <div id="ageos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Snow Melt Freeze</h3>
                <p id="myptag">A methodology to detect and monitor snow melt and freeze from microwave scatterometer data (OSCAT) onboard OCEANSAT2 and QuikSCAT data is developed. The backscatter response of dry and wet snow was observed to be high and low, respectively at Ku band. This observation enabled to employ a threshold based approach to identify melt/freeze status.</p>
                <p id="myptag">Temporal analysis of data for different observations in Indian Himalaya shows that a single, fixed threshold satisfies determination of dry snow from wet snow. Accordingly, a constant threshold (For each scatterometer) is used for entire area. HH polarization from QuikSCAT (January 2000 – November 2009) and OSCAT (November 2009- December 2013) is used to derive melt/freeze status. </p>
                <p id="myptag">Fortnightly Snow cover fraction from 2003--2013 is hosted on Bhuvan-Snow Melt Freeze.</p>
                <p id="myptag">Select NICES Project – Cryospheric products –Snow cover fraction, List and view the data of the selected time period. Technical Document(hyper link :Snow Melt Freeze)</p>
              </div>
            </div>
            <div id="ageos-modal1" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Snow Melt in Antarctica</h3>
                <p id="myptag">Spatio-temporal dynamics of surface melting over Antarctica is of importance in understanding the response of ice shelves to climate change. Normalised radar backscatter is sensitive to the water content of snow. With the increase in the liquid water content in the snow, there is a sudden decrease in the backscatter from radar. This is the basis of melt detection.</p>
                <p id="myptag">Spatiotemporal dynamics of snow melt in Antarctica from 2001 to 2014 using microwave scatterometer data from OSCAT and QuikSCAT is generated at 2.25 km resolution at daily interval. Daily Information on Snow Melt in Antarctic from 2001--2017 is hosted on Bhuvan-Snow Melt Antarctica.</p>
                <p id="myptag">List and view the data of the selected time period. Technical Document(hyper link :Snow Melt Antarctica)</p>
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