<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIGILANCE ADMINISTRATION Overview</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Skip Link CSS for Accessibility -->
    <style>
      .heading-title {
        word-break: break-word;
      }

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }
      }

      .container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
        box-shadow: 0 0 10px #ccc;
        border-radius: 10px;
      }

      .logo {
        display: block;
        max-width: 150px;
        margin: 0 auto 20px;
      }

      .notice {
        font-size: 20px;
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
      }

      .contacts {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        align-items: flex-start;
      }

      .contact-card {
        flex: 1 1 300px;
        background: #f8f8f8;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      }

      .or {
        align-self: center;
        font-weight: bold;
        font-size: 20px;
      }

      @media (max-width: 600px) {
        .contacts {
          flex-direction: column;
          align-items: stretch;
        }

        .or {
          text-align: center;
          margin: 10px 0;
        }

        .logo {
          max-width: 100px;
        }
      }
    </style>
  </head>
  <body>
    <main id="main-content" class="main" role="main">
      <!-- Page Header -->
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">VIGILANCE ADMINISTRATION</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- End Header -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <div class="container">
              <img src="assets/img/footer/isro.png" alt="ISRO Logo" class="logo" />
              <p class="notice"> In case of demands of bribe and any other information regarding corrupt activities of officials by Department of Space / National Remote Sensing Centre, Hyderabad, please send complaint to </p>
              <div class="contacts">
                <div class="contact-card">
                  <p>
                    <strong>Smt. Sandhya Venugopal Sharma</strong>
                    <br /> Chief Vigilance Officer <br /> Department of Space <br /> Antariksh Bhavan <br /> New BEL Road <br /> Bengaluru – 560231
                  </p>
                  <p>Tel.: 080-22172303 <br /> Fax No.: 080-23511829 <br /> Email : <a href="mailto:%73%61%6E%64%68%79%61%76%73%40%69%73%72%6F%2E%67%6F%76%2E%69%6E">sandhyavs[at]isro[dot]gov[dot]in</a>
                  </p>
                </div>
                <div class="or">OR</div>
                <div class="contact-card">
                  <p>
                    <strong>Ankur Srivastava</strong>
                    <br /> Vigilance Officer <br /> National Remote Sensing Centre <br /> Government of India <br /> Department of Space <br /> Balanagar, Hyderabad – 500037
                  </p>
                  <p>Tel. No.: 040-23884005 <br /> Fax No.: 040-23878788 <br /> Email : <a href="mailto:%63%6F%6E%74%72%6F%6C%6C%65%72%40%6E%72%73%63%2E%67%6F%76%2E%69%6E">controller[at]nrsc[dot]gov[dot]in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>