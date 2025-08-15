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
              <!-- <li class="current"><b>Who Can Buy IRS Data</b></li> -->
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
              <h3> Who Can Buy IRS Data</h3>
              <br />
              <!-- <p id="p-style">IRS data will be made available to all users for various developmental and application requirements as per RSDP policy. The following are the guidelines for data dissemination.</p>
              <ol id="p-style">
                <li> All data of resolutions up to 1 m shall be distributed on a non discriminatory basis and on "as requested basis". </li>
                <li> Data better than 1m resolution can be distributed to users after screening and ensuring the sensitive areas is excluded. </li>
                <li> Data better than 1m resolution will be supplied as per RSDP policy. Government users can obtain the data without any further clearance. Public sector undertakings / autonomous bodies / academic institutions/Private users, recommended by at least one Government agency, can obtain data without any further clearance. </li>
                <li> Request for data from all users must be received in the prescribed form duly authorized by the head of the organisation that shall be responsible to state the end application and identify a senior official for safe keeping of the data. </li>
              </ol> -->
              <p id="p-style">IRS data will be made available to all 
                <a href="Data_Products_users.php" target="_blank" id="p-style"><b>Users</b></a> for various developmental and application requirements as per <a href="assets/pdf/Indian Space Policy 2023.pdf" target="_blank">Indian Space Policy 2023</a>. </p>
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