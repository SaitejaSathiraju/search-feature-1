<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Geo Physical Products</title>
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==">
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
                <h1 class="heading-title text-break text-center">Geo Physical Products</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Data Products</b>
              </li>
              <li class="current">
                <b>Geo Physical Products</b>
                </a>
              </li>
              <li class="current">
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="data_products-main" id="data_products-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Dataproducts_geophysical_serviceslist.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Overview</h3>
              <br />
              <p id="p-style">Satellite sensors make measurements in terms of radiance, back scatter coefficient, brightness temperature etc. Algorithms are developed for retrieval of several geophysical parameters. Geophysical parameters retrieved from remote sensing satellite data are widely used at various scales by user community. Utilisation of these parameters ranges from simple monitoring of vegetation growth to land- surface energy balance studies, mid- to long-term weather prediction,global climate change investigation etc.. </p>
              <p id="p-style">Bhuvan geoportal facilitates users to select, browse and query the dynamic thematic and geophysical datasets covering visualization, free data download, thematic map display and analysis, timely information on disaster and project specific GIS applications. Users can consume these thematic datasets and integrate into their systems as OGC Web Services. Geophysical parameters are downloaded and utilised by researchers as well common public. </p>
              <p id="p-style">
                <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=all" target="_blank">Visit NICES</a>
              </p>
              <p id="p-style">
                <a href="https://bhuvan.nrsc.gov.in/ngmaps?mode=Hybrid#4.13/22.91/82.78" target="_blank">Visit Bhuvan</a>
              </p>
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
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