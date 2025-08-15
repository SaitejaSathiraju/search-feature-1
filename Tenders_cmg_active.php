<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tenders</title>
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

      .pagination {
        flex-wrap: wrap;
      }

      .page-item {
        margin-bottom: 5px;
      }

      #searchInput {
        margin-bottom: 20px;
      }

      #p-style {
        font-size: 20px;
      }

      @media (max-width: 576px) {
         #p-style {
          font-size: 16px !important;
        }

        .table-responsive {
          margin-bottom: 20px;
        }
      #myTable, #myTable tbody, #myTable tr, #myTable td {
        display: block;
        width: 100%;
        box-sizing: border-box;
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
      }

      #myTable td {
        padding: 10px;
        border-bottom: 1px solid #eee;
        text-align: left;
        word-break: break-word;
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

      a {
        word-break: break-word;
        white-space: normal;
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
                <h1 class="heading-title text-break text-center">Tenders</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Tenders</b>
              </li>
              <li class="current">
                <b>Civil Works/Construction</b>
              </li>
              <li class="current">
                <b>Active</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="TendersActive-main" id="TendersActive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Tenders_Services_List.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3> Active Tenders </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search...">
              <div class="table-responsive">
                <table id="myTable" class="table table-hover table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-nowrap">Tender No.</th>
                      <th scope="col">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/02/2498/2025-26, Dt. 11.04.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_2498.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of Synchronous panels, bus ducts and allied electrical works for 2 x 750 kVA DG sets at NRSC Balanagar Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/01/2497/2025-26, Dt. 11.04.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_2497.pdf" target="_blank" id="p-style">Construction of New Canteen Building at Jeedimetla campus, NRSC, Hyderabad.(Composite Contract for civil, PH and Electrical works).</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/66/24073/2024-25, Dt.10.03.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24073_I.pdf" target="_blank" id="p-style">CORRIGENDUM - I: Comprehensive Annual Maintenance Contract for operation and maintenance of pumps, internal &amp; external water supply systems at Balanagar campus and other miscellaneous plumbing / carpentry works etc., at NRSC campuses of Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/65/24072/2024-25, Dt. 26.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24072_II.pdf" target="_blank" id="p-style">CORRIGENDUM - II: Supply and fixing of SS Mesh to Door &amp; Windows at Drivers Rest Room, Reception Building and Providing &amp; Fixing Roller Blinds at Data Centre IMGEOS C Block Extension at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/67/24074/2024-25, Dt. 12.03.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24074.pdf" target="_blank" id="p-style">Annual Maintenance Contract for Housekeeping / Gardening / Civil, Electrical &amp; Fire Frightening system maintenance and upkeep at upkeep at RRSC (E), Kolkata.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/66/24073/2024-25, Dt. 10.03.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24073.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for operation and maintenance of pumps, internal &amp; external water supply systems at Balanagar campus and other miscellaneous plumbing / carpentry works etc., at NRSC campuses of Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/65/24072/2024-25, Dt. 26.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24072.pdf" target="_blank" id="p-style">Supply and fixing of SS Mesh to Door &amp; Windows at Drivers Rest Room, Reception Building and Providing &amp; Fixing Roller Blinds at Data Centre IMGEOS C Block Extension at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/64/24071/2024-25, Dt. 12.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24071.pdf" target="_blank" id="p-style">Providing Crockery Cup Board in Guest House, Construction of drain beside compound wall and other repair works (Civil) At RRSC Central Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/60/24067/2024-25, Dt. 04.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_240_67_I_.pdf" target="_blank" id="p-style">Supply, installation, testing and Commissioning of 800kVA OLTC 11/0.433Kv 50Hz transformer by replacing existing old 750kVA transformer at NRSC campus, Balanagar Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/61/24068/2024-25, Dt. 04.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24068.pdf" target="_blank" id="p-style">Refurbishment of earthing system for various facilities of IMGEOS along with repairing of old street lighting system at old office area, supply and laying of LT cables for existing street light panel/poles &amp; bore well at NRSC, Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/62/24069/2024-25, Dt. 04.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24069.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of 2.0 TR capacity energy efficient 5 star inverter type Hi wall split AC units at various facilities of NRSC Balanagar campus Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/63/24070/2024-25, Dt. 05.02.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24070.pdf" target="_blank" id="p-style">Supply and installation / Replacement of All in one LED solar street lights at NRSC, Jeedimetla campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/46/24056/2024-25, Dt. 27.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_24056.pdf" target="_blank" id="p-style">CORRIGENDUM - II: Reinstallation of 25kWp on-grid Solar Power Plant at Atmospheric Building and 5kWp standalone solar plant at New Land in RC-E, Newtown, Kolkata.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/59/23034-R2/2024-25, Dt. 24.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_23034R2.pdf" target="_blank" id="p-style">Refurbishment / Renovation of existing internal wiring, Light fixtures, fans, geysers, exhaust fan etc, in type 2 quarters proposed guest house 2 at AV Complex civil line Nagpur. (Re- Tender).</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/57/23075-R1/2024-25, Dt. 24.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_23075R1.pdf" target="_blank" id="p-style">Re-Construction of size stone compound wall stretches damaged due to floods and providing Hume pipes drains from campus to Nallah at Antariksh Vihar Colony, RRSC C Nagpur. (Re- Tender)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/58/23081- R1/2024-25, Dt. 24.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_23081R1.pdf" target="_blank" id="p-style">Conversion of Type II quarters as Guest Rooms at Antariksh Vihar, RRSC C Nagpur (Re-Tender)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/56/24066/2024-25, Dt. 24.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24066.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of 250 kVA transformer and allied electrical works at RRSC - C, Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/51/24061/2024-25, Dt. 06.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24061.pdf" target="_blank" id="p-style">Providing Support services for various divisions of NRSC at Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/ NIT/ET/53/24063/2024-25, Dt. 06.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24063.pdf" target="_blank" id="p-style">Comprehensive AMC for maintenance of gardens, lawns and greenary at NRSC, Balanagar &amp; Old Airport campus Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/54/24064/2024-25, Dt. 06.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24064.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for mechanized housekeeping and area cleaning of Balanagar campus, Old Airport campus and Moula ali campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/ NIT/ET/55/24065/2024-25, Dt. 06.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24065.pdf" target="_blank" id="p-style">Providing Carpentry, Plumbing &amp; Pest Control Services at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/ NIT/ET/49/24059/2024-25, Dt. 03.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24059_1.pdf" target="_blank" id="p-style">Annual Maintenance and Service Contract for Smoke Detection Systems installed in various buildings of NRSC Balanagar, Jeedimetla and Old Airport Campuses, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/ NIT/ET/50/24060/2024-25, Dt. 03.01.2025</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24060.pdf" target="_blank" id="p-style">Comprehensive AMC for mechanized housekeeping, area cleaning and guest services in Guest House - I &amp; II at NRSC Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/48/24058/2024-25, Dt. 30.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24058.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of 50kVA DG set, AMF panels &amp; allied electrical works at Guest house of RRSC - C, Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/46/24056/2024-25, Dt. 27.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24056.pdf" target="_blank" id="p-style">Reinstallation of 25 kWp on-grid Solar Power Plant at Atmospheric Building and 5kWp standalone solar plant at New Land in RC-E, Newtown, Kolkata.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/41/24050/2024-25, Dt. 29.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24050.PDF" target="_blank" id="p-style">CORRIGENDUM: Proposed Cable Trench from AS – 7 Antenna Terminal to IMGEOS Block A at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/47/24057/2024-25, Dt. 20.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24057.pdf" target="_blank" id="p-style">Civil works for new DG shed consisting of RCC foundation and structural steel works for roof sheets at NRSC, Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/43/24053/2024-25, Dt. 19.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24053.pdf" target="_blank" id="p-style">Periodical painting of IMGEOS, NDEM and Antenna Terminal Buildings at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/44/24054/2024-25, Dt. 19.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24054.pdf" target="_blank" id="p-style">Supply, installation, testing and commissioning of resin cast type current transformer, multi function meters and connected accessories for the measurement of electrical parameters in incoming/ outgoing feeders of already installed LT electrical panels at NRSC Balanagar Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/45/24055/2024-25, Dt. 19.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24055.pdf" target="_blank" id="p-style">Providing RCC foundation for DG sets near service bay at NRSC Balanagar Campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/42/24052/2024-25, Dt. 13.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24052.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of AC system for multimedia studio at NRSC Balanagar Campus Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/37/24047/2024-25, Dt. 11.12.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24047.pdf" target="_blank" id="p-style">Design, Providing, Fabrication and Fixing of compact Ploycarbonate sheet on Pergola and replacement of Ploycarbonate sheet over the MS framed structure for Canopy at RRSC –S, Marathahalli, Bangalore. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/41/24050/2024-25, Dt. 29.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_41_24050_2024-25.pdf" target="_blank" id="p-style">Proposed Cable Trench from AS – 7 Antenna Terminal to IMGEOS Block A at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/40/24051/2024-25, Dt. 29.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_40_24051_2024-25.pdf" target="_blank" id="p-style">Providing water proofing treatment over the terrace and water tank of quarter B type, C type (Old &amp; New), D type (Old &amp; New) and E type at NRSC Housing colony, Hasmathpet Secunderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/38/24048/2024-25, Dt. 19.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_38_24048_2024-25.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of 800A Air Circuit Breakers (ACBs) &amp; Metering Instruments in the Main LT Panels at RRSC, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/39/24003-R1/2024-25, Dt. 14-11-2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_39_24003R1_2024-25.pdf" target="_blank" id="p-style">Comprehensive Annual maintenance contract for mechanized Housekeeping, area cleaning, Gardening, Electrical, AC &amp; Fire maintenance at RRSC(W), Jodhpur (Re-Tender)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/33/24042/2024-25, Dt. 05.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24042.pdf" target="_blank" id="p-style">Providing Water proofing treatment over the terrace of Building No.5,6,7 (DP Building) at NRSC Balanagar Campus..</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/34/24045/2024-25, Dt. 05.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24045.pdf" target="_blank" id="p-style">Essential civil works for Record Room in Building No: 26 (Finance &amp; Accounts Division) at NRSC Balanagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/36/24046/2024-25, Dt. 05.11.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24046.pdf" target="_blank" id="p-style">Supply and installation of LT panels and Distribution boards for Air Conditioning systems at NRSC, Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/30/24038/2024-25, Dt. 30.09.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/24038_I.pdf" target="_blank" id="p-style">CORRIGENDUM : Supply, Installation, Testing and Commissioning of self contained wall / floor mounted High performance Precision Air-conditioner of 2TR capacity for Beacon Antenna station at NRSC Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/35/24007-R1/2024-25, Dt. 15.10.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_35_24007_R1_2024-25.pdf" target="_blank" id="p-style">Proposed drilling of borewells for drawing/access the groundwater and masonry pedestal around borewell at NRSC Shadnagar campus (Re-Tender)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/32/24041/2024-25, Dt. 15.10.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_32_24041_2024-25.pdf" target="_blank" id="p-style">Supply and installation of Surge Protection Devices (SPDs) in existing MV panels at NRSC, Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/28/2493/2024-25, Dt. 19.09.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_25_2024-28_CORRIGENDUM_I_2493.pdf" target="_blank" id="p-style">CORRIGENDUM : Design, Supply, Installation, Testing and Commissioning of external fire hydrant system for RRSC-West campus, Jodhpur. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/25/2494/2024-25, Dt. 19.09.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_25_2024-25_CORRIGENDUM_II_2494.pdf" target="_blank" id="p-style">CORRIGENDUM: Repairs and Renovation to type D (4 nos), type E (4 nos) and duplex (1no) at AV complex, residential staff quarters at RRSC-C, Nagpur. (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/28/2493/2024-25, Dt. 29.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_2493.pdf" target="_blank" id="p-style">Design, Supply, Installation, Testing and Commissioning of external fire hydrant system for RRSC-West campus, Jodhpur. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/29/24037/2024-25, Dt. 29.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24037.pdf" target="_blank" id="p-style">Repairs and Marking paint the existing two wheeler parking area at NRSC Balanagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/24/24033/2024-25, Dt. 01.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24033.pdf" target="_blank" id="p-style">CORRIGENDUM: Design, Supply, Installation and Fixing of High Tensile Sheet Roofing with structural steel frame work for Entrance Canopies at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/23/24032/2024-25, Dt. 01.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24032.pdf" target="_blank" id="p-style">CORRIGENDUM: Improvements of Toilets by Providing Automatic Sensor Taps at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/22/24031/2024-25, Dt. 12.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24031.pdf" target="_blank" id="p-style">Comprehensive AMC of Garden, Lawns,Landscape, Greenery &amp; Trees including Manpower, Material, Tools &amp; Plants, etc., at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/25/2494/2024-25, Dt. 08.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_2494.pdf" target="_blank" id="p-style">Repairs and Renovation to type D (4 nos), type E (4 nos) and duplex (1no) at AV complex, residential staff quarters at RRSC-C, Nagpur. (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/24/24033/2024-25, Dt. 02.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24033.pdf" target="_blank" id="p-style">Design, Supply, Installation and Fixing of High Tensile Sheet Roofing with structural steel frame work for Entrance Canopies at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/26/24034/2024-25, Dt. 02.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24034.pdf" target="_blank" id="p-style">Replacement of damaged Wooden Wall Panelling in HRD Class Room and Conference Hall with New Wall Panelling in building no.17 at NRSC Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/27/24036/2024-25, Dt. 02.08.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24036.pdf" target="_blank" id="p-style">Replacement of damaged ploycarbonate sheet roofing at various stair case head rooms in Building no. 6,7,16 at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/19/2495/2024-25, Dt. 26.07.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_19_2495_2024-25.pdf" target="_blank" id="p-style">Revamping of Fire protection system at NRSC Balanagar campus, Hyderabad (Civil and Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/20/24019/2024-25, Dt. 25.07.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_20_24019_2024-25.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of VRF AC systems at NRSC Balanagar campus Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/21/24030/2024-25, Dt. 26.07.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_21_24030_2024-25.pdf" target="_blank" id="p-style">Providing Solar Thermo-Reflective Paint to terrace of extended data centre (Block C Extension) at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/17/24021/2024-25, Dt. 26.07.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_17_2024-25.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing and laying Parking Tiles along with Concertina coil over boundary wall at RRSCEast office (AA-1B) and Joinery work at Security Kiosk at New land (AA – IID) RRSC-East, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/18/24026/2024-25, Dt. 27.06.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_18_24026_2024-25.pdf" target="_blank" id="p-style">Providing air conditioning facility for conference hall at RRSC – South, Bangalore Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/17/24021/2024-25, Dt. 24.06.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_17_24021_2024-25.pdf" target="_blank" id="p-style">Providing and laying Parking Tiles along with Concertina coil over boundary wall at RRSCEast office (AA-1B) and Joinery work at Security Kiosk at New land (AA – IID) RRSC-East, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/16/24022/2024-25, Dt. 24.06.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_16_24022_2024-25.pdf" target="_blank" id="p-style">Temporary and Part Time contract for mechanised housekeeping, area cleaning, horticulture and support services for day to day O &amp; M of Electrical &amp; Air Conditioning at Outreach Facility, NRSC, Jeedimetla Campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/15/24020/2024-25, Dt. 24.06.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_15_24020_2024-25.pdf" target="_blank" id="p-style">Supplying and fixing of Pigeon Nets at Antariksh Vihar and Transit House in NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/11/24012/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_24012.pdf" target="_blank" id="p-style">CORRIGENDUM - Improvement works to three rooms (Room Nos. 102, 103 &amp; 105), VIP Dining Area and New Suit Rooms at First Floor of Guest House, NRSC Balanagar Campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/06/24007/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24007.pdf" target="_blank" id="p-style">Proposed drilling of borewells for drawing/ access the groundwater and masonry pedestal around borewell at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/08/24009/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24009.pdf" target="_blank" id="p-style">Supply and Installation / Replacement of CFL/ FTL light fittings with LED light fittings at NRSC Balanagar, Jeedimetla and Shadnagar campuses.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/09/24010/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24010.pdf" target="_blank" id="p-style">Proposed approach road and grass paver block pathway at new Solar Plant at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/10/24011/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24011.pdf" target="_blank" id="p-style">Miscellaneous Civil Works for PAC at Extension to IMGEOS Block C at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/11/24012/2024-25, Dt. 15.05.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_24012.pdf" target="_blank" id="p-style">Improvement works to three rooms (Room Nos. 102, 103 &amp; 105), VIP Dining Area and New Suit Rooms at First Floor of Guest House, NRSC Balanagar Campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/12/24014/2024-25, Dt. 10-05-2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_12_24014_2024-25.pdf" target="_blank" id="p-style">Comprehensive annual maintenance service contract of Refrigeration &amp; Air conditioning units viz. Split ACs, Ductable ACs, water coolers, dispensers etc., AHUs, Kitchen exhaust systems and Evaporative cooling system in different locations at NRSC, Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/05/24006/2024-25, Dt. 15-04-2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_5_24006_2024-25.pdf" target="_blank" id="p-style">Electrical works for installation of AC systems &amp; UPS power points to PCs and conference Table at RRSC-South, Marthahalli, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/04/24004/2024-25, Dt. 02.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_04_24004_2024-25.pdf" target="_blank" id="p-style">Providing Security Sign Boards over Compound wall at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/03/24003/2024-25, Dt. 05.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_03_24003_2024-25.pdf" target="_blank" id="p-style">Comprehensive Annual maintenance contract for mechanized Housekeeping, area cleaning, Gardening, Electrical, AC &amp; Fire maintenance at RRSC(W), Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/02/24002/2024-25, Dt. 02.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_02_24002_2024-25.pdf" target="_blank" id="p-style">Providing store facility for CMG in the ground floor of extended service bay at NRSC,Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/01/24001/2024-25, Dt. 02.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_01_24001_2024-25.pdf" target="_blank" id="p-style">Providing water proofing works along with rain water pipes at stores Building and various technical areas at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/86/23092/2023-24, Dt. 05.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_86_23092_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM-Design, Supply, Erection, Testing Commissioning and Handing over of 250 kg capacity new Dumb waiter (service lift) at NRSC, Balanagar, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/85/23091/2023-24, Dt. 05.04.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_85_23091_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM-Providing irrigation system at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/86/23092/2023-24, Dt. 15.03.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_86_23092_2023-24.pdf" target="_blank" id="p-style">Design, Supply, Erection, Testing Commissioning and Handing over of 250 kg capacity new Dumb waiter (service lift) at NRSC, Balanagar, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/85/23091/2023-24, Dt. 15.03.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_85_23091_2023-24.pdf" target="_blank" id="p-style">Providing irrigation system at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/84/23090/2023-24, Dt. 15.03.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_84_23090_2023-24.pdf" target="_blank" id="p-style">Proposed Re-surfacing of existing internal roads and related works at NRSC, Balanagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/81/23034-R1/2023-24, Dt. 19.02.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_81_23034-R1_2023-24.pdf" target="_blank" id="p-style">Refurbishment / Renovation of existing internal wiring, Light fixtures, fans, geysers, exhaust fan etc, in type 2 quarters proposed guest house 2 at AV Complex civil line Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/76/23075/2023-24, Dt. 16.02.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_76_23075_2023-24.pdf" target="_blank" id="p-style">Re-Construction of size stone compound wall stretches damaged due to floods and providing Hume pipes drains from campus to Nallah at Antariksh Vihar Colony, RRSC C Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/79/23076/2023-24, Dt. 16.02.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_79_23076_2023-24.pdf" target="_blank" id="p-style">Re–Surfacing of existing internal roads and associated works at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/77/23081/2023-24, Dt. 16.02.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_77_23081_2023-24.pdf" target="_blank" id="p-style">Conversion of Type II quarters as Guest Rooms at Antariksh Vihar, RRSC C Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/80/23082/2023-24, Dt. 16.02.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_80_23082_2023-24.pdf" target="_blank" id="p-style">Construction of View Cutter with Green screen wall made with MS frame and GI hexagonal fencing along the boundary wall at NRSC Balanagar campus Phase – 1</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/65/23063/2023-24, Dt. 24.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_65_23063_2023-24.pdf" target="_blank" id="p-style">Temporary and part time contract for providing support services for carrying out day to day operation of electrical and air conditioning systems and maintenance of electrical systems at NRSC Balanagar, Old Airport and Barracks Miyapur campuses, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/64/23064/2023-24, Dt. 24.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_64_23064_2023-24.pdf" target="_blank" id="p-style">Temporary and part time comprehensive annual maintenance contract for the central AC plants, Package units, VRF AC system, Ductable AC system, Precision AC system and cold storage facilities at NRSC Balanagar, Outreach facility Jeedimetla and Old airport campuses</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/62/23061/2023-24, Dt. 10.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_62_23061_2023-24.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance and Service Contract for existing Solar Fencing System at NRSC, Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/61/23060/2023-24, Dt. 10.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_61_23060_2023-24.pdf" target="_blank" id="p-style">Annual maintenance contract for testing and analysing of water samples at various campus of NRSC Hyderabad and Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/60/23059/2023-24, Dt.10.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_60_23059_2023-24.pdf" target="_blank" id="p-style">Rectification works to pedestrian walkways from administrative building towards Stores building at NRSC Balanagar </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style" data-label="Tender no.">NRSC/CMG/NIT/ET/59/23058/2023-24, Dt. 10.01.2024</td>
                      <td data-label="Details">
                        <a href="./assets/pdf/tenders/CMG/NIT_59_23058_2023-24.pdf" target="_blank" id="p-style">Supply, installation, testing and Commissioning of 4.0 TR capacity tower AC in Auditorium at NRSC Balanagar,Hyderabad </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav aria-label="Tender pagination">
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
    const rowsPerPage = 10;
    const rows = Array.from(document.querySelectorAll("#myTable tbody tr"));
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput"); // Make sure this element exists
    function getFilteredRows() {
      const searchTerm = searchInput.value.toLowerCase();
      return rows.filter(row => Array.from(row.querySelectorAll("td")).some(cell => cell.textContent.toLowerCase().includes(searchTerm)));
    }

    function changePage(page) {
      currentPage = page;
      const filteredRows = getFilteredRows();
      const start = (page - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      // Hide all rows first
      rows.forEach(row => row.style.display = "none");
      // Show only matching rows within the current page range
      filteredRows.slice(start, end).forEach(row => row.style.display = "");
      // Update pagination styling
      const pageLinks = pagination.querySelectorAll(".page-item");
      pageLinks.forEach((li, i) => {
        li.classList.toggle("active", i === page - 1);
      });
    }

    function setupPagination() {
      const filteredRows = getFilteredRows();
      const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
      pagination.innerHTML = ""; // Clear existing pagination
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
      // Reset to first page
      changePage(1);
    }
    // Listen for input on search field
    searchInput.addEventListener("input", () => {
      setupPagination(); // Update pagination and rows
    });
    // Initialize on load
    document.addEventListener("DOMContentLoaded", function() {
      setupPagination();
      // Optional: menu button logic (already in your script)
      const menuBtn = document.getElementById("menuToggleBtn");
      $('#mobileSidebar').on('show.bs.collapse', function() {
        menuBtn.innerText = "Hide Menu";
      });
      $('#mobileSidebar').on('hide.bs.collapse', function() {
        menuBtn.innerText = "Show Menu";
      });
    });
  </script>
</html>