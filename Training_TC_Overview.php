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

      #myPTag{
        text-align:justify; font-size:20px;
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
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="training-main" id="training-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'TrainingAndOutreach_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Overview</h3>
              <br />
              <p id="myPTag"> The Training Planning & Coordination Division at NRSC offers a range of training courses focused on Geospatial Technologies and Applications for the user community. The division organizes a variety of training courses, workshops, and webinars tailored to different user needs, focusing on capacity building and promoting geospatial solutions. Customized training programs are also conducted to build institutional capacity under national initiatives such as NHP and ISRO DMSP, aimed at officials from Central and State Government Departments. Additionally, webinar-based training sessions, such as the ‘Bhuvan Overview,’ are organized to encourage the use of the Bhuvan Geoportal, enabling users to access web-based geospatial products and services for the Indian region. These initiatives collectively aim to advance the effective utilization of geospatial data for operational workflows, scientific research, and application projects. <br />
                <br />
                <b>Why Geospatial Technology?</b>
                <br /> Geospatial technologies, including Remote Sensing, GIS, Positioning, and Geo-web information services, have become essential for implementing advanced spatial information systems. These tools facilitate the development of methodologies for capturing, retrieving, analyzing, and interpreting both spatial and non-spatial data. Globally, geospatial technologies play a crucial role in empowering decision-makers to harness spatial data effectively for natural resource management, disaster mitigation, governance, and sustainable development initiatives. <br />
                <br />
                <b>Courses Offered:</b> Special, Theme-oriented and customized courses are organized towards capacity building of user community for optimal use of space inputs for various applications in about 20 courses and training around 500 officials / academic scholars per year. Kindly see the table for more details. <br />
                <br />
                <b>User Community:</b> Professionals from various Government / Industry / Autonomous / NGOs; Faculty and Researchers from Academic Institutions working in the domain of Geospatial Technologies and its applications can apply for training.
              </p>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
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
</script></html>