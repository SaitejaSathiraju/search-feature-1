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

      table,
      th,
      td {
        border: 1px solid #ddd;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f4f4f4;
      }

      #myTable {
        width: 100%;
        table-layout: fixed;
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 3%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 15%;
      }

      #myTable td:nth-child(3),
      #myTable th:nth-child(3) {
        width: 10%;
      }

      #myTable td:nth-child(4),
      #myTable th:nth-child(4) {
        width: 10%;
      }

      #myTable td:nth-child(5),
      #myTable th:nth-child(5) {
        width: 20%;
      }

      .pagination {
        justify-content: center;
        margin-top: 15px;
      }

      @media (max-width: 576px) {

        th,
        td {
          font-size: 12px;
          padding: 5px;
        }
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
      }

      #searchInput{
        margin-bottom: 20px;
      }

      @media (max-width: 576px) {
      .data-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        background-color: #fff;
      }

      .data-card h5 {
        font-size: 16px;
        color: #3f68b5;
        margin-bottom: 10px;
      }

      .data-card.bg-light {
        background-color: #f8f9fa;
        border-left: 4px solid #3f68b5;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        margin-bottom: 10px;
      }

      .data-card p {
        font-size: 14px;
        margin: 4px 0;
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
                <b>Optical</b>
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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_DPD_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Optical High Resolution</h3>
              <br />
              <input type="text" id="searchInput" class="form-control" placeholder="Search..." >
              <!-- Table for desktop -->
              <div id="tableWrapper" class="d-none d-sm-block">
                <table id="myTable" class="table table-hover  table-striped-rows">
                  <thead>
                    <tr id="p-style">
                      <th>S.No.</th>
                      <th>Satellite</th>
                      <th>Sensor</th>
                      <th>Resolution</th>
                      <th>Data available from</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="p-style">
                      <td>1</td>
                      <td >Cartosat-3 (₹)</td>
                      <td >PAN</td>
                      <td >0.28m</td>
                      <td >10-JUN-2020 till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>2</td>
                      <td >Cartosat-3 (₹)</td>
                      <td >MX</td>
                      <td >1.12m</td>
                      <td >10-JUN-2020 till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>3</td>
                      <td >Cartosat-2E (₹)</td>
                      <td >PAN</td>
                      <td >0.65 m</td>
                      <td >25-JUN-2017 till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>4</td>
                      <td >Cartosat-2E (₹)</td>
                      <td >MX</td>
                      <td >1.6 m</td>
                      <td >25-JUN-2017 till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>7</td>
                      <td >Cartosat-2 (₹)</td>
                      <td >PAN</td>
                      <td >1 m</td>
                      <td >14-APR-2007 - 23-MAY-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>8</td>
                      <td >Cartosat-1 (₹)</td>
                      <td >PAN-F</td>
                      <td >2.5 m</td>
                      <td >08-MAY-2005 - 31-DEC-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>9</td>
                      <td >Cartosat-1 (₹)</td>
                      <td >PAN-A</td>
                      <td >2.5 m</td>
                      <td >08-MAY-2005 - 19-FEB-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>10</td>
                      <td >Cartosat-1 (₹)</td>
                      <td >Stereo</td>
                      <td >2.5 m</td>
                      <td >08-MAY-2005 - 19-FEB-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>11</td>
                      <td >Cartosat-1 (₹)</td>
                      <td >Widemono</td>
                      <td >2.5 m</td>
                      <td >27-MAY-2005 - 19-FEB-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td colspan="5" style="font-size: 25px;">
                        <center>
                          <b>Optical Medium Resolution (5.8m to 56m)</b>
                        </center>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>1</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2a" target="blank">Resourcesat-2A (₹)</a>
                      </td>
                      <td>AWIFS</td>
                      <td>56 m</td>
                      <td>18-DEC-2016 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>2</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2a" target="blank">Resourcesat-2A (₹)</a>
                      </td>
                      <td>Liss-3</td>
                      <td>23.5 m</td>
                      <td>18-DEC-2016 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>3</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2a" target="blank">Resourcesat-2A (₹)</a>
                      </td>
                      <td>LISS4(MX23)</td>
                      <td>5.8 m</td>
                      <td>18-DEC-2016 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>4</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2a" target="blank">Resourcesat-2A (₹)</a>
                      </td>
                      <td>LISS4(MX70)</td>
                      <td>5.8 m</td>
                      <td>18-DEC-2016 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>5</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2" target="blank">Resourcesat-2 (₹)</a>
                      </td>
                      <td>AWIFS</td>
                      <td>56 m</td>
                      <td>8-MAY-2011 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>6</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2" target="blank">Resourcesat-2 (₹)</a>
                      </td>
                      <td>LISS3</td>
                      <td>23.5 m</td>
                      <td>8-MAY-2011 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>7</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2" target="blank">Resourcesat-2 (₹)</a>
                      </td>
                      <td>LISS4(MX23)</td>
                      <td>5.8 m</td>
                      <td>8-MAY-2011 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>8</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/resourcesat-2" target="blank">Resourcesat-2 (₹)</a>
                      </td>
                      <td>LISS4(MX70)</td>
                      <td>5.8 m</td>
                      <td>8-MAY-2011 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>9</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/irs-p6-resourcesat-1" target="blank">Resourcesat-1 (₹)</a>
                      </td>
                      <td>AWiFS</td>
                      <td>56 m</td>
                      <td>7-DEC-2003 - 9-OCT-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>10</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/irs-p6-resourcesat-1" target="blank">Resourcesat-1 (₹)</a>
                      </td>
                      <td>Liss-3</td>
                      <td>23.5 m</td>
                      <td>7-DEC-2003 - 9-OCT-2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>11</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/irs-p6-resourcesat-1" target="blank">Resourcesat-1 (₹)</a>
                      </td>
                      <td>LISS4(MONO)</td>
                      <td>5.8 m</td>
                      <td>7-DEC-2003 - 10/09/2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>12</td>
                      <td>
                        <a href="https://www.isro.gov.in/Spacecraft/irs-p6-resourcesat-1" target="blank">Resourcesat-1 (₹)</a>
                      </td>
                      <td>LISS4(MX23)</td>
                      <td>5.8 m</td>
                      <td>7-DEC-2003 - 10/09/2019</td>
                    </tr>
                    <tr id="p-style">
                      <td>13</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1D.pdf" target="_blank">IRS-1D (₹)</a>
                      </td>
                      <td>WiFS</td>
                      <td>56 m</td>
                      <td>01-JAN-1998 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>14</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1D.pdf" target="_blank">IRS-1D (₹)</a>
                      </td>
                      <td>Liss-3</td>
                      <td>23.5 m</td>
                      <td>01-JAN-1998 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>15</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1D.pdf" target="_blank">IRS-1D (₹)</a>
                      </td>
                      <td>PAN</td>
                      <td>5.8 m</td>
                      <td>01-JAN-1998 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>16</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1C.pdf" target="_blank">IRS-1C (₹)</a>
                      </td>
                      <td>WiFS</td>
                      <td>56 m</td>
                      <td>14-NOV-1996 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>17</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1C.pdf" target="_blank">IRS-1C (₹)</a>
                      </td>
                      <td>Liss-3</td>
                      <td>23.5 m</td>
                      <td>14-NOV-1996 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>18</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1C.pdf" target="_blank">IRS-1C (₹)</a>
                      </td>
                      <td>PAN</td>
                      <td>5.8 m</td>
                      <td>14-NOV-1996 - 20-SEP-2007</td>
                    </tr>
                    <tr id="p-style">
                      <td>19</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1B.pdf" target="_blank">IRS-1B (₹)</a>
                      </td>
                      <td>Liss-1</td>
                      <td>36.25 m</td>
                      <td>02-OCT-1991 - 09-SEP-2001</td>
                    </tr>
                    <tr id="p-style">
                      <td>20</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1B.pdf" target="_blank">IRS-1B (₹)</a>
                      </td>
                      <td>Liss-2</td>
                      <td>36.25 m</td>
                      <td>02-OCT-1991 - 09-SEP-2001</td>
                    </tr>
                    <tr id="p-style">
                      <td>21</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1A.pdf" target="_blank">IRS-1A (₹)</a>
                      </td>
                      <td>Liss-1</td>
                      <td>36.25 m</td>
                      <td>04-APR-1988 - 28-MAY-1991</td>
                    </tr>
                    <tr id="p-style">
                      <td>22</td>
                      <td>
                        <a href="/sites/default/files/doc_to_html/IRS 1A.pdf" target="_blank">IRS-1A (₹)</a>
                      </td>
                      <td>Liss-2</td>
                      <td>36.25 m</td>
                      <td>04-APR-1988 - 28-MAY-1991</td>
                    </tr>
                    <tr id="p-style">
                      <td colspan="5" style="font-size: 25px;">
                        <center>
                          <b>Optical Low Resolution (360 m and coarser)</b>
                        </center>
                      </td>
                    <tr id="p-style">
                      <td>1</td>
                      <td>EOS-06 (₹)</td>
                      <td>OCM (LAC)</td>
                      <td >360 m</td>
                      <td >01-APR-2023 - till date </td>
                    </tr>
                    <tr id="p-style">
                      <td>2</td>
                      <td>EOS-06 (₹)</td>
                      <td>OCM (GAC)</td>
                      <td >1080 m</td>
                      <td >01-APR-2023 - till date </td>
                    </tr>
                    <tr id="p-style">
                      <td>3</td>
                      <td>Oceansat-2 (₹)</td>
                      <td>OCM (LAC)</td>
                      <td >360 m</td>
                      <td >31-DEC-2009 - till date </td>
                    </tr>
                    <tr id="p-style">
                      <td>4</td>
                      <td>Oceansat-2 (₹)</td>
                      <td>OCM (GAC)</td>
                      <td >~1000 m</td>
                      <td >01-JAN-2019 - till date</td>
                    </tr>
                    <tr id="p-style">
                      <td>5</td>
                      <td>Oceansat-1 (₹)</td>
                      <td>OCM (LAC)</td>
                      <td >360 m</td>
                      <td >01-JUL-1999 - 29-JUL-2009</td>
                    </tr>
                    <tr id="p-style">
                      <td>6</td>
                      <td>IMS-1 </td>
                      <td>MX</td>
                      <td >250 m</td>
                      <td ></td>
                    </tr>
                  </tbody>
                </table>
                <nav>
                  <ul class="pagination" id="pagination"></ul>
                </nav>
              </div>
              <!-- Cards for mobile -->
              <div id="cardWrapper" class="d-block d-sm-none"></div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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
    return Array.from(row.querySelectorAll("td")).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
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
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
<script>
  function createCardsFromTable() {
    const tableRows = document.querySelectorAll("#myTable tbody tr");
    const cardWrapper = document.getElementById("cardWrapper");
    cardWrapper.innerHTML = "";

    tableRows.forEach((row) => {
      const cells = row.querySelectorAll("td");
      const card = document.createElement("div");

      // Check if it's a section heading (e.g., only one cell spanning all columns)
      if (cells.length === 1 || (cells.length > 0 && cells[0].colSpan >= 5)) {
        card.className = "data-card bg-light";
        card.innerHTML = `<h5 class="text-center font-weight-bold">${cells[0].innerText}</h5>`;
      } else {
        card.className = "data-card";
        card.innerHTML = `
          <h5>${cells[1].innerText} - ${cells[2].innerText}</h5>
          <p><strong>Resolution:</strong> ${cells[3].innerText}</p>
          <p><strong>Data available from:</strong> ${cells[4].innerText}</p>
        `;
      }

      cardWrapper.appendChild(card);
    });
  }

  document.addEventListener("DOMContentLoaded", () => {
    createCardsFromTable();

    const searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("input", () => {
      const searchTerm = searchInput.value.toLowerCase();
      const rows = document.querySelectorAll("#myTable tbody tr");
      const cards = document.querySelectorAll("#cardWrapper .data-card");

      rows.forEach((row, i) => {
        const match = Array.from(row.cells).some(cell =>
          cell.textContent.toLowerCase().includes(searchTerm)
        );
        row.style.display = match ? "" : "none";
        if (cards[i]) cards[i].style.display = match ? "" : "none";
      });
    });
  });
</script>
