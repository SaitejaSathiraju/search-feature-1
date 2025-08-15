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

      .box-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .contact-box {
        background: linear-gradient(to bottom, #ffe9f5, #d2c7ff);
        border-radius: 10px;
        padding: 20px;
        width: 440px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
      }

      .contact-box:hover {
        transform: translateY(-5px);
      }

      .contact-box strong {
        display: block;
        font-size: 16px;
        margin-bottom: 8px;
      }

      .contact-box p {
        margin: 5px 0;
        line-height: 1.4;
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
                <b>Contact</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="CONTACT-main" id="CONTACT-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Respond_Projects_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Contact</h3>
              <br />
              <div class="box-container">
                <div class="contact-box">
                  <strong style="font-size: 22px;">Respond Co-ordinator, PPEG</strong>
                  <p>National Remote Sensing Centre, <br> Indian Space Research Organisation, <br> Dept. of Space, Govt. Of India, <br> Balanagar, Hyderabad - 500037, <br> Telangana <br>
                    <br> Tel: 040 23884017 <br> E-mail: respond[at]nrsc[dot]gov[dot]in
                  </p>
                </div>
                <div class="contact-box">
                  <strong style="font-size: 22px;">Associate Director, RESPOND & Academic Interface</strong>
                  <p>Capacity Building & Public Outreach (CBPO) <br> Indian Space Research Organisation HQ, <br> Department of Space, <br> Government of India, <br> Antariksh Bhavan, <br> New BEL Road, <br> Bangalore 560094 <br>
                    <br> E-mail: respond[at]isro[dot]gov[dot]in
                  </p>
                </div>
                <div class="contact-box">
                  <strong style="font-size: 22px;">Coordinator, Academic Collaboration</strong>
                  <p>Capacity Building & Public Outreach (CBPO) <br> Indian Space Research Organisation HQ, <br> Department of Space, <br> Government of India, <br> Antariksh Bhavan, <br> New BEL Road, <br> Bangalore 560094 <br>
                    <br> E-mail: academic[at]isro[dot]gov[dot]in
                  </p>
                </div>
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