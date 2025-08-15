<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Aerial Services & Digital Mapping</title>
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

      .breadcrumb {
        padding: 10px 20px;
        font-size: 14px;
        color: #666;
      }

      .breadcrumb a {
        color: #0066cc;
        text-decoration: none;
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
                <h1 class="heading-title text-break text-center">Aerial Services & Digital Mapping</h1>
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
                </a>
              </li>
              <li class="current">
                <b>About NRSC</b>
              </li>
              <li class="current">
                <a href="About_ASDM.php">
                  <b>Aerial Services & Digital Mapping</b>
                </a>
              </li>
              <li class="current">
                <b>Users</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="ASDM-main" id="ASDM-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_ASDM_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Users</h3>
              <br />
              <p id="p-style">Aerial data acquisition operations caters to the following users: </p>
              <ol id="p-style">
                <li>CMPDI, Coal India Limited, National Informatics Centre, Planning Commission, Govt. of India.</li>
                <li>Town and Country Planning Organisation (TCPO), New Delhi.</li>
                <li>Rajasthan Urban Infrastructure Development Project (RUIDP), Govt. of Rajasthan</li>
                <li>Bangalore Development Authority (BDA), Govt. of Karnataka</li>
                <li>Hyderabad Metropolitan Water Supply and Sewerage Board (HMWS&amp;SB), Govt. of Telangana</li>
                <li>Town and Country Planning Department, Tamil Nadu, Survey Settlement &amp;Land Records, Govt. of Chattisgarh</li>
                <li>National Informatics Centre, Planning Commission, Govt. of India</li>
                <li>Disaster Management Support Programme (DMSP) of ISRO, Kolkata Municipal Corporation (KMC), Govt. of West Bengal</li>
                <li>National Water Development Authority, Govt. of India, Water Resources Development Organisation, Govt.of Karnataka</li>
                <li>Indian National Centre for Ocean Information System (INCOIS), DOD, Govt. of India</li>
                <li>Defence Research Development Organisation (DRDO,Electronics &amp; Radar Development Establishment (LRDE)</li>
                <li>Airports Authority of India (AAI), FMISC, Ministry of Water Resources, Govt, of Bihar</li>
                <li>Ministry of Water Resources, Govt. of India, Central Water Commission, Govt. of India</li>
              </ol>
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