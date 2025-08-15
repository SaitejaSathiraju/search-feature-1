<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Utility Software</title>
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

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .section img {
        float: left;
        margin-right: 15px;
        width: 190px;
        height: 190px;
        object-fit: cover;
      }

      .section p {
        text-align: justify;
        font-size: 20px;
      }

      .section a {
        color: blue;
        text-decoration: none;
        margin-right: 10px;
      }

      .clear {
        clear: both;
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
                <h1 class="heading-title text-break text-center">Utility Software</h1>
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
                <b>Utility Software</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="IP-main" id="IP-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <div class="section">
                <h3>Image Mosaicing Utility </h3>
                <img src="assets/img/utility_soft/mosai-uim-7.jpg" alt="Image Mosaicing Utility">
                <p> Image mosaicing is an important step in generation of large area radiometrically balanced images for mapping applications as well as in visualisation of large areas in a single view. Mosaicking is the process of joining overlapped georeferenced images together to form a larger image. Mosaic of multiple images involves two major steps color balancing and stitching. Many color matching techniques are available, but no single color matching technique is suitable for a given set of images. In this tool, Mosaic Normalization is achieved using statistical based automated tool to color match 'N' number of images and to get seamless mosaic with 'cut line feathering technique' in overlap areas. It assumes both images (to be mosaiced) are geometrically registered and have certain overlap and they are at the same spatial resolution. (1) <a href="assets/pdf/utility_soft/MosaicNormalisation.rar">Download</a> (2) <a href="assets/pdf/utility_soft/MosaicNormalization_Usemanual.pdf" target="_blank">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>Semi- Automatic Registration utility for Resourcesat Imagery</h3>
                <img src="assets/img/utility_soft/registration-uim-8.jpg" alt="Semi- Automatic Registration utility for Resourcesat Imagery">
                <p> Semi-Automatic registration tool is developed to rectify the Resourcesat images using polynomial transformation. This utility is designed using the object-oriented approach with an objective of high performance and with user-friendly functionalities for generating the registered images with respect to reference images. It has capability of using multiple processors for efficient image processing. This module is developed on JAVA and generates automatic tie points and also provides display viewer for delete, modify and adding the control points. This module provides basic image viewing options like panning, zooming, scrolling. The module supports various re-sampling techniques viz., Nearest Neighborhood, bilinear and cubic convolution. (1) <a href="assets/pdf/utility_soft/SemiAutomaticRegistration.rar">Download</a> (2) <a href="assets/pdf/utility_soft/SemiAutomaticRegistration_Usermanual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="section">
                <h3>Utility for Mapping of SOI Map series to Open series Maps</h3>
                <img src="assets/img/utility_soft/SOItoOSM-uim-9.jpg" alt="Utility for Mapping of SOI Map series to Open series Maps">
                <p> The main purpose of the utility is to assist the users in relating Open Series Maps (OSM) to old Toposheets or vice versa. These Toposheets were printed by survey of India on 1:250,000; 1:50,000 and 1:25,000 scales. Old Topographic maps are based on Everest Datum and Polyconic Projection. The new OSM maps are based on UTM, WGS-84 datum. The Toposheet Conversion utility has a graphical user interface (GUI) which uses Java Swing technology. (1) <a href="assets/pdf/utility_soft/MappingUtility_SOI_to_OSM.rar">Download</a> (2) <a href="assets/pdf/utility_soft/MappingUtility_SOI_to_OSM__Usermanual.pdf">User Manual</a>
                </p>
                <div class="clear"></div>
              </div>
              <div class="pagination">
                <a href="utility_softwares_1.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_1.php', this)" class="page-link">1</a>
                <a href="utility_softwares_2.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_2.php', this)" class="page-link">2</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_3.php', this)" class="page-link active">3</a>
                <a href="utility_softwares_4.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_4.php', this)" class="page-link">4</a>
                <a href="utility_softwares_5.php" onclick="localStorage.setItem('activeMenuItem', 'Utility Software') ;loadPage('utility_softwares_5.php', this)" class="page-link">5</a>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Utility Software');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

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