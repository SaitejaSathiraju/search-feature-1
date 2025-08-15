<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Satellite Handbooks</title>
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

        .section {
          padding: 15px;
        }
      }

      .pagination {
        justify-content: center;
        margin-top: 15px;
        flex-wrap: wrap;
      }

      @media (max-width: 576px) {

        th,
        td {
          font-size: 14px;
          padding: 6px 4px;
        }

        #myTable td:first-child,
        #myTable th:first-child {
          width: 8%;
        }

        #myTable td:nth-child(2),
        #myTable th:nth-child(2) {
          width: 20%;
        }

        #myTable td:nth-child(3),
        #myTable th:nth-child(3) {
          width: 30%;
        }

        #myTable td:nth-child(4),
        #myTable th:nth-child(4) {
          width: 42%;
        }

        .page-link {
          padding: 0.3rem 0.5rem;
          font-size: 0.9rem;
        }
      }

      #searchInput {
        margin-bottom: 20px;
      }

      .menu-toggle-btn {
        width: 100%;
        margin-bottom: 15px;
      }

      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      a[target="_blank"] {
        word-break: break-all;
      }

      /* Add this to your existing CSS */
      table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        font-size: 20px;
      }

      th {
        background-color: #f4f4f4;
        font-weight: 600;
      }

      th,
      td {
        border: 1px solid #ddd;
        padding: 12px 8px;
        text-align: left;
        vertical-align: top;
        word-wrap: break-word;
        /* Ensures long words/URLs break properly */
      }

      /* Specific column width adjustments */
      #myTable th:nth-child(1),
      #myTable td:nth-child(1) {
        width: 6%;
      }

      /* S.No */
      #myTable th:nth-child(2),
      #myTable td:nth-child(2) {
        width: 20%;
      }

      /* Product */
      #myTable th:nth-child(4),
      #myTable td:nth-child(4) {
        width: 20%;
      }

      /* Description */
      /* Mobile-specific adjustments */
      @media (max-width: 768px) {
        table {
          font-size: 14px;
        }

        th,
        td {
          padding: 8px 4px;
        }

        /* Adjust column widths for mobile */
        #myTable th:nth-child(1),
        #myTable td:nth-child(1) {
          width: 10%;
        }

        #myTable th:nth-child(2),
        #myTable td:nth-child(2) {
          width: 22%;
        }

        #myTable th:nth-child(3),
        #myTable td:nth-child(3) {
          width: 32%;
        }

        #myTable th:nth-child(4),
        #myTable td:nth-child(4) {
          width: 36%;
        }
      }

      @media (max-width: 576px) {
        table {
          font-size: 12px;
        }

        /* Stack table headers for very small screens */
        #myTable thead {
          position: absolute;
          height: 1px;
          width: 1px;
          overflow: hidden;
        }

        #myTable tr {
          display: block;
          margin-bottom: 15px;
          border-bottom: 2px solid #ddd;
        }

        #myTable td {
          display: block;
          width: 100% !important;
          text-align: right;
          padding-left: 50%;
          position: relative;
          border-bottom: 1px solid #eee;
        }

        #myTable td::before {
          content: attr(data-label);
          position: absolute;
          left: 10px;
          width: 45%;
          padding-right: 10px;
          text-align: left;
          font-weight: bold;
        }

        /* Add data labels */
        #myTable td:nth-child(1)::before {
          content: "S.No:";
        }

        #myTable td:nth-child(2)::before {
          content: "Product:";
        }

        #myTable td:nth-child(3)::before {
          content: "DOI:";
        }

        #myTable td:nth-child(4)::before {
          content: "Description:";
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
                <h1 class="heading-title text-break text-center">Satellite Handbooks</h1>
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
                <b>Satellite Handbooks</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="RESOURCES-main" id="RESOURCES-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Satellite Handbooks </h3>
              <h4>Digital Object Identifiers</h4>
              <br />
              <input type="text" id="searchInput" class="form-control" placeholder="Search...">
              <div class="table-responsive">
                <table id="myTable" class="table table-hover table-striped-rows">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Product</th>
                      <th>Data Object Identifier (DOI)</th>
                      <th>Product Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Resourcesat-2 Lis3 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/RS2_LIS3_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/RS2_LIS3_STUC00GTD</a>
                      </td>
                      <td>Resourcesat-2 L1B Product contains improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>IRS 1C LIS3 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/1C_LIS3_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/1C_LIS3_STUC00GTD</a>
                      </td>
                      <td>IRS 1C LIS3 Product provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>IRS 1C AWiFS Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/1C_WIFS_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/1C_WIFS_STUC00GTD</a>
                      </td>
                      <td>IRS 1C WIFS Product provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>IRS 1D AWiFS Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/1D_WIFS_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/1D_WIFS_STUC00GTD</a>
                      </td>
                      <td>IRS 1D WIFS Product provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>IRS 1D LIS3 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/1D_LIS3_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/1D_LIS3_STUC00GTD</a>
                      </td>
                      <td>IRS 1C LIS3 Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Cartosat 1 PAN AFT Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/P5_PANA_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/P5_PANA_STUC00GTD</a>
                      </td>
                      <td>IRS P5 Products cater to resources in cartography, terrain modeling, cadastral mapping etc</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Cartosat 1 PAN FORE Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/P5_PANF_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/P5_PANF_STUC00GTD</a>
                      </td>
                      <td>IRS P5 Products cater to resources in cartography, terrain modeling, cadastral mapping etc</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>OS2 OCM GAC Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/O2_OCM_GAC" target="_blank">https://dx.doi.org/10.46693/NRSC/10/O2_OCM_GAC</a>
                      </td>
                      <td>IRS O2 Products of OceanSat-2 are to study surface winds and ocean surface strata, observation of chlorophyll concentrations globally</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>OS2 OCM LAC Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/O2_OCM_STUC00GHD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/O2_OCM_STUC00GHD</a>
                      </td>
                      <td>IRS O2 Products of OceanSat-2 are to study surface winds and ocean surface strata, observation of chlorophyll concentrations locally</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>IRS P4 OCM Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/P4_OCM_STLC0027J" target="_blank">https://dx.doi.org/10.46693/NRSC/10/P4_OCM_STLC0027J</a>
                      </td>
                      <td>IRS P4 Products of OceanSat-2 are to study surface winds and ocean surface strata, observation of chlorophyll concentrations locally</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>IRS P6 AWiFS Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/P6_AWIF_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/P6_AWIF_STUC00GTD</a>
                      </td>
                      <td>IRS P6 AWIFS Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>IRS P6 LIS3 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/P6_LIS3_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/P6_LIS3_STUC00GTD</a>
                      </td>
                      <td>IRS P6 LIS3 Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Resourcesat-2A LIS4 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/R2A_LIS4_FMX_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/R2A_LIS4_FMX_STUC00GTD</a>
                      </td>
                      <td>IRS R2A LIS4 MX Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Resourcesat-2A LIS3 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/R2A_LIS3_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/R2A_LIS3_STUC00GTD</a>
                      </td>
                      <td>IRS R2A LIS3 Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Resourcesat-2 LIS4 Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/RS2_LIS4_FMX_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/RS2_LIS4_FMX_STUC00GTD</a>
                      </td>
                      <td>IRS RS2 LIS4 Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Resourcesat-2 AWiFS Standard Georeferenced Product</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/RS2_AWIF_STUC00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/RS2_AWIF_STUC00GTD</a>
                      </td>
                      <td>IRS RS2 AWIF Product The dataset id provides data for integrated land and water resources management at micro level, with improved spectral and spatial coverage</td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td>E04 SAR MRS Normalized Radar Back Scatter</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STUC00ZTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STUC00ZTD</a>
                      </td>
                      <td>In Level-2B Normalized Radar Backscatter Product, terrain induced variations are normalized by the local illuminated area.</td>
                    </tr>
                    <tr>
                      <td>18</td>
                      <td>E04 SAR MRS Cycle wise Mosaic</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_FIGC00ZTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_FIGC00ZTD</a>
                      </td>
                      <td>INDIA Mosaic Product is an Analysis Ready Data (ARD) - Gamma0 Product from INDIAN MRS systematic coverage acquisitions.</td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td>E04 SAR MRS Wind Detection</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCWWHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCWWHTD</a>
                      </td>
                      <td>This product contains High resolution ocean surface wind speed retrieved from EOS-04 C-band SAR Level-2 GeoReferenced data.</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>E04 SAR MRS Soil moisture</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCSMHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCSMHTD</a>
                      </td>
                      <td>This product is a High-resolution (500m) Surface Soil Moisture data product over INDIA derived using EOS-04 (RISAT-1A) C-band SAR and SMAP radiometer data.</td>
                    </tr>
                    <tr>
                      <td>21</td>
                      <td>E04 SAR MRS Oil Spill</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCOSHSD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_MRS_STGCOSHSD</a>
                      </td>
                      <td>This product is a large scale oil spill detected product using automatic segmentation of dark area and classification into oil spill.</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>E04 SAR CRS Normalized Radar Back Scatter</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E04_SAR_CRS_STUC00ZTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E04_SAR_CRS_STUC00ZTD</a>
                      </td>
                      <td>In Level-2B Normalized Radar Backscatter Product, terrain induced variations are normalized by the local illuminated area.</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>23</td>
                      <td>RS2 AWIF AWIF Mosaic</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/RS2_AWIF_JTGN00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/RS2_AWIF_JTGN00GTD</a>
                      </td>
                      <td>RS2 AWIF Full India Mosaic</td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td>R2A AWIF AWIF Mosaic</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/R2A_AWIF_JTGN00GTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/R2A_AWIF_JTGN00GTD</a>
                      </td>
                      <td>R2A AWIF Full India Mosaic</td>
                    </tr>
                    <tr>
                      <td>25</td>
                      <td>E06 OCM LAC Chlorophyll</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOCLHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOCLHND</a>
                      </td>
                      <td>E06 OCM LAC Chlorophyll</td>
                    </tr>
                    <tr>
                      <td>26</td>
                      <td>E06 OCM LAC Remote Sensing Refectance</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGORRHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGORRHND</a>
                      </td>
                      <td>E06 OCM LAC Remote Sensing Refectance</td>
                    </tr>
                    <tr>
                      <td>27</td>
                      <td>E06 OCM LAC Diffused Attenuation</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGODAHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGODAHND</a>
                      </td>
                      <td>E06 OCM LAC Remote Sensing Refectance</td>
                    </tr>
                    <tr>
                      <td>28</td>
                      <td>E06 OCM LAC Aerosal Depth</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOAOHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOAOHND</a>
                      </td>
                      <td>E06 OCM LAC Aerosal Depth</td>
                    </tr>
                    <tr>
                      <td>29</td>
                      <td>E06 OCM LAC Total Suspended Sediments</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOTSHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGOTSHND</a>
                      </td>
                      <td>E06 OCM LAC Total Suspended Sediments</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>E06 OCM LAC NDVI</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGONDHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_STGONDHND</a>
                      </td>
                      <td>E06 OCM LAC NDVI</td>
                    </tr>
                    <tr>
                      <td>31</td>
                      <td>E06 OCM GAC Chlorophyll</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOCLHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOCLHND</a>
                      </td>
                      <td>E06 OCM GAC Chlorophyll</td>
                    </tr>
                    <tr>
                      <td>32</td>
                      <td>E06 OCM GAC Remote Sensing Refectance</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGORRHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGORRHND</a>
                      </td>
                      <td>E06 OCM GAC Remote Sensing Refectance</td>
                    </tr>
                    <tr>
                      <td>33</td>
                      <td>E06 OCM GAC Diffused Attenuation</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGODAHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGODAHND</a>
                      </td>
                      <td>E06 OCM GAC Diffused Attenuation</td>
                    </tr>
                    <tr>
                      <td>34</td>
                      <td>E06 OCM GAC Aerosal Depth</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOAOHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOAOHND</a>
                      </td>
                      <td>E06 OCM GAC Aerosal Depth</td>
                    </tr>
                    <tr>
                      <td>35</td>
                      <td>E06 OCM GAC Total Suspended Sediments</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOTSHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGOTSHND</a>
                      </td>
                      <td>E06 OCM GAC Total Suspended Sediments</td>
                    </tr>
                    <tr>
                      <td>36</td>
                      <td>E06 OCM GAC NDVI</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGONDHND" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_STGONDHND</a>
                      </td>
                      <td>E06 OCM GAC NDVI</td>
                    </tr>
                    <tr>
                      <td>37</td>
                      <td>E06 OCM LAC Chlorophyll</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0CLHND-4Km" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0CLHND-4Km</a>
                      </td>
                      <td>E06 OCM LAC Chlorophyll</td>
                    </tr>
                    <tr>
                      <td>38</td>
                      <td>E06 OCM LAC Diffused Attenuation</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0CLHND-4Km" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0CLHND-4Km</a>
                      </td>
                      <td>E06 OCM LAC Diffused Attenuation</td>
                    </tr>
                    <tr>
                      <td>39</td>
                      <td>E06 OCM LAC Aerosal Depth</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0AOHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0AOHTD</a>
                      </td>
                      <td>E06 OCM LAC Aerosal Depth</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>E06 OCM LAC Total Suspended Sediments</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0TSHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0TSHTD</a>
                      </td>
                      <td>E06 OCM LAC Total Suspended Sediments</td>
                    </tr>
                    <tr>
                      <td>41</td>
                      <td>E06 OCM LAC NDVI</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0NDHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_LAC_MGG0NDHTD</a>
                      </td>
                      <td>E06 OCM LAC NDVI</td>
                    </tr>
                    <tr>
                      <td>42</td>
                      <td>E06 OCM GAC Chlorophyll</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0CLHND-4Km" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0CLHND-4Km</a>
                      </td>
                      <td>E06 OCM GAC Chlorophyll</td>
                    </tr>
                    <tr>
                      <td>43</td>
                      <td>E06 OCM GAC Diffused Attenuation</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0CLHND-4Km" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0CLHND-4Km</a>
                      </td>
                      <td>E06 OCM GAC Diffused Attenuation</td>
                    </tr>
                    <tr>
                      <td>44</td>
                      <td>E06 OCM GAC Aerosal Depth</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0AOHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0AOHTD</a>
                      </td>
                      <td>E06 OCM GAC Aerosal Depth</td>
                    </tr>
                    <tr>
                      <td>45</td>
                      <td>E06 OCM GAC Total Suspended Sediments</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0TSHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0TSHTD</a>
                      </td>
                      <td>E06 OCM GAC Total Suspended Sediments</td>
                    </tr>
                    <tr>
                      <td>46</td>
                      <td>E06 OCM GAC NDVI</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0NDHTD" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_OCM_GAC_MGG0NDHTD</a>
                      </td>
                      <td>E06 OCM GAC NDVI</td>
                    </tr>
                    <tr>
                      <td>47</td>
                      <td>E06 Scat3 Wind Vector</td>
                      <td>
                        <a href="https://dx.doi.org/10.46693/NRSC/10/E06_Scat3_4WW" target="_blank">https://dx.doi.org/10.46693/NRSC/10/E06_Scat3_4WW</a>
                      </td>
                      <td>E06 Scat3 Wind Vector</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Satellite Handbooks');
  window.addEventListener('beforeunload', function() {
      localStorage.removeItem('activeMenuItem');
  });

  let currentPage = 1;
  const rowsPerPage = 5;
  const rows = Array.from(document.querySelectorAll("#myTable tbody tr"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput");

  function getFilteredRows() {
    const searchTerm = searchInput.value.toLowerCase();
    return rows.filter(row => {
      return Array.from(row.querySelectorAll('td')).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
    });
  }

  function changePage(page, filteredRows) {
    currentPage = page;
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    rows.forEach(row => row.style.display = "none"); // Hide all first
    filteredRows.slice(start, end).forEach(row => row.style.display = ""); // Show only filtered rows
    // Update active class
    const pageLinks = pagination.querySelectorAll(".page-item");
    pageLinks.forEach((li, i) => {
      li.classList.toggle("active", i === page - 1);
    });
  }

  function setupPagination() {
    pagination.innerHTML = ""; // Clear existing pagination
    const filteredRows = getFilteredRows();
    const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
    if (pageCount === 0) {
      const li = document.createElement("li");
      li.className = "page-item disabled";
      li.innerHTML = `
	<a class="page-link">No results</a>`;
      pagination.appendChild(li);
      rows.forEach(row => row.style.display = "none");
      return;
    }
    for (let i = 1; i <= pageCount; i++) {
      const li = document.createElement("li");
      li.className = "page-item" + (i === currentPage ? " active" : "");
      const a = document.createElement("a");
      a.className = "page-link";
      a.href = "#";
      a.textContent = i;
      a.addEventListener("click", (e) => {
        e.preventDefault();
        changePage(i, filteredRows);
      });
      li.appendChild(a);
      pagination.appendChild(li);
    }
    changePage(currentPage, filteredRows);
  }
  searchInput.addEventListener("input", () => {
    currentPage = 1;
    setupPagination();
  });
  setupPagination();
  
  // Toggle menu button text
  document.getElementById('menuToggleBtn').addEventListener('click', function() {
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.textContent = isExpanded ? 'Show Menu' : 'Hide Menu';
  });
  // Add this after your table is created
  document.querySelectorAll('#myTable td').forEach(td => {
    const headerText = td.closest('table').querySelectorAll('th')[td.cellIndex].textContent;
    td.setAttribute('data-label', headerText);
  });
</script>