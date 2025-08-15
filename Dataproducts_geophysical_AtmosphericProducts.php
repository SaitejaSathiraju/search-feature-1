<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Geo Physical Products</title>
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==">
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

      table,
      th,
      td {
        border: 1px solid #ddd;
        font-size: 20px;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f4f4f4;
      }

      #myTable td:nth-child(1),
      #myTable th:nth-child(1) {
        width: 5%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 35%;
      }

      #myTable td:nth-child(3),
      #myTable th:nth-child(3) {
        width: 20%;
      }

      #pdf-icon {
        height: 25px;
        width: 25px;
      }

      #tableHeading {
        background-color: white;
        font-weight: 900;
      }

      @media (max-width: 576px) {
        #myTable thead {
          display: none;
        }

        #myTable tbody tr {
          display: flex;
          flex-direction: column;
          margin-bottom: 20px;
          border: 1px solid #ddd;
          border-radius: 8px;
          padding: 15px;
          background-color: #fff;
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        #myTable td {
          display: flex;
          width: 100%;
          padding: 8px 0;
          border: none;
          font-size: 16px;
          text-align: left;
          position: relative;
          white-space: normal;
          align-items: flex-start;
          border-bottom: 1px solid #eee;
        }

        #myTable td:last-child {
          border-bottom: none;
        }

        #myTable td::before {
          content: attr(data-label);
          font-weight: bold;
          color: #333;
          min-width: 120px;
          margin-right: 10px;
        }

        /* Show S.No. in mobile view */
        #myTable td:nth-child(1) {
          display: flex;
          font-weight: bold;
          color: #3f68b5;
        }

        #myTable td:nth-child(1)::before {
          content: "S.No.";
        }

        #myTable img#pdf-icon {
          height: 20px;
          width: 20px;
          margin-left: auto;
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
              <h1 class="heading-title text-break text-center">Geo Physical Products</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current">
              <b>Data Products</b>
            </li>
            <li class="current">
              <b>Geo Physical Products</b>
              </a>
            </li>
            <li class="current">
              <b>Atmospheric Products</b>
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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Dataproducts_geophysical_serviceslist.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Atmospheric Products</h3>
              <br />
              <p id="p-style">Data can be downloaded through Bhuvan portal.
              <table id="myTable" class="table table-hover  table-striped-rows">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Datasets/Layers</th>
                    <th>Coverage</th>
                    <th>Availability</th>
                    <th>Document</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="S.No.">1</td>
                    <td data-label="Datasets/Layers"> Cloud Fraction (.25 ° X.25 °) </td>
                    <td data-label="Coverage">-10 -45.5°N; 44.5-105.5°E</td>
                    <td data-label="Availability">2015 - Till Date</td>
                    <td data-label="Document">
                      <a href="./assets/pdf/atmosproducts/CloudFraction_Techdoc_v2.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2</td>
                    <td data-label="Datasets/Layers"> Planetary Boundary Layer Height (.25 ° X.25 °) </td>
                    <td data-label="Coverage">05°N -40°N; 50°E-110°E</td>
                    <td data-label="Availability"> September 1, 2014 to April 17, 2017 </td>
                    <td data-label="Document">
                      <a href="./assets/pdf/atmosproducts/PBLH.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3</td>
                    <td data-label="Datasets/Layers"> Derived Tropospheric Ozone (1 °) </td>
                    <td data-label="Coverage">Indian region</td>
                    <td data-label="Availability">2009 Onwards</td>
                    <td data-label="Document">
                      <a href="./assets/pdf/atmosproducts/Ozone_TechDoc.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
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