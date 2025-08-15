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
                <b>Thematic Services</b>
              </li>
              <li class="current">
                <b>Water Resources</b>
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
              <h3>Water Resources</h3>
              <br />
              <table id="myTable" class="table table-hover  table-striped-rows" id="p-style">
                <!-- <thead>
                  <tr>
                    <th id="p-style">S.No. </th>
                    <th id="p-style">Description</th>
                  </tr>
                </thead> -->
                <tbody>
                  <tr>
                    <td id="p-style">1</td>
                    <td id="p-style">
                      <a href="http://indiawris.gov.in" onclick="alert('You are being redirected to India WRIS Website.')" target="_blank">India WRIS</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">2</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/twris/twris.php" target="_blank">Telangana Water Resources Information System</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">3</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/aibp/aibp.php" target="_blank">Satellite based AIBP Project Monitoring</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">4</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/mwrds/index.php" target="_blank">Water Resources Management Support: Maharashtra</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">5</td>
                    <td id="p-style">
                      <a href="https://bhuvan-wbis.nrsc.gov.in" target="_blank">Water Bodies Information System</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">6</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/mowr_ganga/" target="_blank">Bhuvan Ganga</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">7</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/pmksy/index.php" target="_blank">PMKSY</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">8</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app3.nrsc.gov.in/nices/" target="_blank">Near Real Time Hydrological Modelling - Products &amp; Services</a>
                    </td>
                  </tr>
                  <tr>
                    <td id="p-style">9</td>
                    <td id="p-style">
                      <a href="https://bhuvan-app1.nrsc.gov.in/deltas/" target="_blank">Deltas of India</a>
                    </td>
                  </tr>
                </tbody>
              </table>
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