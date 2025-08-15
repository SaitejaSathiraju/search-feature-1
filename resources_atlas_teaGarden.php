<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>River Basin Atlas</title>
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

      @media (max-width: 768px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
      }

      .doc-size {
        font-size: 12px;
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
                <h1 class="heading-title text-break text-center">Atlas</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>Atlas</b>
              </li>
              <li class="current">
                <b>Tea Garden Atlas</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Atlas-main" id="Atlas-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_atlas_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Tea Garden Atlas </h3>
              <br>
              <p id="myptag">Remote Sensing and Geographic Information System is developed in tea area development using multi-spectral and multi-resolution satellite data supported by ground intelligence to address precise mapping of the tea estates with section details, pruning types, shade tree density, estate land use and gap areas. Based upon the encouraging results of the pilot study a nationwide project on <i>“Tea area development and management using Remote Sensing and GIS”</i> was taken up. The following are the Atlases. <br>
                <br />
                <a href="./assets/pdf/atlas/TeaGarden/DIBRUGARH_TG_ATLAS.pdf" target="_blank">
                  <span>Tea Garden Atlas, Dibrugarh District, Assam</span>
                </a>
                <br />
                <br />
                <a href="./assets/pdf/atlas/TeaGarden/JALPAIGURI_TG_ATLAS.pdf" target="_blank">
                  <span>Tea Garden Atlas, Jalpaiguri District, West Bengal</span>
                </a>
              </p>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
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