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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/all.min.css" />
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
		
        .sidebar h3 {
          font-size: 18px !important;
        }
      }

      .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px auto;
      }

      .styled-image {
        max-width: 70%;
        border: 5px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 123, 255, 0.6);
        transition: transform 0.3s ease-in-out;
      }

      .styled-image:hover {
        transform: scale(1.02);
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      .highlight-box {
        background-color: rgba(63, 104, 181, 0.1);
        border-left: 4px solid var(--secondary-color);
        padding: 20px;
        margin: 25px 0;
        border-radius: 0 5px 5px 0;
      }

      .css-icon {
      display: inline-block;
      width: 1.2em;
      height: 1.2em;
      margin-right: 10px;
      position: relative;
      flex-shrink: 0;
    }
    
    /* Map Marker Icon */
    .css-icon.map::before {
      content: "";
      position: absolute;
      width: 0.8em;
      height: 0.8em;
      border-radius: 50%;
      border: 0.15em solid var(--accent-color);
      top: 0;
      left: 0.2em;
    }
    
    .css-icon.map::after {
      content: "";
      position: absolute;
      width: 0.2em;
      height: 0.5em;
      background: var(--accent-color);
      bottom: 0;
      left: 0.5em;
      border-radius: 0 0 2px 2px;
    }
    
    /* Handshake Icon (for Partnerships) */
    .css-icon.handshake::before {
      content: "🤝";
      font-size: 1.2em;
      line-height: 1;
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
                <b>Space on Wheels</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachSnW-main" id="OutreachSnW-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Space on Wheels</h3>
              <br />
              <p id="myptag">Space on Wheels is our innovative mobile outreach program that brings the wonders of space science directly to communities across India. Specially designed to reach remote areas and government schools, this initiative demonstrates satellite technology, launch vehicles, and space exploration concepts through interactive exhibits and engaging presentations.</p>
              <div class="highlight-box">
                <p id="myptag">
                  <span class="css-icon map"></span>
                  <span>
                    <strong>Journey:</strong> Travels throughout India, with special focus on regions with limited access to science education
                  </span>
                </p>
                <p id="myptag">
                  <span class="css-icon handshake"></span>
                  <span>
                    <strong>Partnerships:</strong> Collaborates with schools, colleges, and institutions through formal MOUs
                  </span>
                </p>
              </div>
              <div class="image-container text-center my-4">
                <img src="assets/img/about/5_1.jpg" class="styled-image" alt="Space on Wheels Mobile Unit">
              </div>
              <h4>Program Highlights</h4>
              <ol class="icon-list" id="myptag">
                <li>Interactive demonstrations of satellite technology</li>
                <li>Scale models of launch vehicles</li>
                <li>Virtual reality space experiences</li>
                <li>Hands-on activities for students</li>
                <li>Career guidance in space sciences</li>
              </ol>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>SPACE ON WHEELS</h3>
                <div class="image-gallery">
                  <div class="image-item">
                    <img data-entity-type="file" src="assets/img/about/6.jpg" alt="Space on Wheels" />
                  </div>
                  <div class="image-item">
                    <img data-entity-type="file" src="assets/img/about/7.jpg" alt="Space on Wheels" />
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