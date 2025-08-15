<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Outreach</title>
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
      }

      .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px auto;
      }

      .styled-image {
        max-width: 100%;
        height: auto;
        border: 5px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 123, 255, 0.6);
        /* blue glow */
        transition: transform 0.3s ease-in-out;
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      .styled-image:hover {
        transform: scale(1.02);
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
                <h1 class="heading-title text-break text-center">Outreach</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Training & Outreach</b>
              </li>
              <li class="current">
                <b>Outreach</b>
              </li>
              <li class="current">
                <b>Special Events</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachSE-main" id="OutreachSE-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Special Events - Awareness Days</h3>
              <br />
              <p id="myptag">
                <b>Environmental Festivals:</b> Sustaining Our Planet, Inspiring Action In the face of environmental challenges such as climate change, pollution, and biodiversity loss, environmental festivals serve as rallying points for environmental stewardship and conservation. Whether it's a tree planting initiative, Water day, Earth Day, these events raise awareness about environmental issues and inspire collective action towards sustainability. By engaging individuals, Students and Officials in dialogue and advocacy, environmental outreach events catalyse efforts to protect and preserve the planet for future generations.
              </p>
              <a href="#" onclick="openPDFPopup('assets/pdf/List of Special Events.pdf')" style="font-size:20px;">Click here for List of Special Events</a>
              <div class="image-container">
                <img src="assets/img/about/4_3.jpg" class="styled-image" alt="Special Events">
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
  <script>
    function openPDFPopup(url) {
      window.open(url, 'popupWindow', 'width=800,height=600,resizable=yes,scrollbars=yes');
    }
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