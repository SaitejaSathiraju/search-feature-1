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

    #p-style {
      font-size: 18px;
      text-align: justify;
    }

    @media (max-width: 576px) {
      .heading-title {
        font-size: 24px !important;
      }

      #p-style {
        font-size: 16px;
      }
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
      margin-bottom: 20px;
    }

    .image-card {
      margin-bottom: 20px;
    }

    .image-card .card-body {
      padding: 15px;
    }

    .image-card .card-title {
      font-size: 20px;
      font-weight: 700;
      color: #3f68b5;
    }

    .image-card .card-subtitle {
      font-size: 14px;
      color: #666;
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
          <h3 class="event-heading">Fani Cyclone (May 2019)</h3>
          <div class="row">
            <!-- Card Items Start -->
            <?php
              $images = [
                ["07.05.2019", "assets/pdf/cyclones_dms/PartofPuri_plieades_Sc4-plate-1.jpg", "Wind induced damages - Part of Puri District, Odisha - Image 1"],
                ["07.05.2019", "assets/pdf/cyclones_dms/PartofPuri_plieades_Sc4-plate-2.jpg", "Wind induced damages - Part of Puri District, Odisha - Image 2"],
                ["07.05.2019", "assets/pdf/cyclones_dms/PartofPuri_plieades_Sc4-plate-3.jpg", "Wind induced damages - Part of Puri District, Odisha - Image 3"],
                ["07.05.2019", "assets/pdf/cyclones_dms/PartofPuri_plieades_Sc4-plate-5.jpg", "Wind induced damages - Part of Puri District, Odisha - Image 4"],
                ["07.05.2019", "assets/cyclones_dms/Flood Inundation due to Fani Cyclone in part of Puri District_Pre_Post.pdf", "Inundated Areas - Part of Cuttak District, Odisha"],
                ["07.05.2019", "assets/pdf/cyclones_dms/Flood Inundation due to Fani Cyclone in part of Puri District_Pre_Post.pdf", "Flood Inundated Areas - Pre & Post - Part of Puri District, Odisha"],
                ["07.05.2019", "assets/pdf/cyclones_dms/Partofpuri_plieades_Sc1-plate-1.jpg", "Flood Inundated Areas - Part of Puri District, Odisha"],
                ["06.05.2019", "assets/pdf/cyclones_dms/Part of Bhubaneswar_plieades_Sc3-plate-3.pdf", "Part of Bhubaneswar City, Odisha - Image 1"],
                ["06.05.2019", "assets/pdf/cyclones_dms/Part of Bhubaneswar_plieades_Sc3-plate-5.pdf", "Part of Bhubaneswar City, Odisha - Image 2"],
                ["06.05.2019", "assets/pdf/cyclones_dms/Part of Khurdha_plieades_Sc2-plate-1.pdf", "Part of Khorda District, Odisha - Image 1"],
                ["06.05.2019", "assets/pdf/cyclones_dms/Partof Khurdha_plieades_Sc2-plate-2.pdf", "Part of Khorda District, Odisha - Image 2"],
                ["05.05.2019", "assets/pdf/cyclones_dms/Fani Cyclone Pre Vs Post Balasore JalakaRiver.pdf", "Impact in parts of Balsore District, Odisha"],
                ["04.05.2019", "assets/pdf/cyclones_dms/Pre Post Fani Status as On 04 May 2019_Puri.pdf", "Pre-Post Images - Impact on parts of Odisha"],
                ["03.05.2019", "assets/pdf/cyclones_dms/Eye of the Cyclone_03 May 2019 morning.pdf", "(0700 Hours) - Eye of the Cyclone"],
                ["03.05.2019", "assets/pdf/cyclones_dms/Cyclone Fani_ Odisha-03May2019 morning.pdf", "(0700 Hours) - Srikakulam District"],
                ["03.05.2019", "assets/pdf/cyclones_dms/Cyclone Fani - Andhra Pradesh-03 May 2019 evening.pdf", "(1800 Hours) - Srikakulam District"],
                ["03.05.2019", "assets/pdf/cyclones_dms/CycloneFani-Odisha-03 May 2019 evening.pdf", "(1800 Hours) - Ganjam District"]
              ];

              foreach ($images as $img) {
                echo '
                <div class="col-md-6 col-lg-4 image-card">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($img[0]) . '</h5>
                      <a href="' . htmlspecialchars($img[1]) . '" target="_blank" class="card-title d-block">' . htmlspecialchars($img[2]) . '</a>
                    </div>
                  </div>
                </div>';
              }
            ?>
            <!-- Card Items End -->
          </div>
        </section>
      </div>
    </section>
  </main>
<?php include 'footer.php'; ?>
</body>
</html>
