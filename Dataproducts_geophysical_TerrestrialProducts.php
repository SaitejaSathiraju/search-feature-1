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
          font-size: 18x;
          text-align: center;
          border-bottom: 1px solid #ccc;
        }

        .table-heading {
          font-size: 18px;
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
              </a>
            </li>
            <li class="current">
              <b>Terrestrial Products</b>
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
              <h3>Terrestrial Products</h3>
              <br />
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
                    <td colspan="5" class="table-heading">
                      <strong>Geophysical Products</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td data-label="Datasets/Layers">Albedo from OCM-II <br /> 1 km </td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">2013 Till Date Fortnightly</td>
                    <td data-label="Document">
                      <a href="./assets/pdf/landproducts/Albedo%20_Products_from_%20OCM2_Sensor_data_Fo_%20BHUVANNOEDA.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Normalized Density Vegetation Index (NDVI) (2 Layers)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td data-label="Datasets/Layers">NDVI <br /> 8 kms </td>
                    <td data-label="Coverage">Global</td>
                    <td data-label="Availability">2013</td>
                    <td data-label="Document">
                      <a href="./assets/pdf/landproducts/bhuvan_gac_ndvi.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td data-label="Datasets/Layers">NDVI <br /> 1 km </td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">Till Date <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/OCM_VF_NDVI_TechDoc_v1_02.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td data-label="Datasets/Layers">Filtered NDVI <br /> 1 km </td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">2012-2015 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/OCM2%20NDVI%20Filtered%20Product_for_bhuvan.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Hydrology Products</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td data-label="Datasets/Layers">Spatial Distribution of Surface Water <br /> 1 km </td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">2013 - Till Date <br /> Fortnightly </td>
                    <td data-label="Document">
                      <a href="./assets/pdf/landproducts/waterbodies_fraction.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Distributed Hydrology Model - VIC - Daily - 9 Min Grid</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td data-label="Datasets/Layers">Soil Moisture <br /> 9 Min x 9 Min </td>
                    <td data-label="Coverage">India</td>
                    <td>01 June 2013 to till date &amp; 01 Jan 1976 to 31 Dec 2005</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td data-label="Datasets/Layers">Evapo Transpiration <br /> 9 Min x 9 Min </td>
                    <td data-label="Coverage">India</td>
                    <td>01 Jan 1976 to 31 Dec 2005 01 June 2013 to till date</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td data-label="Datasets/Layers">Runoff <br /> 9 Min x 9 Min </td>
                    <td data-label="Coverage">India</td>
                    <td>01 Jan 1976 to 31 Dec 2005 01 June 2013 to till date</td>
                    <td></td>
                  </tr>
                  <!--- 2nd page --->
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Landcover Products</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td data-label="Datasets/Layers"> Land Use Land Cover for Globe Compatible for MM-5 <br /> 30″/2′/5′ </td>
                    <td>Globe</td>
                    <td>2004-2005 to 2012-2013 yearly</td>
                    <td>
                      <a href="./assets/pdf/landproducts/AWiFS_LULC4Mesoscale%20Modeling_ACSG_24April2014.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td>
                      Land Use Land Cover for Globe Compatible for WRF <br /> 30″/2′/5′ 
                    </td>
                    <td>Globe</td>
                    <td>2004-2005 to 2012-2013 yearly</td>
                    <td>
                      <a href="./assets/pdf/landproducts/AWiFS_LULC4Mesoscale%20Modeling_ACSG_24April2014.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td>
                      Vegetation Fraction <br /> 1 Km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">Till Date Fortnightly</td>
                    <td>
                      <a href="./assets/pdf/landproducts/OCM_VF_NDVI_TechDoc_v1_02.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Terrain and Soil Products</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td>
                      Mean Organic Soil Carbon density <br /> 5 kms 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2014</td>
                    <td>
                      <a href="./assets/pdf/landproducts/soil_nices.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td>
                      Mean Inorganic Soil Carbon density <br /> 5 kms 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2014</td>
                    <td>
                      <a href="./assets/pdf/landproducts/soil_nices.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td>
                      Fraction soil depth <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2000 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/soil_nices.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">4.</td>
                    <td>
                      Fraction soil textural class <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2014 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/soil_nices.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr></tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Land Degradation (3 Layers)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td>
                      Fraction Water Erosion <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2005-6 to 2014-15 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/land_degradation.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td>
                      Fraction Wind Erosion <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2005-6 to 2014-15 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/land_degradation.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td>
                      Fraction Salt-affected <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>2005-6 to 2014-15 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/land_degradation.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">4.</td>
                    <td>
                      Surface Soil Moisture <br /> .25 ° 
                    </td>
                    <td data-label="Coverage">Indian Sub Continent 0° to 40° N and 60° to 100° E</td>
                    <td>Since July 2012 <br /> Fortnightly </td>
                    <td>
                      <a href="./assets/pdf/landproducts/soil_nices.pdf" target="_blank">
                        <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <!---3rd page --->
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Fire Regime for India based on AQUA MODIS (3 Layers)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">1.</td>
                    <td>
                      Average Annual Forest Fire Density <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      Jan 1, 2003 to Sep 31, 2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/forest_fire.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td>
                      Standard Deviation of Average Annual Forest Fire Density <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      Jan 1, 2003 to Sep 31, 2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/forest_fire.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td>
                      Length of Fire Period <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      Jan 1, 2003 to Sep 31, 2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/forest_fire.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">4.</td>
                    <td>
                      Forest Fraction Cover <br /> 5 km 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>1930, 1975, 2013</td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/forest_cover.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">5.</td>
                    <td>Forest Types</td>
                    <td data-label="Coverage">India</td>
                    <td data-label="Availability">2013</td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/forest_type.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" class="table-heading">
                      <strong>Net Sown Area (4 Layers)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1.
                    </td>
                    <td>
                      Fraction Net Sown Area <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      2005-2006 to 2014-2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/crop_land.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">2.</td>
                    <td>
                      Fraction Kharif Sown Area <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      2005-2006 to 2014-2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/crop_land.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">3.</td>
                    <td>
                      Fraction Rabi Sown Area <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      2005-2006 to 2014-2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/crop_land.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">4.</td>
                    <td>
                      Fraction Fallow Area <br /> 5 km 
                    </td>
                    <td>
                      India
                    </td>
                    <td>
                      2005-2006 to 2014-2015
                    </td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/crop_land.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">5.</td>
                    <td>
                      Net Ecosystem Productivity <br /> 2'x 2' 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>1981-2006</td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/CASAtechnicalreport_final.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" id="pdf-icon" src="assets/img/pdf_img.png" />
                        </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td data-label="S.No.">6.</td>
                    <td>
                      Net Primary Productivity <br /> 2'x 2' 
                    </td>
                    <td data-label="Coverage">India</td>
                    <td>1981-2006</td>
                    <td>
                      
                        <a href="./assets/pdf/landproducts/CASAtechnicalreport_final.pdf" target="_blank">
                          <img alt="pdfimg" data-entity-type="file" data-entity-uuid="9614e76f-b2d3-4571-840c-7e568479d990" src="assets/img/pdf_img.png" id="pdf-icon" />
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