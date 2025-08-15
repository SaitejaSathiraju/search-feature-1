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
                <b>Landslide Atlas</b>
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
              <h3> Landslide Atlas </h3>
              <br>
              <p id="myptag">This Atlas provides the details of landslide present in Landslide provinces of India including damage assessment of specific landslide locations. Geospatial landslide inventory database consisting of ~80,000 landslides in India mapped by NRSC/ISRO under its DMS programme during the 1998-2022 period is reported here. The database covers landslide vulnerable regions in 17 states and 02 UTs of India in the Himalayas and Western Ghats. The database includes three types of landslide inventory – seasonal, event-based and route-wise for the 1998-2022 period. Seasonal inventory contains pan-India landslide database corresponding to the 2014 and 2017 rainy season in India. Event-based inventory contains details of some of the major triggering events such as Kedarnath and Kerala disasters, and Sikkim earthquake as well as few large valley blocking landslides. Routewise inventory contains details of landslides along selected routes of tourist and pilgrimage importance. Satellite data of high to very high resolution such as IRS-1D PAN+LISS-III, Resourcesat-1, 2 and 2A LISS-IV Mx, Cartosat-1 and 2S, data from International satellites (Sentinel-1&amp;2, Pleiades and WorldView) and Aerial images were used in the mapping of landslides. Some of the mapped landslides were validated in the field using mobile App and news reports. The database were used to rank 147 districts in 17 states and 02 UTs of India for their exposure to landslides in terms of key socio-economic parameters. Lastly advanced techniques in landslide detection, modeling and prediction are also explained. <br />
                <br />
                <a href="./assets/pdf/atlas/landslide/Landslides_Atlas_of_India_Updated_25Aug2023.pdf"" target=" _blank">
                  <span>Click here to view Landslide Atlas</span>
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