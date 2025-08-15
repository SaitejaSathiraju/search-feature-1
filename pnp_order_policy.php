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
              <!-- <li class="current"><b>Policy</b></li> -->
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
              <h3> Policy</h3>
              <br />
              <!-- <p id="p-style"> The government has adopted a comprehensive Remote Sensing Data Policy (RSDP) for the acquisition and distribution of remote sensing satellite data, from Indian and foreign satellites, for the civilian users in India. The policy comprehensively covers guidelines for satellite data acquisition and distribution in the country and for licensing the IRS capacities to other countries. Department of Space is the nodal agency for implementing this policy. In particular, the policy streamlines the distribution of high-resolution data to government users; private users involved in developmental activities with government and other private/ academic/ foreign users. <br>
                <Br> The RSDP is envisaged to be a step towards making transparent procedures for satellite data distribution, allowing even high resolution data to be made available to the users without being restrictive. This has helped in regulating the process of data distribution so that the Indian users are not denied access to this valuable information - which has become a mainstay of the natural resources management activities of the country. Through this policy, the National Remote Sensing Centre (NRSC) of the Indian Space Research Organisation (ISRO)/ DOS is vested with the authority to acquire and disseminate all remote sensing satellite data in India, from both Indian and foreign satellites. -->
              <!-- </p> -->
               <p id="p-style">The ISP-2023 enables open data access from remote sensing satellites of ISRO and share technologies, products, processes and best practices with NGEs (Non Government Entities) and/or Government companies. In this regard, remote sensing data of GSD of 5 meters and higher shall be made easily accessible in a timely manner on ‘free and open’ basis to all while remote sensing data of GSD of less than 5 meter, shall be made available free of any charges to Government entities but at fair and transparent pricing to NGEs. </p>
              <p id="p-style">
                <a href="assets/pdf/Indian Space Policy 2023.pdf" target="_blank">Indian Space Policy -2023</a>
              </p>
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