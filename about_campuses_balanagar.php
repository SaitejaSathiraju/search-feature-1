<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Campuses</title>
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

        .sidebar img {
          width: 100%;
          height: 100%;
        }

        .sidebar h3 {
          font-size: 16px !important;
        }
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      #addStyle {
        font-size: 18px;
        line-height: 1.6;
        margin: 0;
      }

      #addhead {
        margin-bottom: 10px;
      }

      .addBox {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
      }

      /* Lightbox styles */
      .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        text-align: center;
      }

      .lightbox-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
      }

      .lightbox-img {
        max-width: 90%;
        max-height: 80vh;
        object-fit: contain;
      }

      .lightbox-caption {
        color: #fff;
        font-size: 1.2rem;
        margin-top: 15px;
      }

      .lightbox-close {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
      }

      .lightbox-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        transform: translateY(-50%);
      }

      .lightbox-prev,
      .lightbox-next {
        color: #fff;
        font-size: 50px;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .lightbox-prev:hover,
      .lightbox-next:hover {
        background-color: rgba(255, 255, 255, 0.2);
      }
    </style>
  </head>
  <body>
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">Campuses</h1>
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
              <b>Campuses</b>
            </li>
            <li class="current">
              <b>NRSC Balanagar</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <!-- End Page Title -->
    <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_campuseslist.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>NRSC Balanagar</h3>
              <br>
              <p id="myptag"> Balanagar is the main campus for NRSC. Aerial services and digital mapping activities are carried out in addition to the remote sensing applications projects that are being executed in collaboration with Various State and Central Ministries and also working for in-house national mission projects for generation of resource maps. </p>
              <br>
              <div class="addBox">
                <h5 id="addHead">
                  <b>Address:</b>
                </h5>
                <p id="addStyle">
                  <b>Director</b>
                  <br> National Remote Sensing Centre, <br> Indian Space Research Organisation, <br> Dept. of Space, Govt. of India, <br> Balanagar, Hyderabad - 500037 <br> Telangana State
                </p>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>NRSC BALANAGAR</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)">
                    <img src="assets/img/campuses/balanagar/main_gate.jpg" alt="NRSC BALANAGAR 3">
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img src="assets/img/campuses/balanagar/01.jpg" alt="NRSC BALANAGAR 2">
                  </div> 
                  <div class="image-item" onclick="openLightbox(this)">
                    <img src="assets/img/campuses/balanagar/Mural.jpg" alt="NRSC BALANAGAR 1">
                  </div>                                   
                  <div class="image-item" onclick="openLightbox(this)">
                    <img src="assets/img/campuses/balanagar/about_campuses_balanagar3.jpg" alt="NRSC BALANAGAR 4">
                  </div>
                </div>
              </div>
            </aside>
            <div id="lightbox" class="lightbox">
              <span class="lightbox-close">&times;</span>
              <div class="lightbox-content">
                <img class="lightbox-img" src="" alt="">
                <div class="lightbox-caption"></div>
              </div>
              <div class="lightbox-nav">
                <span class="lightbox-prev">&#10094;</span>
                <span class="lightbox-next">&#10095;</span>
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
  document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.querySelector('.lightbox-img');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');
    let currentImageIndex = 0;
    const images = Array.from(document.querySelectorAll('.image-item img'));
    const captions = Array.from(document.querySelectorAll('.image-overlay')).map(el => el.textContent);

    function openLightbox(element) {
      const img = element.querySelector('img');
      currentImageIndex = images.indexOf(img);
      updateLightbox();
      lightbox.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    function updateLightbox() {
      lightboxImg.src = images[currentImageIndex].src;
    }

    function closeLightbox() {
      lightbox.style.display = 'none';
      document.body.style.overflow = 'auto'; // Re-enable scrolling
    }

    function navigate(direction) {
      currentImageIndex += direction;
      if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
      } else if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
      }
      updateLightbox();
    }
    // Event listeners
    closeBtn.addEventListener('click', closeLightbox);
    prevBtn.addEventListener('click', () => navigate(-1));
    nextBtn.addEventListener('click', () => navigate(1));
    // Close when clicking outside the image
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        closeLightbox();
      }
    });
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (lightbox.style.display === 'block') {
        if (e.key === 'Escape') {
          closeLightbox();
        } else if (e.key === 'ArrowLeft') {
          navigate(-1);
        } else if (e.key === 'ArrowRight') {
          navigate(1);
        }
      }
    });
    // Make the openLightbox function global
    window.openLightbox = openLightbox;
  });
</script>