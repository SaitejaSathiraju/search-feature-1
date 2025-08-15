<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Careers Advt Archive</title>
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

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      .p-style p {
        font-size: 20px;
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
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15px;
        padding-left: 0;
        list-style: none;
      }

      .pagination li {
        margin: 0 2px;
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
        font-size: 14px;
      }

      .pagination a:hover {
        background-color: #e9ecef;
      }

      .pagination .active span {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
      }

      .pagination .disabled span {
        color: #6c757d;
        pointer-events: none;
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 5%;
      }

      .form-control {
        margin-bottom: 20px;
      }

      #Image21 {
        width: 43px;
        height: 17px;
      }

      #highlighttext {
        color: red;
      }

      @media (max-width: 576px) {
        .table-responsive {
          margin-bottom: 20px;
        }

        #myTable,
        #myTable tbody,
        #myTable tr,
        #myTable td {
          display: block;
          width: 100%;
          box-sizing: border-box;
        }

        #myTable td:first-child {
          display: none;
        }

        #myTable thead {
          display: none;
        }

        #myTable tr {
          margin-bottom: 15px;
          border: 1px solid #ddd;
          border-radius: 8px;
          background: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          overflow: hidden;
          font-size: 14px !important;
        }

        #myTable td {
          padding: 10px;
          border-bottom: 1px solid #eee;
          text-align: left;
          word-break: break-word;
          font-size: 14px !important;
        }

        #myTable td::before {
          content: attr(data-label);
          font-weight: bold;
          display: inline-block;
          margin-right: 8px;
          text-transform: capitalize;
        }

        #myTable td:last-child {
          border-bottom: none;
        }

        #highlighttext {
          color: red;
          font-size: 14px !important;
        }

        #mobile {
          font-size: 14px !important;
        }
      }
    </style>
  </head>
  <body>
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
              <b>Results & Documents</b>
            </li>
            <li class="current">
              <b>Advertisements (Archive)</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <main id="main-content" class="main" role="main">
      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3> Advertisements (Archive) </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search advertisements...">
              <div class="table-responsive-mobile">
                <table id="myTable" class="table table-hover  table-striped-rows">
                  <thead>
                    <tr>
                      <th>S.No. </th>
                      <th>Advertisement No.</th>
                      <th>Details of Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">Advt No. NRSC/RMT/ 4 / 2015</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC-RMT- 4- 2015.pdf" target="_blank">Research Scientists and Junior Research Fellows</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">Advt No. NRSC.RMT.01/2016</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/ADVT. NO.NRSC.RMT.01-2016.pdf" target="_blank">Recruitment of Graduate/Technician Apprentices under the Apprentices Act, 1961</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">Advt No. NRSC:RMT:02:2016</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC - RMT-02-2016.pdf" target="_blank">Junior Hindi Translator</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">AdvtNo.NRSC/RMT/5/2016</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC-RMT-5-2016.pdf" target="_blank">Junior Research Fellows (JRF)</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">Advt No.NRSCRMT72016</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSCRMT72016.pdf" target="_blank">JUNIOR RESEARCH FELLOW (JRF)</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">AdvtNo.NRSC/RMT/1/2017</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC-RMT-1-2017.pdf" target="_blank">Cook and Catering Attendant A</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">AdvtNo.NRSC/RMT/2/2017</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC-RMT-2-2017.pdf" target="_blank">Temporary positions of Research Scientists</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">AdvtNo.NRSC/RMT/3/2017</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advt No.NRSC-RMT-3-2017.pdf" target="_blank">TECHNICAL ASSISTANT,SCIENTIFIC ASSISTANT,DRAUGHTSMAN-B,TECHNICIAN-B</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/4/2017</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC-RMT-4-2017.pdf" target="_blank">Temporary Positions of JUNIOR RESEARCH FELLOW (JRF)</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/5/2017</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC-RMT-5-2017.pdf" target="_blank">Temporary positions of Research Scientists</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/1/2018</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC-RMT-1-2018.pdf" target="_blank">Last Date Extended for all the Posts Scientist/Engineer-SC , Scientist/Engineer-SD and Scientific Assistant .... Essential Qualifications for POST 05 is modified</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/1/2021 Dt. 06.08.2021</td>
                      <td data-label="details">
                        <p id="mobile">
                          <a href="assets/pdf/advt_archive/Notification for Contract Employment- Continuous Airworthiness Manager (CAM) and Quality Manager (QM).pdf" target="_blank">Notification for Contract Employment- Continuous Airworthiness Manager (CAM) and Quality Manager (QM)</a>
                        </p>
                        <span>
                          <a href="assets/pdf/advt_archive/Application form for NRSC-RMT-1-2021 dated 06.08.2021.pdf" target="_blank">Application Form</a>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC-RMT-1-2022 Dt 23.04.2022</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC-RMT-1-2022.pdf" target="_blank">Recruitment of JRF/RA/RS at NRSC </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/02/2022 Dt. 02.05.2022</td>
                      <td data-label="details">
                        <a> Advertisement for Contract Employment - Quality Manager (QM) </a>
                        <p></p>
                        <a href="assets/pdf/advt_archive/QualityManager_Advertisement_02052022.pdf" target="_blank">View Advertisement </a>
                        <br />
                        <br />
                        <a href="assets/pdf/advt_archive/QM_Application_02052022.pdf" target="_blank">Application form </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC-RMT-1-2023, DT. 25.03.2023</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC-RMT-1-2023_date_ 25.03.2023.pdf" target="_blank">Recruitment of various Temporary Research Personnel </a>
                        <p></p>
                        <p id="highlighttext">
                          <b>Note</b> : In respect of Post No.RS09 of Advertisement No.NRSC-RMT-1-2023 dated 25.03.2023, the word 'Hydraulics' in Hindi version of Education Qualification Requirements was mentioned inadvertently and the same is excluded now in Hindi Version.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC/RMT/02/2023 Dt. 13.05.2023</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/NRSC_RMT_2_13052023.pdf" target="_blank">Engaging Graduate and Technician Apprentices for the Year 2023-24 </a>
                        <br />
                        <p></p>
                        <p id="highlighttext">
                          <b>Note</b> : The Essential Qualification in respect of Technician Apprentices against Advertisement No.NRSC-RMT-2-2023 dated 13.05.2023, may be read as "Pass in First Class Diploma in Engg. in the respective field with not less than 60% marks / 6.32 CGPA"
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="details">17</td>
                      <td data-label="Advertisement No.">NRSC/RMT/3/2023 Dt. 06.12.2023</td>
                      <td data-label="details">
                        <a href="assets/pdf/advt_archive/Advertisement_for_recruitment_of_Continuous_Airworthiness_Managaer_CAM_and_Quality_Manager_QM.pdf" rel="noopener" target="_blank" title="2468">ADVERTISEMENT FOR CONTRACT EMPLOYMENT (CAM and QM for Aircraft Air Worthiness)</a>
                        <br />
                        <br />
                        <a href="assets/pdf/advt_archive/application_form_for_NRSC_RMT-3-2023.pdf" rel="noopener" target="_blank" title="2468"> Application Form</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sno"></td>
                      <td data-label="Advertisement No.">NRSC-RMT-1-2023, DT. 25.03.2023</td>
                      <td data-label="details">
                        <p id="highlighttext">
                          <b>Note : </b>It is hereby notified for information of all concerned that the number of positions against JRF4 &amp; JRF5 is reduced to 01(One) each with MSc Qualification and M.Tech Qualification against advertisement No. NRSC-RMT-1-2023 dated 25.03.2023, due to administrative reasons.
                        </p>
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
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
  <script>
    let currentPage = 1;
    const rowsPerPage = 7;
    const allRows = Array.from(document.querySelectorAll("#myTable tbody tr"));
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    let filteredRows = [...allRows]; // By default, show all rows
    function rowMatchesSearch(row) {
      const searchTerm = searchInput.value.toLowerCase();
      return Array.from(row.querySelectorAll('td')).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
    }

    function changePage(page) {
      currentPage = page;
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      // Hide all rows
      allRows.forEach(row => (row.style.display = "none"));
      // Show only filtered rows for this page
      const visibleRows = filteredRows.slice(start, end);
      visibleRows.forEach(row => (row.style.display = ""));
      updateSerialNumbers(visibleRows, start);
      // Update pagination styling
      const pageLinks = pagination.querySelectorAll(".page-item");
      pageLinks.forEach((li, i) => {
        li.classList.toggle("active", i === page - 1);
      });
    }

    function setupPagination() {
      pagination.innerHTML = "";
      filteredRows = allRows.filter(row => rowMatchesSearch(row));
      const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
      if (pageCount === 0) {
        const li = document.createElement("li");
        li.className = "page-item disabled";
        li.innerHTML = `
				<a class="page-link" href="#">No results</a>`;
        pagination.appendChild(li);
        allRows.forEach(row => (row.style.display = "none"));
        return;
      }
      for (let i = 1; i <= pageCount; i++) {
        const li = document.createElement("li");
        li.className = "page-item" + (i === currentPage ? " active" : "");
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
      changePage(currentPage);
    }

    function updateSerialNumbers(visibleRows, start) {
      visibleRows.forEach((row, i) => {
        const snoCell = row.querySelector(".sno");
        if (snoCell) {
          snoCell.textContent = start + i + 1; // Serial number starts from 1
        }
      });
    }
    // Event listener for search input
    searchInput.addEventListener("input", () => {
      currentPage = 1;
      setupPagination();
    });
    // Initialize on page load
    document.addEventListener("DOMContentLoaded", function() {
      setupPagination();
      // Menu toggle logic
      const menuBtn = document.getElementById("menuToggleBtn");
      const sidebar = document.getElementById("mobileSidebar");
      $('#mobileSidebar').on('show.bs.collapse', function() {
        menuBtn.innerText = "Hide Menu";
      });
      $('#mobileSidebar').on('hide.bs.collapse', function() {
        menuBtn.innerText = "Show Menu";
      });
    });
  </script>
</html>