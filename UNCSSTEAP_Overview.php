<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UN-CSSTEAP@NRSC Overview</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Skip Link CSS for Accessibility -->
    <style>
      .container-fluid p {
        font-size: 20px;
        text-align: justify;
      }

      .carousel-container {
        max-width: 1500px;
        margin: 0 auto;
        position: relative;
        padding: 15px;
      }

      .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15), 0 6px 6px rgba(96, 110, 192, 0.53);
      }

      .carousel-item img {
        width: 100%;
        height: 750px;
        aspect-ratio: 16/9;
        object-fit: cover;
      }

      .carousel-caption {
        bottom: 30px;
        background: rgba(206, 250, 250, 0.9);
        color: #1e1f1f;
        padding: 12px 20px;
        border-radius: 6px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .carousel-caption p {
        font-size: 22px;
      }

      @media (max-width: 768px) {
        .carousel-item img {
          aspect-ratio: 4/3;
        }

        .carousel-caption p {
          font-size: 14px;
          padding: 5px 10px;
        }
      }

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
    </style>
  </head>
  <body>
    <!-- Page Header -->
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">UN-CSSTEAP@NRSC</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current">
              <b>UN-CSSTEAP@NRSC</b>
            </li>
            <li class="current">
              <b>Overview</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <!-- End Header -->
    <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Overview</h3>
              <br />
              <p>National Remote Sensing Centre, ISRO is organizing Short Courses on Satellite Remote Sensing for Data Acquisition and processing, Ocean Applications and other subject areas, keeping in view five decades of R&D expertise and experience in several domains at Knowledge Resource Area, Earth Station, Shadnagar under the auspices of Center for Space Science and Technology Education in Asia and the Pacific (CSSTEAP), affiliated to the United Nations.</p>
              <p>Since its inception in 2023, around 67 participants from Asia and Pacific countries, including India, have successfully graduated from these programs. They are from Bangladesh (4), Bhutan (2), India (10), Lao PDR (2), Kazakhstan (8), Kyrgyzstan (2), Mongolia (3), Myanmar (1), Nepal (4), Sri Lanka (9), Tajikistan (1), Uzbekistan (1), and Vietnam (5).</p>
              <p>These courses have received 4.83 out of 5-star ratings in meeting objectives and the entire program design.</p>
              <p>The mission is to continue organizing such courses while introducing long-term courses, customized courses, and more short courses in the areas of expertise and emerging technologies with the knowledge base available at NRSC and are of interest to countries in Asia and the Pacific. A recent addition to our list of courses is on Mineral, Oil and Groundwater Exploration using Microwave and Optical Remote Sensing.</p>
              <!-- Carousel Section -->
              <div class="carousel-container" aria-label="Training Photo Gallery">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                      <img src="assets/img/cssteap/DSC_8196.jpg" alt="Training session on Satellite Remote Sensing in November 2024">
                      <div class="carousel-caption d-none d-md-block">
                        <p class="m-0">
                          <strong>Satellite Remote Sensing Data Acquisition and Processing from Nov 18–29, 2024</strong>
                        </p>
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="assets/img/cssteap/NRS_2714_1.jpg" alt="Hands-on satellite data session at NRSC">
                      <div class="carousel-caption d-none d-md-block">
                        <p class="m-0">
                          <strong>Satellite Remote Sensing Data Acquisition and Processing from Nov 18–29, 2024</strong>
                        </p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" aria-label="Previous Slide">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" aria-label="Next Slide">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </button>
                </div>
              </div>
            </section>
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
  });
</script>