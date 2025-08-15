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
		
        .sidebar h3{
          font-size:16px !important;
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
                <b>Overview</b>
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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Overview</h3>
              <br />
              <p id="myptag">The NRSC (National Remote Sensing Centre) Outreach Facility serves as a crucial platform for disseminating knowledge, expertise, and resources related to remote sensing technology and its applications. Here's an overview: <br />
              <ol id="myptag">
                <li>
                  <b>Mission:</b> The primary mission of the NRSC Outreach Facility is to bridge the gap between Space and remote sensing technology and end-users by providing Lectures, Videos, Exhibits and VGS.
                </li>
                <li>
                  <b>Capacity Building:</b> Through its outreach initiatives, the NRSC aims to build the capacity of individuals and organizations to effectively harness remote sensing technology for decision-making, policy formulation, and sustainable development initiatives.
                </li>
                <li>
                  <b>Collaboration and Networking:</b> The NRSC Outreach Facility collaborates with national partners, including private space agencies, research institutions, colleges, schools and NGOs, to promote knowledge sharing, collaborative research, and the exchange of best practices in remote sensing applications.
                </li>
                <li>
                  <b>Public Awareness:</b> In addition to professional training and capacity building activities, the facility also engages in public outreach and awareness campaigns to promote the understanding and appreciation of Space and remote sensing technology among the general public. This may include organizing exhibitions, public lectures, and educational programs targeting schools and community groups.
                </li>
              </ol>
              </p>
              <p id="myptag">Overall, the NRSC Outreach Facility plays a vital role in promoting the widespread adoption and effective utilization of Space and Remote sensing technology for addressing societal challenges and fostering sustainable development. </p>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>OUTREACH OVERVIEW</h3>
                <div class="image-gallery">
                  <div class="image-item" >
                    <img data-entity-type="file" src="assets/img/about/p1.jfif" />
                  </div>
                  <div class="image-item" >
                    <img data-entity-type="file" src="assets/img/about/p4.jpg" />
                  </div>
                  <div class="image-item" >
                    <img data-entity-type="file" src="assets/img/about/p5.jpg" />
                  </div>
                  <div class="image-item" >
                    <img data-entity-type="file" src="assets/img/about/p7.jpg" />
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