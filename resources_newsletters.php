<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>News Letters | NRSC</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/all_5.15.4.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      :root {
        --primary-color: #3f68b5;
        --secondary-color: #2c3e50;
        --accent-color: #e74c3c;
        --light-gray: #f8f9fa;
        --dark-gray: #343a40;
      }

      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
      }

      .container li {
        font-size: 24px;
        color: var(--primary-color);
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
        background-color: var(--light-gray);
        border-radius: 5px;
      }

      .breadcrumb-item.active {
        color: var(--primary-color);
      }

      .section {
        background-color: #fff;
        padding: 25px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }

      th,
      td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
      }

      th {
        background-color: var(--primary-color);
        color: white;
        font-weight: 600;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease;
      }

      .pagination {
        justify-content: center;
        margin-top: 15px;
      }

      .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .page-link {
        color: var(--primary-color);
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 20%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 80%;
      }

      @media (max-width: 576px) {

        th,
        td {
          font-size: 14px;
          padding: 8px;
        }
      }

      .theadcolor {
        font-size: larger;
      }

      .link {
        color: var(--primary-color);
        font-weight: 500;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .link:hover {
        color: var(--accent-color);
        text-decoration: underline;
      }

      .link i {
        margin-right: 5px;
        color: var(--accent-color);
      }

      #searchInput {
        border-radius: 20px;
        padding: 10px 20px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
      }

      #searchInput:focus {
        border-color: var(--primary-color);
        box-shadow: 0 2px 10px rgba(63, 104, 181, 0.2);
        outline: none;
      }

      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .btn-primary:hover {
        background-color: #355a9c;
        border-color: #355a9c;
      }

      .menu-toggle-btn {
        margin-bottom: 15px;
        border-radius: 20px;
        padding: 8px 20px;
      }

      .no-results {
        text-align: center;
        padding: 20px;
        font-size: 18px;
        color: var(--accent-color);
        display: none;
      }

      .download-count {
        font-size: 12px;
        color: var(--dark-gray);
        margin-left: 5px;
      }

      .table-responsive {
        overflow-x: auto;
      }

      .sortable {
        cursor: pointer;
        position: relative;
      }
    </style>
  </head>
  <body>
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">News Letters</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current">
              <b>Home</b>
            </li>
            <li class="current">
              <b>Resources</b>
            </li>
            <li class="current">
              <b>News Letters</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <!-- End Page Title -->
    <main id="main-content" class="main" role="main">
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">
              <i class="fas fa-bars"></i> Show Menu </button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> News Letters</h3>
              <p class="text-muted">Browse our collection of newsletters and publications</p>
              <br>
              <div class="input-group mb-4">
                <!-- <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div> -->
                <input type="text" id="searchInput" class="form-control" placeholder="Search newsletters by title or date...">
              </div>
              <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Click on any newsletter title to download the PDF file.
              </div>
              <div class="table-responsive">
                <table id="myTable" class="table table-hover">
                  <thead>
                    <tr>
                      <th class="theadcolor sortable">Date <i class="fas fa-sort"></i>
                      </th>
                      <th class="theadcolor sortable">Title <i class="fas fa-sort"></i>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>December 2024</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/NRSC SAMVAAD 2024 General.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> NRSC-SAMVAAD </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 124 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>July 2024</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jul_2024.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - July, 2024 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 98 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>May 2024</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/SAMVAAD 2024 -Tchnical-2024.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> SAMVAAD 2024 Technical </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 156 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>May 2024</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/SAMVAAD-General- 2023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> SAMVAAD 2023 General </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 87 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>January 2024</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jan_2024.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - January, 2024 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 112 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>November 2023</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/ICSM-Souvenir-2023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Souvenir - Inter Centre Sports Meet - November, 2023 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 203 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>July 2023</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/Billingual P2P_Jul_2023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - July, 2023 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 76 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>September 2023</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/GJSouvenir_NRSC_2023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Souvenir - Golden Jubilee Celebrations </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 189 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>May 2023</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/SAMVAAD-Technical-2023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> SAMVAAD 2023 Technical </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 134 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>January 2023</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jan_2023_Web_31012023.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - January, 2023 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 92 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>December 2022</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/Samvaad_December_ 2022.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> NRSC-SAMVAAD </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 78 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>July 2022</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jul_2022_Web_13092022.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - July, 2022 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 65 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>March 2022</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/Samvaad Technical 2022.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> SAMVAAD 2022 Technical </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 108 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>Jan 2022</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/NRSC_P2P_Jan_2022.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - Jan, 2022 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 71 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>October 2021</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/ISRO-NRSC-Samvaad General 2021.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> NRSC-SAMVAAD </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 89 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>July 2021</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/NRSC_P2P_Jul_2021_FINAL_small.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - July, 2021 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 57 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>March 2021</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/SAMVAAD 2021 Technical.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> SAMVAAD 2021 Technical </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 102 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>January 2021</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/NRSC_P2P_Jan_2021_English.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - January, 2021 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 68 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>November 2020</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/NRSC-SAMVAAD.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> NRSC-SAMVAAD </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 82 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>January 2020</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jan_2020.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - January, 2020 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 54 downloads</span> -->
                      </td>
                    </tr>
                    <tr>
                      <td>July 2020</td>
                      <td>
                        <a class="link" href="./assets/pdf/newsletters/P2P_Jul_2020.pdf" target="_blank">
                          <i class="fas fa-file-pdf"></i> Pixel 2 People (P2P) - News Letter - July, 2020 </a>
                        <!-- <span class="download-count"><i class="fas fa-download"></i> 61 downloads</span> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="noResults" class="no-results">
                <i class="fas fa-exclamation-circle fa-2x"></i>
                <p>No newsletters found matching your search criteria.</p>
              </div>
              <nav aria-label="Newsletter pagination">
                <ul class="pagination" id="pagination"></ul>
              </nav>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
    <script>
      let currentPage = 1;
      const rowsPerPage = 7;
      const rows = document.querySelectorAll("#myTable tbody tr");
      const pagination = document.getElementById("pagination");
      const searchInput = document.getElementById("searchInput");
      const noResults = document.getElementById("noResults");
      let sortDirection = {};
      let currentSortColumn = null;
      // Initialize sort directions
      document.querySelectorAll('.sortable').forEach(header => {
        const columnIndex = Array.from(header.parentNode.children).indexOf(header);
        sortDirection[columnIndex] = null; // null = unsorted, true = asc, false = desc
      });

      function changePage(page) {
        currentPage = page;
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        let visibleRows = 0;
        rows.forEach((row, index) => {
          if (rowMatchesSearch(row)) {
            if (visibleRows >= start && visibleRows < end) {
              row.style.display = "";
            } else {
              row.style.display = "none";
            }
            visibleRows++;
          } else {
            row.style.display = "none";
          }
        });
        // Show/hide no results message
        noResults.style.display = visibleRows === 0 ? "block" : "none";
        // Update active page link styling
        const pageLinks = pagination.querySelectorAll(".page-item");
        pageLinks.forEach((li, i) => {
          li.classList.toggle("active", i === page - 1);
        });
      }

      function setupPagination() {
        pagination.innerHTML = ""; // Clear previous pagination
        // Count visible rows after search
        let visibleRowCount = 0;
        rows.forEach(row => {
          if (rowMatchesSearch(row)) visibleRowCount++;
        });
        const pageCount = Math.ceil(visibleRowCount / rowsPerPage);
        if (pageCount <= 1) {
          pagination.style.display = "none";
          return;
        }
        pagination.style.display = "flex";
        // Only show page numbers (no previous/next buttons)
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
        // Add page count display after page numbers
        // const countSpan = document.createElement("span");
        // countSpan.className = "page-count ml-2 align-self-center";
        // countSpan.textContent = `of ${pageCount}`;
        // pagination.appendChild(countSpan);
      }
      // Rest of your existing code (rowMatchesSearch, sortTable, etc.) remains the same
      // Function to check if a row matches the search input
      function rowMatchesSearch(row) {
        const searchTerm = searchInput.value.toLowerCase();
        if (!searchTerm) return true;
        return Array.from(row.querySelectorAll('td')).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
      }
      // Function to sort table by column
      function sortTable(columnIndex) {
        const table = document.getElementById("myTable");
        const tbody = table.querySelector("tbody");
        const rowsArray = Array.from(rows);
        // Toggle sort direction
        if (currentSortColumn === columnIndex) {
          sortDirection[columnIndex] = !sortDirection[columnIndex];
        } else {
          // Reset previous sort column
          if (currentSortColumn !== null) {
            sortDirection[currentSortColumn] = null;
            document.querySelectorAll('.sortable')[currentSortColumn].classList.remove('asc', 'desc');
          }
          currentSortColumn = columnIndex;
          sortDirection[columnIndex] = true; // Default to ascending
        }
        // Update sort indicators
        document.querySelectorAll('.sortable').forEach((header, index) => {
          header.classList.remove('asc', 'desc');
          if (index === columnIndex) {
            header.classList.add(sortDirection[columnIndex] ? 'asc' : 'desc');
          }
        });
        rowsArray.sort((a, b) => {
          const aValue = a.cells[columnIndex].textContent.trim();
          const bValue = b.cells[columnIndex].textContent.trim();
          // Special handling for date columns (assuming format like "December 2024")
          if (columnIndex === 0) {
            const dateA = new Date(aValue);
            const dateB = new Date(bValue);
            if (!isNaN(dateA) && !isNaN(dateB)) {
              return sortDirection[columnIndex] ? dateA - dateB : dateB - dateA;
            }
          }
          // Default string comparison
          return sortDirection[columnIndex] ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
        });
        // Rebuild the table
        rowsArray.forEach(row => tbody.appendChild(row));
        // Reset to first page after sorting
        currentPage = 1;
        setupPagination();
        changePage(currentPage);
      }
      // Initialize sortable headers
      document.querySelectorAll('.sortable').forEach((header, index) => {
        header.addEventListener('click', () => {
          sortTable(index);
        });
      });
      // Listen to input event on search field to filter rows
      searchInput.addEventListener("input", () => {
        currentPage = 1;
        setupPagination();
        changePage(currentPage);
      });
      // Track downloads
      document.querySelectorAll('.link[href$=".pdf"]').forEach(link => {
        link.addEventListener('click', function() {
          const title = this.textContent.trim();
          console.log(`Downloaded: ${title}`);
          // Here you could send this data to your analytics system
        });
      });
      // Initialize
      document.addEventListener('DOMContentLoaded', () => {
        setupPagination();
        changePage(currentPage);
        // Set active menu item
        localStorage.setItem('activeMenuItem', 'NewsLetters');
        // Set current year in footer if needed
        const yearElement = document.querySelector('#current-year');
        if (yearElement) {
          yearElement.textContent = new Date().getFullYear();
        }
      });
      window.addEventListener('beforeunload', function() {
        localStorage.removeItem('activeMenuItem');
      });

      localStorage.setItem('activeMenuItem', 'News Letters');
        window.addEventListener('beforeunload', function() {
          localStorage.removeItem('activeMenuItem');
        });
    </script>
  </body>
</html>