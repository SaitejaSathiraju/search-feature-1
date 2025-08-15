<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UN-CSSTEAP@NRSC Training Calendar</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
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

      .table-img {
        width: 43px;
        height: 17px;
      }

      /* Base font size for table */
      table thead,
      table tbody {
        font-size: 20px;
      }

      /* Improve table on small screens */
      @media (max-width: 768px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }

        table thead,
        table tbody {
          font-size: 16px;
        }

        table td,
        table th {
          padding: 0.5rem;
          white-space: normal;
          word-break: break-word;
        }

        table a {
          font-size: 15px;
          display: block;
        }

        .table-img {
          display: inline-block;
          margin-top: 5px;
        }

        .apply {
          font-size: 20px !important;
        }
      }

      @media (max-width: 576px) {
        table thead {
          display: none;
        }

        table tr {
          display: block;
          margin-bottom: 1rem;
          border-bottom: 1px solid #ccc;
        }

        table td {
          display: block;
          text-align: right;
          position: relative;
          padding-left: 50%;
        }

        table td::before {
          content: attr(data-label);
          position: absolute;
          left: 0;
          width: 50%;
          padding-left: 15px;
          font-weight: bold;
          text-align: left;
        }

        .apply {
          font-size: 20px !important;
        }
      }
    </style>
  </head>
  <body>
    <!-- Page Title -->
    <main id="main-content" class="main" role="main">
      <!-- Page Header -->
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">UN-CSSTEAP@NRSC</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>UN-CSSTEAP@NRSC</b>
              </li>
              <li class="current">
                <b>Training Calendar</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div id="trainingCal-main" data-skip-id="trainingCal-main"></div>
      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>

            
            <section class="col-md-9 col-lg-9">
              <h3>Training Calendar</h3>
              <br />
              <div class="container">
                <table class="table table-striped table-hover" aria-describedby="trainingTableCaption">
                  <caption id="trainingTableCaption" class="sr-only" hidden>List of UN-CSSTEAP Training Courses</caption>
                  <thead>
                    <tr>
                      <th scope="col">S.No.</th>
                      <th scope="col">Name of the course</th>
                      <th scope="col">Dates</th>
                      <th scope="col">Application deadline</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>
                        <a href="assets/pdf/cssteap/SRSDAP2025.pdf" target="_blank" title="View course details on Satellite Remote Sensing Data Acquisition & Processing"> Short course on "SATELLITE REMOTE SENSING DATA ACQUISITION & PROCESSING" </a>
                        <img src="assets/img/newlabel.png" alt="New" class="table-img" />
                      </td>
                      <td>November 10 – December 05, 2025</td>
                      <td>June 13, 2025</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>
                        <a href="assets/pdf/cssteap/SRSMOGWE2025.pdf" target="_blank" title="View course details on Optical and Microwave Remote Sensing"> Short course on "OPTICAL AND MICROWAVE REMOTE SENSING FOR MINERAL, OIL AND GROUND WATER EXPLORATION" </a>
                        <img src="assets/img/newlabel.png" alt="New" class="table-img" />
                      </td>
                      <td>September 08-19, 2025</td>
                      <td>June 13, 2025</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>
                        <a href="assets/pdf/cssteap/SRSOA2025.pdf" target="_blank" title="View course details on Ocean Applications"> Short course on "SATELLITE REMOTE SENSING FOR OCEAN APPLICATIONS" </a>
                        <img src="assets/img/newlabel.png" alt="New" class="table-img" />
                      </td>
                      <td>October 06-17, 2025</td>
                      <td>June 13, 2025</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              <h4 class="apply">
                <a href="#" id="applyLink" title="Click here to apply for CSSTEAP Courses" aria-label="Apply for CSSTEAP Courses"> CLICK Here to apply <img src="assets/img/newlabel.png" alt="New" class="table-img" />
                </a>
              </h4>
          </div>
        </div>
        </div>
      </section>
      <!-- /Service Details Section -->
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

  document.getElementById('applyLink').addEventListener('click', function(e) {
    e.preventDefault(); // prevent default link behavior
    if (confirm("You are being redirected to an external site for application. Do you want to continue?")) {
      window.open('https://admissions.cssteapun.org/login', '_blank');
    }
  });
</script>