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
      heading-title {
        word-break: break-word;
      }

      .section {
        padding: 40px 0;
      }

      .event-heading {
        font-size: 24px;
        color: red;
        font-weight: 700;
        text-align: center;
        margin-bottom: 10px;
      }

      .entry-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px 20px;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
      }

      .entry-date {
        font-size: 14px;
        font-weight: 600;
        color: #444;
        margin-bottom: 6px;
      }

      .entry-title a {
        font-size: 20px;
        font-weight: 500;
        text-decoration: none;
      }

      .entry-title a:hover {
        text-decoration: underline;
      }

      .region-links {
        text-align: center;
        margin-bottom: 15px;
        font-size: 20px;
      }

      .region-links a {
        text-decoration: none;
        margin: 0 5px;
      }

      .container-custom {
        max-width: 100%;
        padding-left: 20px;
        padding-right: 20px;
      }

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .entry-title a {
          font-size: 18px;
        }

        .entry-date {
          font-size: 14px;
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
              <h1 class="heading-title text-break text-center">Disaster Management Support</h1>
            </div>
          </div>
        </div>
      </section>
    </header>
    <main id="main-content" class="main" role="main">
      <section class="section">
        <div class="container-fluid px-4">
          <h3>
            <div class="event-heading">Flood Inundation Maps - 2022</div>
          </h3>
          <br />
          <div class="container-custom">
            <div class="row">
              <div class="event-heading">Andhra Pradesh</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">20.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_AP_20Aug2022AP.pdf" target="_blank"> Flood Inundated areas in Part of Andhra Pradesh State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">27.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP22_KonavaramAP_27jul2022.pdf" target="_blank"> View of Flood Inundation in Villages Surrounding Confluence of Sabari & Godavari Rivers </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP21_DhalwesharamAP_19jul2022.pdf" target="_blank"> Satellite image showing Godavari River adjacent to Rajahmundry, Andhra Pradesh State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP20_RajahmundriAP_19jul2022.pdf" target="_blank">Inundated areas in islands adjacent to Rajahmundry, Andhra Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP19_BobbarLankaAP_19jul2022.pdf" target="_blank">Flood Inundated areas in Bobbar Lanka village, adjacent to Dhavaleswaram Barrage, Andhra Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP18_MadduruLankaAP_19jul2022.pdf" target="_blank">Flood Inundated areas in Meduru Lanka village, adjacent to Dhavaleswaram Barrage, Andhra Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/VAP17_RajavaramandPeravaramAP_19jul2022.pdf" target="_blank">Flood Inundated areas in Rajavaram and Peravaram village, adjacent to Dhavaleswaram Barrage, Andhra Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Pre and Post flood inundation images in part of East Godavri District as on 19jul2022.pdf" target="_blank">Villages inundated in parts East and west godavari districts as on 19 July, 2022</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Villages inundated in parts East and west godavari districts as on 19jul2022.pdf" target="_blank">Villages inundated in parts East and west godavari districts</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Polavaram Mandal,West Godavari District,Andhra Pradesh State-map6.pdf" target="_blank">Flood Inundated areas in Part of Polavaram Mandal, West Godavari District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of East and West Godavari Districts,Andhra Pradesh State-Map8.pdf" target="_blank">Flood Inundated areas in Part of East and West Godavari Districts</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of East and West Godavari Districts,Andhra Pradesh State-Map7.pdf" target="_blank">Flood Inundated areas in Part of East and West Godavari Districts</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Polavaram Spillway,West Godavari District,Andhra Pradesh State.pdf" target="_blank">Polavaram Spillway, West Godavari District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Polavaram Project Overview,West Godavari District,Andhra Pradesh State.pdf" target="_blank">Polavaram Project Overview, West Godavari District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Polavaram Coffer Dams,West Godavari District,Andhra Pradesh State.pdf" target="_blank">Polavaram Coffer Dams, West Godavari District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Andhra_Pradesh_Godavari_Floods_16072022.pdf" target="_blank">Flood Inundation in Godavari River</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Andhra_Pradesh_Sabari_Floods_16072022.pdf" target="_blank">Flood Inundation in Sabari and Godavari Rivers</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/AndhraPradesh_Coast_Floods_16072022.pdf" target="_blank">Heavy rain and flood affected areas in Coastal Region</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Telangana</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">20.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_20Aug2022TS.pdf" target="_blank"> Flood Inundated areas in Part of Telangana State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/FloodmapTS_19Aug2022.pdf" target="_blank"> Flood Inundated areas in Part of Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Komaram Bheem Asifabad District-18-Aug-22-Map1.pdf" target="_blank"> Flood Inundated areas in Part of Komaram Bheem Asifabad District, Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Dima Village of Komaram Bheem Asifabad District-18-Aug-22-Map2.pdf" target="_blank"> Flood Inundated areas in Part of Dima Village of Komaram Bheem Asifabad District, Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/SatelliteImageshowingBhadrachalamduringFloodon16.07.2022.png" target="_blank"> Flood Inundation Surrounding Bhadrachalam, Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">14.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/TS_VAP_14Jul2022_plate1.jpg" target="_blank"> Flood Inundation Surrounding Kaleswaram, Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">14.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/TS_VAP_14Jul2022_plate2.jpg" target="_blank"> Flood Inundation Surrounding Dummagudem, Telangana State</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Assam</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">17.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Marigaon_Nowgong_hojai_ E_Karbi_Assam_2022_VAP.pdf" target="_blank"> Flood Inundation in parts of Marigaon, Hojai, Nowgong & East Karbi Anglong Districts, Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">17.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Karimganj and Hailakandi_Assam_2022_VAP.pdf" target="_blank"> Flood Inundation in parts of Karimganj and Hailakandi Districts, Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">17.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Cachar_Assam_2022_VAP.pdf" target="_blank"> Flood Inundation in parts of Cachar Districts, Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">22.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/plate-4-Barak-pre-post.pdf" target="_blank"> Flood Inundation in Part of Barak Valley, Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">22.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/plate-3-assam-pre-post.pdf" target="_blank"> Flood Inundation in Part of Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">20.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/plate-5-assam-pre-post.pdf" target="_blank"> Flood Inundation in Part of Assam State </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">20.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/plate-2-hojai-pre-post.pdf" target="_blank"> Flood Inundation in Part of Hojai District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/plate-4-Barak-pre-post-frs.pdf" target="_blank"> Flood Inundation in Part of Barak Valley, Assam State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.05.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/floodmap_assam_18May2022.pdf" target="_blank"> Flood Inundated Areas in Part of Assam State</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Gujarat</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">14.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Gujarat_14Jul2022_RS2_VAP_plate1.pdf" target="_blank"> Inundation due to Heavy Rain in part of Bharuch District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">14.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Gujarat_14Jul2022_RS2_VAP_plate2.pdf" target="_blank"> Inundation due to Heavy Rain in part of Surat District</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">14.07.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Gujarat_14Jul2022_VAP.pdf" target="_blank"> Inundation due to Heavy Rain in part of Vadodara & Bharuch Districts</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Maharashtra</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_MH_19Aug2022.pdf" target="_blank"> Flood Inundated areas in Part of Maharashtra State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Garhchiroli District-18-Aug-22-Map1.pdf" target="_blank"> Flood Inundated areas in Part of Garhchiroli District - Map1</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Garhchiroli District-18-Aug-22-Map2.pdf" target="_blank"> Flood Inundated areas in Part of Garhchiroli District - Map2</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Flood Inundated areas in Part of Garhchiroli District-18-Aug-22-Map3.pdf" target="_blank"> Flood Inundated areas in Part of Garhchiroli District - Map3</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Odisha</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">30.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/SatellitebasedAnalysis-FloodMappingMonitoringinOdishaState.pdf" target="_blank"> Satellite based Analysis -Flood Mapping & Monitoring in Odisha State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">21.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_OD_21Aug2022OD.pdf" target="_blank"> Heavy Rain Inundated Areas in Part of Odisha State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">19.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_OD_19Aug2022OD.pdf" target="_blank"> Heavy Rain Inundated Areas in Part of Odisha State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_OD_18Aug2022.pdf" target="_blank">Inundated Areas in Part of Odisha State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">18.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/FloodReport_OD_18Aug2022.pdf" target="_blank"> Inundated Areas in Part of Odisha State - Report</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Rajasthan</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">24.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodmap_RJ_24Aug2022.pdf" target="_blank"> Rajasthan Heavy Rains- Near Real Time Flood Mapping</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">24.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Floodreport_RJ_24Aug2022_v2.pdf" target="_blank"> Rajasthan Heavy Rains- Near Real Time Flood Mapping - A Report</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Madhya Pradesh</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">24.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/FloodMap_MP_25Aug2022.pdf" target="_blank">Madhya Pradesh Floods - Near Real Time Flood Mapping</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Dehradun</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">30.08.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/High resolution satellite images -Maldevta_Flash_Flood_Uttarakhand.pdf" target="_blank">High Resolution Satellite Images - Maldevta Flash Flood Uttarakhand</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Uttar Pradesh</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">07.11.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/SatelliteBasedAnalysis_FloodMappingandMonitoringinUP_30112022.pdf" target="_blank">Satellite based Analysis -Flood Mapping & Monitoring in Uttar Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.10.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/UP_VAP_17_C3MX_16Oct22.pdf" target="_blank">Cartosat-3 MX High Resolution Satellite Image Showing Flood Inundation in Parts of Balrampur, Gesari, Shri Dutt Ganj, Bhanwapur and Utraula Blocks, Uttar Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.10.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/16_Gorakhpur_16-Oct-2022_UP.pdf" target="_blank">Resourcesat-2 AWiFS Satellite Image Showing Flood Inundation in Gorakhpur and Surroundings, Uttar Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">16.10.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/15_Balrampur_16-Oct-2022_UP.pdf" target="_blank">Resourcesat-2 AWiFS Satellite Image Showing Flood Inundation in part of Balrampur and Siddharth Nagar, Uttar Pradesh State</a>
                  </div>
                </div>
              </div>
              <div class="event-heading">Bihar</div>
              <div class="region-links"> View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">10.09.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Saran_bihar_10Sep_2022.pdf" target="_blank">Bihar Floods - Part of SARAN district - Near Real Time Inundation Mapping</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="entry-card">
                  <div class="entry-date">10.09.2022</div>
                  <div class="entry-title">
                    <a href="assets/pdf/maps_dms/Sabalpur_10Sep_2022_Bihar.pdf" target="_blank">Bihar Floods - Part of SARAN district - Near Real Time Inundation Mapping</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
  </body>
</html>