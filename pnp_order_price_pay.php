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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'order_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Price and Payments</h3>
              <br />
              <!-- <p id="p-style">For detailed price list, please visit <a href="assets/pdf/Price List-2022.pdf" target="_blank"> Price list</a>. <br>
                <Br> Price list indicates, the product no, product type, accuracy, price etc., Indicate the Satellite and product no details in the order form. Please ensure the correct product type is chosen. For further details, please contact Data Acquisition Planning & Outreach Group.The price applicable to each order is the price in effect on the date of confirmation of the order with Data Acquisition Planning & Outreach Group. Data Acquisition Planning & Outreach Group publishes a price list of data products at periodic intervals. <br>
                <Br>
                <b>Discounts</b>
              <ol id="p-style">
                <li>50% discount on respective user category pricing for archived data older than 2 years from the date of acquisition.</li>
                <li>50% discount for the data less than two years old for academic and research purpose.</li>
                <li>@ 3% for orders more than Rs. 10.0 lakhs</li>
                <li>@ 5% for orders more than Rs. 25.0 lakhs</li>
                <li>@ 10% for orders more than Rs. 1.00 crore placed at a time for IRS products. </li>
              </ol>
              </p>
              <br>
              <p id="p-style">
                <b>Priority Services</b>
              </p>
              <p id="p-style">The provision for supply of satellite data within 24 hours (1 day) with additional charge @ 50% is available. Priority orders must be received at Data Acquisition Planning & Outreach Group before 11 AM on a working day. In case the order is accepted and could not be shipped within 16 hours, no additional charges will be levied. </p> -->
              <p id="p-style"> The prices for data products finer than 5m GSD can be referred from the below: 
                <ol id="p-style">
                  <li> <a href="assets/price1.png" target="_blank"> Price List 1 </a></li>
                  <li> <a href="assets/price2.png" target="_blank"> Price List 2 </a></li>
                </ol>
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