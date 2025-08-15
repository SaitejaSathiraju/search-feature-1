<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Our Director</title>
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

      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .p-style p {
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

      #myImage {
        display: block;
        margin: 0 auto;
        border: 4px solid #333;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        object-fit: cover;
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
                <h1 class="heading-title text-break text-center">Our Director</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Organization</b>
              </li>
              <li class="current">
                <b>Our Director</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Director-main" id="Director-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_orgStructure_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3>Dr. Prakash Chauhan</h3>
              <h4>Director, NRSC</h4>
              <img src="assets/img/Director_NRSC.jpg" alt="Director" width="200px" height="250px" id="myImage" />
              <p class="p-style">
                <br /> <b>Dr. Prakash Chauhan</b> obtained his Post Graduate Degree in Applied Geophysics from University of Roorkee (now Indian Institute of Technology (IIT), Roorkee) and Ph. D. in Physics from Gujarat University, Ahmedabad. Prior to joining National Remote Sensing Centre (NRSC), Hyderabad, he was the Director at the Indian Institute of Remote Sensing (IIRS), Dehradun since April 2018. He joined Indian Space Research Organisation (ISRO) in 1991 at Space Applications Centre, Ahmedabad as scientist and since then working for the applications of Space Technology including Remote Sensing technology for Geosciences, Atmospheric and Oceanic process studies, Natural resources management for ocean and land resources. He initiated research activities for planetary remote sensing to study solar system objects mainly Earth’s Moon and Mars, through Indian planetary missions.
              </p>
              <p class="p-style"> His major achievements are in the area of Earth Observation Applications including development of algorithms for ocean colour parameter retrieval, aerosol remote sensing for space-based air quality monitoring, climate response to various ecosystems and disaster risk reduction. He has done lead work in using the hyperspectral satellite data for Indian Planetary Missions such as Chandrayaan-2 and Chandrayaan-1 for lunar surface composition mapping. He had been the Principal Investigator for Infrared Imaging spectrometer (IIRS) instrument on-board Chandrayaan-2 mission. His work on Chandryaan-2 IIRS spectrometer data has resulted in unambiguous detection of H2O and OH on the surface of the Moon. His findings have conclusively established presence of water molecules at different location on the Moon. </p>
              <p class="p-style"> He is currently serving as Chair of the Working Group of Whole at STSC of UN- Committee on Peaceful Uses of Space. He has also served as Chair for CEOS Working Group on Capacity Building and Data Democracy (WGCapD) for the year 2018-19. He had also been member of prestigious NASA-ISRO Planetary Science working group. </p>
              <p class="p-style"> He has been awarded with Asia Pacific Region Excellence in Space Award 2023 by Asia Pacific regional Space Agencies Forum, Prof. P.R. Pisharoty memorial award for the year 2004 by Indian Society of Remote Sensing, Hari Om Ashram Prerit Dr. Vikarm Sarabhai Research Award by Physical Research Laboratory (PRL), Ahmedabad for 2009, ISRO merit award by Indian Space Research Organization in 2010 and Satish Dhawan Award by ISRS, Dehradun for 2016. He has published more than 150 peer review papers in national and international journals. </p>
              <p class="p-style"> He is elected as Corresponding Member of International Academy of Astronautics (IAA) 2024 and is currently fellow of the National Academy of Science (NASI), Allahabad, Indian Society of Remote Sensing and Indian Social Science Academy. </p>
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