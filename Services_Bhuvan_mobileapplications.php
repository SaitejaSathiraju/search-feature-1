<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Bhuvan Services</title>
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Bhuvan Services</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Services</b>
              </li>
              <li class="current">
                <b>Bhuvan Services</b>
                </a>
              </li>
              <li class="current">
                <b> Mobile Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="bhuvan-main" id="thematic-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Services_Bhuvan_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Mobile Applications</h3>
              <br />
              <p id="p-style"> NRSC has been developing many Mobile apps for Geo-governance. The recent advances in the field of mobile devices, communications and global positioning systems have made it possible to design and build innovative and effective methods of field data collection and management. Now-a-days mobile devices are equipped with the features like integrated GPS receiver, photo camera, GPRS/3G/4G/Wi-Fi connectivity, feature-rich OS, etc., which can be leveraged to implement highly productive applications. </p>
              <p id="p-style"> Field data collection is a mandatory process foracquiring ground truth information in remote sensing data analysis projects, and also in several geospatial infrastructure mapping and activity monitoring projects. Traditionally, the collection of data is a manual process with the project scientists visiting the planned sites, noting down the parameters of interest, taking photographs as required and incorporating the collected information in the final application after returning to office. However this manual entry is not only error prone but also consumes significant amount of time and effort. </p>
              <p id="p-style"> In most cases, data collection is not just limited to non-spatial data but also collecting spatial data features e.g. line, point and polygon features using the inbuilt GPS device and in some cases using external devices to get enhanced positional accuracy. The utility of data collection process is further enhanced with the incorporation of geo-tagged field photographs and other audio/ video/ multimedia content.Mobile technology can be used extensively to collect field information by means of crowd sourcingor controlled crowd sourcing. </p>
              <p id="p-style"> By implementing a mobile device based solution to streamline the data collection and utilization process, some of the achieved benefits are: </p>
              <ul>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Minimizing the errors associated with manual data collection processes.
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> The collected data is authenticated since the user invariably has to visit the site to capture location (latitude-longitude), photographs and mandatory field attributes
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Attribute values can be edited prior sending to Bhuvan Server..
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Near real time visualization of the location based field data on web browser. Since the entire process of receiving, organisation and visualization of datasets on the satellite image map are automated.
                </li>
                <li id="p-style">
                  <i class="bi bi-check-circle"></i> Very useful for disaster mitigation, damage assessment, infrastructure periodic monitoring projects, scientific geo-information science projects (natural resources), etc.
                </li>
              </ul>
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
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