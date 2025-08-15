<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Campuses</title>
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
        height: auto;
        object-fit: contain;
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
        .addBox a{
          font-size: 15px;
        }

        .sidebar h3 {
          font-size: 16px !important;
        }
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      #addStyle {
        font-size: 18px;
        line-height: 1.6;
        margin: 0;
      }

      #addhead {
        margin-bottom: 10px;
      }

      .addBox {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
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
                <h1 class="heading-title text-break text-center">Campuses</h1>
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
                <b>Campuses</b>
              </li>
              <li class="current">
                <b>NRSC Regional centers </b>
              </li>
              <li class="current">
                <b>RRSC North </b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachOverview-main" id="OutreachOverview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_campuseslist.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>RRSC North</h3>
              <br>
              <p id="myptag"> Regional Remote Sensing Centre, North is located at New Delhi. This centre caters to the needs of users in the Northern states of India viz. UP, Uttarkhand, Himachal Pradesh, Jammu & Kashmir The centre also laisons and interfaces with various Ministries and Departments of Govt of India in New Delhi on need basis.</p>
              <br>
              <div class="addBox">
                <h5 id="addHead">
                  <b>Address:</b>
                </h5>
                <p id="addStyle">
                  <b>General Manager</b>
                  <br> Regional Remote Sensing Centre (RRSC) - North, <br> Indian Space Research Organisation, <br> Dept. of Space, Govt. of India, <br> Antariksh Bhavan, <br> Plot No.7, Planning Area Center, <br>Beside IOCL Office, <br> Sadiq Nagar, New Delhi 110 049 <br> Email : <a href="mailto:&#103;&#109;&#114;&#99;&#95;&#110;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> gmrc_n[at]nrsc[dot]gov[dot]in </a>
                </p>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>RRSC NORTH</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)">
                    <img src="./nrsc_images/about_campuses_north.png" alt="RRSC NORTH">
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
</html>
<script>
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