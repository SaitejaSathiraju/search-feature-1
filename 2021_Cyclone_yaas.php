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

    .event-subtext {
      text-align: center;
      margin-bottom: 30px;
      font-size: 14px;
      color: #333;
    }

    .event-subtext a {
      text-decoration: none;
    }

    .event-subtext a:hover {
      text-decoration: underline;
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

    .container-custom {
      max-width: 960px;
      margin: 0 auto;
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
      <div class="container-custom">

        <!-- Cyclone YAAS -->
        <div class="event-heading">Cyclone : YAAS-2021</div>

        <div class="entry-card">
          <div class="entry-date">29.05.2021</div>
          <div class="entry-title">
            <a href="assets/pdf/cyclones_dms/odisha_cyclone_yaas_flood.gif" target="_blank">
              Animation Showing Of Inundated Areas (Due To Heavy Rains) In Parts Of Odisha State
            </a>
          </div>
        </div>

        <div class="entry-card">
          <div class="entry-date">27.05.2021</div>
          <div class="entry-title">
            <a href="assets/pdf/cyclones_dms/Value-added product_27MAY2021_Jagatsinghpur.pdf" target="_blank">
              Heavy Rain Inundated Areas in Jagatsinghpur District of Odisha State
            </a>
          </div>
        </div>

        <div class="entry-card">
          <div class="entry-date">27.05.2021</div>
          <div class="entry-title">
            <a href="assets/pdf/cyclones_dms/Value-added product_27MAY2021_Kendrapara.pdf" target="_blank">
              Heavy Rain Inundated Areas in Kendrapada District of Odisha State
            </a>
          </div>
        </div>

        <!-- Cyclone TAUKTAE -->
        <div class="event-heading mt-5">Cyclone : TAUKTAE</div>

        <div class="entry-card">
          <div class="entry-date">18.05.2021</div>
          <div class="entry-title">
            <a href="assets/pdf/cyclones_dms/pre-post-nrsc-website_18May.pdf" target="_blank">
              Heavy Rain Inundated Areas in Part of Junagarh District of Gujarat State
            </a>
          </div>
        </div>

        <div class="entry-card">
          <div class="entry-date">17.05.2021</div>
          <div class="entry-title">
            <a href="assets/pdf/cyclones_dms/Tauktae_pre and post images_17 May 2021.pdf" target="_blank">
              Pre and post scenario of rain induced inundation in part of Gujarat due to Tauktae cyclone
            </a>
          </div>
        </div>

      </div>
    </section>
  </main>
<?php include 'footer.php'; ?>
</body>
</html>
