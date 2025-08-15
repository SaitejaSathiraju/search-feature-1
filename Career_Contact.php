<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Careers Contact</title>
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
      .p-style p{
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
                <h1 class="heading-title text-break text-center">Career</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Careers</b>
              </li>
              <li class="current">
                <b>Contact</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="contact-main" id="contact-main"></div>
      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3> Recruitment Section </h3>
              <br />
              <p> Phone: 040-23884030 </p>
              <p> Email: <a href="mailto:&#114;&#101;&#99;&#114;&#117;&#105;&#116;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;" target="_blank">
				  recruit[at]nrsc[dot]gov[dot]in
				</a>

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
  </script>
</html>