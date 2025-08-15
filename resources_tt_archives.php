<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Technolgy Transfers</title>
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

      @media (max-width: 768px) {
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

      table,
      th,
      td {
        border: 1px solid #ddd;
        font-size: 20px;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f4f4f4;
      }

      .pagination {
        justify-content: center;
        margin-top: 15px;
      }

      #myTable td:nth-child(1),
      #myTable th:nth-child(1) {
        width: 10%;
      }

      /* Responsive style for mobile view */
      @media (max-width: 576px) {

        th,
        td {
          font-size: 12px;
          padding: 5px;
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
                <h1 class="heading-title text-break text-center">Technology Transfers</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>Technology Transfers</b>
              </li>
              <li class="current">
                <b>Archives</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TTArchives-main" id="TTArchives-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_technologyTransfer_ServiceList.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Technolgy Transfers - Archives</h3>
              <br />
              <input type="text" id="searchInput" class="form-control" placeholder="Search..." style="margin-bottom: 20px;">
              <table id="myTable" class="table table-hover  table-striped-rows">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name of the Invention</th>
                    <th>Focal Person</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2.7 M. Dia Antenna Reflector assembly with X-band feed</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dual polarized S &amp; X Band Mono pulse Feed for Tracking LEO Satellites. <a class="link" href="./assets/pdf/techtransfer/archives/DualPolarized.pdf" target="_blank">Download Report »</a>
                    </td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>S/X/Ka-Band 7.5 Mtr Ground Station System(Data reception &amp; Tracking ) for LEO Satellites</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>7.5 M Tri axis Antenna control Servo system for LEO satellite tracking</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Design &amp; Development of FPGA based Digital Demodulator. <a class="link" href="./assets/pdf/techtransfer/archives/fpga.pdf" target="_blank">Download Report »</a>
                    </td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Programmable IF Matrix. <a class="link" href="./assets/pdf/techtransfer/archives/pIF.pdf" target="_blank">Download Report »</a>
                    </td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Detection of Landslides from High Resolution Optical Satellite Data. <a class="link" href="./assets/pdf/techtransfer/archives/Detection_of_landslides_from_high_resolution_optical_satellite_data_1.pdf" target="_blank">Download Report »</a>
                    </td>
                    <td>DD, RSAA</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>The Message driven method and system for optimal management of dynamic production workflow in a distributed environment.</td>
                    <td>DD, MSA</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>S/X-Band 7.5 Mtr Ground Station System (Data reception &amp; Tracking ) for LEO Satellites</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>7.5 M Triband (S,X,Ka) Antenna Feed and RF Systems for LEO satellite tracking and Payload Data reception.</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Azimuth &amp; Train axes Light Weight Encoder assembly(5:1)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Azimuth Axis Light weight Torque limiting Coupling for three axis Antenna systems (32G-28M)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Azimuth Axis Light Weight Limit switch assembly (GR 14:1)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Train &amp; Elevation Axes Light weight Torque limiting Coupling (32G-24M)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Light Weight Limit switch assembly Elevation Axis (GR 5:1)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>32X32 High Speed Differential Digital Switch Matrix</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>IRIG-G Time Code Translator</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Satellite data Processing &amp; Acquisition Reconfigurable Card (SPARC)</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Portable Data Serializer</td>
                    <td>DD, SDR&amp;ISA</td>
                  </tr>
                </tbody>
              </table>
              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  let currentPage = 1;
  const rowsPerPage = 7;
  const rows = Array.from(document.querySelectorAll("#myTable tbody tr"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput");

  let filteredRows = rows; // Start with all rows

  function rowMatchesSearch(row) {
    const searchTerm = searchInput.value.toLowerCase();
    return Array.from(row.querySelectorAll("td")).some(cell =>
      cell.textContent.toLowerCase().includes(searchTerm)
    );
  }

  function changePage(page) {
    currentPage = page;
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    rows.forEach(row => row.style.display = "none"); // Hide all rows first

    filteredRows.slice(start, end).forEach(row => {
      row.style.display = "";
    });

    const pageLinks = pagination.querySelectorAll(".page-item");
    pageLinks.forEach((li, i) => {
      li.classList.toggle("active", i === page - 1);
    });
  }

  function setupPagination() {
    pagination.innerHTML = "";

    const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
    for (let i = 1; i <= pageCount; i++) {
      const li = document.createElement("li");
      li.className = "page-item";
      const a = document.createElement("a");
      a.className = "page-link";
      a.href = "#";
      a.textContent = i;
      a.addEventListener("click", (e) => {
        e.preventDefault();
        changePage(i);
      });
      li.appendChild(a);
      pagination.appendChild(li);
    }

    changePage(1); // Reset to first page
  }

  // Triggered on search
  searchInput.addEventListener("input", () => {
    filteredRows = rows.filter(row => rowMatchesSearch(row));
    setupPagination();
  });

  // Initialize
  document.addEventListener("DOMContentLoaded", () => {
    filteredRows = rows; // Initially show all
    setupPagination();

    // Optional menu toggle behavior
    const menuBtn = document.getElementById("menuToggleBtn");
    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
