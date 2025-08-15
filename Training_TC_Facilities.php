<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Training</title>
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

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      .facility-card {
        background-color: #f8f9fa;
        padding: 25px;
        margin-bottom: 20px;
        border-left: 5px solid #007bff;
        border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.07);
      }

      .facility-card h5 {
        font-size: 22px;
        margin-bottom: 10px;
        color: #004085;
      }

      .facility-card i {
        margin-right: 10px;
        color: #007bff;
      }

      .facility-card p {
        line-height: 1.6;
        margin-bottom: 0;
      }

      @media (max-width: 576px) {
        .facility-card h5 {
          font-size: 20px;
        }

        .facility-card p {
          font-size: 16px;
        }
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
                <h1 class="heading-title text-break text-center">Training Courses</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Training & Outreach</b>
              </li>
              <li class="current">
                <b>Training Courses</b>
              </li>
              <li class="current">
                <b>Training Facilities</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="trainingFacilities-main" id="trainingFacilities-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'TrainingAndOutreach_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Training Facilities</h3>
              <br />
              <div class="facility-card">
                <h5><i class="fas fa-chalkboard-teacher"></i> Faculty</h5>
                <p id="myptag">
                  The experienced scientists and engineers of NRSC, who are involved in operational projects of national importance using aerial/satellite data, serve as instructors. Their expertise spans remote sensing applications, data processing software, and web services.
                </p>
              </div>

              <div class="facility-card">
                <h5><i class="fas fa-laptop-code"></i> Classrooms and Labs</h5>
                <p id="myptag">
                  Well-equipped classrooms with audio-visual tools are provided. Remote Sensing and GIS labs offer dedicated systems with both proprietary (ArcGIS, ERDAS) and open-source software tools.
                </p>
              </div>

              <div class="facility-card">
                <h5><i class="fas fa-bed"></i> Guest House & Canteen</h5>
                <p id="myptag">
                  Accommodation is available in air-conditioned, shared rooms at the NRSC Guest House. The NRSC canteen serves South Indian meals for breakfast, lunch, and dinner at nominal cost.
                </p>
              </div>

              <div class="facility-card">
                <h5><i class="fas fa-shield-alt"></i> Security</h5>
                <p id="myptag">
                  NRSC is a prohibited area. Cameras, laptops, and storage media are not permitted inside without authorization. CD/DVDs for course projects (for long-duration programs) can be brought with prior approval.
                </p>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body><script>
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
</script></html>