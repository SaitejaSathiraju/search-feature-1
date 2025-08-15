<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UN-CSSTEAP@NRSC RSDP</title>
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
                <b>Participants</b>
              </li>
              <li class="current">
                <b>2023 RSDP</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <!-- <div data-skip-id="RSDP-main" id="RSDP-main"></div> -->
      <!-- Service Details Section -->
      <section class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Remote Sensing Data Processing - 2023 </h3>
              <br>
              <a href="assets/img/cssteap/RSDP_2023.jpg" target="_blank">
                <img src="assets/img/cssteap/RSDP_2023.jpg" class="image-settings" alt="Remote Sensing Image">
              </a>
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