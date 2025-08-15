<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Brochures</title>
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

      #myptag {
        font-size: 20px;
        text-align: justify;
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

      .table {
        width: 100%;
        border-collapse: collapse;
        display: table;
        font-size: 20px;
      }

      .table thead {
        background-color: #777;
        color: white;
      }

      .table th,
      .table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
      }

      .table td a {
        text-decoration: none;
      }

      .table td a.blue {
        color: blue;
      }

      .table td a.red {
        color: #c0392b;
      }

      /* Card style for mobile */
      @media screen and (max-width: 768px) {

        .table,
        .table thead,
        .table tbody,
        .table th,
        .table td,
        .table tr {
          display: block;
        }

        .table thead {
          display: none;
        }

        .table tr {
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 10px;
          padding: 10px;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .table td {
          border: none;
          padding: 8px 10px;
          position: relative;
        }

        .table td::before {
          position: absolute;
          top: 8px;
          left: 10px;
          width: 45%;
          padding-right: 10px;
          white-space: nowrap;
          font-weight: bold;
          color: #555;
        }
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
                <h1 class="heading-title text-break text-center">Brochures</h1>
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
                <b>Brochures</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Brochures</h3>
              <br />
              <table class="table">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Brochures</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <a href="assets/pdf/brochures/Bhoonidhi_Brochure_2025.pdf">Bhoonidhi – ISRO’s Earth Observation Data Hub</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      <a href="assets/pdf/brochures/MOSDAC_2025.pdf">MOSDAC User Order Processing Software (UOPS)</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>
                      <a href="assets/pdf/brochures/VEDAS_2025.pdf">Visualisation of Earth Observatin Data & Arcival System (VEDAS)</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>
                      <a href="assets/pdf/brochures/Bhuvan-NG_2025.pdf">Bhuvan NextGen</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>
                      <a href="assets/pdf/brochures/NDEM_v5_brochure_lite.pdf">NDEM version 5.0</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Brochures');
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