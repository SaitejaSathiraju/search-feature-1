<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Satellite Ground Station Services</title>
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Satellite Ground Station Services</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Services</b>
              </li>
              <li class="current">
                <b>Satellite Ground Station Services</b>
                </a>
              </li>
              <li class="current">
                <b> Query</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="sgss-main" id="sgss-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Services_Satellite_Ground_Station_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Query </h3>
              <br>
              <p id="p-style"> NRSC can develop and install a 7.5M S/X band antenna system as a new ground station. The following inputs are required: </p>
              <ul>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Main Campus at Balanagar,Hyderabad for Administration, Remote Sensing Applications and Aerial Services.
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Utility
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Area of coverage
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Frequency of operation
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Proposed satellites with required down link parameters
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Tentative location with Latitude, longitude and altitude
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Site selection (Elevation profile & Noise survey) report
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Connectivity - By road, ship, air etc
                </li>
              </ul>
              <p id="p-style"> For further details contact : <a href="mailto:&#100;&#100;&#115;&#100;&#114;&#105;&#115;&#97;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;" target="_blank"> ddsdrisa[at]nrsc[dot]gov[dot]in </a>
              </p>
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
  </body>
</html><script>
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