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
                <b>LULC Atlas</b>
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
              <h3> Annual Land Use and Land Cover Atlas of India </h3>
              <br>
              <p id="myptag">Since 2005, the National Remote Sensing Centre (NRSC) has been undertaking annual assessment of LULC for the country under Natural Resources Census (NRC) Programme of ISRO. Towards this multi-temporal and multi-sensor satellite data, primarily AWiFS, have been analysed to create land use and land cover layer for the entire country.This involves pre-processing of data to establish surface reflectance, followed by classification through the implementation of semi-automated rule based techniques. The outcome of this project encompasses preparation of geo-spatial dataset on 56m resolution comprising of:</p>
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Annual Land Use and Land Cover data for India,
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Annual Kharif and Rabi crop sown data,
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Monthly Kharif sown area for August and September,
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Monthly Rabi sown area for December and January, and
                </li>
              </ul>
              <p id="myptag">Commencing its journey in 2005-06 and till 2022-23, the project has completed 17 annual cycles of LULC.Over this period Kharif and Rabi area has expanded by 46.06% and 35.23% respectively, where as area under built-up has shown an increase of 30.77%.Further analysis indicates a decrease in fallow and wastelands, apparently reflecting their conversion to more productive land uses. This trend signifies a potential improvement in land management practices and resource utilization by the country.</p>
              <p id="myptag">The present atlas will serve as a compilation of LULC from 2005-06 onwards. Under this National level maps on land cover classes across the entire country along with seasonal crop maps (Kharif and Rabi crop) are presented. Maps are accompanied by charts providing state-wise land cover statistics. This atlas will also provide an insights into India's land use and land cover dynamics and it can serve a role in promoting informed decision-making and fostering sustainable development practices across the country.</p>
              <p id="myptag">Till date 200+ users have used these LULC datasets for various research, modelling and developmental monitoring activities by Academic Institutions (e.g. IITs, IIITs, IISER, NITs, research organizations) and government organization (ICAR Institutes, NIH, WII, ICFRE, etc.).</p>
              <br />
              <a href="./assets/pdf/atlas/LULC/LULC Atlas Final With Cover_March2024.pdf" target="_blank" id="myptag">
                <span>Click here to view LULC Atlas</span>
              </a>
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