<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Dissemination</title>
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

      #liststyle{
        font-size: 20px; margin-bottom: 15px; padding-left: 20px; position: relative;text-align:justify;
      }

      .listDiv{
        background-color: #f8f9fa; padding: 20px; border-radius: 8px; line-height: 1.6; max-width: 1000px; margin: 0 auto; box-shadow: 0 2px 4px rgba(53, 95, 122, 0.4);
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
                <h1 class="heading-title text-break text-center">Data Dissemination</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Services</b>
              </li>
              <li class="current">
                <b>Data Dissemination</b>
              </li>
              <li class="current">
                <b>Planning and Programming</b>
              </li>
              <li class="current">
                <b>Ordering and Dissemination</b>
              </li>
              <!-- <li class="current"><b>Price and Payments</b></li> -->
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="ASnDM-main" id="ASnDM-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'order_services_list.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> Licensing</h3>
              <br />
              <!-- <p id="p-style">NRSC grants only single user license for the use of IRS images. All products are sold for the sole use of purchasers and shall not be loaned, copied or exported without express permission of and only in accordance with terms and conditions if any, agreed with the NRSC Data Centre, National Remote Sensing Centre, ISRO, Dept. of Space, and Govt. of India. All data will be provided with encryptions/mechanisms, which may corrupt the data while copying unauthorised or while attempting the same. Every such attempt shall attract criminal and civil liability from the user without prejudice to the corruption of data or software/hardware, for which NRSC will not be liable.NRSC grants the user a limited, non-exclusive, non-transferable license with the following terms and conditions. <br>
                <Br>
                <b>Terms and Conditions</b>
              <div class="listDiv">
                <li id="liststyle"> User can install the product in his premises (including on an internal computer network) with the express exclusion of the Internet. </li>
                <li id="liststyle"> User can make copies of the product (for installation and back-up purposes). </li>
                <li id="liststyle"> User can use the product for his own internal needs. </li>
                <li id="liststyle"> User can use the product to produce Value Added Products and/or derivative works. </li>
                <li id="liststyle"> User can use any Value Added Product for his own internal needs. </li>
                <li id="liststyle"> User can make the product and/or any Value Added Product temporarily available to contractors and consultants, only for use on behalf of the user. </li>
                <li id="liststyle"> User can print and distribute or post on an Internet site, but with no possibility of downloading, an extract of a product or Value Added Product (maximum size 1024 x 1024 pixels) for promotional purposes (not including on-line mapping or geolocation services for on-line promotion), in each case with an appropriate credit conspicuously displayed. </li>
                </ul>
              </div>
              </p> -->
              <p id="p-style">The use of Bhoonidhi data requires acknowledgement of the general End User Licence Agreement( EULA) for the use and distribution of Bhoonidhi data.</p>
              <p id="p-style">Please refer: <a href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/htmls/TnC.html" style="font-size:20px;" target="_blank"> Bhoonidhi EULA <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" style="width:43px;height:17px;" />
                </a>
              </p>
            </section>
          </div>
        </div>
      </section>
    </main> <?php include 'footer.php'; ?>
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