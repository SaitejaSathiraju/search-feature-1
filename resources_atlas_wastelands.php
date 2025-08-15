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
                <b>Wastelands Atlas</b>
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
              <h3> Wastelands Atlas </h3>
              <br>
              <p id="myptag"> Wastelands mapping has been carried out using three season satellite data for the period 2008 - 09. The current exercise ‘National Wastelands Change Analysis’ is a ‘watershed’ in the entire wastelands mapping since it facilitates objective comparison of wastelands between 2005 - 06 and 2008 - 09. </p>
              <p id="myptag"> The changes in wastelands is presented in the form of change matrices. The decrease in wastelands of 3.2 million hectares was observed, spread over 112057 locations (polygons), while simultaneously an increase in wastelands of 2.7 million hectares in 42886 locations was observed. Thus, the net result was decrease in wasteland area to the tune of 0.5 million hectares in 2008 - 09 as compared to 2005 - 2006, when aggregated for the entire country and wasteland classes. </p>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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