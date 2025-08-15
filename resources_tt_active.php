<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Technolgy Transfers</title>
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

      table {
        width: 100%;
        border-collapse: collapse;
        max-width: 1000px;
        margin: auto;
      }

      table,
      th,
      td {
        font-size: 20px;
      }

      th,
      td {
        border: 1px solid #aaa;
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: #555;
        color: white;
        font-weight: bold;
      }

      td a {
        color: #0044cc;
        text-decoration: none;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #e0f7fa;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      @media (max-width: 600px) {

        table,
        th,
        td {
          font-size: 14px;
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
                <h1 class="heading-title text-break text-center">Technology Transfers</h1>
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
                <b>Technology Transfers</b>
              </li>
              <li class="current">
                <b>Active</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TTActive-main" id="TTActive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_technologyTransfer_ServiceList.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Technolgy Transfers - Active</h3>
              <br />
              <table>
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name of the Invention</th>
                    <th>Focal Person</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td >Portable Bathymetry Profiler System <a href="./assets/pdf/techtransfer/active/IEN_Bathymetrysystem.pdf" target="_blank"> Download Report »</a>
                    </td>
                    <td >Head HRD</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td >S, X Dual band Antenna Feed for LEO satellite Auto tracking and payload data reception. <a href="./assets/pdf/techtransfer/active/IEN_SX_dualband_RFFeed.pdf" target="_blank"> Download Report »</a>
                    </td>
                    <td >Head HRD</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td >Triband (S, X, Ka) Antenna dual circularly polarized Monopulse feed for LEO satellite Auto tracking and Data reception. <a href="./assets/pdf/techtransfer/active/IEN_SXKa_triband_RFFeed.pdf" target="_blank"> Download Report »</a>
                    </td>
                    <td >Head HRD</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td >Two/Tri-axis Antenna Control Servo System(ACSS) <a href="./assets/pdf/techtransfer/active/IEN_TriAxis_ACSS.pdf" target="_blank"> Download Report »</a>
                    </td>
                    <td >Head HRD</td>
                  </tr>
                </tbody>
              </table>
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