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
                <b>Terrestrial Studies</b>
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
                <h3>Annual Crop Land Information </h3>
                <p id="myptag">The annual cropland products were the integrated outcome of the Land use land cover (LULC) output generated at 56m resolution under National Level LULC mapping on 1: 2,50,000 scale using multi-temporal AWiFS project. The study involved use of multi temporal AWiFS data covering Kharif (Aug –Nov), Rabi (Jan- Mar), Zaid (April- May) seasons to address spatial and temporal variability in cropping pattern and other land cover classes.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Broadband Snow Albedo</h3>
                <p id="myptag">Broad band Snow albedo is an important geophysical parameter for studies related to weather, climate, and hydrometeorology and so on. Snow has the highest albedo in nature and hence has a significant influence on surface energy budget and on Earth's radiative balance.</p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Water Bodies Fraction</h3>
                <p id="myptag">Water Bodies consists of all surface water bodies viz. reservoirs, irrigation tanks, lakes, ponds, and rivers / streams. The area under water bodies is dynamic in natures and hence multi-temporal satellite data was used for monitoring. An automated extraction algorithm developed is used for quick processing of satellite data acquired from Resourcesat -1, Resourcesat-2 AWiFS sensors (56m spatial resolution) which enables the generation of water body layer.</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More.php', this)" class="page-link active">1</a>
                <a href="Apps_Earth_terre_More_2.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_2.php', this)" class="page-link">2</a>
                <a href="Apps_Earth_terre_More_3.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_3.php', this)" class="page-link">3</a>
                <a href="Apps_Earth_terre_More_4.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_4.php', this)" class="page-link">4</a>
                <a href="Apps_Earth_terre_More_5.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_5.php', this)" class="page-link">5</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>TERRESTRIAL STUDIES</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img1_17.jpg">
                    <img alt="antenna1" src="assets/img/apps/img1_17.jpg" />
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img2.png">
                    <img alt="antenna1" src="assets/img/apps/img2.png" />
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/img6.png">
                    <img alt="antenna1" src="assets/img/apps/img6.png" />
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
            <div id="imgeos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Annual Crop Land Information </h3>
                <p id="myptag">The annual cropland products were the integrated outcome of the Land use land cover (LULC) output generated at 56m resolution under National Level LULC mapping on 1: 2,50,000 scale using multi-temporal AWiFS project. The study involved use of multi temporal AWiFS data covering Kharif (Aug –Nov), Rabi (Jan- Mar), Zaid (April- May) seasons to address spatial and temporal variability in cropping pattern and other land cover classes.</p>
                <p id="myptag">Seasonal information at annual scale representing Kharif, Rabi, Net sown area and fallow are during 2005-06 to 2015-16 are hosted on Bhuvan-Annual Crop Land.</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Annual Crop land data set, List and view the data of the selected time period. Technical Document(hyper link :Annaul Crop land )</p>
              </div>
            </div>
            <div id="imgeos-modal-1" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Broadband Snow Albedo</h3>
                <p id="myptag">Broad band Snow albedo is an important geophysical parameter for studies related to weather, climate, and hydrometeorology and so on. Snow has the highest albedo in nature and hence has a significant influence on surface energy budget and on Earth's radiative balance Seasonal information at Broad Band Albedo during 20014-2018 are hosted on Bhuvan-Broadband Snow Albedo.</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Broad band Snow Albedo, List and view the data of the selected time period. Technical Document(hyper link : Broad Band Snow Albedo)</p>
              </div>
            </div>
            <div id="imgeos-modal-2" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Water Bodies Fraction</h3>
                <p id="myptag">Water Bodies consists of all surface water bodies viz. reservoirs, irrigation tanks, lakes, ponds, and rivers / streams. The area under water bodies is dynamic in natures and hence multi-temporal satellite data was used for monitoring. An automated extraction algorithm developed is used for quick processing of satellite data acquired from Resourcesat -1, Resourcesat-2 AWiFS sensors (56m spatial resolution) which enables the generation of water body layer.</p>
                <p id="myptag">Fortnightly Water bodies Fraction information at during 20014-2018 are hosted on Bhuvan-Water bodies Fraction.</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences –Water Bodies Fraction, List and view the data of the selected time period. Technical Document(hyper link :Water Bodies Fraction)</p>
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
  localStorage.setItem('activeMenuItem', 'Terrestrial Studies');
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