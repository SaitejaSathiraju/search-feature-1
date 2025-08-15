<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Disaster Management Support</title>
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
        width: 25%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 75%;
      }

      /* Responsive style for mobile view */
      @media (max-width: 576px) {

        th,
        td {
          font-size: 12px;
          padding: 5px;
        }
      }

      #tabletd {
        font-size: 25px;
        text-align: center;
      }

      #tdtext {
        color: red;
        font-weight: 700;
      }

      /* Wrap table in scroll container for small screens */
      @media (max-width: 768px) {
        .table-responsive {
          /* overflow-x: auto; */
          -webkit-overflow-scrolling: touch;
        }

        #myTable {
          width: 100%;
          min-width: 300px;
          /* Ensures content isn't cramped */
          display: block;
        }

        th,
        td {
          white-space: normal;
          font-size: 12px;
          padding: 6px;
        }

        #myTable td:nth-child(1),
        #myTable td:nth-child(2),
        #myTable th:nth-child(1),
        #myTable th:nth-child(2) {
          width: auto;
        }

        #tabletd {
          font-size: 14px;
        }

        #p-style {
          font-size: 12px;
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
                <h1 class="heading-title text-break text-center">Disaster Management Support</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- <div data-skip-id="EOCali-main" id="EOCali-main"></div> -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <section class="col-lg-12">
            <h3>
              <center>Flood Inundation Maps - 2023</center>
            </h3>
            <br />
            <div class="table-responsive">
              <table id="myTable" class="table table-hover  table-striped-rows">
                <tr>
                  <td colspan="2" id="tabletd"><span id="tdtext">Sikkim State </span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">21.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/29__21_Oct_2023_S_Lhonak_Lake.pdf','popup', 'width=900,height=800'); return false;">Cartosat 2E and Sentinel 2 Satellite image of 21.10.2023 showing surrounding of South Lhonak Lake</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">09.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/30_9_Oct_2023_S_Lhonak_Lake.pdf','popup', 'width=900,height=800'); return false;">View of South Lhonak Lake from Very High resolution satellite image as on 9th Oct 2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Cartosat3-Chungthang Dam_13oct2023.pdf','popup', 'width=900,height=800'); return false;">Cartosat 3 - Satellite image of 13.10.2023 showing damages around Chungthang dam due to flood event on 03.10.2023 (10 Pages)</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/17_C3_13_Oct2023_2.pdf','popup', 'width=900,height=800'); return false;">Satellite image of 13.10.2023 showing collapse of bridges in the upstream of Chungthang dam due to flood event on 03.10.2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/16_C3_13_Oct2023_1.pdf','popup', 'width=900,height=800'); return false;">Satellite image of 13.10.2023 showing collapse of Chungthang dam due to flood event on 03.10.2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">12.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/14_R2_L4_12_Oct2023_South_Lhonak.pdf','popup', 'width=900,height=800'); return false;">Satellite image showing South Lhonak Lake and Surroundings as on 12th Oct 2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">10.10.2023 </td>
                  <td id="p-style">Satellite based observations on impact flood surrounding Chungthang Dam <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/11_C2E_10_Oct2023_Chungthang.pdf','popup', 'width=900,height=800'); return false;"> Map-1</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/12_C2E_10_Oct2023_Chungthang.pdf','popup', 'width=900,height=800'); return false;">Map-2</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/13_C2E_10_Oct2023_Chungthang.pdf','popup', 'width=900,height=800'); return false;">Map-3</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">10.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/08_RS2A_L4_10_Oct_2023_South_Lhonak_lake.pdf','popup', 'width=900,height=800'); return false;">Pre & Post Scenario of South Lhonak Lake as on 10th October 2023 using Resourcesat-2A LISS IV image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">09.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/07_KVIK_MSS_09_Oct_2023_Lhonak_Lake.pdf','popup', 'width=900,height=800'); return false;">South Lhonak Lake and Surroundings as on 9th Oct 2023 captured from KANOPUS-V IK satellite image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">09.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/06_KVIK_PAN_09_Oct_2023_Lhonak_Lake.pdf','popup', 'width=900,height=800'); return false;">South Lhonak Lake and Surroundings as on 9th Oct 2023 captured from KANOPUS-V IK high resolution Satellite Image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">06.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/06_C2E_06Oct_2023 _South Lhonak Lake.pdf','popup', 'width=900,height=800'); return false;">South Lhonak Lake and Surroundings as on 6th Oct 2023 captured from Cartosat 2E satellite image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">05.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/05_Resourcesat-2A_LISS IV_5-Oct-2023.pdf','popup', 'width=900,height=800'); return false;">Pre & Post Scenario of South Lhonak Lake as on 05th October 2023 using Resourcesat-2A LISS IV image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">04.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/05_EOS4_FRS_4Oct_2023.pdf','popup', 'width=900,height=800'); return false;">Pre & Post Scenario of South Lhonak Lake as on 04th Oct 2023 using RISAT 1A FRS Image</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">05.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Lhonaklake_28_05oct2023_pre_post.pdf','popup', 'width=900,height=800'); return false;">South Lhonak Lake outburst - Pre and Post - Date of Issue: 06.10.2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">04.10.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Lhonaklake_04oct2023_1800hrs_pre_post.pdf','popup', 'width=900,height=800'); return false;">South Lhonak Lake outburst - Pre and Post - Date of Issue: 05.10.2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">04.10.2023 </td>
                  <td id="p-style">South Lhonak Lake Outburst - Pre and Post Scenario and Its Surroundings <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/SouthLhonakLake_Outburst_Pre_PostScenario.pdf','popup', 'width=900,height=800'); return false;"> Map-1</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/SouthLhonakLake_04Oct2023.pdf','popup', 'width=900,height=800'); return false;">Map-2</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Lhonak_lake.gif','popup', 'width=900,height=800'); return false;">Animated Map</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Telangana State</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">30.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/ts_2023_30_07_vap.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation Surroundings of Bhadrachalam, Telangana State</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">23.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/ts_2023_23_07_0001_vap.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation Surroundings of Bhadrachalam, Telangana State</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Himachal Pradesh State</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">15.07.2023 </td>
                  <td id="p-style">Flood inundation in Mandi district, Himachal Pradesh : <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0001_vap.pdf','popup', 'width=900,height=800'); return false;">Map1</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0002_vap.pdf','popup', 'width=900,height=800'); return false;"> Map2</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0003_vap.pdf','popup', 'width=900,height=800'); return false;"> Map3</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0004_vap.pdf','popup', 'width=900,height=800'); return false;">Map4</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0005_vap.pdf','popup', 'width=900,height=800'); return false;">Map5</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0006_vap.pdf','popup', 'width=900,height=800'); return false;">Map6</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0007_vap.pdf','popup', 'width=900,height=800'); return false;">Map7</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0008_vap.pdf','popup', 'width=900,height=800'); return false;">Map8</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hp_2023_15_07_0009_vap.pdf','popup', 'width=900,height=800'); return false;"> Map9 </a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Delhi</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">20.07.2023 </td>
                  <td id="p-style">Flood Inundation along Yamuna River & Standing water in Parts of Delhi 20-Jul-2023 : <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_20_07_0028_VAP.pdf','popup', 'width=900,height=800'); return false;">Map1</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_20_07_0029_VAP.pdf','popup', 'width=900,height=800'); return false;"> Map2</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_20_07_0030_VAP.pdf','popup', 'width=900,height=800'); return false;"> Map3</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">16.07.2023 </td>
                  <td id="p-style">Flood inundation in Delhi during 13th July 2023 and 16th July 2023 : <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_16_07_0023_VAP.pdf','popup', 'width=900,height=800'); return false;">Map1</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_16_07_0024_VAP.pdf','popup', 'width=900,height=800'); return false;"> Map2</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_16_07_0025_VAP.pdf','popup', 'width=900,height=800'); return false;"> Map3</a>, <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_16_07_0026_VAP.pdf','popup', 'width=900,height=800'); return false;"> Map4</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('#','popup', 'width=900,height=800'); return false;">Pre-Post flood videos - Delhi as on 13th July 2023</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">12.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/S1_DelhiFloods_2023.gif','popup', 'width=900,height=800'); return false;">Animations of Delhi-NCR floods using Sentinel-1 datasets</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/EOS4_DelhiFloods_2023.gif','popup', 'width=900,height=800'); return false;">Animations of Delhi-NCR floods using EOS-04 datasets</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">15.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_15_07_0020_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water at Signature Bridge and surroundings, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">15.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_15_07_0021_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water at Rajghat and surroundings, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">14.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_14_07_0016_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water surroundings of Yamuna Biodiversity Park, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">14.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_14_07_0017_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing water Surroundings of National Zoological Park, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">14.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_14_07_0018_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing water in surroundings of Shastri Park Metro Deport, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">14.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_14_07_0019_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water Shantivan and surroundings, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_12_07_0007_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water Shantivan and surroundings, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_12_07_0008_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing water in surroundings of Shastri Park Metro Deport, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_12_07_0009_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing water Surroundings of National Zoological Park, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/dl_2023_12_07_0010_VAP.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation / Standing Water surroundings of Yamuna Biodiversity Park, Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Delhi_Flood_13Jul2023_Pre-post.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation along Yamuna River & Standing water in Parts of Delhi</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Punjab State</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Punjab flood_2023_11_07_fig4.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Amritsar, Kapurthal, Jalandhar and Firozpur Districts, Punjab State</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Punjab flood_2023_11_07_fig2.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Punjab State</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Punjab Flood_2023_11_07_fig1.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Punjab & Haryana State</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Haryana State</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">13.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hr_2023_13_07_0003_vap.pdf','popup', 'width=900,height=800'); return false;">Flood Inundation / Standing Water in G.B.Nagar and Faridabad Districts of Uttar Pradesh and Haryana along Yamuna River</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/hr_2023_11_07_0001_vap.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Punjab & Haryana State</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Haryana flood_2023_11_07_fig 3.pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Haryana State</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">11.07.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/Punjab Flood_2023_11_07_fig1 (1).pdf','popup', 'width=900,height=800'); return false;">Satellite Image Showing Flood Inundation in Parts of Punjab & Haryana State</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" id="tabletd" >
                    <span id="tdtext" >Assam State</span> - View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">
                    <b>Date of Satellite image(s) </b>
                  </td>
                  <td id="p-style">
                    <b>View of Maps</b>
                  </td>
                </tr>
                <tr>
                  <td id="p-style">18.06.2023 </td>
                  <td>
                    <a id="p-style"  href="#" onclick="window.open('assets/pdf/maps_dms/AS_2023_18_06_0001_vap.pdf','popup', 'width=900,height=800'); return false;">View of Flood Inundation in Cachar, Hailakandi and Karimganj Districts, Assam State</a>
                  </td>
                </tr>
              </table>
            </div>
          </section>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
  </body>
</html>
