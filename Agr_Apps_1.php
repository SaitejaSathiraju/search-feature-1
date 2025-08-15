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
                <h3>Horticulture Crop Inventory and Mapping</h3>
                <p id="myptag">Horticulture Assessment and Management using Geo-informatics (CHAMAN) is a national mission project for Integrated Development of Horticulture (MIDH), Ministry of Agriculture & Cooperation, GOI and State Horticulture Departments. </p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Gespatial Technology for Inventory of Coffee Plantations (GeoCUP)</h3>
                <p id="myptag">Geospatial Technology for Inventory of Coffee Plantations (GeoCUP) project is executed for Coffee Board, Ministry of Commerce & Industry for generation of reliable database on coffee plantation acreage.</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Mapping of High Value Crops</h3>
                <p id="myptag">High value crops are agricultural produce that give rich dividends in economic terms. These crops are good alternative to reduce the possible risks that arise from mono cropping. Menthol mint (MenthaArvensis) is an important essential oil-bearing plant which</p>
                <a class="read-more" data-modal="ageos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Agr_Apps.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps.php', this)" class="page-link">1</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps_1.php', this)" class="page-link active">2</a>
                <a href="Agr_Apps_2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Agr_Apps_2.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>AGRICULTURE PRODUCTS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/AG-HORTICULTURE.png">
                    <img alt="antenna1" src="assets/img/about/agriculture_0.png" />
                    <div class="image-overlay">Horticulture Crop Inventory</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/AG-MINT CROP.png">
                    <img alt="bharati" src="assets/img/about/Picture1_6.png" />
                    <div class="image-overlay">Mapping Mint Crop</div>
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
    <h3 class="modal-title">Horticulture Crop Inventory and Mapping</h3>
    <p id="myptag">Horticulture Assessment and Management using Geo-informatics (CHAMAN) is a national mission project for Integrated Development of Horticulture (MIDH), Ministry of Agriculture & Cooperation, GOI and State Horticulture Departments. This project requires a reliable database for the inventory of horticulture crops in terms of plantation area, locations and generation of geospatial database. Satellite data has been extensively used for inventory major horticulture crops (mango, banana, citrus) in 40 selected districts of country. Generated database is useful as a reference dataabase in planning and devlopmental activities related to horitculture plantation management, extension and horticulture related infrastrcture devlopment. Pilot studies have been conducted for studying the site suitability for extending the areas of horticulture crops. Various layers viz. soil, groundwater, rainfall, land use/cover, etc. have been utilized to arrive at areas suitable for expansion of mango plantations. </p>
  </div>
</div>
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Gespatial Technology for Inventory of Coffee Plantations (GeoCUP) </h3>
    <p id="myptag">Geospatial Technology for Inventory of Coffee Plantations (GeoCUP) project is executed for Coffee Board, Ministry of Commerce & Industry for generation of reliable database on coffee plantation acreage. These are critical inputs for proper planning and management. A pilot study was successfully conducted and and a national initiative on “Geospatial Inventory of Coffee Plantations at national level (Geo-CUP) with an objective of Inventory of coffee plantations at national level, Site-suitability analysis for expansion of coffee plantations, Generation of a Management Information System (MIS) for spatial visualization & querying, Hosting of deliverables on BHUVAN geo-platform. This informtaion is a critical input for development and expansion of coffee plantations in the country. GeoCUP is recently launched for systematic invnetory of coffee plantations in traditional areas in Karnataka, Tamilnadu and Kerala , non traditional areas in Andhra Pradesh and Orissa, and North Eastern States.</p>
  </div>
</div>
<div id="ageos-modal-1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Mapping of High Value Crops </h3>
    <p id="myptag">High value crops are agricultural produce that give rich dividends in economic terms. These crops are good alternative to reduce the possible risks that arise from mono cropping. Menthol mint (MenthaArvensis) is an important essential oil-bearing plant which is widely used in food, flavor, pharmaceutical and cosmetic industries. It is cultivated in large areas in the Indo-Gangetic plains in the states of Uttar Pradesh, Punjab, Haryana, Uttarakhand Bihar, with maximum area in Uttar Pradesh. Inventory, mapping of menthol mint crop using geospatial techniques, Production estimation of menthol mint, Land suitability analysis for growing high value crops, Economic analysis of menthol mint crop cultivation is carried out for Ministry of Commerce, GOI.</p>
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