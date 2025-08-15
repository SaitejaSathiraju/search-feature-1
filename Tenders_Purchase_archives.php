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

      .pagination {
        flex-wrap: wrap; /* Allow pagination to wrap on small screens */
      }

      .page-item {
        margin-bottom: 5px; /* Space between wrapped items */
      }

      #searchInput {
        margin-bottom: 20px;
      }

      #myTable th:first-child,
      #myTable td:first-child {
        width: 15%;
      }

      #p-style {
        font-size: 20px;
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
                <b>Archive</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TendersArchive-main" id="TendersArchive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Tenders_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Archive Tenders </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search...">
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
                      <td  id="p-style">PT-07(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_7_2023-24.pdf" class="atagcolor" id="p-style">Augmentation of Space Exhibition for RC-South </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-05(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_5_233_2023-24.pdf" class="atagcolor" id="p-style">Hand held X Ray Diffractometer (XRD) </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-04(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_4_2023-2024_166.pdf" class="atagcolor" id="p-style">Augmentation of Space Exhibition for RC South </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-03(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_3_2023-2024_227.PDF" class="atagcolor" id="p-style">Foreign Satellite Data Procurement- view access (621.46 Sq. Km) and premium download (7243.48 Sq.Km)—3m – Near daily subscription and 0.5m PS data (25 Sq.km X 10 areas) with native GSD of PAN and MX at 0.5m to 1m for 15/07/2023 to 14/07/2024 </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-01(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_1_2023-24_Corrigendum_326.pdf" class="atagcolor" id="p-style">CORRIGENDUM :Supply, Installation and commissioning of Ka band Satellite Link for Shadnagar-Antarctica Connectivity </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-02(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PUR_PT_2_2023000153_2023-24.pdf" class="atagcolor" id="p-style">Supply and Installation of Laptops</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-02(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PUR_PT_2_2023-2024.PDF" class="atagcolor" id="p-style">Foreign Satellite Data Procurement- 5m x5m MSL and Hydrologically Corrected DTM archive data derived from X-band SAR FOR NRSC </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-01(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT_1_2023-24_Corrigendum.PDF" class="atagcolor" id="p-style">CORRIGENDUM :Supply, Installation and commissioning of Ka band Satellite Link for Shadnagar-Antarctica Connectivity </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-01(2023-24) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2023-24/PT-1_2023-24 .PDF" class="atagcolor" id="p-style">Supply, Installation and commissioning of Ka band Satellite Link for Shadnagar-Antarctica Connectivity </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-04(2022-23) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2022-23/PT-4_2022-23.PDF" class="atagcolor" id="p-style">Ka Band Phase Shifter, Qty: 02 No's </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-03(2022-23) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2022-23/PT-3_2022-23.PDF" class="atagcolor" id="p-style">Ka Band WR34 DPDT Switch, Qty: 03 No's</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-02(2022-23) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2022-23/DOC053122-05312022161201.pdf" class="atagcolor" id="p-style">Supply,Installation and Commissioning of Ka Band Satellite link for Antarctica Connectivity and CAMC for 5 years</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-01(2022-23) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/2022-23/PT- No 1-01162022143348.pdf" class="atagcolor" id="p-style">Foreign Satellite Data - 1m Orthorectified mosaic created using imagery with 50cm GSD at nadir - 3band PS color Balanced archived data with Accuracy 8.5m CE90 without using GCPs</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-18(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-18 _2021-22.pdf" class="atagcolor" id="p-style">Foreign Satellite Data - Ortho rectified Pan sharpened (4 Band data), Resolution:0.5m, Only Acrhive data period: 2020 to 2021 ( in case of non-availability in 2020 to 2021 data of 2017-2019 is acceptable)</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-17(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-17_2021-22.pdf" class="atagcolor" id="p-style">Foreign Satellite Data Procurement </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-16(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-16_2021_22.pdf" class="atagcolor" id="p-style">ACMS/FMS for Computer Systems of RRSCs( RC-North, RC-South, RC-East, Rc-West and RC-Central ) for a period of three years from 01.01.2022 or from the date of release of Purchase order</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-15(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-15_2021_22.pdf" class="atagcolor" id="p-style">Aerial Survey using vendor's fixed wing aircraft, manpower and LiDAR-DC Sensor and supply of square Pre-processed data products as per the tender specifications, terms and condtions of Kosi river basin in Bihar State</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-14(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-14_2021_22.pdf" class="atagcolor" id="p-style">Demodulators with Built-in Modulators for Antarctica Ground station with 3 years standard warranty</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-13(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-13_2021-2022.pdf" class="atagcolor" id="p-style">Foreign Satellite Data Procurement - Ortho rectified Pan sharpened (4 Band data), Res:0.5m, Acrhive data acquired during 2020-2021 ( in case of non-availability in 2020 to 2021 data of 2017-2019 is acceptable)</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-12(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-12_2021-2022.pdf" class="atagcolor" id="p-style">Supply,Installation, Testing Commissioning and Training of Door Frame Metal Detectors (DFMDs) &amp; CAMC for 6 years after one year warranty</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-11(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-11.pdf" class="atagcolor" id="p-style">Foreign Satellite Data Ortho Ready Stereo, 4 Band Pan Sharpened, Fresh Tasking or Archive data not older than 6 months, Cloud cover &lt;10% (no cloud cover on corridor of 400m Width), ONA:0-20 deg, License-group</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-10(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-10.pdf" class="atagcolor" id="p-style">Foreign Satellite Data Procurement - ALOS PALSAR L Band SAR data</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-9(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-9-06022021171039.pdf" class="atagcolor" id="p-style">Proton Precession Magnetometer</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-8(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-8-05172021151339.pdf" class="atagcolor" id="p-style">Foreign Satellite Data - DTM with resolution / posting: 0.5m, archive data generated from latest imagery preferred or from last five years, absolute accuracy: 3m LE90/CE90 or better.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-7(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-7-05172021151414.pdf" class="atagcolor" id="p-style">1.Foreign Satellite Data - SAR URBAN (Specifications: 0.51M SLC, GEO and Terrain corrected data - X BAND SPOTLIGHT HH 25-40 INCIDENCE ANGLE FRESH JUNE-DEC 2021. <br /> 2.Foreign Satellite Data - SAR vegetation (Specifications: 1.2M SLC, GEO and Terrain corrected data - X BAND STRIPMAP HH 25-40 INCIDENCE ANGLE FRESH JUNE-DEC 2021. </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-6(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-06_2021_22.pdf" class="atagcolor" id="p-style">AMC FOR FTIR INSTRUMENT</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-5(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-05_2021_22.pdf" class="atagcolor" id="p-style">Procurement of Demodular with built-in modulators for Antarctica Ground Station</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-4(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-04_2021_22.pdf" class="atagcolor" id="p-style">Foreign Satellite Data Orthorectified Pan sharpened (4 Band data), Resolution:0.5m, Acrhive data acquired during 2020 to 2021 ( in case of non-availability data of 2017-2019 ) Cloudfree and snowfree data required, ONA: &lt;30 deg, UTM/WGS84, Nearest Neighbor resampling, 12 bit data, License:Single, Segment:Commercial</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-3(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-03.pdf" class="atagcolor" id="p-style">Foreign Satellite Data 2m Pan-Sharpened/Multispectral 3 Or 4-Band Orthorectified Color Balanced Mosaic Base Map Archive Product For Pan India Excluding Andaman &amp; Nicobar Islands And Lakshdweep Island With An Accuracy Of Better Than 5m CE90. Details Are As Per The Specifications Attached In The Tender Docs.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-1(2021-22) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT_1_2021-22.pdf" class="atagcolor" id="p-style">Establishment of two Point to Point Leased Lines and 200 Mbps Bandwidth Subscription Support Services between NRSC,Balanagar and NRSC Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-13 (2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-13.pdf" class="atagcolor" id="p-style">Annual Rate Contract for Publication of Newspaper Advertisement</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-12 (2020-21) </td>
                      <td style="width: 757px;">
                        <a href="./assets/pdf/tenders/Purchase/PT-12.pdf" class="atagcolor" id="p-style">Rate Contract for Foreign Satellite Data Procurement</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-11 (2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-11.pdf" class="atagcolor" id="p-style">Rate Contract for Hiring of Taxies from 01.04.2021 to 31.03.2023 and extendable by one more year on satisfactory service</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-10 (2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-10.pdf" class="atagcolor" id="p-style">Providing of Photographers for 02 years </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-09 (2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-09.pdf" class="atagcolor" id="p-style">Site Engineers for Bhuvan </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style"> Corrigendum -PT-07 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/5403-corrigendum-09072020110915.pdf" class="atagcolor" id="p-style">Corrigendum: Aerial Survey using vendors fixed wing aircraft, manpower &amp; liDAR-DC sensor and supply of Pre-processed data products of Kosi river basin in Bihar state </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-08(2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-08.pdf" class="atagcolor" id="p-style">Service Contract for Administrative Support Service - 02 Years </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-07(2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-07.pdf" class="atagcolor" id="p-style">Aerial Survey using vendors fixed wing aircraft, manpower &amp; liDAR-DC sensor and supply of Pre-processed data products of Kosi river basin in Bihar state </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-06(2020-21) </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-06.pdf" class="atagcolor" id="p-style">Providing of LVD/HVD Drivers for 2 Years</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-05 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-05.pdf" class="atagcolor" id="p-style">Point to Pont Leased Line and 200 Mbps Bandwidth Subscription Support Services between NRSC, Balanagar and NRSC, Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-04 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/Pt-04-001.pdf" class="atagcolor" id="p-style">AWS for CMPDI Project</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-03 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-03.pdf" class="atagcolor" id="p-style">Up and Down Converters</a>
                        <br />
                        <a href="./assets/pdf/tenders/Purchase/4775 Tender document.pdf" class="atagcolor" id="p-style">Tender Document</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-02 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-02.pdf" class="atagcolor" id="p-style">Supply of Survey Grade GNSS systems with peripherals and processing software</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-01 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-01.pdf" class="atagcolor" id="p-style">AMC for Housekeeping at RRSC-C &amp; Antariksh Vihar Complex, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-372 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT 371-372.pdf" class="atagcolor" id="p-style">Procurement of NAS Storage</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-371 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT 371-372.pdf" class="atagcolor" id="p-style">Open- path Eddy Covariance System </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-370 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-368-370.pdf" class="atagcolor" id="p-style">Hiring Of Vehicles: Rate Contract for hiring of Taxies at RRSC-W-Jodhpur, for a period of Two years w.e.f 01.05.2020 and extendable for one year</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-369 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-368-370.pdf" class="atagcolor" id="p-style">Test Equipment for IMGEOS and Tirunelveli.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-368 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-368-370.pdf" class="atagcolor" id="p-style">Supply of SurveyGrade GNSSSystems with peripherals andprocessing software.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-367 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT367.pdf" class="atagcolor" id="p-style">Procurement of High End Workstations with 3 yearsonsite comprehensive warranty. </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-366 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT364-366.pdf" class="atagcolor" id="p-style">Gas Chromatograph </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-365 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT364-366.pdf" class="atagcolor" id="p-style">Particle Size Analyser </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-364 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT364-366.pdf" class="atagcolor" id="p-style">ACMS &amp; FMS for Computer Systems of NRSC </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-360 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/CORRIGENDUM-PT-359-360.pdf" class="atagcolor" id="p-style">Corrigendum of PT-360 </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-359 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/CORRIGENDUM-PT-359-360.pdf" class="atagcolor" id="p-style">Corrigendum of PT-359 </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-363 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT 362-363.pdf" class="atagcolor" id="p-style">Establishment of 500 Mbps International Link </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-362 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT 362-363.pdf" class="atagcolor" id="p-style">Airborne Integrated GNSS and IMU System with post processing s/w with four years extended warranty </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-361 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-361.pdf" class="atagcolor" id="p-style">Supply &amp; Installation of Wooden Furniture for Transit Guest House at RRSC-W Jodhpur </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-360 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-358-360.pdf" class="atagcolor" id="p-style">Rate Contract for supply of Buses/Vehicles (A.C.) on Hiring basis</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-359 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-358-360.pdf" class="atagcolor" id="p-style">Rate Contract for supply of Taxies (A.C.) on Hiring basis</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-358 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-358-360.pdf" class="atagcolor" id="p-style">ACMS &amp; FMS for Computer Systems of NRSC</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-357 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-356-357.pdf" class="atagcolor" id="p-style">Supply, Installation,Testing, Commissioning and Acceptance of High-end Workstations</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-356 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-356-357.pdf" class="atagcolor" id="p-style">Manpower Supply: Administrative/ Technical support service personnel (02 No’s ASP + 02 No’s TSP = Total 04 No’s) for a period of Two years.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-355 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-354-355.pdf" class="atagcolor" id="p-style">X-Band Down converter</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-354 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-354-355.pdf" class="atagcolor" id="p-style">Video Accessories and spares supply,installation and commissioning of videowall display system (One each at 5 locations)</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-353 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-352-353.pdf" class="atagcolor" id="p-style">Procurement of Workstations for conducting Trainings at NRSC</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-352 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-352-353.pdf" class="atagcolor" id="p-style">Supply, Installation, Testing, Commissioning and Acceptance of High-end Workstations</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-351 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-350-351.pdf" class="atagcolor" id="p-style">Atomic Absorption Spectrometer</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-350 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-350-351.pdf" class="atagcolor" id="p-style">Rate Contract for Printing and Binding services: Printing/Plotting of maps/posters in vector/Raster Formats</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-349 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-347-349.pdf" class="atagcolor" id="p-style">Printing of Desktop Calenders 2020</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-348 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-347-349.pdf" class="atagcolor" id="p-style">PCB Fabrication &amp; Assembly</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-347 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-347-349.pdf" class="atagcolor" id="p-style">Digital Audio System &amp; Podium for Conference hall</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-346 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-345_C.pdf">Corrigendum PT-346</a>
                      </td>
                    </tr>
                    <tr></tr>
                    <tr>
                      <td  id="p-style">PT-346 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-345.pdf">1 X 100 KVA DG set with enclose and AMF panel </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-345 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-345.pdf" title="345">Supply, Installation and commissioning of Dedicated Internet Leased Connectivity at RRSC Kolkata.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-344 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-342 to 344  - 4th july 2019 -1.pdf" title="344">Procurement of Bucket/Man/Sky Lift vehicles -03 Nos.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-343 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-342 to 344  - 4th july 2019 -1.pdf">Contract for Hiring of Manpower for Canteens at RRSC, Jodhpu</a>
                        <a href="./assets/pdf/tenders/Purchase/PT-342 to 344  - 4th july 2019 -1.pdf" title="343">r</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-342 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-342 to 344  - 4th july 2019 -1.pdf" class="atagcolor" id="p-style" title="342">Supply, Installation and commissioning of Dedicated Internet Leased Connectivity at RRSC Nagpu</a>
                        <a href="./assets/pdf/tenders/Purchase/PT-342 to 344  - 4th july 2019 -1.pdf" title="342">r</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-341 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-340-341.pdf" title="341">Online AAQMS - 2 Numbers</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-340 </td>
                      <td>
                        <a href="./assets/pdf/tenders/Purchase/PT-340-341.pdf" title="340">AWS - 4 Numbers</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-338 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-_336-338-2.pdf" class="atagcolor" id="p-style" title="331">Provision of Manpower Support for UPS, AV Facility, RF &amp; Workshop</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-337 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-_336-338-2.pdf" class="atagcolor" id="p-style" title="331">Provision of High Volume Sampler (PM 2.5.PM 10)</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-336 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-_336-338-2.pdf" class="atagcolor" id="p-style" title="331">Provision of Integrated Tracking System</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-335 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331">Provision of Site Engineers for Bhuvan Scale up Activities for 2 Years</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-334 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331">AMC for Security Services at RRSC-Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-333 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331">Portable FTIR</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-332 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331">For supply of Test Instruments </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT -331 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331">PCB Fabrication and Assembly </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT -330 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-326-330.pdf" class="atagcolor" id="p-style" title="PT-326-330">S Band up and down converters</a>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331"></a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-329 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-326-330.pdf" class="atagcolor" id="p-style" title="326-330">Supply and installation of rack mount servers</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-328 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-326-330.pdf" class="atagcolor" id="p-style" title="PT-326-330">UTM for IMGEOS networks</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-327 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-326-330.pdf" class="atagcolor" id="p-style" title="PT-326-330">Work Stations</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-326 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-326-330.pdf" class="atagcolor" id="p-style" title="PT-326-330">TTC Processor</a>
                        <a href="./assets/pdf/tenders/PT- 331-335-pdf.pdf" class="atagcolor" id="p-style" title="331"></a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-324 </td>
                      <td>
                        <a href="./assets/pdf/tenders/f3-PT-321-324_1012019.pdf" class="atagcolor" id="p-style" title="PT-321-324">SSPA Assembly with 1:1 Redundancy Configuration</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-323 </td>
                      <td>
                        <a href="./assets/pdf/tenders/f3-PT-321-324_1012019.pdf" class="atagcolor" id="p-style" title="PT-321-324">Annual Works contract for operation of DG, UPS at NRSC Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-322 </td>
                      <td>
                        <a href="./assets/pdf/tenders/f3-PT-321-324_1012019.pdf" class="atagcolor" id="p-style" title="PT-321-324">Annual Works contract for operation of DG, UPS at NRSC Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-321 </td>
                      <td>
                        <a href="./assets/pdf/tenders/f3-PT-321-324_1012019.pdf" class="atagcolor" id="p-style" title="PT-321-324">ACMS &amp; FMS for Computer Systems</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-320 </td>
                      <td>
                        <a href="./assets/pdf/tenders/f2-PT320-02012019.pdf" class="atagcolor" id="p-style" title="PT320">10gbps Dual Ported NIC Cards-30 Nos</a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a href="./assets/pdf/tenders/PURCHASENOTICE-02012019.pdf" class="atagcolor" id="p-style" title="PURCHASENOTICE">Purchase Notice </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-318 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-318.pdf" class="atagcolor" id="p-style" title="PT-318">Provision of site engineers for Bhuvan Scaleup activities for 3 years.</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-317 </td>
                      <td>
                        <a href=" ./assets/pdf/tenders/PT-317.pdf" class="atagcolor" id="p-style" title="PT-317">AMC of House Keeping and Caretaking of Visiting Scientist Hostel at AntarikshVihar, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a href="./assets/pdf/tenders/2_EoI_Notice_Smart_Class.pdf" class="atagcolor" id="p-style" title="Notice_Smart_Class">Expression of Interest for Establishing Smart Class Room</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-314 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-314.pdf" class="atagcolor" id="p-style" title="PT-314">Mobile Mapping System -1 Lot</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-313 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-314.pdf" class="atagcolor" id="p-style" title="PT-314">AMC for Maintenance of Air Conditioning <br /> infrastructure for two years- 1 lot at RRSC Nagpur </a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-312 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-314.pdf" class="atagcolor" id="p-style" title="PT-314">Landing Gear Overhaul- 1 No</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-311 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-309.pdf" class="atagcolor" id="p-style" title="PT-309">Annual Contract for supply of High Speed Diesel (HSD) for two years</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-310 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-309.pdf" class="atagcolor" id="p-style" title="PT-309">Electronic Component Solidstate Device 3.0-4.0 GHz Frequency Synthesizers</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-309 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-309.pdf" class="atagcolor" id="p-style" title="PT-309">GUI based Demodulators and Modulators</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-308 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-307.pdf" class="atagcolor" id="p-style" title="PT-307">A V Facility for conference Room NRSC, Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-307 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-307.pdf" class="atagcolor" id="p-style" title="PT-307">Induction buffet &amp; Addl. Ice-cream desert countersfor VIP Dining NRSC, Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-306 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title="PT-301">Comprehensive Annual Maintenance Contract of Antarctica Ground Station for Earth Observation Satellites at Antarctica</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-305 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title="PT-301">Spectroradiometers- 2 Nos</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-304 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title="PT-301">Network Switches</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-303 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title=" PT-301">Fabrication and supply of PCI express based SPARC Data ingest and processing Cards</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-302 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title="PT-301">Open path CO2/H2O gas Analyzers</a>
                      </td>
                    </tr>
                    <tr>
                      <td  id="p-style">PT-301 </td>
                      <td>
                        <a href="./assets/pdf/tenders/PT-301.pdf" class="atagcolor" id="p-style" title="PT-301">Passive network Elements for BAE Analyzers</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav aria-label="Tender pagination">
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
  let currentPage = 1;
  const rowsPerPage = 10;
  const rows = Array.from(document.querySelectorAll("#myTable tbody tr"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput"); // Make sure this element exists

  function getFilteredRows() {
    const searchTerm = searchInput.value.toLowerCase();
    return rows.filter(row =>
      Array.from(row.querySelectorAll("td")).some(cell =>
        cell.textContent.toLowerCase().includes(searchTerm)
      )
    );
  }

  function changePage(page) {
    currentPage = page;
    const filteredRows = getFilteredRows();
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    // Hide all rows first
    rows.forEach(row => row.style.display = "none");

    // Show only matching rows within the current page range
    filteredRows.slice(start, end).forEach(row => row.style.display = "");

    // Update pagination styling
    const pageLinks = pagination.querySelectorAll(".page-item");
    pageLinks.forEach((li, i) => {
      li.classList.toggle("active", i === page - 1);
    });
  }

  function setupPagination() {
    const filteredRows = getFilteredRows();
    const pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    pagination.innerHTML = ""; // Clear existing pagination

    for (let i = 1; i <= pageCount; i++) {
      const li = document.createElement("li");
      li.className = "page-item";
      const a = document.createElement("a");
      a.className = "page-link";
      a.href = "#";
      a.textContent = i;
      a.addEventListener("click", (e) => {
        e.preventDefault();
        changePage(i);
      });
      li.appendChild(a);
      pagination.appendChild(li);
    }

    // Reset to first page
    changePage(1);
  }

  // Listen for input on search field
  searchInput.addEventListener("input", () => {
    setupPagination(); // Update pagination and rows
  });

  // Initialize on load
  document.addEventListener("DOMContentLoaded", function() {
    setupPagination();

    // Optional: menu button logic (already in your script)
    const menuBtn = document.getElementById("menuToggleBtn");
    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
