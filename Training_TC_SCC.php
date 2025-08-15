<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Training</title>
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

      table {
        width: 100%;
        border-collapse: collapse;
        max-width: 600px;
        margin: auto;
      }

      table,
      th,
      td {
        font-size: 20px;
        font-weight: 500;
      }

      th,
      td {
        border: 1px solid #aaa;
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: #555;
        color: white;
        font-weight: bold;
      }

      td a {
        color: #0044cc;
        text-decoration: none;
      }

      .pdf-icon {
        width: 20px;
        vertical-align: middle;
      }

      .pdf-size {
        font-size: 12px;
        color: #555;
        margin-left: 5px;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #e0f7fa;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      @media (max-width: 600px) {

        table,
        th,
        td {
          font-size: 14px;
        }
      }
    </style>
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Training Courses</h1>
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
                <b>Training Courses</b>
              </li>
              <li class="current">
                <b>Summary of Courses Conducted</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TrainingCourses-main" id="TrainingCourses-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'TrainingAndOutreach_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Summary of Courses Conducted</h3>
              <br />
              <table>
                <thead>
                  <tr>
                    <th colspan="2">Document</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>List of Training Courses 2023 <span class="pdf-size">(203 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Courses_2023.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2022 <span class="pdf-size">(420 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Courses_2022.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2021 <span class="pdf-size">(423 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Courses_2021.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2020 <span class="pdf-size">(9 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Courses-2020.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2019 <span class="pdf-size">(11 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Courses-2019.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2018 <span class="pdf-size">(324 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Training Courses 2018.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>List of Training Courses 2017 </a>
                      <span class="pdf-size">(326 KB)</span>
                    </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Training Courses 2017.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
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