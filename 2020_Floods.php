<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>
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
    .heading-title {
      word-break: break-word;
    }
    .region-title {
      font-size: 24px;
      color: red;
      font-weight: 700;
      text-align: center;
      margin: 40px 0 10px;
    }
    .region-links {
      font-size: 18px;
      text-align: center;
      margin-bottom: 20px;
    }
    .region-links {
      font-size: 18px !important;
      text-align: center;
      margin-bottom: 20px;
    }
    .map-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
    .map-card h5 {
      font-size: 14px;
      font-weight: 600;
    }
    .map-card p {
      margin: 5px 0 0 0;
      font-size: 20px;
    }
    @media (max-width: 576px) {
      .heading-title {
        font-size: 26px !important;
        line-height: 1.3 !important;
      }
      .region-title {
        font-size: 20px;
      }
      .map-card h5 {
        font-size: 16px;
      }
      .map-card p {
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
    <section id="service-details" class="service-details section">
      <div class="container">
        <h3 class="text-center mb-4">Flood Inundation Maps - 2020</h3>

        <!-- Odisha -->
        <div class="region-title">Odisha</div>
        <div class="region-links">
          View on 
          <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
          <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
        </div>
        <div class="map-card">
          <h5>August 26, 28, 29 & 31, 2020</h5>
          <p><a href="assets/pdf/maps_dms/Odisha_StateMap_26-31Aug2020.pdf" target="_blank">Cropped area affected due to flooding in parts of Odisha State</a></p>
        </div>
        <div class="map-card">
          <h5>August 29, 2020</h5>
          <p><a href="assets/pdf/maps_dms/ODFlood_30082020_VAP_DEM.pdf" target="_blank">Flood Inundation in parts of Odisha State (Kendraparha, Jajpur, Bhadrak)</a></p>
        </div>

        <!-- West Bengal -->
        <div class="region-title">West Bengal</div>
        <div class="region-links">
          View on 
          <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
          <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
        </div>
        <div class="map-card">
          <h5>August 26, 2020</h5>
          <p><a href="assets/pdf/maps_dms/WB_kharifCropped_inundated_26aug20_edited.pdf" target="_blank">Cropped area affected due to flooding in parts of West Bengal state</a></p>
        </div>
        <div class="map-card">
          <h5>August 26, 2020</h5>
          <p><a href="assets/pdf/maps_dms/WBFlood_28082020_VAP_DEM.pdf" target="_blank">Flood & Heavy Rain inundated areas in parts of West Bengal State</a></p>
        </div>

        <!-- Uttar Pradesh -->
        <div class="region-title">Uttar Pradesh</div>
        <div class="region-links">
          View on 
          <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
          <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
        </div>
        <div class="map-card">
          <h5>August 1st–24th, 2020</h5>
          <p><a href="assets/pdf/maps_dms/UP_crop_flooded_1-24aug20rev.pdf" target="_blank">Heavy Rain Affected Areas in Parts of Belgaum, Karnataka</a></p>
        </div>
        <div class="map-card">
          <h5>August 2020</h5>
          <p><a href="assets/pdf/maps_dms/UP_animations_august2020_f.gif" target="_blank">Flood Progression and Recession in Part of UP State</a></p>
        </div>

        <!-- Assam -->
        <div class="region-title">Assam</div>
        <div class="region-links">
          View on 
          <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
          <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
        </div>
        <div class="map-card">
          <h5>10.07.2020 to 06.08.2020</h5>
          <p><a href="assets/pdf/maps_dms/Assam_flood_agriculture.pdf" target="_blank">Cropped area affected due to flooding in Assam state</a></p>
        </div>
        <div class="map-card">
          <h5>10.07.2020 to 18.07.2020</h5>
          <p><a href="assets/pdf/maps_dms/Assam flood cumulative map_jul10-18.pdf" target="_blank">Cumulative Flood Inundated Areas in Assam State</a></p>
        </div>
        <div class="map-card">
          <h5>05.01.2020 to 22.07.2020</h5>
          <p><a href="assets/pdf/maps_dms/Assam Flood _Progression & Recession.gif" target="_blank">Assam flood 2020.</a></p>
        </div>
        <div class="map-card">
          <h5>21.06.2020 to 01.07.2020</h5>
          <p><a href="assets/pdf/maps_dms/VAP_cumulative100.pdf" target="_blank">Cumulative Flood Inundated Areas in Assam State</a></p>
        </div>
        <div class="map-card">
          <h5>30.06.2020</h5>
          <p><a href="assets/pdf/maps_dms/Assam_Value_added_Product_30June2020.pdf" target="_blank">Flood Inundated Areas in part of Assam State</a></p>
        </div>
        <div class="map-card">
          <h5>26.06.2020</h5>
          <p><a href="assets/pdf/maps_dms/Assam_Jun26PartofStatemap.pdf" target="_blank">Flood Inundated Areas in part of Assam State</a></p>
        </div>

        <!-- Bihar -->
        <div class="region-title">Bihar</div>
        <div class="region-links">
          View on 
          <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
          <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
        </div>
        <div class="map-card">
          <h5>03.07.2020 to 07.08.2020</h5>
          <p><a href="assets/pdf/maps_dms/Bihar_flood_agriculture.pdf" target="_blank">Cropped area affected due to flooding in Bihar state</a></p>
        </div>
        <div class="map-card">
          <h5>14.07.2020 to 02.08.2020</h5>
          <p><a href="assets/pdf/maps_dms/flood_duration_04Aug_2020.jpg" target="_blank">Flood Duration Map of Parts of Bihar State</a></p>
        </div>
        <div class="map-card">
          <h5>July, 2020</h5>
          <p><a href="assets/pdf/maps_dms/Biharfloods_animation_27june_29july2020.gif" target="_blank">Flood inundation Scenario(animation): Madhubani Surroundings - Bihar</a></p>
        </div>
        <div class="map-card">
          <h5>09.07.2020 to 23.07.2020</h5>
          <p><a href="assets/pdf/maps_dms/Bihar_cumulative_July 9 to 23.pdf" target="_blank">Cumulative Flood Inundated areas of Bihar State</a></p>
        </div>
        <div class="map-card">
          <h5>23.07.2020</h5>
          <p><a href="assets/pdf/maps_dms/Cumulative__East Champaran_9_23.pdf" target="_blank">Cumulative Flood Inundated areas in East Champaran District</a></p>
        </div>
        <div class="map-card">
          <h5>27.06.2020</h5>
          <p><a href="assets/pdf/maps_dms/Bihar_Statemap_27Jun_2020.pdf" target="_blank">Heavy Rain Inundated areas in Part of Bihar State</a></p>
        </div>
        <div class="map-card">
          <h5>24.06.2020</h5>
          <p><a href="assets/pdf/maps_dms/Bihar_Statemap_24Jun_2020sentinel_11.pdf" target="_blank">Heavy Rain Inundated areas in Part of Bihar State</a></p>
        </div>
      </div>
    </section>
  </main>
<?php include 'footer.php'; ?>
</body>
</html>
