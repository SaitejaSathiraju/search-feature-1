<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tenders</title>
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

        #li-font {
          font-size: 16px;
        }

        .tender-point p,
        .tender-point li {
          font-size: 16px !important;
        }

        .tender-point i {
          font-size: 1.2rem;
        }
      }

      .external-link {
        color: #3f68b5;
        text-decoration: underline;
      }

      .external-link:hover {
        color: #2c4a8a;
      }

      .list-unstyled li {
        padding-bottom: 0.5rem;
      }

      #symbol {
        font-size: 1.5rem;
      }

      #li-font {
        font-size: 18px;
      }

      #p-style {
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
                <h1 class="heading-title text-break text-center">Tenders</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Tenders</b>
              </li>
              <li class="current">
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TendersOverview-main" id="TendersOverview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Tenders_Services_List.php'; ?> </aside>
            <section class="col-12 col-md-9">
              <h3 class="mb-4">Overview</h3>
              <div class="tender-point mb-4 d-flex">
                <div class="me-3 text-primary">
                  <i class="bi bi-file-earmark-text-fill"></i>
                </div>
                <div>
                  <p class="mb-0" id="p-style"> The E-Tenders are released in <a href="https://eproc.isro.gov.in/home.html" class="external-link fw-bold" id="p-style" onclick="return confirmRedirect('ISRO e-procurement portal')" target="_blank" rel="noopener noreferrer">ISRO e-procurement portal</a>. </p>
                </div>
              </div>
              <div class="tender-point mb-4 d-flex">
                <div class="me-3 text-primary">
                  <i class="bi bi-journal-text"></i>
                </div>
                <div>
                  <p class="mb-0" id="p-style">Detailed guidelines for submission of the bids are mentioned in the portal.</p>
                </div>
              </div>
              <div class="tender-point mb-4 d-flex">
                <div class="me-3 text-primary">
                  <i class="bi bi-credit-card-2-front"></i>
                </div>
                <div>
                  <p class="mb-0" id="p-style">Tender fees and EMD is not applicable for E-Tenders.</p>
                </div>
              </div>
              <div class="tender-point d-flex flex-column flex-sm-row">
                <div class="me-3 text-primary mb-2 mb-sm-0">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div>
                  <h5 class="mb-3">For any queries kindly contact:</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2" id="li-font">
                      <i class="bi bi-envelope me-2"></i>
                      <b>Email: &nbsp;</b>
                      <a href="mailto:&#101;&#112;&#114;&#111;&#99;&#64;&#118;&#115;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;">eproc[at]vssc[dot]gov[dot]in</a>
                    </li>
                    <li class="mb-2" id="li-font">
                      <i class="bi bi-telephone me-2"></i>
                      <b>Contact Nos: &nbsp;</b> +91 471 2565454 / 4162
                    </li>
                    <li class="mb-2" id="li-font">
                      <i class="bi bi-person-lines-fill me-2"></i>
                      <b>Profile related enquiries:&nbsp; </b> +91 471 2562527
                    </li>
                    <li id="li-font">
                      <i class="bi bi-box-arrow-up-right me-2"></i> All vendors are encouraged to register themselves on &nbsp; <a href="https://gem.gov.in" class="external-link fw-bold" onclick="return confirmRedirect('Government E-market Place (GeM) portal')" target="_blank" rel="noopener noreferrer">Government E-market Place (GeM)</a> &nbsp;portal
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  function confirmRedirect(siteName) {
    const message = `You are being redirected to ${siteName}.\n\n` + `• This will open in a new window\n` + `• Proceed only if you agree`;
    return confirm(message);
  }
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