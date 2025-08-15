<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Achievement & Awards</title>
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

      .main-content {
        flex: 1;
        min-width: 60%;
        padding-right: 30px;
      }

      /* .sidebar {
        width: 450px;
        margin-left: auto;
      } */
      .sidebar h3 {
        color: #003366;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 0;
      }

      .image-gallery {
        margin-top: 20px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .image-item {
        position: relative;
      }

      .image-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .image-overlay {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 8px 12px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        width: calc(100% - 24px);
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

        .sidebar {
          /* width: 100%;
          margin-left: 0; */
          order: 3;
          margin-top: 20px;
        }

        .sidebar img {
          width: 100%;
          height: 100%;
        }

        .sidebar h3 {
          font-size: 16px !important;
        }
      }

      #myptag {
        text-align: justify;
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
                <h1 class="heading-title text-break text-center">Achievement & Awards</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Achievement & Awards</b>
              </li>
              <li class="current">
                <b>Year 2023</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_awardlist.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Geospatial Excellence Award 2023</h3>
              <br />
              <p id="myptag"> National Database for Emergency Management (NDEM) of National Remote Sensing Centre (NRSC), ISRO receives Geospatial Excellence Award 2023. <a href="./nrsc_images/about_AandA_2023VD1.pdf" download  target="_blank">
                  <b>View Details</b>
                </a>
              </p>
              <hr>
              <h3>2023 Asia-Pacific Region Excellence in Space award</h3>
              <br />
              <p id="myptag"> Dr. Prakash Chauhan, Director NRSC has been conferred with the "2023 Asia-Pacific Region Excellence in Space award" on 22nd September 2023 during the Awards Ceremony of 29th Session of Asia-Pacific Regional Space Agency Forum (APRSAF-29) organized at Jakarta, Indonesia. </p>
              <hr>
              <h3>NRSC bags ESRI SAG Award 2023</h3>
              <br>
              <p id="myptag"> ESRI organizes annual User Conference every year and gives Special Achievement in GIS (SAG) award to recognize outstanding work with GIS technology. This year during the plenary session on 10 July 2023, Jack Dangermond, president and founder of ESRI, selected and announced the SAG awards during ESRI user conference (July 10-14, 2023). National Remote Sensing Centre (NRSC) bagged the SAG award from India for the year 2023. <a href="./nrsc_images/about_AandA_2023VD2.pdf" download  target="_blank">
                  <b> View Details</b>
                </a>
              </p>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>AWARDS</h3>
                <div class="image-gallery">
                  <div class="image-item">
                    <img src="./nrsc_images/about_AandA_2023[1].jpg" alt="Award Image 1">
                  </div>
                  <div class="image-item">
                    <img src="./nrsc_images/about_AandA_2023[2].jpg" alt="Award Image 2">
                  </div>
                  <div class="image-item">
                    <img src="./nrsc_images/about_AandA_2023[3].jpg" alt="Award Image 3">
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html><script>
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