<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Dissemination</title>
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
      #listStyle{
      font-size: 20px;
      margin: 0in 0in 10pt 0.001in;
      line-height: 300%
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
                <h1 class="heading-title text-break text-center">Data Dissemination</h1>
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
                <b>Data Dissemination</b>
              </li>
              <li class="current">
                <b>Planning and Programming</b>
              </li>
              <li class="current">
                <b>Ordering and Dissemination</b>
              </li>
              <!-- <li class="current"><b>Dissemination Options</b></li> -->
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="ASnDM-main" id="ASnDM-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'order_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Dissemination Options</h3>
              <br />
              <!-- <ol id="p-style">
                <li>
                  <b>Emergency products :</b> These are standard georeferenced Products generated for emergency responses like disasters, etc without visual quality inspection with a turn around time of one hour. Please <a href="pnp_any_query.php">Contact Data Acquisition Planning & Outreach Group</a> for ordering these products.
                </li>
                <br />
                <li>
                  <b>Urgent Products :</b> These are standard georeferenced Products generated for urgent responses like disasters ,etc with quality inspection with a turn around time of one hour. Only limited number can be supplied
                </li>
                <br />
                <li>
                  <b>Normal Products : </b>All types ofProcessing levels as defined for the mission can be supplied within 24 hours .
                </li>
                <br />
                <li>
                  <b>Value added Products :</b> Precision products/Mosaiced/Merged products can be supplied within 72 hours .
                </li>
                <br />
                <li>
                  <b>Subscription Products :</b> Standard Georeferenced / Orthokit products in Near real time within 6 hours for a specified Area of Interest can be supplied on yearly basis for Registered users <p></p>
                </li>
              </ol>
              <br />
              <h3> Modes of dissemination</h3>
              <br />
              <ol id="p-style">
                <li>SFTP, Media DVD, Photoprint, WebService – Bhuvan</li>
              </ol> -->

              <article>
                <div >
                  <ol id="listStyle">
                    <li >
                      <a class="link" href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/home.html" target="_blank">Bhoonidhi Portal</a>
                    </li>
                    <li >
                      <a class="link" href="https://bhuvan.nrsc.gov.in" target="_blank">Bhuvan-Geoportal</a>
                    </li>
                    <!-- <li style="text-align:justify; margin:0in 0in 10pt 0.001in"><a class="link" href="https://sagar.nrsc.gov.in/SAGARPortal/ScatSat-debug/ScatSatHome.html" target="_blank">Scientific Application for Global Archive data(SAGAR)</a></li>
                    <li style="text-align:justify; margin:0in 0in 10pt 0.001in"><a class="link" href="https://www.mosdac.gov.in/" target="_blank">Meteorological &amp; Oceanographic Satellite Data Archival Centre (MOSDAC)</a></li>
                    <li style="text-align:justify; margin:0in 0in 10pt 0.001in"><a class="link" href="https://www.issdc.gov.in/" target="_blank">Indian Space Science Data Center (ISSDC)</a></li>
                    <li style="text-align:justify; margin:0in 0in 10pt 0.001in"><a class="link" href="https://vedas.sac.gov.in/" target="_blank">VEDAS</a></li> -->
                  </ol>
                </div>
              </article>
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