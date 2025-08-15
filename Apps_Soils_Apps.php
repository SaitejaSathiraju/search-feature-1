<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Soils</title>
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

        .modal-content {
          width: 90%;
          margin: 20% auto;
        }

        .image-overlay {
			  position: absolute;
			  background-color: rgba(0, 0, 0, 0.6);
			  color: white;
			  font-size: 12px;
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
      
      .read-more {
        display: inline-block;
        margin-top: 10px;
        color: #0066cc;
        text-decoration: none;
        font-weight: bold;
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

      .read-more:hover {
        text-decoration: underline;
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
                <h1 class="heading-title text-break text-center">Soils</h1>
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
                <b>Soils</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Soil-main" id="Soil-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Apps_Soils_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Land Degradation Mapping: 1:50,000 scale</h3>
                <p id="myptag">First cycle of Land degradation mapping on 1:50,000 scale for entire Country was carried out by visual interpretation of IRS LISS-III satellite data of 2005-06 ( Kharif (Aug–Nov), Rabi (Jan- Mar), Zaid (April- May) seasons) with limited ground truth and soil chemical analysis. Land degradation maps were prepared depicting 8 land degradation processes sub-categorized in to 36 classes (Three tier classification considering land degradation process</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Soil Health Card</h3>
                <p id="myptag">Soil Health Management (SHM) is one of the most important interventions under National Mission for Sustainable Agriculture (NMSA). SHM aims at promoting Integrated Nutrient Management through judicious use of chemical fertilizers including secondary and micro nutrients in conjunction with organic manures and bio-fertilizers for improving soil health</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag">Read more</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>SOILS APPLICATIONS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/1_1.png" data-title="View of the parameters utilised for understanding the concept of multi-parameter evaluation to assess risk for estimating the crop insurance products.">
                    <img style="max-width:100%; height:auto" alt="antenna1" src="assets/img/apps/1_1.png" />
                    <div class="image-overlay">Land Degradation Map</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/Picture6_1.png">
                    <img style="max-width:100%; height:auto" alt="bharati" src="assets/img/apps/Picture6_1.png" />
                    <div class="image-overlay">Soil Health Card</div>
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
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Land Degradation Mapping: 1:50,000 scale</h3>
    <p id="myptag">First cycle of Land degradation mapping on 1:50,000 scale for entire Country was carried out by visual interpretation of IRS LISS-III satellite data of 2005-06 ( Kharif (Aug–Nov), Rabi (Jan- Mar), Zaid (April- May) seasons) with limited ground truth and soil chemical analysis. Land degradation maps were prepared depicting 8 land degradation processes sub-categorized in to 36 classes (Three tier classification considering land degradation process, type and severity). Soil erosion (water & wind), salt affected and water logged area maps of 2005-06 were hosted on Bhuvan. An area of 91 M ha is estimated to be under land degradation (27.7 % TGA) in India. Nearly 80% of land degradation is caused by water erosion followed by wind erosion, salinization and waterlogging.</p>
    <p id="myptag">Erosion maps (2005-06) and Salt affected and water logging are hosted on</p>
    <p id="myptag">The second cycle of land degradation mapping with Multi-temporal Resourcesat LISS-III satellite data acquired during 2015-16 is in progress which is to monitor the land degradation changes within last 10 years in the country. Ground truth is being collected through mobile application that can enable visualization on Bhuvan.</p>
    <p id="myptag">Land degradation maps will be useful for prioritization of watersheds for treatment, planning soil conservation and reclamation programmes at district level, monitoring the reclamation efforts, environmental and climate change studies, preparation of action plan maps for land degradation neutrality, facilitates to identify areas of rapid change (hot spots).</p>
    <ul>
      <li id="myptag">
        <a href="http://bhuvan.nrsc.gov.in/gis/thematic/index.php" ; target=_blank">Bhuvan-Erosion
      </li>
      </a>
      </i>
      <li id="myptag">        
        <a href="http://bhuvan.nrsc.gov.in/gis/thematic/index.php" target="_blank">Bhuvan-Salt Affected and Water Logging</a>
      </li>
    </ul>
  </div>
</div>
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Soil Health Card</h3>
    <p id="myptag">Soil Health Management (SHM) is one of the most important interventions under National Mission for Sustainable Agriculture (NMSA). SHM aims at promoting Integrated Nutrient Management through judicious use of chemical fertilizers including secondary and micro nutrients in conjunction with organic manures and bio-fertilizers for improving soil health and its productivity. Developed a web based portal and mobile application to generate soil health cards for 6 states (Telangana, Andhra Pradesh, Tamil Nadu, Haryana, Assam and West Bengal). to geo-register soil samples as well as to retrieve crop-specific recommendations based on soil health data at any time and from any location.</p>
    <p id="myptag">Supporting Ministry of Agriculture and Farmers Welfare (MoA&FW) for Govt. of India’s Soil Health Card Scheme with this information to generate nutrient status, fertilizer blend and fertilizer requirement maps of the entire country. Soil health cards generated are hosted on</p>
    <ul>
      <li id="myptag">        
        <a href="http://bhuvan-noeda.nrsc.gov.in/governance/shc/" ; target=_blank">Bhuvan-SHC
      </li>
      </a>
      </i>
    </ul>
    <p id="myptag">Development of web based portal with modules facilitated to enter relevant data and generate soil health cards, and development of mobile application for geo-tagging of soil samples and obtaining 24x7 fertilizer recommendation by farmers based their soil health status. District-level nutrient status maps were provided for 12 soil parameters, nutrient blends and geo-spatial computation of fertilizer requirement.</p>
  </div>undefined
</div>undefined<script>
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