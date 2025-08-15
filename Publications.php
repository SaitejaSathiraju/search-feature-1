<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UN-CSSTEAP@NRSC PUBLICATION</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Custom CSS -->
    <style>
      .image-settings {
        width: 100%;
        height: auto;
        cursor: pointer;
        max-width: 1000px;
        display: block;
        margin: 0 auto;
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
      .list-group-item {
        font-size: 1.1rem;
        font-weight: 500;
        color: #2c4ea0;
        border-left: 5px solid #3f68b5;
        transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
      }

      .list-group-item:hover {
        background-color: #f0f4ff;
        transform: translateX(5px);
        color: #1c2d66;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
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
                <b>2023 Publication</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Publication-main" id="Publication-main"></div>
      <!-- Service Details Section -->
      <section class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Publication</h3>
              <div class="list-group my-4">
                <a href="assets/pdf/cssteap/Satellite Remote Sensing Data Acquisition &amp; Processing (2).pdf" target="_blank" class="list-group-item list-group-item-action">
                  CSSTEAP SRSDAP 2024 - Report
                </a>
                <a href="assets/pdf/cssteap/CSSTEAP_SRSOA_2024_Final.pdf" target="_blank" class="list-group-item list-group-item-action">
                  CSSTEAP SRSOA 2024 - Report
                </a>
                <a href="assets/pdf/cssteap/RSDP_Course_report_NCPO_updated_2023.pdf" target="_blank" class="list-group-item list-group-item-action">
                  CSSTEAP RSDP 2023 - Report
                </a>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var menuBtn = document.getElementById("menuToggleBtn");
        $('#mobileSidebar').on('show.bs.collapse', function() {
          menuBtn.innerText = "Hide Menu";
        });
        $('#mobileSidebar').on('hide.bs.collapse', function() {
          menuBtn.innerText = "Show Menu";
        });
      });
    </script>
  </body>
</html>