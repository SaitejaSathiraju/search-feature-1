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
        width: 30%;
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
    <main id="main-content" class="main" role="main">
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
                <b>Cryospheric Products</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="data_products-main" id="data_products-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Dataproducts_geophysical_serviceslist.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Cryospheric Products</h3>
              <br />
              <p id="p-style">Data can be downloaded through Bhuvan portal.
              <div class="table-responsive">
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
                      <td data-label="S.No.">1.</td>
                      <td data-label="Datasets/Layers"> Snow melt and freeze in Indian Himalayas <br /> 2.225 km </td>
                      <td data-label="Coverage">Indian Himalayas</td>
                      <td data-label="Availability">January 2000 to December 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/atmosproducts/Fsnow_melt_Himalayas.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">2.</td>
                      <td data-label="Datasets/Layers"> Snow Cover Fraction AWiFS <br /> 3X3 Minutes </td>
                      <td data-label="Coverage">Himalayan Region</td>
                      <td data-label="Availability">2014 March Onwards Fortnight</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/atmosproducts/snowcover_fraction.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">3.</td>
                      <td data-label="Datasets/Layers"> Himalayan Glacial Lakes &amp; Water Bodies <br /> 1:250,000 scale </td>
                      <td data-label="Coverage">Himalayan (India) region of Indian river basins</td>
                      <td data-label="Availability">Inventory (2009), Monitoring Jun, Jul, Aug, Sep &amp; Oct for the years 2011-2016</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/atmosproducts/GLWB01.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">4.</td>
                      <td data-label="Datasets/Layers"> Snow Melt and Freeze in Antarctica <br /> 2.225 km </td>
                      <td data-label="Coverage">Antarctica</td>
                      <td data-label="Availability">Jan 2001 - Feb 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/atmosproducts/Snow_report_Antarctic.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" height="26" src="assets/img/pdf_img.png" width="26" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">5.</td>
                      <td data-label="Datasets/Layers"> Snow Albedo <br /> 250m </td>
                      <td data-label="Coverage">India</td>
                      <td data-label="Availability">Jan - Feb 2015</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/atmosproducts/Technical%20document%20for%20snow%20albedo.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" height="26" src="assets/img/pdf_img.png" width="26" />
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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