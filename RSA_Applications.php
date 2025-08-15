<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Remote Sensing Applications</title>
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

      #p-style {
        font-size: 20px;
        text-align: justify;
      }

      @media (max-width: 576px) {
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
        /* height: 400px; */
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
        width: 70%;
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Remote Sensing Applications</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Organization</b>
                </a>
              </li>
              <li class="current">
                <b>About NRSC</b>
              </li>
              <li class="current">
                <a href="About_RSA.php">
                  <b>Remote Sensing Applications</b>
                </a>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="aboutRSA-main" id="aboutRSA-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_RSA_Services_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Crop Insurance</h3>
                <p id="p-style">The Pradhan Mantri Fasal BimaYojana (PMFBY) is a national flagship programme for providing crop insurance in the country. NRSC is carrying out geomatics based studies towards improving the area-yield estimates, a key input to the development of methodologies for crop insurance mechanism.</p>
                <a class="read-more" data-modal="imgeos-modal" id="p-style">Read more</a>
              </div>
              <div class="section">
                <h3>Crop Intensification</h3>
                <p id="p-style">India grows 36 Mha of rice crop in kharif season in India. This is important contribution to food production in India as rice is the main food crop. It is observed that about 30% of this area is left fallow after the harvest of rice crop. Mapping and monitoring of post-kharif rice fallow lands using satellite data will help identification of suitable areas for intensification of rabi crop area. </p>
                <a class="read-more" data-modal="ageos-modal" id="p-style">Read more</a>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('RSA_Applications.php', this)" class="page-link active">1</a>
                <a href="RSA_Applications_2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('RSA_Applications_2.php', this)" class="page-link">2</a>
                <a href="RSA_Applications_3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('RSA_Applications_3.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>AGRICULTURE PRODUCTS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/ag-technology support in crop insurance 2.png" data-title="View of the parameters utilised for understanding the concept of multi-parameter evaluation to assess risk for estimating the crop insurance products.">
                    <img alt="antenna1" src="assets/img/about/Crop Insurance_1.png" />
                    <div class="image-overlay">Inputs for - Crop Insurance</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/ag-crop intensification.png">
                    <img alt="bharati" src="assets/img/about/Picture3_2.png" />
                    <div class="image-overlay">Scope for Crop Intensification</div>
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
                <h3 class="modal-title">Crop Insurance </h3>
                <p id="p-style">The Pradhan Mantri Fasal BimaYojana (PMFBY) is a national flagship programme for providing crop insurance in the country. NRSC is carrying out geomatics based studies towards improving the area-yield estimates, a key input to the development of methodologies for crop insurance mechanism. Methodologies were developed and tested at state level for Odisha. Generation of homogeneous insurance units (with village as unit) with reduced basis risk, investigation on crop yield estimation methods in Insurance Units, suggestion of improved methods for yield estimation are the primary contributions.</p>
                <p id="p-style">Crop Insurance Decision Support System (CIDSS) is being developed through a web-enabled integrated package for States. This will improve efficiency and transparency in crop insurance mechanism by enabling objective decision making, sampling design for yield estimation, generating yield estimates in the insurance units. Mobile applications are developed for crowd sourcing for field data collection, Crop Cutting Experiments (CCE) and crop damage assessment through Bhuvan Portal.</p>
              </div>
            </div>
            <div id="ageos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Crop Intensification </h3>
                <p id="p-style">India grows 36 Mha of rice crop in kharif season in India. This is important contribution to food production in India as rice is the main food crop. It is observed that about 30% of this area is left fallow after the harvest of rice crop. Mapping and monitoring of post-kharif rice fallow lands using satellite data will help identification of suitable areas for intensification of rabi crop area. Kharif rice areas in conjunction with subsequent rabi crop areas have been compared to arrive at the fallow lands left uncultivated in rabi season. These areas have been analyzed along with corresponding soil and climate parameters to assess their suitability for cultivating short duration pulses during subsequent rabi season.</p>
                <p id="p-style">Sub district level spatial level information is generated and studied for the assessment of crop intensification in major rice-growing states of India namely Assam, Bihar, Odisha, Chhattisgarh, Jharkhand, West Bengal. The aim of this project is to provide an estimate of spatial extent and distribution of post kharif rice – rabi fallows, and also their suitability for growing short duration pulses.</p>
                <p id="p-style">Mobile applications are deployed for seasonal field data collection for geo-tagging the crop scenario.Information is available on Bhuvan-Crop intensification portal which is useful for decision makers, extension agencies and researchers.</p>
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