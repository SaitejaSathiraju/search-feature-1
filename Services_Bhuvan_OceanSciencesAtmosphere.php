<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Bhuvan Services</title>
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

      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
      }

      .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 0;
        width: 80%;
        max-width: 900px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        max-height: 80vh;
        display: flex;
        flex-direction: column;
      }

      .modal-header {
        padding: 15px 20px;
        background: #f8f8f8;
        border-bottom: 1px solid #eee;
        border-radius: 5px 5px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .close-modal {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        margin: 0;
        line-height: 1;
      }

      .close-modal:hover {
        color: #000;
      }

      .modal-body {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
        max-height: 70vh;
        overflow-y: auto;
      }

      .close-modal:hover {
        color: black;
      }

      .modal table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }

      .modal th,
      .modal td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      .modal th {
        background-color: #f2f2f2;
      }

      /* Main table styling */
      #servicesTable {
        width: 100%;
        border-collapse: collapse;
      }

      #servicesTable td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
      }

      #servicesTable a {
        color: #0066cc;
        text-decoration: none;
      }

      #servicesTable a:hover {
        text-decoration: underline;
      }

      .search-container {
        margin-bottom: 15px;
      }

      .search-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
      }

      .table-container {
        flex: 1;
        overflow-y: auto;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      #oceanProductsTable {
        width: 100%;
        border-collapse: collapse;
        font-size: 20px;
      }

      #oceanProductsTableWrapper {
        max-height: 800px;
        /* or any suitable height */
        overflow-y: auto;
      }

      #oceanProductsTable th,
      #oceanProductsTable td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      #oceanProductsTable th {
        position: sticky;
        top: 0;
        background-color: #f8f8f8;
        z-index: 10;
      }

      #oceanProductsTable tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      #oceanProductsTable tr:hover {
        background-color: #f1f1f1;
      }

      #terrestialProductsTable {
        width: 100%;
        border-collapse: collapse;
        font-size: 20px;
      }

      #terrestialProductsTableWrapper {
        max-height: 800px;
        /* or any suitable height */
        overflow-y: auto;
      }

      #terrestialProductsTable th,
      #terrestialProductsTable td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      #terrestialProductsTable th {
        position: sticky;
        top: 0;
        background-color: #f8f8f8;
        z-index: 10;
      }

      #terrestialProductsTable tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      #terrestialProductsTable tr:hover {
        background-color: #f1f1f1;
      }

      /* Scrollbar styling */
      .table-container::-webkit-scrollbar {
        width: 8px;
      }

      .table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      .table-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
      }

      .table-container::-webkit-scrollbar-thumb:hover {
        background: #555;
      }

      /* Default table layout */
      .table-container table {
        width: 100%;
        border-collapse: collapse;
      }

      .table-container th,
      .table-container td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
      }

      /* Card style for mobile */
      @media screen and (max-width: 768px) {

        .table-container table,
        .table-container thead,
        .table-container tbody,
        .table-container th,
        .table-container td,
        .table-container tr {
          display: block;
        }

        .table-container thead {
          display: none;
        }

        .table-container tbody tr {
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 10px;
          padding: 10px;
          background: #f9f9f9;
        }

        .table-container td {
          border: none;
          padding: 8px;
          position: relative;
          display: flex;
          justify-content: space-between;
        }

        .table-container td::before {
          content: attr(data-label);
          font-weight: bold;
          flex-basis: 40%;
        }

        .table-container td a {
          word-break: break-word;
          color: #0066cc;
        }
      }

      /* Default table styling */
      .table-container table {
        width: 100%;
        border-collapse: collapse;
      }

      .table-container th,
      .table-container td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
      }

      /* Mobile card layout */
      @media screen and (max-width: 768px) {

        .table-container table,
        .table-container thead,
        .table-container tbody,
        .table-container th,
        .table-container td,
        .table-container tr {
          display: block;
          width: 100%;
        }

        .table-container thead {
          display: none;
        }

        .table-container tbody tr {
          margin: 10px 0;
          padding: 10px;
          border-radius: 10px;
          background: #f4f4f4;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .table-container td {
          border: none;
          padding: 0;
        }

        /* Only show link like card body */
        .table-container td[data-label="Description"] {
          display: block;
          padding: 12px;
          font-size: 1rem;
        }

        /* Hide S.No and label text */
        .table-container td[data-label="S.No"],
        .table-container td::before {
          display: none !important;
        }

        .table-container td a {
          display: block;
          padding: 10px;
          color: #0056b3;
          background: white;
          border-radius: 8px;
          text-decoration: none;
          font-weight: 500;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }
      }

      /* Default styling for Terrestrial Products Table */
      .table-container-2 table {
        width: 100%;
        border-collapse: collapse;
      }

      .table-container-2 th,
      .table-container-2 td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
      }

      /* Mobile responsive styling */
      @media screen and (max-width: 768px) {

        .table-container-2 table,
        .table-container-2 thead,
        .table-container-2 tbody,
        .table-container-2 th,
        .table-container-2 td,
        .table-container-2 tr {
          display: block;
          width: 100%;
        }

        .table-container-2 thead {
          display: none;
        }

        .table-container-2 tbody tr {
          margin: 10px 0;
          padding: 10px;
          border-radius: 10px;
          background: #f4f4f4;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .table-container-2 td {
          border: none;
          padding: 0;
        }

        /* Only show link content */
        .table-container-2 td[data-label="Description"] {
          display: block;
          padding: 12px;
          font-size: 1rem;
        }

        /* Hide S.No and any label */
        .table-container-2 td[data-label="S.No"],
        .table-container-2 td::before {
          display: none !important;
        }

        .table-container-2 td a {
          display: block;
          padding: 10px;
          color: #0056b3;
          background: white;
          border-radius: 8px;
          text-decoration: none;
          font-weight: 500;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
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
                <h1 class="heading-title text-break text-center">Bhuvan Services</h1>
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
                <b>Bhuvan Services</b>
                </a>
              </li>
              <li class="current">
                <b>Thematic Services</b>
              </li>
              <li class="current">
                <b> Ocean Sciences and Atmosphere</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="bhuvan-main" id="thematic-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Services_Bhuvan_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Ocean Sciences and Atmosphere</h3>
              <br />
              <table id="myTable" class="table table-hover  table-striped-rows" id="p-style">
                <!-- <thead><tr><th id="p-style">S.No. </th><th id="p-style">Description</th></tr></thead> -->
                <tbody>
                  <tr>
                    <!-- <td  id="p-style">1</td> -->
                    <td id="p-style">
                      <a href="#" onclick="openOceanModal(); return false;">Ocean Products</a>
                    </td>
                  </tr>
                  <tr>
                    <!-- <td  id="p-style">2</td> -->
                    <td id="p-style">
                      <a href="#" class="modal-trigger" data-modal="modal2">Atmospheric Products</a>
                    </td>
                  </tr>
                  <tr>
                    <!-- <td  id="p-style">3</td> -->
                    <td id="p-style">
                      <a href="#" class="modal-trigger" data-modal="modal3">Cryosphere Products</a>
                    </td>
                  </tr>
                  <tr>
                    <!-- <td  id="p-style">4</td> -->
                    <td id="p-style">
                      <a href="#" onclick="openTerrestialModal(); return false;">Terrestrial Products</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
    </main>
    <?php include 'footer.php'; ?>
  </body>
</html>

<!-- Modal Structure -->
<div id="oceanProductsModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Ocean Products</h3>
      <button class="close-modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="search-container">
        <input type="text" id="oceanSearch" placeholder="Search ocean products..." class="search-input">
      </div>
      <!-- <div id="oceanProductsTableWrapper" class="table-container"> -->
      <div class="table-container">
        <table id="oceanProductsTable" id="p-style">
          <thead>
            <tr>
              <th>SNo</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <!-- Rows will be populated by JavaScript -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2: Atmospheric Products -->
<div id="modal2" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Atmospheric Products</h3>
      <button class="close-modal">&times;</button>
    </div>
    <div class="modal-body">
      <table id="p-style">
        <thead>
          <tr>
            <th>SNo</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="p-style">1</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&amp;s=NI&amp;p=cfri10&amp;g=AS" target="_blank">Cloud Fraction and Cloud Cover</a>
            </td>
          </tr>
          <tr>
            <td id="p-style">2</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&amp;s=NI&amp;p=dto&amp;g=AS" target="_blank">Derived Tropospheric Ozone</a>
            </td>
          </tr>
          <tr>
            <td id="p-style">3</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&amp;s=NI&amp;p=pblh&amp;g=AS" target="_blank">Planetary Boundary Layer Height (Daily, 7 Day, Monthly)</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal 3: 	Cryosphere Products -->
<div id="modal3" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Cryosphere Products</h3>
      <button class="close-modal">&times;</button>
    </div>
    <div class="modal-body">
      <table id="p-style">
        <thead>
          <tr>
            <th>SNo</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="p-style">1</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&amp;s=NI&amp;g=CS&amp;p=scf" target="_blank">AWiFS: Snow Cover FractionA</a>
            </td>
          </tr>
          <tr>
            <td id="p-style">2</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&amp;s=NI&amp;g=CS&amp;p=smf" target="_blank">Snow Melt and Freeze</a>
            </td>
          </tr>
          <tr>
            <td id="p-style">3</td>
            <td id="p-style">
              <a href="https://bhuvan-app3.nrsc.gov.in/downloadsma/index.php" target="_blank"> Snowmelt Antarctica</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal 4: 	Terrestrial Products -->
<div id="terrestialProductsModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Terrestrial Products</h3>
      <button class="close-modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="search-container">
        <input type="text" id="terrestrialSearch" placeholder="Search terrestrial products..." class="search-input">
      </div>
      <!-- <div id="terrestialProductsTableWrapper" class="table-container"> -->
      <div class="table-container-2">
        <table id="terrestialProductsTable" id="p-style">
          <thead>
            <tr>
              <th>SNo</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <!-- Rows will be populated by JavaScript -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {

    // Get all modal trigger links
    const modalTriggers = document.querySelectorAll('.modal-trigger');

    // Add click event to each trigger
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          const modalId = this.getAttribute('data-modal');
          const modal = document.getElementById(modalId);
          if (modal) {
            modal.style.display = 'block';
            // Focus on modal for keyboard accessibility
            modal.focus();
          }
        });
    });
  
    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-modal');
    
    // Add click event to each close button
    closeButtons.forEach(button => {
      button.addEventListener('click', function() {
        const modal = this.closest('.modal');
        closeModal(modal);
      });
    });
    
    // Close modal when clicking outside content
    window.addEventListener('click', function(e) {
      if (e.target.classList.contains('modal')) {
        closeModal(e.target);
      }
    });
      
    // Close modal on ESC key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        const openModals = document.querySelectorAll('.modal[style="display: block;"]');
        openModals.forEach(modal => {
          closeModal(modal);
        });
      }
    });
      
    // Helper function to close modal
    function closeModal(modal) {
      if (modal) {
        modal.style.display = 'none';
      }
    }
      // Make modals focusable for keyboard navigation
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
      modal.setAttribute('tabindex', '0');
    });
  });

  // Ocean Products Data
  const oceanProducts = [{
    sno: 1,
    desc: "Chlorophyll - OC2 - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc2"
    }, {
    sno: 2,
    desc: "Chlorophyll - OC2 - North Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc2l"
    }, {
    sno: 3,
    desc: "Chlorophyll - OC4 - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc4"
    }, {
    sno: 4,
    desc: "Chlorophyll - OC4 - North Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc4l"
    }, {
    sno: 5,
    desc: "Co-Tidal Map (K1O1) Amplitude-Phase",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tamp"
    }, {
    sno: 6,
    desc: "Co-Tidal Map (M2S2) Amplitude-Phase",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tph"
    }, {
    sno: 7,
    desc: "Daily Ocean Heat Content of 700m Layer",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ohc"
    }, {
    sno: 8,
    desc: "Daily Ocean Mean Temperature",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=omt1"
    }, {
    sno: 9,
    desc: "Daily Tropical Cyclone Heat Potential",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tchp"
    }, {
    sno: 10,
    desc: "Diffuse Attenuation Coefficient at 490 nm - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=kd490"
   }, {
    sno: 11,
    desc: "Diffuse Attenuation Coefficient at 490 nm - North Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=kd490l"
    }, {
    sno: 12,
    desc: "Dissolved Inorganic Carbon",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=dic&g=OS"
   }, {
    sno: 13,
    desc: "Eddy Kinetic Energy",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=eke"
   }, {
    sno: 14,
    desc: "Eddy Kinetic Energy - Daily",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=eked25&g=OS"
    }, {
    sno: 15,
    desc: "Ekman Currents - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ekecg&g=OS"
    }, {
    sno: 16,
    desc: "Ekman Currents - Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ekec"
  }, {
     sno: 17,
    desc: "Geostrophic Currents - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=geocg"
   }, {
    sno: 18,
    desc: "Geostrophic Currents - Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=geoc"
    }, {
    sno: 19,
    desc: "Mean Sea Level Anomaly",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=msla"
   }, {
    sno: 20,
    desc: "Model Derived Depth of 26°C Isotherm",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=mdd26"
    }, {
    sno: 21,
    desc: "Model Derived Tropical Cyclone Heat Potential",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=mdtchp"
   }, {
    sno: 22,
    desc: "OSCAT Ocean Wind - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wsw25"
    }, {
    sno: 23,
    desc: "OSCAT Ocean Wind - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wswg"
    }, {
    sno: 24,
    desc: "OSCAT Ocean Wind Curl - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wsc25"
    }, {
    sno: 25,
    desc: "OSCAT Ocean Wind Curl - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wscg"
    }, {
    sno: 26,
    desc: "OSCAT Ocean Wind Stress - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wst25"
   }, {
    sno: 27,
    desc: "OSCAT Ocean Wind Stress - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wstg"
  }, {
    sno: 28,
    desc: "SCATSAT Ocean Wind - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsw25&g=OS"
  }, {
    sno: 29,
    desc: "SCATSAT Ocean Wind - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsw50&g=OS"
  }, {
    sno: 30,
    desc: "SCATSAT Ocean Wind Curl - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsc25&g=OS"
  }, {
    sno: 31,
    desc: "SCATSAT Ocean Wind Curl - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsc50&g=OS"
  }, {
    sno: 32,
    desc: "SCATSAT Ocean Wind Stress - 25Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swst25&g=OS"
  }, {
    sno: 33,
    desc: "SCATSAT Ocean Wind Stress - 50Km",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swst50&g=OS"
    }, {
    sno: 34,
    desc: "SCATSAT Sea Level Pressure",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=sslp50&g=OS"
    }, {
    sno: 35,
    desc: "Sea Level Pressure",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=slp"
    }, {
    sno: 36,
    desc: "Sea Surface Height - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=sshg&g=OS"
    }, {
    sno: 37,
    desc: "Sea Surface Height - Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ssh"
    }, {
    sno: 38,
    desc: "Total Alkalinity",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=tal&g=OS"
    }, {
    sno: 39,
    desc: "Total Currents - Global",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=totcg&g=OS"
    }, {
    sno: 40,
    desc: "Total Currents - Indian Ocean",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=totc"
    }];

  function initializeOceanTable() {
    const tbody = document.querySelector('#oceanProductsTable tbody');
    tbody.innerHTML = '';
    oceanProducts.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
    <td data-label="S.No">${item.sno}</td>
    <td data-label="Description">
      <a href="${item.url}" target="_blank" rel="noopener noreferrer">${item.desc}</a>
    </td>
        `;
      tbody.appendChild(row);
    });
  }
  // Search functionality
  document.getElementById('oceanSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#oceanProductsTable tbody tr');
    rows.forEach(row => {
      const cells = row.querySelectorAll('td');
      let rowText = '';
      cells.forEach(cell => rowText += cell.textContent.toLowerCase() + ' ');
      if (rowText.includes(searchTerm)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });

  // Modal control functions
  function openOceanModal() {
    document.getElementById('oceanProductsModal').style.display = 'block';
    initializeOceanTable();
  }

  function closeModal() {
    document.getElementById('oceanProductsModal').style.display = 'none';
    document.getElementById('oceanSearch').value = '';
    document.getElementById('terrestialProductsModal').style.display = 'none';
    document.getElementById('terrestrialSearch').value = '';
  }

  // Event listeners
  document.querySelector('.close-modal').addEventListener('click', closeModal);
  window.addEventListener('click', function(event) {
    if (event.target === document.getElementById('oceanProductsModal')) {
      closeModal();
    }
    if (event.target === document.getElementById('terrestialProductsModal')) {
      closeModal();
    }
  });

  // ESC key to close modal
  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      closeModal();
    }
  });
  
  const terrestialProducts = [{
    sno: 1,
    desc: "Annual Cropland Data set",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=acd&g=TS"
  }, {
    sno: 2,
    desc: "AWiFS: Snow Albedo",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=salbedo&g=TS"
  }, {
    sno: 3,
    desc: "AWiFS: Water Bodies Fraction",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=wbf"
  }, {
    sno: 4,
    desc: "Forest Fire Regime (3 Parameters)",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ff&g=TS"
  }, {
    sno: 5,
    desc: "Forest Fraction Cover",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ffc&g=TS"
  }, {
    sno: 6,
    desc: "Forest Type 5Km grid (14 Parameters)",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ftg&g=TS"
  }, {
    sno: 7,
    desc: "Hydrological Products",
    url: "https://bhuvan-app3.nrsc.gov.in/nices/"
  }, {
    sno: 8,
    desc: "Indian Soil Datasets (3 Parameters)",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=isd&g=TS"
  }, {
    sno: 9,
    desc: "Land Degradation (4 Parameters)",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ldd&g=TS"
  }, {
    sno: 10,
    desc: "Mesoscale compatible inputs for: MM5",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=mm5"
  }, {
    sno: 11,
    desc: "Mesoscale compatible inputs for: WRF",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=wrf"
  }, {
    sno: 12,
    desc: "Net Ecosystem Productivity - GIMMS",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=nep"
  }, {
    sno: 13,
    desc: "Net Ecosystem Productivity - MODIS",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=nepm&g=TS"
  }, {
    sno: 14,
    desc: "Net Primary Productivity - GIMMS",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=npp"
  }, {
    sno: 15,
    desc: "Net Primary Productivity - MODIS",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=nppm&g=TS"
  }, {
    sno: 16,
    desc: "OCM2: Albedo",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=TR&p=albedo"
  }, {
    sno: 17,
    desc: "OCM2: Filter Normalized Difference Vegetation Index",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=LV&p=fndvi"
  }, {
    sno: 18,
    desc: "OCM2: Normalized Difference Vegetation Index - Global Coverage",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=ndvigc"
  }, {
    sno: 19,
    desc: "OCM2: Normalized Difference Vegetation Index - Local Coverage",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=ndvi"
  }, {
    sno: 20,
    desc: "OCM2: Vegetation Fraction",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=LV&p=vf"
  }, {
    sno: 21,
    desc: "OCM: Surface Water Layer Products_2Day Repeativity",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=TR&p=swp"
  }, {
    sno: 22,
    desc: "Surface Soil Moisture - 2 Day",
    url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=ssm2"
  }];

  function initializeTerrestialTable() {
    const tbody = document.querySelector('#terrestialProductsTable tbody');
    tbody.innerHTML = '';
    oceanProducts.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
          
	<td data-label="S.No">${item.sno}</td>
	<td data-label="Description">
		<a href="${item.url}" target="_blank" rel="noopener noreferrer">${item.desc}</a>
	</td>
        `;
      tbody.appendChild(row);
    });
  }
  // Search functionality
  document.getElementById('terrestrialSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#terrestialProductsTable tbody tr');
    rows.forEach(row => {
      const cells = row.querySelectorAll('td');
      let rowText = '';
      cells.forEach(cell => rowText += cell.textContent.toLowerCase() + ' ');
      if (rowText.includes(searchTerm)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
  // Modal control functions
  function openTerrestialModal() {
    document.getElementById('terrestialProductsModal').style.display = 'block';
    initializeTerrestialTable();
  }
</script><script>
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