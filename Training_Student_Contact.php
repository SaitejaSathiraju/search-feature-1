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

      .contact-section {
        font-size: 16px;
        line-height: 1.6;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
      }

      .contact-section a {
        color: #007BFF;
        text-decoration: none;
        word-break: break-word;
      }

      .contact-section a:hover {
        text-decoration: underline;
      }

      @media (max-width: 600px) {
        .contact-section {
          font-size: 14px;
          padding: 15px;
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

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      #addStyle{
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
                <b>Contact</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Contact-main" id="Contact-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Training_Student_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Contact</h3>
              <br>
              <div class="contact-section">
                <p id="myptag">
                  <strong>Group Director</strong>
                  <br /> Training, Education & Outreach Group (TEOG) <br> Head, Student Projects & Interface Division, TEOG
                </p>
                <p id="addStyle">
                  <strong>Students can query by email at:</strong>
                  <a href="mailto:&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> student[at]nrsc[dot]gov[dot]in </a>
                  <br>
                  <br />
                  <strong>Tel:</strong>
                  <a href="tel:04023884822">040-23884832</a> / <a href="tel:04023884806">4806</a> / <a href="tel:04023884808">4808</a> / <a href="tel:04023884801">4801</a>
                </p>
              </div>
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