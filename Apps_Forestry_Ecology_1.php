<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forestry and Ecology</title>
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Forestry and Ecology</h1>
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
                <b>Forestry and Ecology</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="FnE-main" id="FnE-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Forestry_Ecology_servicesList.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Identification of Forest Cover Loss Locations</h3>
                <p id="myptag">Forest survey of India , MOEF&CC brings about comprehensive Biennial reporting of the forest cover status, however, there is a need of annual/sub-annual actionable forest cover loss information.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Long term forests cover change</h3>
                <p id="myptag">Multi-source and multi-temporal data from earliest possible topographical maps and satellite remote sensing datasets were used to map the forest cover in the country over last eight decades (1930, 1975, 1985, 1995, 2005 and 2013/2014). Forest fraction cover information was hosted on Bhuvan-Forest Fraction Cover.</p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Monitoring of Biosphere Reserves</h3>
                <p id="myptag">The Biosphere Reserves (BRs) are internationally designated landscapes / seascape units under UNESCO's flagship programme; “Man and Biosphere (MAB)”. To undertake activities of biodiversity conservation and development of sustainable management.</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Forestry_Ecology_1.php', this)" class="page-link active">1</a>
                <a href="Apps_Forestry_Ecology_2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Forestry_Ecology_2.php', this)" class="page-link">2</a>
                <a href="Apps_Forestry_Ecology_3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Forestry_Ecology_3.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>FORESTRY APPLICATIONS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/forestry/F-FOREST LOSS LCOATIONS-LARGE.png">
                    <img src="assets/img/forestry/1_0.png" alt="Forest Loss Locations" />
                    <div class="image-overlay">Forest Loss Locations</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/forestry/forest burnt area.png">
                    <img src="assets/img/forestry/forest burnt area_0.png" alt="Forest Changes" />
                    <div class="image-overlay">Forest Changes</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/forestry/F-Biodiversity Characterisation at Landscape level_0.png">
                    <img src="assets/img/forestry/img3_14.jpg" alt="Bio Diversity" />
                    <div class="image-overlay">Bio Diversity</div>
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
    <h3 class="modal-title">Identification of Forest Cover Loss Locations </h3>
    <p id="myptag">Forest survey of India , MOEF&CC brings about comprehensive Biennial reporting of the forest cover status, however, there is a need of annual/sub-annual actionable forest cover loss information. NRSC, using the green season AWIFS data , using automated methods provides forest cover loss locations to all forest managers in the country on annual basis.</p>
    <p id="myptag">The results are well validated by the users. These methods are used and detected change locations at national level during 2013, 2014 and 2015 which are to tune of 5989, 2845 and 2452 No. of locations respectively. Android mobile application has been developed for collection of field attributes. Field verification and feedback mechanism is utilised for improvement of the algorithm.</p>
  </div>
</div>
<div id="imgeos-modal-1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Long term forests cover change</h3>
    <p id="myptag">Multi-source and multi-temporal data from earliest possible topographical maps and satellite remote sensing datasets were used to map the forest cover in the country over last eight decades (1930, 1975, 1985, 1995, 2005 and 2013/2014). Forest fraction cover information was hosted on Bhuvan-Forest Fraction Cover.</p>
    <p id="myptag">Studies are carried out on overall annual net rate of deforestation over long term, deforestation rate at regional level. It contributes for the evaluation of biodiversity. Fractional forest cover maps and forest type maps of Indiawere hosted on Bhuvan website for decision makers, extension agencies and researchers for understanding regional level forest cover changes and studies related to vegetation-climate modeling.</p>
  </div>
</div>
<div id="imgeos-modal-2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Monitoring of Biosphere Reserves</h3>
    <p id="myptag">The Biosphere Reserves (BRs) are internationally designated landscapes / seascape units under UNESCO`s flagship programme; “Man and Biosphere (MAB)”. To undertake activities of biodiversity conservation and development of sustainable management aspects, biosphere reserve area demarcated into three zones viz. core, buffer and transition. The aim of the project is to provide information on conservation effectiveness after declaration of Biosphere Reserves.</p>
    <p id="myptag">This project has generated baseline spatial information on forest types, forest canopy density and land cover on 1:50,000 scale at every five years interval for four Biosphere Reserves (Nilgiri and Agasthyamalais of Western Ghats, Similipal of Eastern Ghats and Kachchh of Arid zone, Gujarat). Dry deciduous forest in Nilgiri Biosphere Reserve is one of the predominant forest type which was affected by frequent fires and aggressive colonization of invasive alien species - Lantana camara. The spatially explicit maps generated would be useful for restoration of degraded forests affected by fires and biological invasion.</p>
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