<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Urban & Infrastructure</title>
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

        .sidebar h3 {
          font-size: 14px !important;
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
        z-index: -1;
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

      #HMP_Image {
        width: 250px;
        height: 350px;
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
                <h1 class="heading-title text-break text-center">Urban & Infrastructure</h1>
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
                <b>Urban & Infrastructure</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Urban-main" id="Urban-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Urban_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>National Health Resources Repository (NHRR)</h3>
                <p id="myptag">India’s first ever national healthcare facility registry with authentic, standardized and updated geospatial data of all public and private healthcare establishments. This is being carried out with Central Bureau of Health Intelligence (CBHI), Ministry of Health & Family Welfare (MoH&FW).</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Monitoring of Judicial Infrastructure for MoLJ</h3>
                <p id="myptag">This project envisages development of mobile and web application system for hosting and monitoring of Infrastructure facilities for Judiciary in the country.‘Nyaya Vikas’ – a BHUVAN web portal and mobile app for monitoring of the projects under the Centrally Sponsored Scheme (CSS) for development of infrastructure facilities for District and sub-ordinate judiciary in all states and union territories of the count</p>
                <a class="read-more" data-modal="ageos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Alignment of Power Lines</h3>
                <p id="myptag">Route alignment for power lines is done using IRS LISS III Satellite data to derive the base information on terrain features like topography and slope, current land use, forest/vegetation cover, water bodies/drainage, built-up areas, road, rail, sanctuaries/ national parks which are the major guiding factors for alignment of any infrastructure corridor.</p>
              </div>
              <div class="pagination">
                <a href="Apps_Urban_Apps.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps.php', this)" class="page-link">1</a>
                <a href="Apps_Urban_Apps1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps1.php', this)" class="page-link">2</a>
                <a href="Apps_Urban_Apps2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps2.php', this)" class="page-link">3</a>
                <a href="Apps_Urban_Apps3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban3_Apps3.php', this)" class="page-link active">4</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>URBAN APPLICATIONS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/Picture15_0.png">
                    <img alt="antenna1" src="assets/img/apps/Picture15_0.png" />
                    <div class="image-overlay">Urban Growth Monitoring</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/MSETCL-small.jpg">
                    <img alt="bharati" src="assets/img/apps/MSETCL-small.jpg" />
                    <div class="image-overlay">GIS for Power Infrastructure</div>
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
    <h3 class="modal-title">National Health Resources Repository (NHRR)</h3>
    <p id="myptag">India’s first ever national healthcare facility registry with authentic, standardized and updated geospatial data of all public and private healthcare establishments. This is being carried out with Central Bureau of Health Intelligence (CBHI), Ministry of Health & Family Welfare (MoH&FW). It is envisaged to provide customized geospatial solution for healthcare resources assets mapping and development of web portal for Decision Support System (DSS). Nationwide data collection of health establishments is in progress using the mobile (tablet) application. This will provide comprehensive data on all health resources including private doctors, health facilities, chemists, and diagnostics labs, establish a National Health Resource Repository for evidence based decision making – aligned with digital India mission. It will also enhance the coordination between central and state governments for optimization of health resources, making ‘live’ and realistic state Project Implementation Plans (PIPs) and improving accessibility of data at all levels, including State Head of Departments, thus, decentralize the decision making both at state and district levels.</p>
  </div>
</div>
<!-- AGEOS Modal -->
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Monitoring of Judicial Infrastructure for MoLJ</h3>
    <p id="myptag">This project envisages development of mobile and web application system for hosting and monitoring of Infrastructure facilities for Judiciary in the country.‘Nyaya Vikas’ – a BHUVAN web portal and mobile app for monitoring of the projects under the Centrally Sponsored Scheme (CSS) for development of infrastructure facilities for District and sub-ordinate judiciary in all states and union territories of the country. Specific components are mobile application for geotagging of assets, attributes information with pictures and for periodically updating the status. Database added in this portal can be utilized for monitoring the activities to improve efficiency and accountability(for restricted use by the department).Capacity building of the judicial officers and PWD officials of 35 states and Union Territories for utilization of the ‘Nyaya Vikas’ System.</p>
  </div>
</div>
</section>undefined</main>undefined<?php include 'footer.php'; ?>undefined<script>
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