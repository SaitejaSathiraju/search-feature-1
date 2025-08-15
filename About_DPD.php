<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Processing & Dissemination</title>
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
        width: 400px;
        margin-left: auto;
      } */
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

      .image-gallery {
        margin-top: 20px;
      }

      .image-item {
        margin-bottom: 20px;
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
    </style>
  </head>
  <body>
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">Data Processing & Dissemination</h1>
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
              <b>Data Processing & Dissemination</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_Services_List.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Data Processing & Dissemination</h3>
              <br />
              <p id="p-style">Satellite data received at ground station is automatically transferred into high end data archiving and storage systems. Several satellite/sensor specific algorithms are used for automated data processing for initial corrections based satellite ephemeris data like orbit and attitude,accession catalogues, etc. Further, geometric and radiometric corrections are carried out for generation of products for dissemination to the users. </p>
              <p id="p-style"> Satellite data can be searched and ordered through Bhoonidhi portal hosted on internet. This has the facility to systematically search for the required images through interactive tools/menus by selecting the parameters like location, time period, satellite and sensor, etc. Satellite data is disseminated within 2hrs for emergency products and within 16 hrs for regular products by Data Acquisition Planning & Outreach Group. </p>
              <a href="EOP_irsdata_Objective_New.php" id="p-style">More Details...</a>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>DATA DISSEMINATION</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/c2s_hitechcity_1kby500_1.jpg" />
                    <div class="image-overlay">C2S-Hitech City, Hyderabad</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/c2s_mx_hitechcity_1kby500.jpg" />
                    <div class="image-overlay">C2S MX Hitech City, Hyderabad</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/rs2a_awifs_gujarat_1kby500.jpg" />
                    <div class="image-overlay">RS2A AWIFS Gujarat</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/rs2a_l3_mumbai_1kby500.jpg" />
                    <div class="image-overlay">RS2A L3 Mumbai</div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Lightbox Popup -->
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
<script>
  function openLightbox(element) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    // Get image source and overlay text
    const imgSrc = element.querySelector('img').src;
    const titleText = element.querySelector('.image-overlay').textContent;
    // Set lightbox content
    lightboxImg.src = imgSrc;
    lightboxTitle.textContent = titleText;
    // Show lightbox
    lightbox.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
    document.body.style.overflow = 'auto';
  }
  // Close when clicking outside image
  document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
      closeLightbox();
    }
  });
  // Close with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeLightbox();
    }
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