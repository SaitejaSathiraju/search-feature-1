<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Respond Projects</title>
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

      .card {
        background-color: #fefefe;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
        height: 100%;
      }

      .card h4 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #3f68b5;
      }

      .timeline {
        display: flex;
        justify-content: space-between;
        margin: 40px 0;
        flex-wrap: wrap;
      }

      .timeline-step {
        flex: 1;
        text-align: center;
        position: relative;
        padding: 10px 20px;
        font-weight: bold;
        color: #3f68b5;
        font-size: 18px;
      }

      .timeline-step span {
        display: block;
        margin: 0 auto 10px;
        font-size: 24px;
        background: #3f68b5;
        color: white;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
      }

      .notice-section {
        text-align: center;
        margin-top: 50px;
      }

      .btn-primary {
        background-color: #3f68b5;
        border: none;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 6px;
        color: #fff;
        text-decoration: none;
      }

      .btn-primary:hover {
        background-color: #2e4c94;
        color: #fff;
      }

      @media (max-width: 768px) {
        .timeline-step {
          flex: 100%;
          margin-bottom: 20px;
        }

        .hero-banner h1 {
          font-size: 32px;
        }

        .hero-banner p {
          font-size: 16px;
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
                <h1 class="heading-title text-break text-center">Respond Projects</h1>
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
                <b>Respond Projects</b>
              </li>
              <li class="current">
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Overview-main" id="Overview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Respond_Projects_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Overview</h3>
              <br />
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <h4>
                      <i class="bi bi-lightbulb-fill"></i> About RESPOND
                    </h4>
                    <p id="myptag">ISRO’s initiative to promote space research by funding academic institutions for R&D in space science, technology, and applications.</p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <h4>
                      <i class="bi bi-people-fill"></i> Objective
                    </h4>
                    <p id="myptag">Build strong academia-ISRO collaborations and develop research output relevant to future missions and challenges.</p>
                  </div>
                </div>
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <h4>
                      <i class="bi bi-gear-fill"></i> Programme Highlights
                    </h4>
                    <p id="myptag">RESPOND supports projects taken up by Universities/Academic Institutions in India in areas aligned with ISRO’s mission. It provides financial, technical support and fellowship opportunities for meaningful research.</p>
                  </div>
                </div>
              </div>
              <!-- Timeline Process -->
              <h3>How RESPOND Works</h3>
              <div class="timeline">
                <div class="timeline-step">
                  <span>01</span>Proposal Submission
                </div>
                <div class="timeline-step">
                  <span>02</span>Evaluation
                </div>
                <div class="timeline-step">
                  <span>03</span>Approval
                </div>
                <div class="timeline-step">
                  <span>04</span>Funding & Execution
                </div>
              </div>
              <!-- Paragraphs -->
              <p id="myptag"> ISRO started the RESPOND (Sponsored Research) programme in the 1970s to encourage academic institutions to contribute to space research. Under RESPOND, projects are taken up by Indian Universities/Academic Institutions in areas relevant to the Space Programme. </p>
              <p id="myptag"> This flagship programme offers financial and technical support to academia to build capacity in Space Science, Technology, and Applications. A detailed list of R&D areas is published annually to help institutes submit proposals aligned with ISRO’s goals. </p>
              <p id="myptag"> The programme is mutually beneficial, leveraging academia's talent to supplement ISRO's missions, while also strengthening infrastructure and research capabilities across institutions. </p>
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