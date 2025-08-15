<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Geo Physical Products</title>
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==">
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

      #p-style {
        font-size: 20px;
        text-align: justify;
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
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Geo Physical Products</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Data Products</b>
              </li>
              <li class="current">
                <b>Geo Physical Products</b>
                </a>
              </li>
              <li class="current">
                <b>Policy</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="data_products-main" id="data_products-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Dataproducts_geophysical_serviceslist.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Policy</h3>
              <br />
              <p id="p-style">By using the remote sensing data and products from this portal, user agrees that NRSC will not be liable for any direct or indirect loss arising from the use of the information. Adequate metadata, technical documents, methodology and accuracies and limitations are included for reference documents. While, sufficient care has been taken to provide and integrate information from various sources in a reliable manner for value addition in the map visualization, NRSC / ISRO does not hold any responsibility for any inadvertent errors, beyond its limitations. This portal has been compiled in good faith by NRSC, but no representation to be made or warranty given (either express or implied) as to the completeness or accuracy of the information it contains when comparing the datasets from some other sources. General information for the users is as follows : </p>
              <ol id="p-style">
                <li>User can use the product for his/her own internal needs and application;</li>
                <li>User can use the product to produce Value Added Products and/or derivative works;</li>
                <li>User can make the product and/or any Value Added Product as per their requirement use on behalf of the user;</li>
                <li>User shall indemnify NRSC for any loss,claims and conclusions drawn out of the direct use of the data or value added product generated using the data/service by them or by any other third party. NRSC disowns liability for issues that might emerge due to use of data for any commercial and/or legal purposes.</li>
                <li>The data and web service shall remain exclusive property of NRSC, ISRO. All the Copyrights are reserved with NRSC/ ISRO for data and web services.</li>
                <li>Users must invariably acknowledge the data and web service source and use. The source of the data and service will be cited as "Name of the Data", National Remote Sensing Centre, ISRO, Government of India, Hyderabad, India.</li>
                <li>Users are encouraged to provide their feedback on data and its uses through online.</li>
              </ol>
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
  </body>
</html>
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