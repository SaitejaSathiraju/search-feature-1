<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Intellectual Property</title>
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

      #myptag {
        font-size: 20px;
        text-align: justify;
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

      table {
        min-width: 800px;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 25px 0;
      }

      table,
      th,
      td {
        font-size: 18px;
      }

      th,
      td {
        border: 1px solid #aaa;
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: #555;
        color: white;
        font-weight: bold;
        cursor: pointer;
        position: relative;
      }

      th.sort-asc:after {
        content: " ↑";
        font-size: 14px;
      }

      th.sort-desc:after {
        content: " ↓";
        font-size: 14px;
      }

      td a {
        color: #0044cc;
        text-decoration: none;
      }

      .pdf-icon {
        width: 20px;
        vertical-align: middle;
      }

      .pdf-size {
        font-size: 12px;
        color: #555;
        margin-left: 5px;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #e0f7fa;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      #copyrightsTable th:nth-child(1),
      #copyrightsTable td:nth-child(1),
      #patentsTable th:nth-child(1),
      #patentsTable td:nth-child(1) {
        width: 2%;
      }

      #copyrightsTable th:nth-child(2),
      #copyrightsTable td:nth-child(2),
      #patentsTable th:nth-child(2),
      #patentsTable td:nth-child(2) {
        width: 45%;
      }

      #copyrightsTable th:nth-child(3),
      #copyrightsTable td:nth-child(3),
      #patentsTable th:nth-child(3),
      #patentsTable td:nth-child(3) {
        width: 30%;
      }

      #copyrightsTable th:nth-child(4),
      #copyrightsTable td:nth-child(4),
      #patentsTable th:nth-child(4),
      #patentsTable td:nth-child(4) {
        width: 10%;
      }

      #copyrightsTable th:nth-child(5),
      #copyrightsTable td:nth-child(5),
      #patentsTable th:nth-child(5),
      #patentsTable td:nth-child(5) {
        width: 18%;
      }

      .table-style {
        background: #3f68b5 !important;
        font-size: 1.4rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        text-align: center !important;
      }

      th.sortable {
        cursor: pointer;
        position: relative;
        padding-right: 20px;
      }

      th.sortable:after {
        content: "↕";
        position: absolute;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
      }

      th.sort-asc:after {
        content: "↑";
        color: #000;
      }

      th.sort-desc:after {
        content: "↓";
        color: #000;
      }

      .table-responsive-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        /* For smooth scrolling on iOS */
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      @media (max-width: 768px) {
        .table-responsive-container {
          overflow-x: visible; /* prevent horizontal scroll on mobile */
        }

        table {
          display: none;
        }

        .mobile-cards {
          display: block;
        }

        .mobile-card {
          border: 1px solid #ddd;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          padding: 15px;
          margin-bottom: 15px;
          background-color: #fff;
        }

        .mobile-card h5 {
          font-size: 16px;
          font-weight: bold;
          color: #3f68b5;
          margin-bottom: 10px;
        }

        .mobile-card p {
          margin: 5px 0;
          font-size: 14px;
          line-height: 1.5;
        }

        .mobile-card a {
          color: #0044cc;
          font-weight: bold;
          display: inline-block;
          margin-top: 10px;
          position: relative;
          z-index: 2;
          pointer-events: auto !important;
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
                <h1 class="heading-title text-break text-center">Intellectual Property</h1>
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
                <b>Intellectual Property</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="IP-main" id="IP-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Intellectual Property</h3>
              <br />
              <h3>Copyrights</h3>
              <div class="table-responsive-container">
                <table id="copyrightsTable">
                  <thead>
                    <!-- <tr>
                      <th colspan="6" class="table-style">Copyrights</th>
                    </tr> -->
                    <tr>
                      <th>S.No.</th>
                      <th>Document</th>
                      <th>Inventors</th>
                      <th class="date-column sortable" data-sort="date">Registration Date</th>
                      <th>Registration No.</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>DATA ANALYSIS SYSTEM FOR THROUGHPUT ASSESSMENT OF INDIAN REMOTE SENSING SATELLITE DATA PRODUCTS GENERATION CHAIN : A DATA WAREHOUSE APPROACH <span class="pdf-size">(132 KB)</span>
                      </td>
                      <td>M. NARESH KUMAR, UZAIR MUJEEB</td>
                      <td data-sort="20150122">22/01/2015</td>
                      <td>SW-­8271/2015</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/1.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>MESSAGE DRIVEN METHOD AND SYSTEM FOR OPTIMAL MANAGEMENT OF DYNAMICS PRODUCTION WORKFLOWS IN A DISTRIBUTED ENVIRONMENT <span class="pdf-size">(1092 KB)</span>
                      </td>
                      <td>M. NARESH KUMAR, UZAIR MUJEEB, ASHWINI JOSHI, M. VIDYIA, RAJ JOSE, P. SAMATHA, T.SAILAJA, SONU TOMAR</td>
                      <td data-sort="20150303">03/03/2015</td>
                      <td>SW-8284/2015</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/4.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>A MULTI AGENT SCHEDULING SYSTEM, METHOD AND COMPUTER PROGRAM FOR INFORMATION EXTRACTION IN HETEROGENEOUS DISTRIBUTED ENVIRONMENT <span class="pdf-size">(114 KB)</span>
                      </td>
                      <td>DR. M. NARESH KUMAR, UZAIR MUJEEB </td>
                      <td data-sort="20171121">21/11/2017</td>
                      <td>SW-9671/2017</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/5.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>COMPUTER SOFTWARE WORK MOBILE APP DEVELOPED FOR NYAYA VIKAS PROJECT FOR MONITORING OF CSS OF DEPT OF JUSTICE FOR DEVELOPMENT OF JUDICIAL INFRASTRUCTURE </a>
                        <span class="pdf-size">(16,623 KB)</span>
                      </td>
                      <td>KHUSHBOO MIRZA, DR. SAMEER SARAN, DR. V M CHOWDARY, YASHASVI KUMAR</td>
                      <td data-sort="20240524">24/05/2024</td>
                      <td>SW-18807/2024</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/7.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>GPSDP SURVEY MOBILE APP V2 <span class="pdf-size">(115 KB)</span>
                      </td>
                      <td>KHUSHBOO MIRZA , S S RAJA SHEKHAR, SAMEER SARAN, S K SRIVASTAV, ALOK PREM NAGAR, PRAKASH CHAUHAN </td>
                      <td data-sort="20250515">15/05/2025</td>
                      <td>SW-2025020515</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/8.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mobile-cards d-md-none">
                  <div class="mobile-card">
                    <h5>	DATA ANALYSIS SYSTEM FOR THROUGHPUT ASSESSMENT OF INDIAN REMOTE SENSING SATELLITE DATA PRODUCTS GENERATION CHAIN : A DATA WAREHOUSE APPROACH</h5>
                    <p><strong>Inventors:</strong> M. NARESH KUMAR, UZAIR MUJEEB</p>
                    <p><strong>Registration Date:</strong> 22/01/2015</p>
                    <p><strong>Registration No.:</strong> SW-­8271/2015</p>
                    <a href="./assets/pdf/IntellectualProperty/1.pdf" target="_blank" download rel="noopener noreferrer">View PDF (132 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>MESSAGE DRIVEN METHOD AND SYSTEM FOR OPTIMAL MANAGEMENT OF DYNAMICS PRODUCTION WORKFLOWS IN A DISTRIBUTED ENVIRONMENT</h5>
                    <p><strong>Inventors:</strong> M. NARESH KUMAR, UZAIR MUJEEB, ASHWINI JOSHI, M. VIDYIA, RAJ JOSE, P. SAMATHA, T.SAILAJA, SONU TOMAR</p>
                    <p><strong>Registration Date:</strong> 03/03/2015</p>
                    <p><strong>Registration No.:</strong> SW-8284/2015</p>
                    <a href="./assets/pdf/IntellectualProperty/2.pdf" target="_blank" download rel="noopener noreferrer">View PDF (1092 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>A MULTI AGENT SCHEDULING SYSTEM, METHOD AND COMPUTER PROGRAM FOR INFORMATION EXTRACTION IN HETEROGENEOUS DISTRIBUTED ENVIRONMENT</h5>
                    <p><strong>Inventors:</strong> DR. M. NARESH KUMAR, UZAIR MUJEEB</p>
                    <p><strong>Registration Date:</strong> 21/11/2017</p>
                    <p><strong>Registration No.:</strong> SW-9671/2017</p>
                    <a href="./assets/pdf/IntellectualProperty/3.pdf" target="_blank" download rel="noopener noreferrer">View PDF (114 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>COMPUTER SOFTWARE WORK MOBILE APP DEVELOPED FOR NYAYA VIKAS PROJECT FOR MONITORING OF CSS OF DEPT OF JUSTICE FOR DEVELOPMENT OF JUDICIAL INFRASTRUCTURE</h5>
                    <p><strong>Inventors:</strong> KHUSHBOO MIRZA, DR. SAMEER SARAN, DR. V M CHOWDARY, YASHASVI KUMAR</p>
                    <p><strong>Registration Date:</strong> 24/05/2024</p>
                    <p><strong>Registration No.:</strong> SW-18807/2024</p>
                    <a href="./assets/pdf/IntellectualProperty/4.pdf" target="_blank" download rel="noopener noreferrer">View PDF (16623 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>GPSDP SURVEY MOBILE APP V2 </h5>
                    <p><strong>Inventors:</strong> KHUSHBOO MIRZA , S S RAJA SHEKHAR, SAMEER SARAN, S K SRIVASTAV, ALOK PREM NAGAR, PRAKASH CHAUHAN</p>
                    <p><strong>Registration Date:</strong> 15/05/2025</p>
                    <p><strong>Registration No.:</strong> SW-2025020515</p>
                    <a href="./assets/pdf/IntellectualProperty/5.pdf" target="_blank" download rel="noopener noreferrer">View PDF (115 KB)</a>
                  </div>
                </div>
              </div>
              <hr>
              <h3>Patents</h3>
              <div class="table-responsive-container">
                <table id="patentsTable">
                  <thead>
                    <!-- <tr>
                      <th colspan="6" class="table-style">Patents</th>
                    </tr> -->
                    <tr>
                      <th>S.No.</th>
                      <th>Document</th>
                      <th>Inventors</th>
                      <th class="date-column sortable" data-sort="date">Grant/Publication Date</th>
                      <th>Patent No.</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>MESSAGE DRIVEN METHOD AND SYSTEM FOR OPTIMIAL MANAGEMENT OF DYNAMIC PRODUCTION WORKFLOWS IN A DISTRIBUTED ENVIRONMENT <span class="pdf-size">(1472 KB)</span>
                      </td>
                      <td>M. NARESH KUMAR, UZAIR MUJEEB, ASHWINI JOSHI, M. VIDYIA, RAJ JOSE, P. SAMATHA, T.SAILAJA, SONU TOMAR</td>
                      <td data-sort="20150305">05/03/2015</td>
                      <td>US 2015/0067028 A1</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/6.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>DUAL POLARISED, S AND X BAND MONOPULSE FEED FOR TRACKING LEO SATELLITES <span class="pdf-size">(2201 KB)</span>
                      </td>
                      <td>C.S. PADMAVATHY, M. SATYANARAYANA, J.G. KULKARNI, V. SREERAMULU, LAKSHMEESHA, V.V. SRINIVASAN</td>
                      <td data-sort="20221018">18/10/2022</td>
                      <td>409231</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/2.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>METHOD AND SYSTEM OF GENERATING AND RENDERING INFORMATION ABOUT A SPACE-REPRESENTATION OF TERRAIN AROUND A PIPELINE <span class="pdf-size">(2917 KB)</span>
                      </td>
                      <td>GAIL (India) Limited, National Remote Sensing Centre (NRSC)</td>
                      <td data-sort="20240205">05/02/2024</td>
                      <td>507169</td>
                      <td>
                        <a href="./assets/pdf/IntellectualProperty/3.pdf" target="_blank">
                          <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mobile-cards d-md-none">
                  <div class="mobile-card">
                    <h5>MESSAGE DRIVEN METHOD AND SYSTEM FOR OPTIMIAL MANAGEMENT OF DYNAMIC PRODUCTION WORKFLOWS IN A DISTRIBUTED ENVIRONMENT </h5>
                    <p><strong>Inventors:</strong> M. NARESH KUMAR, UZAIR MUJEEB, ASHWINI JOSHI, M. VIDYIA, RAJ JOSE, P. SAMATHA, T.SAILAJA, SONU TOMAR</p>
                    <p><strong>Grant/Publication Date:</strong> 05/03/2015</p>
                    <p><strong>Patent No.:</strong>US 2015/0067028 A1</p>
                    <a href="./assets/pdf/IntellectualProperty/6.pdf" target="_blank" download rel="noopener noreferrer">View PDF (1472 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>DUAL POLARISED, S AND X BAND MONOPULSE FEED FOR TRACKING LEO SATELLITES</h5>
                    <p><strong>Inventors:</strong> C.S. PADMAVATHY, M. SATYANARAYANA, J.G. KULKARNI, V. SREERAMULU, LAKSHMEESHA, V.V. SRINIVASAN</p>
                    <p><strong>Grant/Publication Date:</strong> 18/10/2022</p>
                    <p><strong>Patent No.:</strong>409231</p>
                    <a href="./assets/pdf/IntellectualProperty/7.pdf" target="_blank" download rel="noopener noreferrer">View PDF (2201 KB)</a>
                  </div>
                  <div class="mobile-card">
                    <h5>METHOD AND SYSTEM OF GENERATING AND RENDERING INFORMATION ABOUT A SPACE-REPRESENTATION OF TERRAIN AROUND A PIPELINE </h5>
                    <p><strong>Inventors:</strong> GAIL (India) Limited, National Remote Sensing Centre (NRSC)</p>
                    <p><strong>Grant/Publication Date:</strong> 05/02/2024</p>
                    <p><strong>Patent No.:</strong>507169</p>
                    <a href="./assets/pdf/IntellectualProperty/8.pdf" target="_blank" download rel="noopener noreferrer">View PDF (2917 KB)</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Intellectual Property');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

  document.addEventListener('DOMContentLoaded', function() {
    // Properly parse dd/mm/yyyy format
    function parseDate(value) {
      if (!value) return 0;
      // Check for dd/mm/yyyy format
      const parts = value.split('/');
      if (parts.length === 3) {
        const [day, month, year] = parts.map(Number);
        return new Date(year, month - 1, day).getTime(); // month is 0-indexed
      }
      return new Date(value).getTime(); // fallback
    }

    function sortTable(table, columnIndex, order) {
      const tbody = table.querySelector('tbody');
      const rows = Array.from(tbody.querySelectorAll('tr'));
      rows.sort((a, b) => {
        const aCell = a.cells[columnIndex];
        const bCell = b.cells[columnIndex];
        const aValue = aCell.getAttribute('data-sort') || aCell.textContent.trim();
        const bValue = bCell.getAttribute('data-sort') || bCell.textContent.trim();
        let result;
        if (aCell.hasAttribute('data-sort')) {
          result = parseDate(aValue) - parseDate(bValue);
        } else {
          result = aValue.localeCompare(bValue);
        }
        return order === 'asc' ? result : -result;
      });
      // Clear and append sorted rows, reindex S.No.
      tbody.innerHTML = '';
      rows.forEach((row, i) => {
        row.cells[0].textContent = `${i + 1}.`;
        tbody.appendChild(row);
      });
    }

    function setupTableSorting(tableId) {
      const table = document.getElementById(tableId);
      if (!table) return;
      const headerRows = table.querySelectorAll('thead tr');
      if (headerRows.length < 2) return;
      const sortableHeaders = headerRows[1].querySelectorAll('th.sortable');
      sortableHeaders.forEach((th, index) => {
        th.addEventListener('click', () => {
          const isAsc = th.classList.contains('asc');
          sortableHeaders.forEach(header => header.classList.remove('asc', 'desc'));
          th.classList.add(isAsc ? 'desc' : 'asc');
          sortTable(table, index, isAsc ? 'desc' : 'asc');
        });
      });
    }
    setupTableSorting('copyrightsTable');
    setupTableSorting('patentsTable');
  });
  
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