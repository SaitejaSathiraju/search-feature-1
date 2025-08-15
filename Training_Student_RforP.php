<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Student Projects/Internships</title>
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
                <h1 class="heading-title text-break text-center">Student Projects/Internships</h1>
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
                <b>Student Projects/Internships</b>
              </li>
              <li class="current">
                <b>Request for Project</b>
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
 aria-label="Course Navigation"> <?php include 'Training_Student_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Request for Project</h3>
              <br />
              <h4>Where to apply?</h4>
              <p id="myptag"> For pursuing student project work at NRSC, students can apply by email at: student[at]nrsc[dot]gov[dot]in. They should clearly mention the duration and the start time of the project in the email and attach soft copy of the documents mentioned below.</p>
              <h4>Documents to be submitted</h4>
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Request letter from the Head of Dept./Principal/Placement officer of the college(CollegeAbbreviation_Studentname_Branch.pdf) also mentioning duration of the project, with start and end dates. The letter of recommendation should be addressed to ‘Incharge, Training, Education and Outreach Group, NRSC'
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> CV / biodata/ resume which includes marks obtained from Xth class onwards (Studentname_Cv.pdf)
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Copies of mark sheets (Studentname_X, Studentname_XII, Studentname_ undergrad and any other relevant document)
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i>Copy of the latest marks sheet of current completed year (Studentname_degree)
                </li>
              </ul>
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