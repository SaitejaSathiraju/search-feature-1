<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Satellite Ground Station Services</title>
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

      table td, tr, th {
        font-size: 20px;
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

      /* Responsive Card Style */
      @media (max-width: 768px) {
        table thead, table tfoot {
          display: none;
        }

        table, tbody, tr, td {
          display: block;
          width: 100%;
        }

        tr {
          margin-bottom: 1rem;
          border: 1px solid #ccc;
          border-radius: 8px;
          padding: 10px;
          background-color: #fff;
          box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        td {
          text-align: left;
          padding: 8px 12px;
          border: none;
          border-bottom: 1px solid #eee;
        }

        td:last-child {
          border-bottom: none;
        }

        td::before {
          content: attr(data-label);
          font-weight: bold;
          display: block;
          color: #3f68b5;
          margin-bottom: 4px;
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
                <h1 class="heading-title text-break text-center">Satellite Ground Station Services</h1>
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
                <b>Satellite Ground Station Services</b>
                </a>
              </li>
              <li class="current">
                <b> Specification</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="sgss-main" id="sgss-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Services_Satellite_Ground_Station_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> Specification</h3>
              <br>
              <p id="p-style"> Typical Ground Station specifications are as follows: </p>
              <table id="myTable" class="table table-hover table-striped-rows">
                <thead>
                  <tr>
                    <th>Parameters</th>
                    <th>Specifications</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Parameters">Main reflector size</td>
                    <td data-label="Specifications" colspan="2">7.5 M antenna</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Sub reflector size</td>
                    <td data-label="Specifications" colspan="2">0.736 meters shaped parabolic</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Mount</td>
                    <td data-label="Specifications" colspan="2">Elevation over Azimuth</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Tracking modes</td>
                    <td data-label="Specifications" colspan="2">X-autos-auto, Program Track</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">-</td>
                    <td data-label="X-band">X-band</td>
                    <td data-label="S-band">S-band</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Frequency of operation</td>
                    <td data-label="X-band">8.025 – 8.400 GHz</td>
                    <td data-label="S-band">2.2 – 2.3 GHz</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">G/T @ 5° elevation</td>
                    <td data-label="X-band">31.5 dB/°K</td>
                    <td data-label="S-band">17 dB/°K</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Polarization</td>
                    <td data-label="X-band">RHCP &amp; LHCP</td>
                    <td data-label="S-band">RHCP &amp; LHCP</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Antenna gain</td>
                    <td data-label="X-band">54.5 dB</td>
                    <td data-label="S-band">40 dB</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Beam width</td>
                    <td data-label="X-band">0.27°</td>
                    <td data-label="S-band">0.8°</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Tracking accuracy</td>
                    <td data-label="X-band">0.03°</td>
                    <td data-label="S-band">0.07°</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Maximum velocity</td>
                    <td data-label="Specifications" colspan="2">20°/sec for Azimuth, 10°/sec for Elevation</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Maximum acceleration</td>
                    <td data-label="Specifications" colspan="2">10°/sec² for Azimuth, 2°/sec² for Elevation</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Antenna travel limits</td>
                    <td data-label="Specifications" colspan="2">±380° for AZ, -1 to 180° for EL</td>
                  </tr>
                  <tr>
                    <td data-label="Parameters">Wind velocity</td>
                    <td data-label="Specifications" colspan="2">60 KMPH (operating), 200 KMPH (survival)</td>
                  </tr>
                </tbody>
              </table>

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