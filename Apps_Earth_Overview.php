<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Earth and Climatic Studies</title>
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

      .button-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        padding: 10px;
      }

      /* Button styling */
      button {
        padding: 10px 20px;
        background-color: #0066cc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        flex: 1 1 auto;
        max-width: 300px;
      }

      /* Hover effect */
      button:hover {
        background-color: #0055aa;
      }

      /* Optional: make sure they stack nicely on very small screens */
      @media (max-width: 480px) {
        .button-container {
          flex-direction: column;
          align-items: center;
        }

        button {
          width: 90%;
        }
      }

      #myptag {
        font-size: 20px;
		text-align: justify;
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
                <h1 class="heading-title text-break text-center">Earth and Climatic Studies</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Earth and Climatic Studies</b>
              </li>
              <li class="current">
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="EARTH-main" id="EARTH-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Apps_Earth_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Overview</h3>
              <br />
              <p id="myptag"> Earth and climate studies encompass the scientific domains that examine Earth's physical systems, including the Oceans, Atmosphere, Land and Ice, as well as the interactions between them and how they change over time.  This area focuses on investigating both natural processes and human-caused impacts on the Earth's climate system, with the goal of understanding past, present, and future climate conditions through satellite measurements, ground observations and modelling.
                <!-- Remote sensing applications in the domain of Earth and Climate Sciences emphasizes on studying earth as a coupled system involving Land-Air-Ocean interactions through satellite, ground observations and modeling. Various research and operational projects that are being executed are categorized into, Terrestrial Sciences, and Atmospheric Sciences & Ocean Sciences. -->
              </p>
              <h3>Climate</h3>
              <br />
              <p id="myptag">To comprehensively understand Earth’s integrated system and the interactions among various elements that affect Climate, Earth Observation (EO) satellite data is being utilized to retrieve the Essential Climate Variables (ECVs) critical for characterizing Earth’s climate. These variables are essential for monitoring climate change and its impact, guiding mitigation and adaptation strategies, and assessing climate risks. By harnessing them, we can advance effective climate services and move toward a more sustainable future. <br> <br>
            The Ocean ECVs cover physical, biogeochemical, and biological/ecosystems disciplines. The Terrestrial ECVs cover the hydrosphere, cryosphere, biosphere, and anthroposphere. The atmosphere ECVs cover both surface and upper-air atmosphere as well as atmospheric composition.  <br><br>
          National Information system for Climate and Environment Studies (NICES) Program has a mandate to retrieve, disseminate, and carryout research on various Climate parameters using space inputs.</p>
              <!-- <p id="myptag">NICES Program has a mandate to do research on various Ocean and Climate parameters using space inputs.</p> -->
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i>
                  <a href="assets/pdf/apps/NICES_brochure_final_July_2022.pdf" target="_blank">NICES Booklet</a>
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i>
                  <a href="assets/pdf/apps/NICES_booklet_July_2022.pdf" target="_blank">NICES Brochure</a>
                </li>
              </ul>
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