<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Geo Physical Products</title>
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==">
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      .container li {
        font-size: 24px;
        color: #3f68b5
      }

      .heading-title {
        word-break: break-word
      }

      #p-style {
        font-size: 20px;
        text-align: justify
      }

      @media (max-width:576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important
        }

        .container li {
          font-size: 18px !important
        }
      }

      .main-content {
        flex: 1;
        min-width: 60%;
        padding-right: 30px
      }

      .breadcrumb {
        padding: 10px 20px;
        font-size: 14px;
        color: #666
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .1)
      }

      @media (max-width:768px) {
        .container {
          flex-direction: column
        }

        .main-content {
          padding-right: 0
        }
      }

      table,
      td,
      th {
        border: 1px solid #ddd;
        font-size: 20px
      }

      td,
      th {
        padding: 8px;
        text-align: left
      }

      th {
        background-color: #f4f4f4
      }

      #myTable td:nth-child(1),
      #myTable th:nth-child(1) {
        width: 5%
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 30%
      }

      #myTable td:nth-child(3),
      #myTable th:nth-child(3) {
        width: 20%
      }

      #pdf-icon {
        height: 25px;
        width: 25px
      }

      /* New class for table section headings */
      .table-heading {
        text-align: center;
        font-weight: bold;
        background-color: #f9f9f9;
        padding: 10px;
        font-size: 18px;
        color: #3f68b5;
        border-top: 2px solid #ccc;
        border-bottom: 2px solid #ccc;
      }

      /* Fix case inconsistency in ID (use class instead) */
      #tableheading {
        display: none;
        /* Optional, if not using it anymore */
      }

      /* Responsive adjustments */
      @media (max-width: 576px) {
        
        #myTable thead {
          display: none
        }

        #myTable tbody tr {
          display: flex;
          flex-direction: column;
          margin-bottom: 20px;
          border: 1px solid #ddd;
          border-radius: 8px;
          padding: 15px;
          background-color: #fff;
          box-shadow: 0 2px 8px rgba(0, 0, 0, .1)
        }

        #myTable td {
          display: flex;
          width: 100%;
          padding: 8px 0;
          border: none;
          font-size: 14px;
          text-align: left;
          position: relative;
          white-space: normal;
          align-items: flex-start;
          border-bottom: 1px solid #eee
        }

        #myTable td:last-child {
          border-bottom: none
        }

        #myTable td::before {
          content: attr(data-label);
          font-weight: 700;
          color: #333;
          min-width: 120px;
          margin-right: 10px
        }

        #myTable td:nth-child(1) {
          display: flex;
          font-weight: 700;
          color: #3f68b5
        }

        #myTable .data-row td:nth-child(1)::before {
          content: "S.No.";
        }

        #myTable img#pdf-icon {
          height: 20px;
          width: 20px;
          margin-left: auto
        }
        
        #myTable tbody tr:has(td[colspan]) {
          display: table-row !important;
          border: none;
          padding: 0;
          box-shadow: none;
          background-color: transparent;
        }

        #myTable tbody tr:has(td[colspan]) td {
          display: table-cell !important;
          padding: 8px;
          font-size: 14px;
          text-align: center;
          border-bottom: 1px solid #ccc;
        }

        .table-heading {
          font-size: 14px;
          font-weight: 600;
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
            </li>
            <li class="current">
              <b>Ocean Products</b>
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
              <h3>Ocean Products</h3>
              <br>
              <p id="p-style">Data can be downloaded through Bhuvan portal.</p>
                <table id="myTable" class="table table-hover table-striped-rows">
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
                      <td data-label="Datasets/Layers">Daily Ocean Heat Content of 700m Layer 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Jan 2002-till date</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OHC_report.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">2.</td>
                      <td data-label="Datasets/Layers">Daily Tropical Cyclone Heat Potential 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Jan 1998-till date</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TCHP_report.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">3.</td>
                      <td data-label="Datasets/Layers">Ocean Heat Content (OHC) and Ocean Mean Temperature (OMT) at different Depth 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Jan 1998-till date</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OMT_report.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">4.</td>
                      <td data-label="Datasets/Layers">Ocean Surface Winds 0.5 °</td>
                      <td data-label="Coverage">Global Ocean</td>
                      <td data-label="Availability">Jan 2010 to Dec 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OSCAT-wind-composites-DIVA.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">5.</td>
                      <td data-label="Datasets/Layers">Ocean Surface Winds 25 km</td>
                      <td data-label="Coverage">North Indian Ocean</td>
                      <td data-label="Availability">Jan 2010 to Dec 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/Technical-document-25km-winds.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">6.</td>
                      <td data-label="Datasets/Layers">Wind Stress 0.5 °</td>
                      <td data-label="Coverage">Global Ocean</td>
                      <td data-label="Availability">Jan, 2010 to Dec, 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/DIVA_Windstresscurl.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">7.</td>
                      <td data-label="Datasets/Layers">Wind Stress &lt;25 km</td>
                      <td data-label="Coverage">North Indian Ocean</td>
                      <td data-label="Availability">Jan, 2010 to Dec, 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/Technical-document-25km-winds.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">8.</td>
                      <td data-label="Datasets/Layers">Wind Curl 0.5 °</td>
                      <td data-label="Coverage">Global Ocean</td>
                      <td data-label="Availability">Jan, 2010 to Dec, 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/DIVA_Windstresscurl.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">9.</td>
                      <td data-label="Datasets/Layers">Wind Curl 25 km</td>
                      <td data-label="Coverage">North Indian Ocean</td>
                      <td data-label="Availability">Jan 2010 to Dec 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/Technical-document-25km-winds.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">10.</td>
                      <td data-label="Datasets/Layers">Ekman Currents 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Mar 2013 to Feb 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TSC_final_v1.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">11.</td>
                      <td data-label="Datasets/Layers">Geostrophic Currents 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Mar 2013 to May 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TSC_final_v1.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">12.</td>
                      <td data-label="Datasets/Layers">Sea Surface Height Anomaly of SARAL AltiKa</td>
                      <td>Indian Ocean 0.25 °</td>
                      <td data-label="Availability">Mar 2013 to Feb 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TSC_final_v1.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">13.</td>
                      <td data-label="Datasets/Layers">Ocean Surface Currents 0.25 °</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Mar 2013 to Feb 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TSC_Bhuvan.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">14.</td>
                      <td data-label="Datasets/Layers">Eddy Kinetic energy EKE 1°</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Jan 1993 to Dec 2011</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/eke.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">15.</td>
                      <td data-label="Datasets/Layers">Monthly Mean Sea Level Anomoly (MMSLA) 1°</td>
                      <td data-label="Coverage">Indian Ocean</td>
                      <td data-label="Availability">Jan 1993 to Dec 2011</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/eke.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5" class="table-heading">
                        <center> Ocean Color Datasets for North Indian Ocean and Global - 1 KM - 2 Days - 8 Days - Monthly (2012-2014). V1.0 (3 Layers) </center>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">1.</td>
                      <td data-label="Datasets/Layers">Chlorophyll Concentration (CHL_ OC2) <br>1 km </td>
                      <td data-label="Coverage">North Indian Ocean <br>2 Days, 8 Days and Monthly </td>
                      <td data-label="Availability">2012-2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">2.</td>
                      <td data-label="Datasets/Layers">Chlorophyll Concentration (CHL_ OC4) <br>1 km </td>
                      <td data-label="Coverage">North Indian Ocean <br>2 Days, 8 Days and Monthly </td>
                      <td data-label="Availability">2012-2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">3.</td>
                      <td data-label="Datasets/Layers">Diffuse Attenuation Coefficient at 490 nm (KD_490) <br>1 km </td>
                      <td data-label="Coverage">North Indian Ocean <br>2 Days, 8 Days and Monthly </td>
                      <td data-label="Availability">2012-2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">4.</td>
                      <td data-label="Datasets/Layers">Chlorophyll Concentration (CHL_ OC2) <br>4 km </td>
                      <td data-label="Coverage">Global <br>8 Days and Monthly </td>
                      <td data-label="Availability">Nov 2012 - Oct 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">5.</td>
                      <td data-label="Datasets/Layers">Chlorophyll Concentration (CHL_ OC4) <br>4 km </td>
                      <td data-label="Coverage">Global <br>8 Days and Monthly </td>
                      <td data-label="Availability">Nov 2012 - Oct 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">6.</td>
                      <td data-label="Datasets/Layers">Diffuse Attenuation Coefficient at 490 nm (KD_490) <br>4 km </td>
                      <td data-label="Coverage">Global <br>8 Days and Monthly </td>
                      <td data-label="Availability">Nov 2012 - Oct 2014</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/OCM-2-SeaDAS-TR-2.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">7.</td>
                      <td data-label="Datasets/Layers">Sea Level Pressure (SLP_Globe) <br>50 km </td>
                      <td data-label="Coverage">Global <br>Daily </td>
                      <td data-label="Availability">Jan 2010 - Dec 2013</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/pressure-tech-report.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">8.</td>
                      <td data-label="Datasets/Layers">Co-Tidal Map (K1O1) Amplitude-Phase <br>0.25° </td>
                      <td data-label="Coverage">Latitude 5.5N to 24N and Longitude 68E to 89.5E</td>
                      <td data-label="Availability">Stationary map (Based on 2013-2015 simulations by Hydro-dynamic model)</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/Tech_report_on_tidal_model.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">9.</td>
                      <td data-label="Datasets/Layers">Co-Tidal Map (M2S2) Amplitude-Phase <br>0.25° </td>
                      <td data-label="Coverage">Latitude 5.5N to 24N and Longitude 68E to 89.5E</td>
                      <td data-label="Availability">Stationary map (Based on 2013-2015 simulations by Hydro-dynamic model)</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/Tech_report_on_tidal_model.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5" class="table-heading">
                        <center> Model Derived </center>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">1.</td>
                      <td data-label="Datasets/Layers">26 Degree Isotherm <br>.5 ° x .5 ° </td>
                      <td data-label="Coverage">30S-30N;30E-120E</td>
                      <td data-label="Availability">July 2013-till date</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TCHP-D26.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="S.No.">2.</td>
                      <td data-label="Datasets/Layers">Tropical Cyclone Heat Potential <br>.5 ° x .5 ° </td>
                      <td data-label="Coverage">30S-30N;30E-120E</td>
                      <td data-label="Availability">July 2013-till date</td>
                      <td data-label="Document">
                        <a href="./assets/pdf/oceanproducts/TCHP-D26.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png">
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
    var e = document.getElementById("menuToggleBtn");
    document.getElementById("mobileSidebar");
    $("#mobileSidebar").on("show.bs.collapse", function() {
      e.innerText = "Hide Menu"
    }), $("#mobileSidebar").on("hide.bs.collapse", function() {
      e.innerText = "Show Menu"
    })
  })
</script>