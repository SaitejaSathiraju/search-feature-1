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
      color: #3f68b5;
      font-weight: bold;
    }

    .section {
      background-color: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .event-heading {
      font-size: 24px;
      color: red;
      font-weight: 700;
      text-align: center;
      margin: 40px 0 10px;
    }

    .region-links {
      font-size: 18px !important;
      text-align: center;
      margin-bottom: 20px;
    }

    .card {
      margin-bottom: 20px;
      /* border-left: 5px solid #3f68b5; */
    }

    .card-body h6 {
      font-size: 14px;
      color: #666;
    }

    .card-title {
      font-size: 20px;
      font-weight: 600;
      color: #3f68b5;
      text-decoration: none;
    }

    .card-title:hover {
      text-decoration: underline;
    }

    @media (max-width: 576px) {
      .heading-title {
        font-size: 24px !important;
      }

      .card-title {
        font-size: 16px;
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
    <div class="container-fluid">
      <section class="col-lg-12">
        <h3 class="text-center">Flood Inundation Maps - 2019</h3>

        <?php
          $regions = [
            "Karnataka & Maharashtra" => [
              ["09.08.2019", "assets/pdf/maps_dms/Mh_Ka_Flood2019_web.pdf", "Flood Inundation - View in parts of Maharashtra and Karnataka States"]
            ],
            "Kerala" => [
              ["12.08.2019", "assets/pdf/maps_dms/Kerala-floods-2019-webinput.pdf", "Flood Inundation - View in parts of Kerala"]
            ],
            "Punjab" => [
              ["22.08.2019", "assets/pdf/maps_dms/Punjab-Floods-2019-1.pdf", "Flood Inundation View"],
              ["24.07.2019", "assets/pdf/maps_dms/Punjab_Floods_2019.pdf", "Flood Inundation View"]
            ],
            "Assam" => [
              ["18.07.2019", "assets/pdf/maps_dms/Assam Floods-2-dhubri_HR Images_18 July 2019.pdf", "Flood Inundation View - Dhubri District (1)"],
              ["18.07.2019", "assets/pdf/maps_dms/Assam Floods-1-dhubri_HR Images_18 July 2019.pdf", "Flood Inundation View - Dhubri District (2)"],
              ["18.07.2019", "assets/pdf/maps_dms/Assam Floods -3-dhubri_HR Images_18 July 2019.pdf", "Flood Inundation View - Dhubri District (3)"],
              ["14.07.2019", "assets/pdf/maps_dms/Assam Floods 2019.pdf", "Flood Inundation - View"]
            ],
            "Bihar" => [
              ["30.09.2019", "assets/pdf/maps_dms/webinputs_bihar_floods-Sep2019.pdf", "Bihar - Flood Inundation - View"],
              ["28.07.2019", "assets/pdf/maps_dms/Bihar flood - 28.07.2019.pdf", "Bihar - Flood Inundation - View"],
              ["17.07.2019", "assets/pdf/maps_dms/Bihar-floods-2019_18 July 2019.pdf", "Bihar - Flood Inundation - View"],
              ["12.07.2019", "assets/pdf/maps_dms/Bihar-floods-2019-webinput_jul16.pdf", "Bihar - Flood Inundation - View"]
            ]
          ];

          foreach ($regions as $region => $entries) {
            echo '
              <div class="event-heading">' . htmlspecialchars($region) . '</div>
              <p class="region-links">
                View on <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank">Bhuvan</a>, 
                <a href="https://ndem.nrsc.gov.in/#/" target="_blank">NDEM</a>
              </p>
              <div class="row">';

            foreach ($entries as $entry) {
              $date = htmlspecialchars($entry[0]);
              $link = htmlspecialchars($entry[1]);
              $desc = htmlspecialchars($entry[2]);

              echo '
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted"> ' . $date . '</h6>
                      <a href="#" onclick="window.open(\'' . $link . '\',\'popup\',\'width=900,height=800\'); return false;" class="card-title">' . $desc . '</a>
                    </div>
                  </div>
                </div>';
            }

            echo '</div><hr/>';
          }
        ?>
      </section>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
