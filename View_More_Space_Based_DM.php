<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Space Based Disaster Management</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-KNmb9dp1LtRCH0ZqV/Y3SgwFhJYOmIAVukEY9VkGCGqgOAdRYTQeRNC8s8qY9uvhHDgqP+VnEPhKDKBzm5Ag0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      body {
        background: #f4f8fc;
        font-family: 'Segoe UI', sans-serif;
      }
      
      .heading-title {
        word-break: break-word;
      }

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }
      }

      h3 {
        margin-top: 2rem;
        border-bottom: 2px solid #bfd6f2;
        padding-bottom: 0.5rem;
      }

      ul.custom-list {
        list-style: none;
        padding-left: 0;
      }

      ul.custom-list li {
        font-size: 20px;
        margin-bottom: 0.75rem;
      }

      ul.custom-list li a {
        color: #1e4fa1;
        text-decoration: none;
        transition: all 0.3s;
      }

      ul.custom-list li a:hover {
        color: #0d2d5e;
        text-decoration: underline;
      }

      .icon-link::before {
        content: '\f0da'; /* fa-chevron-right */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-style: normal;
        margin-right: 8px;
        color: #3f68b5;
      }

      .section {
        padding: 2rem 0;
      }

      .extra-links a {
        display: inline-block;
        margin-top: 1rem;
        font-size: 20px;
        color: #007bff;
      }

      .extra-links a:hover {
        text-decoration: underline;
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
                <h1 class="heading-title text-break text-center">Space Based Disaster Management</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div data-skip-id="viewMoreDM-main" id="viewMoreDM-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">            
            <section class="service-details section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-9">
                    <h3>🌊 Floods</h3>
                    <ul class="custom-list">
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2023_SikkimFloods.php" target="_blank">2023 (Sikkim Floods)</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2022_Floods.php" target="_blank">2022</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2021_Floods.php" target="_blank">2021</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2020_Floods.php" target="_blank">2020</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2019_Floods.php" target="_blank">2019</a></li>
                    </ul>

                    <h3>🌀 Cyclones</h3>
                    <ul class="custom-list">
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2023_Cyclones_biparjoy.php" target="_blank">2023 (BIPARJOY)</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2021_Cyclone_yaas.php" target="_blank">2021 (YAAS)</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2021_Cyclone_Tauktae.php" target="_blank">2021 (TAUKTAE)</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2021_Cyclone_Nivar.php" target="_blank">2020 (NIVAR)</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="2019_Cyclones.php" target="_blank">2019</a></li>
                      <li><i class="fas fa-chevron-right text-secondary mr-2"></i><a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=cyclone" target="_blank">View Maps in Bhuvan Portal</a></li>
                    </ul>

                    <div class="extra-links">
                      <a href="About_DMS.php"><i class="fas fa-info-circle"></i> Go to Applications -  EO Applications - Disaster Management Support Programme (DMSP)</a><br>
                      <a href="View_More_DMSP.php"><i class="fas fa-external-link-alt"></i> View More DMSP</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>