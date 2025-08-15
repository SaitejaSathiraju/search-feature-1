<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Thematic Maps</title>
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
                <h1 class="heading-title text-break text-center">Thematic Maps</h1>
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
                <b>Thematic Maps</b>
                </a>
              </li>
              <li class="current">
                <b>Carto DEM</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="thematic-main" id="thematic-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Dataproducts_Thematic_Servicelist.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> Carto DEM</h3>
              <br />
              <h4>Overview</h4>
              <br />
              <p id="p-style">IRS Satellite derived DEM with 30m or coarser posting shall be made available as free download. IRS Satellite derived DEM less than 30m and more than 10m posting may be made available at par with the base price for all categories of users. </p>
              <p id="p-style">
                <a href="assets/pdf/cartodem_bro_final.pdf" target="_blank">Carto DEM Brochure</a>
              </p>
              <br />
              <h4>Policy</h4>
              <br />
              <p id="p-style">IRS Satellite derived DEM with 10m posting may be made available at par with the base price for all categories of users, falling under unrestricted areas, to different categories of users will be as per the following guidelines. </p>
              <ul>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Government users namely, Ministries/ Departments/ Public Sector/ Autonomous Bodies/ Government R&D institutions/ Government Educational/ Academic Institutions, may obtain the data without any clearance..
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Private sector agencies and NGOs, recommended at least by one Government agency, for supporting development activities, may obtain the data without any further clearance.
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Other private, foreign and other users, may obtain the data after necessary clearance from the competent ISRO/DOS committee.
                </li>
              </ul>
              <p id="p-style">Satellite derived DEM with 10m or better than 10m posting, falling under restricted areas, by any user, may be serviced after obtaining necessary clearance from the High Resolution image Clearance (HRC) committee. </p>
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