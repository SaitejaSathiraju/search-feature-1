<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Satellite Handbooks</title>
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

      @media (max-width: 768px) {
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

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .section img {
        float: left;
        margin-right: 15px;
        width: 190px;
        height: 190px;
        object-fit: cover;
      }

      .section p {
        text-align: justify;
        font-size: 20px;
      }

      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>

      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Satellite Handbooks</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>Satellite Handbooks</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
                <section class="col-md-9 col-lg-9">
                    <h3>Satellite Handbooks</h3><br>
                <p><a href="assets\pdf\handbooks\Resourcesat-1_Handbook.pdf" target="_blank">IRS-P6 Data User Manual</a></p>           
                <p><a href="assets\pdf\handbooks\Rs2_handbook.pdf" target="_blank">ResourceSat-2 Data Users' Handbook</a></p>           
                <p><a href="assets\pdf\handbooks\P5_data_user_handbook.pdf" target="_blank">Cartosat-1 Data Users' Handbook</a></p>      
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Satellite Handbooks');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

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