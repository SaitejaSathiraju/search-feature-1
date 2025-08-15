<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Careers Old Qn Papers</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      .container li {
        font-size: 24px;
        color: #3f68b5
      }

      .heading-title {
        word-break: break-word
      }

      @media (max-width:576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important
        }

        .container li {
          font-size: 18px !important
        }
      }

      .p-style p {
        font-size: 20px
      }

      table,
      td,
      th {
        border: 1px solid #ddd;
        font-size: 20px
      }

      td,
      th {
        padding: 8px;
        text-align: left
      }

      th {
        background-color: #f4f4f4
      }

      .pagination {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15px;
        padding-left: 0;
        list-style: none
      }

      .pagination li {
        margin: 0 2px
      }

      .pagination a,
      .pagination span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 32px;
        height: 32px;
        padding: 0 6px;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        color: #007bff;
        text-decoration: none;
        font-size: 14px
      }

      .pagination a:hover {
        background-color: #e9ecef
      }

      .pagination .active span {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff
      }

      .pagination .disabled span {
        color: #6c757d;
        pointer-events: none
      }

      @media (max-width:576px) {
        .pagination li {
          margin: 2px
        }

        .pagination a,
        .pagination span {
          min-width: 28px;
          height: 28px;
          font-size: 12px;
          padding: 0 4px
        }
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 40%
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 30%
      }

      .form-control {
        margin-bottom: 20px
      }

      #Image21 {
        width: 43px;
        height: 17px
      }

      @media (max-width:576px) {
        .table-responsive {
          margin-bottom: 20px
        }

        #myTable {
          width: 100%;
          border-collapse: collapse;
        }
        
        /* Convert rows to cards */
        #myTable tr {
          display: block;
          margin-bottom: 15px;
          border: 1px solid #ddd;
          border-radius: 8px;
          padding: 12px;
          background: white;
          box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          overflow: hidden;
          font-size: 16px !important;
        }

        #myTable td {
          padding: 10px;
          border-bottom: 1px solid #eee;
          text-align: left;
          word-break: break-word;
          font-size: 16px !important;
        }
        
        /* Add labels before content */
        #myTable td:first-child::before {
          content: "Post Name: ";
          font-weight: bold;
          margin-right: 5px;
        }
        
        #myTable td:last-child::before {
          content: "Year: ";
          font-weight: bold;
          margin-right: 5px;
        }
        
        #myTable thead {
          display: none;
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
                <h1 class="heading-title text-break text-center">Career</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Career</b>
              </li>
              <li class="current">
                <b>Old Question Papers</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="oldQnPaper-main" id="oldQnPaper-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3>Previous Question Papers</h3>
              <br>
              <div class="table-responsive-mobile">
                <table id="myTable" class="table table-hover table-striped-rows">
                  <thead>
                    <tr>
                      <th>Post Name</th>
                      <th>Year</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >
                        <b>Technical Assistant (TA1)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technical Assistatnt_TA1_2018.pdf" rel="noopener" target="_blank">2018</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technical Assistant (TA2)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technical Assistant_TA2_2018.pdf" rel="noopener" target="_blank">2018</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Scientific Assistant (SA1)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Scientific Assistant_SA1-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Scientific Assistant (SA2)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Scientific Assistant_SA2-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Scientific Assistant (SA3)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Scientific Assistant_SA3-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Electronic Mechanic)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B ( Electronic Mechanic)-TB1-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Fitter)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Fitter)_TB3-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Instrument Mechanic)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Insrument Mechanic)-TB4-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Laboratory Assistant-Chemical)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Laboratory Assistant-Chemical)-TB5-20117.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Machinist)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Machinist)-TB6-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Plumber)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Plumber) -TB8-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Refrigeration &amp; Air-Conditioning)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Refrigeration &amp; Air-Conditioning)-TB9-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technicina-B (Motor Mechanic)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technicina-B (Motor Mechanic)-TB7-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Technician-B (Electrician)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Technician-B (Electrician)_TB2_2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Catering Attendant A</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Catering_ Attendant A_C2-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Cook</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Cook_C1-2017.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <b>Draughtsman-B (Civil)</b>
                      </td>
                      <td>
                        <a class="mobile-respatag" href="assets/pdf/old_qn/Draughtsman-B(Civil)_DM1_2018.pdf" rel="noopener" target="_blank">2017</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
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
  let currentPage = 1;
  const rowsPerPage = 10;
  const rows = document.querySelectorAll("#myTable tbody tr");
  const pagination = document.getElementById("pagination");

  function changePage(page) {
    currentPage = page;
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    rows.forEach((row, index) => {
      row.style.display = (index >= start && index < end) ? "" : "none";
    });
    // Update active page link styling
    const pageLinks = pagination.querySelectorAll(".page-item");
    pageLinks.forEach((li, i) => {
      li.classList.toggle("active", i === page - 1);
    });
  }

  function setupPagination() {
    pagination.innerHTML = ""; // Clear previous pagination
    const pageCount = Math.ceil(rows.length / rowsPerPage);
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
    changePage(currentPage); // Show first page
  }
  // Initialize
  setupPagination();
</script>