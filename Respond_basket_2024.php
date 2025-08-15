<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Respond Projects</title>
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

      .pdf-icon {
        width: 25px;
        vertical-align: middle;
      }

      .pdf-size {
        font-size: 12px;
        color: #555;
        margin-left: 5px;
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        font-size: 14px;
      }

      th,
      td {
        border: 1px solid #000;
        padding: 8px;
        vertical-align: top;
        font-size: 20px;
      }

      th {
        text-align: left;
        background-color: #f2f2f2;
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 30%;
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
                <h1 class="heading-title text-break text-center">Respond Projects</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Training & Outreach</b>
              </li>
              <li class="current">
                <b>Respond Projects</b>
              </li>
              <li class="current">
                <b>Respond Basket - 2024</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Overview-main" id="Overview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Respond_Projects_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Respond Basket - 2024</h3>
              <br />
              <p id="myptag">
                <a href="assets/pdf/respond/Respond_Basket_2024.pdf" target="_blank">"Respond BASKET - 2024" <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                  <span class="pdf-size">(7.89 MB)</span>
                </a> comprises a set of most urgent and immediate research areas for the academia to select and prepare detailed proposals under RESPOND programme
              </p>
              <ol id="myptag">
                <li>RESPOND BASKET comprises of the most urgent and important research problems identified by ISRO/DOS Centre / Units on the basis of ISRO’s upcoming programmatic R&D requirements. Each research problem comprises of a brief write-up about the topic for the faculty of the academic Institutions/R&D laboratories other than the Space Technology Cells (STCs) and Regional Academic Centre for Space (RAC-S) to select and prepare the proposals.</li>
                <li>An individual or group(s) of scientists / faculty members affiliated to any academic institution/autonomous R&D institutions are eligible for submitting the proposals. The Principal Investigator(s) should be a full-time employee(s) of the concerned institution.</li>
                <li>Principal Investigator shall be a domain expert in the area to which the proposal belongs to and must be a full time employee/faculty of the institution forwarding the application. There may also be co-investigator(s) from the same/different institution(s) working on the project. But satisfactory completion of a project will be the responsibility of the Principal Investigator and the institution involved.</li>
                <li>Proposals shall be submitted online.</li>
                <li>The submitted proposal will be subjected to critical evaluation by the ISRO/DOS Centre experts. The proposal will be evaluated on the basis of novelty, methodology, approach, experience of the PI in the subject area, duration of the project, budget etc.</li>
              </ol>
              <hr>
              <h3>List of research topics - Respond Basket - 2024</h3>
              <br>
              <table id="myTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>RES-NRSC-2024-001</td>
                    <td>EO data and ground spectroscopy for identifying surface controls and geobotanical indicators of heavy metal contamination in coastal and deltaic environment</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-002</td>
                    <td>Impact of the Indian Summer Monsoon by Atmospheric Constituents.</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-003</td>
                    <td>Integration of polar and geostationary EO datasets for a synthesized hourly LST product</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-004</td>
                    <td>Advanced Remote Sensing and Geochemical techniques to Monitor and Characterize Mine Residues</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-005</td>
                    <td>Enhanced Neural Network for classification of Hyperspectral Imagery using ensembled models</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-006</td>
                    <td>3D subsurface modelling of structurally controlled geological provinces for critical mineral resource assessment</td>
                  </tr>
                  <tr>
                    <td>RES-NRSC-2024-007</td>
                    <td>Advanced Computer Vision + LLM based solutions for Remote Sensing Data Insights</td>
                  </tr>
                </tbody>
              </table>
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