<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tenders</title>
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

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      #p-style {
        font-size: 20px;
      }

      /* Fix table text overflow on mobile */
      .table-responsive {
        overflow-x: auto;
      }

      #myTable {
        width: 100%;
        border-collapse: collapse;
      }

      #myTable td,
      #myTable th {
        white-space: nowrap;
        padding: 12px;
        font-size: 1rem;
      }

      .container li {
        font-size: 20px;
        color: #3f68b5;
      }

      #p-style {
        font-size: 18px;
      }

      @media (max-width: 576px) {
        #p-style {
          font-size: 14px !important;
        }

        .table-responsive {
          margin-bottom: 20px;
        }

        #myTable thead {
          display: none;
        }

        #myTable tr {
          display: block;
          margin-bottom: 12px;
          box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          border-radius: 8px;
          overflow: hidden;
          background-color: #fff;
        }

        #myTable td {
          display: block;
          text-align: left;
          padding: 10px 12px;
          border-bottom: 1px solid #ddd;
          word-break: break-word;
          overflow-wrap: break-word;
        }

        #myTable td:last-child {
          border-bottom: none;
        }

        #myTable td::before {
          content: attr(data-label);
          display: block;
          font-weight: 700;
          margin-bottom: 4px;
        }

        #myTable,
        #myTable tbody,
        #myTable tr,
        #myTable td {
          display: block;
          width: 100%;
        }

        #myTable tr {
          margin-bottom: 15px;
          border: 1px solid #ddd;
          border-radius: 8px;
          background: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
          padding: 10px;
        }

        a {
          word-break: break-word;
          white-space: normal !important;
          display: inline-block;
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
                <h1 class="heading-title text-break text-center">Tenders</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Tenders</b>
              </li>
              <li class="current">
                <b>Purchase & Stores</b>
              </li>
              <li class="current">
                <b>Active</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TendersActive-main" id="TendersActive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Tenders_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> Active Tenders </h3>
              <br />
              <div class="table-responsive">
                <table id="myTable" class="table table-hover table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-nowrap">PT. No.</th>
                      <th scope="col">Tender</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td id="p-style" data-label="PT. No.">NRSC/PUR/PT/1/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/171.pdf" target="_blank" id="p-style"> CORRIGENDUM: Aerial Survey &amp; Supply of LiDAR-DC products for northern Kosi river Basin </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">NRSC/PUR/PT/5/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/188.pdf" target="_blank" id="p-style"> Supplying of Indian National Flag of size 20 feet x 30 feet at NRSC Shadnagar </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">NRSC/PUR/PT/1/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/171-06112024111811.pdf" target="_blank" id="p-style"> Aerial Survey &amp; Supply of LiDAR-DC Products for Northern Kosi River Basin </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">PT/4/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/PT_4_2024-25.pdf" target="_blank" id="p-style"> Supply and Installation of High Resolution Spectrometer/ Spectroradiometer </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">EOI/SHAD-ES/01/2024</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/EOI_HR_DATA_31072024.pdf" target="_blank" id="p-style"> Supply of Very High Resolution (VHR) Optical Satellite India Country mosaic </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">PT/3/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/NOTICE-04142024112233.pdf" target="_blank" id="p-style"> Service Contract for Providing Administrative Support Services for NRSC for 2 years </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No.">PT/2/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/PT_2_2024-25.pdf" target="_blank" id="p-style"> Supply, Installation of Green House Gas Analyser </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="PT. No."> PT/1/2024-25</td>
                      <td data-label="Tender">
                        <a href="./assets/pdf/tenders/Purchase/2024-25/PT_1_2024-25.pdf" target="_blank" id="p-style"> PCB Fabrication &amp; Assembly of Next Gen SPARC Boards (Production) </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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