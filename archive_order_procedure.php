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
    </style>
  </head>
  <body>

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
                <b>Archived Data Order</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'data_order_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Ordering Procedure</h3>
              <br />
              <!--  <p id="p-style">Bhoonidhi Portal is an online web application using which users are requested to specify their area and period of interest along with the sensor and product selection. The user’s area of interest (AOI) may be specified in form of a point, polygon, draw-on-map, location name, map sheet and shapefile. For shapefile based AOI specification, the input shape file should be in ESRI compatible format (.shx, .shp, .dbf and .prj) and the distance between the vertices of the shape file must be a minimum of 5 kms. Minimum order is 1 scene for the corresponding sensor. <br><Br> Based on the proforma invoice generated through Bhoonidhi Portal, user can transfer 100% advance payment to NRSC along 18% of the GST (as per the applicable guidelines) through NEFT online transfer or a demand draft in favour “Pay and Accounts Officer NRSC” payable at Hyderabad. <br><Br> All data products will be disseminated to the users as per the Remote Sensing Data Policy and the guidelines provided by the Government of India. The order will be entertained when the required information is furnished in full and payment made. Data orders are to be placed through Bhoonidhi Portal along with the required undertakings and certificates. Please ensure the correct product type is chosen. For further details, please contact Data Acquisition Planning & Outreach Group. Order once processed and confirmed cannot be amended or cancelled unless technical problems are encountered during data generation. It reserves the right to refuse/cancel any order in full or part.
              </p>  -->
              <p id="p-style">
                <b>Ordering Procedure:</b> Remote Sensing Satellite data of 5m GSD and coarser are available as 'Open Access' [Free Download] to all and the selected scenes can be downloaded from cart through Bhoonidhi Portal. All archived standard products and geo physical products for last 3 months are available for instant download, the products older than 3 months are available for delayed download On Order. The availabiloty of products from delayed download will be intimated to the registerd users through email and disseminated through FTP. <br>
                <br> Kindly <a href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/registration.html" target="_blank">register</a> for downloading the data.
              <br><br> Please visit <a href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/help/" target="_blank">https://bhoonidhi.nrsc.gov.in/bhoonidhi/help/. </a> Click on the "Help" for data selection and ordering procedures under "Resources" page. </p>
              <!-- For data selection and ordering procedures <a href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/help/" target="_blank">Click Here </a></p> -->
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
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