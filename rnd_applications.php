<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>R & D Activities</title>
    <!-- Styles and Scripts -->
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Custom Styles -->
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

        th,
        td {
          font-size: 12px;
          padding: 5px;
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

      table,
      th,
      td {
        border: 1px solid #ddd;
        font-size: 20px;
      }

      th,
      td {
        padding: 8px;
        text-align: justify;
      }

      th {
        background-color: #f4f4f4;
      }

      .pagination {
        justify-content: center;
        margin-top: 15px;
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 4%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 85%;
      }

      /* #myTable td:nth-child(3),
      #myTable th:nth-child(3) {
        width: 7%;
      }

      .pdf-icon {
        width: 25px;
        vertical-align: middle;
      }

      .pdf-size {
        font-size: 12px;
        color: #555;
        margin-left: 5px;
      } */
      @media (max-width: 576px) {
        .heading-title {
          font-size: 24px !important;
          text-align: center;
        }

        .container-fluid {
          padding: 0 10px;
        }

        /* .pdf-icon {
          width: 20px;
        } */

        table,
        th,
        td {
          font-size: 14px;
          word-break: break-word;
        }

         #myTable td:first-child,
          #myTable th:first-child {
            display: none;
          }
      }
    </style>
  </head>
  <body>
    <main id="main-content" class="main" role="main">
      <!-- Header -->
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">R & D Activities</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- Breadcrumb -->
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>R & D Activities</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- Content Section -->
      <div data-skip-id="APPLICATIONS-main" id="APPLICATIONS-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <!-- Mobile Menu Toggle -->
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_rnd_Services_List.php'; ?> </aside>
            <!-- Main Table Section -->
            <section class="col-md-9 col-lg-9">
              <h3>Applications</h3>
              <?php include 'rnd_applications_table.php' ?>
            </section>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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
  </body>
</html>