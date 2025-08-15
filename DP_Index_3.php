<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Processing & Dissemination</title>
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
        /* text-align: justify; */
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

      .breadcrumb a {
        color: #0066cc;
        text-decoration: none;
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

      #myTable {
        width: 100%;
        border-collapse: collapse;
        font-size: 20px;
      }

      #myTable th,
      #myTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      /* Mobile card view */
      @media screen and (max-width: 768px) {
        #myTable {
          border: 0;
        }

        #myTable thead {
          display: none !important;
        }

        #myTable, 
        #myTable tbody, 
        #myTable tr, 
        #myTable td {
          display: block;
          width: 100%;
        }

        #myTable tr {
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 8px;
          padding: 10px;
          background: #fff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        #myTable td {
          text-align: left;
          padding: 8px 16px;
          position: relative;
          border: none;
          border-bottom: 1px solid #eee;
          word-wrap: break-word;
          white-space: normal;
        }

        #myTable td::before {
          content: attr(data-label);
          display: block;
          font-weight: bold;
          margin-bottom: 4px;
          color: #333;
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
                <h1 class="heading-title text-break text-center">Data Processing & Dissemination</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Organization</b>
                </a>
              </li>
              <li class="current">
                <b>About NRSC</b>
              </li>
              <li class="current">
                <a href="About_DPD.php">
                  <b>Data Processing & Dissemination</b>
                </a>
              </li>
              <li class="current">
                <b>Microwave</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="about-main" id="about-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_DPD_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <div class="section">
                <h3>Non-Imaging Sensors</h3>
                <br />
                <table id="myTable">
                  <thead>
                  <tr>
                    <th data-label="SNo">SNo</th>
                    <th data-label="Satellite / Sensor">Satellite / Sensor</th>
                    <th data-label="Resolution">Resolution</th>
                    <th data-label="Data Availability">Data Availability</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td data-label="SNo">1</td>
                    <td data-label="Satellite / Sensor">EOS-06 SCAT3 <br>Ku-band Scatterometer </td>
                    <td data-label="Resolution">25 km 12.5 km</td>
                    <td data-label="Data Availability">01-Apr-2023 - till date</td>
                  </tr>
                  <tr>
                    <td data-label="SNo">2</td>
                    <td data-label="Satellite / Sensor">Oceansat-2 SCAT <br>Ku-band Scatterometer </td>
                    <td data-label="Resolution">50 km 25 km</td>
                    <td data-label="Data Availability">01-DEC-2009 - till date</td>
                  </tr>
                  <tr>
                    <td data-label="SNo">3</td>
                    <td data-label="Satellite / Sensor">SCATSAT-1 <br>Ku band Scatterometer </td>
                    <td data-label="Resolution">50 km 25 km</td>
                    <td data-label="Data Availability"> 26-SEP-2016 - 31-DEC-2021 <br>
                      <a href="assets/img/india_missions/intimation to users regarding v1.1.4 on NRSC web site.pdf" target="_blank">SCATSAT-1 V1.1.4 data products</a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="SNo">4</td>
                    <td data-label="Satellite / Sensor">SARAL <br>Ka band radar altimeter </td>
                    <td data-label="Resolution" ></td>
                    <td data-label="Data Availability">01-NOV-2014 onwards</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <div class="pagination">
                <a href="DP_Index.php" onclick="localStorage.setItem('activeMenuItem', 'Microwave') ;loadPage('DP_Index.php', this)" class="page-link ">1</a>
                <a href="DP_Index_2.php" onclick="localStorage.setItem('activeMenuItem', 'Microwave') ;loadPage('DP_Index_2.php', this)" class="page-link ">2</a>
                <a href="#" onclick="loadPage('DP_Index_3.php', this)" class="page-link active">3</a>
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
  localStorage.setItem('activeMenuItem', 'Microwave');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

  function loadPage(pageUrl, element) {
    fetch(pageUrl).then(response => response.text()).then(data => {
      document.getElementById("main-content").innerHTML = data;
      // Update active class
      document.querySelectorAll(".page-link").forEach(el => el.classList.remove("active"));
      element.classList.add("active");
    });
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