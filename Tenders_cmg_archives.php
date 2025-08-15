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
        /* Allow pagination to wrap on small screens */
      }

      .page-item {
        margin-bottom: 5px;
        /* Space between wrapped items */
      }

      #searchInput {
        margin-bottom: 20px;
      }

      #p-style {
        font-size: 20px;
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
                <b>Archives</b>
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
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Tenders_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3> Archives Tenders </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search...">
              <div class="table-responsive">
                <table id="myTable" class="table table-hover table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-nowrap">Tender</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_57_2492_2023-24.pdf" target="_blank" id="p-style">Reconstruction of compound wall all along the HAL side - from CISF building, Nursery to 11 kV HT yard at NRSC Balanagar campus, Hyderabad </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_55_23001_R1_2023-24.pdf" target="_blank" id="p-style">Periodical painting of building Nos 1,2,3,4,5,6,7,9, 10 &amp; 11 at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_54_23055_2023-24.pdf" target="_blank" id="p-style">Annual Maintenance Contract for fire-fighting system at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_43_230482023-24.pdf" target="_blank" id="p-style">CORRIGENDUM- Providing Washrooms for VIP Dining Hall and miscellaneous Civil &amp; PH works at Transit House at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_44_23042_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM - Repair &amp; miscellaneous maintenance works of Solar water heating system at canteen building, NRSC, Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_53_23054_2023-24.pdf" target="_blank" id="p-style">Civil Works for Augmentation of existing Conference Hall, Converting External Projects room as Class room and other Civil Works at RRSC S Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_52_23053_2023-24.pdf" target="_blank" id="p-style">Improvements to Room Nos. 101 to 103 &amp; 105 to 107 for DPSG Bldg No. 05 at NRSC Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_49_23052_2023-24.pdf" target="_blank" id="p-style">Minor Civil Works for the relocation of ASAG in DP Building (No. 06) at NRSC Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_48_23051_2023-24.pdf" target="_blank" id="p-style">Re-modelling of existing GID lab at FF DP building (No. 06) at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_47_23050_2023-24.pdf" target="_blank" id="p-style">Providing roof sheet parking shed for 2 - wheeler parking behind CISF barracks at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_23043.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for maintenance of all building services like area cleaning, plumbing, gardening and operation and maintenance of Electrical works at NRSC Housing Colony at Hasmathpet, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_23044.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for maintenance of building services like Plumbing, Electrical works, Gardening and Area cleaning at NRSC Housing Colony at Banjara Hills, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_43_23048_2023-24.pdf" target="_blank" id="p-style">Providing Washrooms for VIP Dining Hall and miscellaneous Civil &amp; PH works at Transit House at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_44_23042_2023-24.pdf" target="_blank" id="p-style">Repair &amp; miscellaneous maintenance works of Solar water heating system at canteen building, NRSC, Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_45_23045_2023-24.pdf" target="_blank" id="p-style">Supply and installation of light fixtures for outdoor spaces, landscape and facades for beautification of campus for ensuing Golden Jubilee celebrations at Balanagar campus,NRSC, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_42_23047_2023-24.pdf" target="_blank" id="p-style">Providing False Ceiling to Scientists Rooms and Library in First Floor and Horizontal Blinds to Windows at RRSC-S, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_46_23049_2023-24.pdf" target="_blank" id="p-style">Providing Modest wall panels at Stage area &amp; LVT flooring and Pile yarn carpet tile flooring at steps of Auditorium at NRSC Campus Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_35_23035_I_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM: External electrical works for providing emergency power supply for international Hostel (D2 quarters) at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_34_23031_I_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM: Providing air conditioning facility for proposed hostel at fourth floor of staff quarters, RRSC -West Campus, Jodhpur, Rajasthan</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_33_23034_I_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM: Refurbishment / Renovation of existing internal wiring, Light fixtures, fans, geysers, exhaust fan etc, in type 2 quarters proposed guest house 2 at AV Complex civil line Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_30_2491_II_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM: Vertical extension above pantry of Office building for facility like Recreation room and VIP sitting at RRSC-S, Bangalore (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_39_23038_2023-24.pdf" target="_blank" id="p-style">Annual Maintenance Contract for Operation and Maintenance of Electrical and Air Conditioning systems at RRSC-C Office campus and Antariksha Vihar campus, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_38_23037_2023-24.pdf" target="_blank" id="p-style">AMC for housekeeping, gardening, pump operations, canteen and guest house support services at RRSC –C officer campus and Antariksha Vihar campus, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_37_23029_2023-24.pdf" target="_blank" id="p-style">Supply and laying of LT power cables from New sub-station (Ph-II) to Old sub-station (Phase-I) at NRSC Jeedimetla campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_36_22016_2023_24.pdf" target="_blank" id="p-style">Annual Maintenance contract for Termite, Rodent, Snakes and Pest Control measures at office and Antariksh Vihar at RRSC C Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_35_23035_2023-24.pdf" target="_blank" id="p-style">External electrical works for providing emergency power supply for international Hostel (D2 quarters) at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_34_23031_2023-24.pdf" target="_blank" id="p-style">Providing air conditioning facility for proposed hostel at fourth floor of staff quarters, RRSC -West Campus, Jodhpur, Rajasthan</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_33_23034_2023-24.pdf" target="_blank" id="p-style">Refurbishment / Renovation of existing internal wiring, Light fixtures, fans, geysers, exhaust fan etc, in type 2 quarters proposed guest house 2 at AV Complex civil line Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_32_23030_2023-24.pdf" target="_blank" id="p-style">Providing chain link Fencing with masonry dwarf wall including MS Gates for bifurcation of technical &amp; housing area at NRSC, Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_31_23032_2023-24.pdf" target="_blank" id="p-style">Providing Polyfiber panel wall paneling of Auditorium at NRSC campus, Jeedimetla</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_30_2491_2023-24.pdf" target="_blank" id="p-style">Vertical extension above pantry of Office building for facility like Recreation room and VIP sitting at RRSC-S, Bangalore (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_29_23033_2023-24.pdf" target="_blank" id="p-style">Providing wooden stage with flooring at 150 seater Conference Hall, Room No. A-82 in KRA at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_28_2490_2023-24.pdf" target="_blank" id="p-style">Construction of new Barracks for CISF at Miyapur, NRSC (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_24_2489_2023-24.pdf" target="_blank" id="p-style">CORRIGENDUM: Refurbishment of Aircraft hanger at Old Airport campus Begumpet (Civil &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_1_NIT_20_23022_2023-24.PDF" target="_blank" id="p-style">CORRIGENDUM: Repairs and Renovation of Toilets (5 Nos) under Phase II at RRSC-South, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_27_23028_2023-24.pdf" target="_blank" id="p-style">Construction of Feature Wall 11.5feet high for beautification of the campus near Auditorium at NRSC Campus, Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_26_23024_2023-24.pdf" target="_blank" id="p-style">Repair and Rehabilitation of RCC overhead tank at NRSC, Balanagar Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_25_23014_2023-24.pdf" target="_blank" id="p-style">Construction of GLR of 50Cum capacity for Manjeera water and pump room at CISF Barracks, Miyapur, Hyderabad. (Civil &amp; Electrical)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_24_2489_2023-24.pdf" target="_blank" id="p-style">Refurbishment of Aircraft hanger at Old Airport campus Begumpet (Civil &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_23_23026_2023-24.pdf" target="_blank" id="p-style">Supply, installation, testing and commissioning of 1.0 / 1.5 / 2.0 TR Inverter Type Hi Wall Split AC Units with all accessories at the proposed International Hostel, NRSC, Shadnagar (for 10 Nos of quarters)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22_23027_2023-24.pdf" target="_blank" id="p-style">Construction of compound wall beside of transport sheds to the corner at NRSC Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21_23025_2023-24.pdf" target="_blank" id="p-style">Repair and Painting works to Guest House and minor rectification work at Ground Floor and First Floor of Office building at RRSC- East, New Town, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_20_23022_2023-24.pdf" target="_blank" id="p-style">Repairs and Renovation of Toilets (5 Nos) under Phase II at RRSC-South, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_17_23015_2023-24.pdf" target="_blank" id="p-style">Repairs to stop rain beating in to corridors and labs by design, providing, fabrication and fixing of compact poly carbonate sheeting on pergola at RRSC South, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_16_23023_2023-2024.pdf" target="_blank" id="p-style">Supply of Water through Tankers to CISF Barracks at Miyapur and Drinking Water from NRSC Balanagar to various other campuses of NRSC Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_18_23020_2023-2024.pdf" target="_blank" id="p-style">External and Internal painting works for occupied quarters at RRSC- C, Antariksh Vihar, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_15_23018_2023-2024.pdf" target="_blank" id="p-style">Electrical works for modifications to D Type Quarters (8 Nos) for International hostel at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_16_23021_2023-24.pdf" target="_blank" id="p-style">Conversation of 4th floor of staff quarters (2 nos D type and 1 no E type) to Trainees hostel at RRSC-W, Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_14_23017_2023-24.pdf" target="_blank" id="p-style">Resurfacing of internal road and repairs to open drain at RRSC E, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_13_23013_2023-24.pdf" target="_blank" id="p-style">Repairs in ACP fins / Cladding up to height of 12m level on back side – North wing to arrest leakages at main building RRSC-E, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_12_23011_2023-24.pdf" target="_blank" id="p-style">Providing support services for operation and maintenance of 33/0.433kV and 11/0.433kV substations including street lights, operation of DG sets, AC plants &amp; water supply systems at NRSC Shadnagar, campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_11_23010_2023-24.pdf" target="_blank" id="p-style">Providing black top on existing BT roads and providing kerb stones along the sides of road at NRSC Housing colony, Secunderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10_2488_2023-24.pdf" target="_blank" id="p-style">Refurbishment of Auditorium including augmentation of internal Electrical systems at NRSC Balanagar (Civil &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_7_2487_2023-24.pdf" target="_blank" id="p-style">Construction of Primary health centre (PHC) at NRSC, Balanagar campus (Composite work consisting of Civil, PH &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9_23006_2023-24.pdf" target="_blank" id="p-style">Repairs to Jodhpur stone cladding for Office Building and Transit House at RRSC-W Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_6_23007_2023-24.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance and Service contract work for Motorized gates at NRSC Balanagar Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_7_23008_2023-24.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for standard refrigeration and AC units at various campuses of NRSC (Balanagar, Jeedimetla and Old Airport campuses) Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_8_23009_2023-24.pdf" target="_blank" id="p-style">Internal modifications to D type Quarters (8 Nos) at Antariksh Vihar for converting to International hostel for CSSTEAP training at NRSC Shadnagar campus - Phase I</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_04_23005_2023-24.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract for 500TR capacity chiller water Central air conditioning system at IMGEOS and NDEM facility at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_03_23003_2023-24.pdf" target="_blank" id="p-style">Comprehensive AMC for RO units (2 Nos) at NRSC Old airport Area, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_1_23002_2023-24.pdf" target="_blank" id="p-style">Arresting leakages, stagnation of water and other repairs at RRSC-S Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2_23001_2023-24.pdf" target="_blank" id="p-style">Periodical painting of building Nos 1,2,3,4,5,6,7,9, 10 &amp; 11 at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_1_2484_UPS_2023-24.pdf" target="_blank" id="p-style">Supply, Installation, Testing &amp; Commissioning of 10 kVA UPS for CISF control room at NRSC, Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_50_CORRIGENDUM_22039_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM : Design, Supply, Installation and Commissioning of Two Pan Bio-Tiolet at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_51_22041_2022-2023.pdf" target="_blank" id="p-style">Annual Maintenance Contract for Area Cleaning,Dozing along the firefighting line, power fencing, solar power plant, perimeter road, etc. at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_49_22038_2022-2023.pdf" target="_blank" id="p-style">Laying of LT cables for Antenna Terminal (AS - I), Block B of IMGEOS and replacement of operating mechanism of Air circuit breakers along with supply of Automatic voltage regulating relay and tripping coils at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_47_22036-II_2022-2023.pdf" target="_blank" id="p-style">CORRIGENDUM: Comprehensive Annual Maintenance Contract of Package / Ductable split / Cassette split Air Conditioning infrastructure at RC-Central &amp; Visiting Scientists Hostel, Antariksh Vihar Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_52_22043_2022-23.pdf" target="_blank" id="p-style">Temporary and part time contract for housekeeping, Gardening, Civil, Electrical and firefighting systems maintenance and upkeep at RRSC(E), Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_50_22039_2022-2023.pdf" target="_blank" id="p-style">Design, Supply, Installation and Commissioning of Two Pan Bio-Tiolet at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_46_22035_2022-2023.pdf" target="_blank" id="p-style">CORRIGENDUM: Maintenance repairs to Occupied Quarters (Type B -06 Nos, Type C – 01 No, Type D – 03 Nos and Type E – 03 Nos) at Antariksh Vihar Staff Quarters and Office buildings at RC-C Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_47_22036_I_2022-2023.pdf" target="_blank" id="p-style">CORRIGENDUM: Comprehensive Annual Maintenance Contract of Package / Ductable split / Cassette split Air Conditioning infrastructure at RC-Central &amp; Visiting Scientists Hostel, Antariksh Vihar Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_48_2445R1_AC_2022-23.pdf" target="_blank" id="p-style">Providing Precision Air Conditioning system for DATA Centre -Horizontal Extension of Block B and C at IMGEOS facility, NRSC Campus Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_47_22036_2022-23.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract of Package / Ductable split / Cassette split Air Conditioning infrastructure at RC-Central &amp; Visiting Scientists Hostel, Antariksh Vihar Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_46_22035_2022-23.pdf" target="_blank" id="p-style">Maintenance repairs to Occupied Quarters (Type B -06 Nos, Type C – 01 No, Type D – 03 Nos and Type E – 03 Nos) at Antariksh Vihar Staff Quarters and Office buildings at RC-C Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_45_22037_2022-23.pdf" target="_blank" id="p-style">Providing air coolers on hire basis for sitting / office areas at various campuses of NRSC, Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_44_22034_2022-23.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Pest, Termite, Reptile &amp; Rodent Control at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_36_22026_2022-23.pdf" target="_blank" id="p-style">Improvement works to three rooms (Room Nos. 102,103 &amp; 105), VIP Dining Area and New Suit Rooms at First Floor of Guest House, NRSC Balanagar Campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22029.pdf" target="_blank" id="p-style">Supply and Laying of LT cables for S/Ka-2 and HRSAT Antenna buildings at NRSC, Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22030.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / Maintenance Civil &amp;PH works at NRSC Balanagar and allied units at Jeedimetla,Hasmathpet, Old Airport, Moulali, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22031.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / MaintenanceElectrical works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Moulali, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22032.pdf" target="_blank" id="p-style">Term contract for execution of Minor/ Maintenance Civil &amp; PH works at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22033.pdf" target="_blank" id="p-style">Term contract for execution of Minor/Maintenance Electrical works at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_37_22027_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM: Supply, Installation, Testing and Commissioning of Smoke Detection System for CISF Control Room at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_37_22027_2022-23.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of Smoke Detection System for CISF Control Room at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_34_22025_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM: Replacement of existing damaged/ shaded wall paneling with partly veneer/ laminated panels and partly with fabric in Director's Conference Hall at NRSC Balanagar campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_34_22025_2022-23.pdf" target="_blank" id="p-style">Replacement of existing damaged/ shaded wall paneling with partly veneer/ laminated panels and partly with fabric in Director's Conference Hall at NRSC Balanagar campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_33_2485R_2022-23.pdf" target="_blank" id="p-style">Strengthening of security measures by providing new ACS structure, security observation post along with gate, Construction of additional room at CISF building (consisting of Civil &amp; Electrical Works) at NRSC Balanagar Campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_30_22023_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Maintenance &amp; Renovation works for Washrooms (4 Nos.) at RRSC-South Campus, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_32_22024_2022-23.pdf" target="_blank" id="p-style">Providing Cement Concrete Road Approaches to New Substation Building at NRSC Shadnagar Campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_31_2481CT_2022-23.pdf" target="_blank" id="p-style">Construction of proposed cable trench for S/KA Antenna building at DIPAC, Delhi </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_21_22017_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM-II : Relaying of existing BT Road at NRSC Balanagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_30_22023_2022-23.pdf" target="_blank" id="p-style">Maintenance &amp; Renovation works for Washrooms (4 Nos.) at RRSC-South Campus, Bangalore</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_29_22022_2022-23.pdf" target="_blank" id="p-style">Annual Maintenance Contract for Sewage Treatment Plants (STPs), Reverse Osmosis(RO) Water Treatment Plants at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_22020.pdf" target="_blank" id="p-style">CORRIGENDUM: Providing installation and commissioning of FRP portable single toilet for ladies washroom of size 4' x 4' x 7' 6" and other single toilet for divyangan of size 8' x 8' x 7' 6" and other miscellaneous works at back side of Old PPEG building, NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_22013.pdf" target="_blank" id="p-style">CORRIGENDUM: Supply, Installation, Testing and Commissioning of PLC based AMF Panel and allied electrical works for 250 kVA DG set at RRSC campus, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_NIT_21_22017_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM : Relaying of existing BT Road at NRSC Balanagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_28_22021_2022-23.pdf" target="_blank" id="p-style">Miscellaneous maintenance electrical works for RRSC-West and IMGEOS facility, CAZRI campus,Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_27_22020_2022-23.pdf" target="_blank" id="p-style">Providing installation and commissioning of FRP portable single toilet for ladies washroom of size 4' x 4' x 7' 6" and other single toilet for divyangan of size 8' x 8' x 7' 6" and other miscellaneous works at back side of Old PPEG building, NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_26_22013_2022-23.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of PLC based AMF Panel and allied electrical works for 250 kVA DG set at RRSC campus, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_25_22019_2022-23.pdf" target="_blank" id="p-style">Periodical painting work at Guest House - I at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_24_22018_2022-23.pdf" target="_blank" id="p-style">Improvement works in foyer/ corridor area of Ground Floor &amp; First Floor at Old PPEG Building, NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_23_2445LS.pdf" target="_blank" id="p-style">CORRIGENDUM :Development of Horticulture and Landscaping works around Data Centre (B &amp; C Extension) at IMGEOS, NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_21_22017.pdf" target="_blank" id="p-style">CORRIGENDUM : Relaying of existing BT Road at NRSC Balanagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2445LS.pdf" target="_blank" id="p-style">Development of Horticulture and Landscaping works around Data Centre (B &amp; C Extension) at IMGEOS, NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2445RAC.pdf" target="_blank" id="p-style">Providing Air Conditioning facility for DATA Centre - Horizontal Extension of Block B and C at IMGEOS facility, NRSC Campus Shadnagar </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22015.pdf" target="_blank" id="p-style">Repainting of CISF Quarters (Phase I) at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22016.pdf" target="_blank" id="p-style">Proposed construction of a connecting cable trench from R5 junction to existing cable trench near KRA to facilitate the cable connectivity for Data Centre extension, new S/X Antenna, S/KA Antenna and upcoming Tri-Band Antenna at NRSC Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22017.pdf" target="_blank" id="p-style">Relaying of existing BT Road at NRSC Balanagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_15_2485_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM-II: Strengthening of security measures by providing new ACS structure, additional security observation post, view cutter, construction of additional room at CISF building and providing emergency exits (Consisting of Civil &amp; Electrical Works) at NRSC Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_2485.pdf" target="_blank" id="p-style">CORRIGENDUM-I: Strengthening of security measures by providing new ACS structure, additional security observation post, view cutter, construction of additional room at CISF building and providing emergency exits (Consisting of Civil &amp; Electrical Works) at NRSC Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_18_2475BT_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM :Proposed Bituminous approach road to Antenna Building (HRSAT, KU Band &amp; Future Antenna) at NRSC Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_17_2459SW_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM :Construction of Masonry Storm Water Drain in CISF Housing complex at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_15_2485_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM : Strengthening of security measures by providing new ACS structure, additional security observation post,view cutter, construction of additional room at CISF building and providing emergency exits (Consisting of Civil &amp; Electrical Works) at NRSC Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_4_2475FH_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM -II: Extending fire fighting line and providing fire hydrant at HRSAT Antenna Terminal, replacing valves of pumps at Fire Fighting GLR at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_NIT_7_22005_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Comprehensive AMC for solar power fencing systems at NRSC Balanagar Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_18_2475BT_2022-23.pdf" target="_blank" id="p-style">Proposed Bituminous approach road to Antenna Building (HRSAT, KU Band &amp; Future Antenna) at NRSC Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_17_2459SW_2022-23.pdf" target="_blank" id="p-style">Construction of Masonry Storm Water Drain in CISF Housing complex at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_16_2486_2022-23.pdf" target="_blank" id="p-style">Refurbishment of existing internal wiring (Aluminum wiring), Old MV Panels/ DB's, light fixtures, etc. at NRSC Balanagar and Old Airport campus,Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_15_2485_2022-23.pdf" target="_blank" id="p-style">Strengthening of security measures by providing new ACS structure, additional security observation post,view cutter, construction of additional room at CISF building and providing emergency exits (Consisting of Civil &amp; Electrical Works) at NRSC Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_14_2484_2022-23.pdf" target="_blank" id="p-style">Construction of New CISF Control Room with XBIS Room (consisting of Civil, PH &amp; Electrical works) at Main Gate Complex, NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_13_22011_2022-23.pdf" target="_blank" id="p-style">Providing internal painting inside proposed auditorium and other miscellaneous works at NRSC Jeedimetla campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_NIT_5_2459BT_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Proposed Bituminous approach road to CISF Type B Quarters and Re-surfacing of existing road of CISF Housing at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_NIT_4_2475FH_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM: Extending fire fighting line and providing fire hydrant at HRSAT Antenna Terminal, replacing valves of pumps at Fire Fighting GLR at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_12_22010_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM: Replacement of damaged RCC covers with stainless steel covers to water tanks and other miscellaneous works at NRSC Staff Quarters, Hasmathpet,Secunderabad </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_7_22005_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Comprehensive AMC for solar power fencing systems at NRSC Balanagar Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_8_22006_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Supply of water through Tankers to CISF Barracks at Miyapur and Drinking water from NRSC Balanagar to various other campuses of NRSC Hyderabad and at Moula Ali campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_6_22004_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing LED Street Lighting systems along the road from new bore site tower to CISF Housing complex at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_5_2459BT_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM:Proposed Bituminous approach road to CISF Type B Quarters and Re-surfacing of existing road of CISF Housing at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_4_2475FH_2022-23.pdf" target="_blank" id="p-style">CORRIGENDUM: Extending fire fighting line and providing fire hydrant at HRSAT Antenna Terminal, replacing valves of pumps at Fire Fighting GLR at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_12_22010_2022-23.pdf" target="_blank" id="p-style">Replacement of damaged RCC covers with stainless steel covers to water tanks and other miscellaneous works at NRSC Staff Quarters, Hasmathpet, Secunderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_11_22009_2022-23.pdf" target="_blank" id="p-style">Providing stage for smart classroom at Outreach facility building, NRSC Jeedimetla campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10_22008_2022-23.pdf" target="_blank" id="p-style">Providing masonry steps and IPS flooring in Auditorium at new Outreach facility building at NRSC Jeedimetla campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9_22007_2022-23.pdf" target="_blank" id="p-style">Term contract for execution of Minor/Maintenance Electrical works at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_8_22006_2022-23.pdf" target="_blank" id="p-style">Supply of water through Tankers to CISF Barracks at Miyapur and Drinking water from NRSC Balanagar to various other campuses of NRSC Hyderabad and at Moula Ali campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_7_22005_2022-23.pdf" target="_blank" id="p-style">Comprehensive AMC for solar power fencing systems at NRSC Balanagar Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_6_22004_2022-23.pdf" target="_blank" id="p-style">Providing LED Street Lighting systems along the road from new bore site tower to CISF Housing complex at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_5_2459BT_2022-23.pdf" target="_blank" id="p-style">Proposed Bituminous approach road to CISF Type B Quarters and Re-surfacing of existing road of CISF Housing at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_4_2475FH_2022-23.pdf" target="_blank" id="p-style">Extending fire fighting line and providing fire hydrant at HRSAT Antenna Terminal, replacing valves of pumps at Fire Fighting GLR at NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_03_22003_2022-23.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Mechanized House Keeping and Area Cleaning of NRSC Balanagar campus, Old Airport campus and Moula Ali campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_02_22002_2022-23.pdf" target="_blank" id="p-style">Replacing grey stone aggregate in place of black stone at CALVAL site, NRSC Shadnagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_01_2482CW_2022-23.pdf" target="_blank" id="p-style">Construction of new compound wall at rear side for site at SESS, Palaymkottai, Tirunelveli, Tamilnadu. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_69_2483_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Supply, Installation, Testing and Commissioning of LT Air Circuit Breakers including allied electrical works at 33/0.433 kV Sub-Station at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_68_21052_2021-22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Operation &amp; Maintenance of Pumps, Internal &amp; External water supply systems at Balanagar campus and other miscellaneous Plumbing/Carpentry works, etc. at NRSC campuses of Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_67_21051_2021-22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Maintenance of Gardens, Lawns and Greenery at NRSC Balanagar and Old Airport Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_66_21050_2021-22.pdf" target="_blank" id="p-style">Providing support services for various divisions of NRSC at Balanagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_21015R.pdf" target="_blank" id="p-style">CORRIGENDUM-II:Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21046.pdf" target="_blank" id="p-style">Design, Engineering, Manufacture, Transportation, Supply, Installation, Testing &amp; Commissioning, Handing over and Comprehensive Annual Maintenance Service of 50 kWP Roof-Mounted Solar Power Plant at RRSC - West, Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21049.pdf" target="_blank" id="p-style">Comprehensive Annual maintenance contract for mechanized Housekeeping, area cleaning, Gardening,Electrical, AC &amp; Fire maintenance at RRSC(W), Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_V_NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM - V:Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_65_21002R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM-II: Construction of compound wall at the western side boundary at filled well at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_69_2483_2021-22.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of LT Air Circuit Breakers including allied electrical works at 33/0.433 kV Sub-Station at NRSC Shadnagar campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_I_NIT_62_21015R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM-I:Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_IV_NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM - IV:Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_65_21002R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM: Construction of compound wall at the western side boundary at filled well at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_III_NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM - III:Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_62_21015R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_65_21002R_2021-22.pdf" target="_blank" id="p-style">Construction of compound wall at the western side boundary at filled well at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_33_21025_2021-22.pdf" target="_blank" id="p-style">Supply, Installation, Testing and Commissioning of Power Fencing system for entrance area of NRSC Balanagar campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM - II:Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_63_21033R_2021-22.pdf" target="_blank" id="p-style">Term contract for execution of Minor/Maintenance Electrical works at NRSC Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_62_21015R_2021-22.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_61_21048_2021-22.pdf" target="_blank" id="p-style">Laying of LT Cables for Block- C extension at NRSC Shadnagar campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_49_21039_2021-22.pdf" target="_blank" id="p-style">Design, Manufacture, Supply, Installation, Testing &amp; Commissioning of 2 x 500 LPD Solar Water Heating System (SWHS) at CISF Barracks, Miyapur,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_IV_NIT_39_21026_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM: Construction of proposed Kitchen facility for Food court at parking area at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_III_NIT_39_21026_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM: Construction of proposed Kitchen facility for Food court at parking area at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_60_21029R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing Carpentry &amp; Plumbing services at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_60_21029R_2021-22.pdf" target="_blank" id="p-style">Providing Carpentry &amp; Plumbing services at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_59_21024R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Construction of Masonry Cable Trench from extended service bay to R5 junction near KU Band Antenna Terminal at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_58_21047_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing water proofing treatment over the roof of various buildings at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_59_21024R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Construction of Masonry Cable Trench from extended service bay to R5 junction near KU Band Antenna Terminal at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_58_21047_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing water proofing treatment over the roof of various buildings at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_55_21044_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Annual Maintenance and Service Contract for fire alarm system installed at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_59_21024R_2021-22.pdf" target="_blank" id="p-style">Construction of Masonry Cable Trench from extended service bay to R5 junction near KU Band Antenna Terminal at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_58_21047_2021-22.pdf" target="_blank" id="p-style">Providing water proofing treatment over the roof of various buildings at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_55_21044_2021-22.pdf" target="_blank" id="p-style">Annual Maintenance and Service Contract for fire alarm system installed at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_III_NIT_52_21041_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM-III:Comprehensive Annual Maintenance Contract for Solar Power fencing systems at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_52_21041_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM-II:Comprehensive Annual Maintenance Contract for Solar Power fencing systems at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_52_21041_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Comprehensive Annual Maintenance Contract for Solar Power fencing systems at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_52_21041__2021-22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Solar Power fencing systems at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_50_21040_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Annual Maintenance and Service Contract for Smoke Detection Systems installed in various buildings of NRSC Balanagar, Jeedimetla and Old Airport Campuses, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_47_21037_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM: Providing Chain link fencing around 160 KLD STP Plant and Garden at Main Gate and around 400 KWP Solar Plant at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_50_21040_2021-22.pdf" target="_blank" id="p-style">Annual Maintenance and Service Contract for Smoke Detection Systems installed in various buildings of NRSC Balanagar, Jeedimetla and Old Airport Campuses, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_47_21037_2021-22.pdf" target="_blank" id="p-style">Providing Chain link fencing around 160 KLD STP Plant and Garden at Main Gate and around 400 KWP Solar Plant at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_46_21036_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Supply and Installation of street light pole with LED fittings and battery charger/ batteries for VCB panel at NRSC Balanagar &amp; ORF campus at Jeedimetla,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_51_21023R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Transformer oil filtration and miscellaneous maintenance works for transformers at NRSC Balanagar, Jeedimetla and Shadnagar campuses</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_39_21026_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM: Construction of proposed Kitchen facility for Food court at parking area at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_46_21036_2021-22.pdf" target="_blank" id="p-style">Supply and Installation of street light pole with LED fittings and battery charger/ batteries for VCB panel at NRSC Balanagar &amp; ORF campus at Jeedimetla,Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_51_21023R_2021-22.pdf" target="_blank" id="p-style">Transformer oil filtration and miscellaneous maintenance works for transformers at NRSC Balanagar, Jeedimetla and Shadnagar campuses</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_39_21026_2021-22.pdf" target="_blank" id="p-style">Construction of proposed Kitchen facility for Food court at Parking area at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_54_21043_2021-22.pdf" target="_blank" id="p-style">Temporary and Part Time Comprehensive AMC for the Central AC Plants, Package Units and Cold Storage facilities at NRSC Balanagar, Outreach facility Jeedimetla and Old Airport, Begumpet in Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_53_21042_2021-22.pdf" target="_blank" id="p-style">Supply and Providing Special Earthing to the Data Centre Extension (Block B &amp; C) at NRSC Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_44_21034_2021-22.pdf" target="_blank" id="p-style">Temporary and Part Time Contract for providing support services for carrying out day to day operation for Electrical and Air Conditioning systems,Maintenance of electrical systems at Balanagarcampus and various other campuses of NRSC Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_56_21045_2021-22.pdf" target="_blank" id="p-style">Providing installation and commissioning of FRP portable Bio-Toilets at NRSC Shadnagar and Jeedimetla campuses</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_48_21038_2021-22.pdf" target="_blank" id="p-style">Providing and Laying Paver block for parking area at backside of RRSC South Building at ISITE,Marathahalli, Bengaluru</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_45_21035_2021-22.pdf" target="_blank" id="p-style">Increasing the height of Main MS Entrance Gate (2nos) and MS Grill (2nos) on both side of Main Gate at new ISRO Complex, RC-West, Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_43_21009R_2021-22.pdf" target="_blank" id="p-style">Term Contract for execution of Minor /Maintenance Electrical works at NRSC Balanagar and allied units at Jeedimetla,Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_42_21033_2021-22.pdf" target="_blank" id="p-style">Term contract for execution of Minor/Maintenance Electrical works at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_41_21032_2021-22.pdf" target="_blank" id="p-style">Annual Maintenance Contract for Solar Water Heating Systems installed in various campuses of NRSC, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_40_21031_2021-22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for Pest,Termite &amp; Rodent Control at NRSC Balanagar, Jeedimetla,Hasmathpet, Banjara Hills &amp; Old Airport campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_38_21030.pdf" target="_blank" id="p-style">CORRIGENDUM :Resurfacing of Bituminous Roads in NRSC Housing Colony at Hasmathpet, Secunderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_37_21029.pdf" target="_blank" id="p-style">CORRIGENDUM : Providing Carpentry &amp; Plumbing services at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_36_21028.pdf" target="_blank" id="p-style">CORRIGENDUM : Providing Aluminum partitions and other civil works for establishing Training Facility, Data Centre and Chain Link Fencing for AWS at PDKV Farm at RRSC-C, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_34_21018.pdf" target="_blank" id="p-style">CORRIGENDUM : Providing fencing and RCC cabin for Access control system to create single entry and exit system at RRSC-C, Nagpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_32_21024.pdf" target="_blank" id="p-style">CORRIGENDUM :Construction of Masonry Cable Trench from extended service bay to R5 junction near KU Band Antenna Terminal at NRSC, Shadnagar Campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_2_NIT_30_21021_2.pdf" target="_blank" id="p-style">CORRIGENDUM : Annual maintenance contract for testing and analysing of water samples at NRSC campuses in Hyderabad &amp; Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_31_21023_2021-22.pdf" target="_blank" id="p-style">1)Transformer oil filtration and miscellaneous maintenance works for transformers at NRSC Balanagar, Jeedimetla and Shadnagar campuses</a>
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_31_21023.pdf" target="_blank" id="p-style">2)CORRIGENDUM</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_30_21021_2021-22.pdf" target="_blank" id="p-style">1)Annual maintenance contract for testing and analysing of water samples at NRSC campuses in Hyderabad &amp; Shadnagar campus</a>
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_30_21021.pdf" target="_blank" id="p-style">2)CORRIGENDUM</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_29_2468L.pdf" target="_blank" id="p-style">CORRIGENDUM:Design, Fabrication, Supply, Erection,Testing and commissioning of Passenger Lift for vertical extension to Atmospheric Science (Main Office) building at RC –(East), Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_III_NIT_24_21014_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Erecting MS Gate No.2 for staff quarters by providing and constructing bell mouth opening at boundary wall at new ISRO complex at RRSC West Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_29_2468-L_2021-22.pdf" target="_blank" id="p-style">Design, Fabrication, Supply, Erection,Testing and commissioning of Passenger Lift for vertical extension to Atmospheric Science (Main Office) building at RC –(East), Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_28_2468-AC_2021-22.pdf" target="_blank" id="p-style">Providing Air Conditioning works for Vertical Extension to Atmospheric Science (Main Office) Building at RC- East, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_27_21020_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Rectification works for sliding metallic gates at old airport campus and motorized sliding gate at NRSC Balanagar campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_25_21008R_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Term contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_NIT_24_21014_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Erecting MS Gate No.2 for staff quarters by providing and constructing bell mouth opening at boundary wall at new ISRO complex at RRSC West Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21020.pdf" target="_blank" id="p-style">Rectification works for sliding metallic gates at old airport campus and motorized sliding gate at NRSC Balanagar campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21008R.pdf" target="_blank" id="p-style">Term contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21014.pdf" target="_blank" id="p-style">CORRIGENDUM:</a>
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21014.pdf" target="_blank" id="p-style">Erecting MS Gate No.2 for staff quarters by providing and constructing bell mouth opening at boundary wall at new ISRO complex at RRSC West Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21014_2021_22.pdf" target="_blank" id="p-style">Erecting MS Gate No.2 for staff quarters by providing and constructing bell mouth opening at boundary wall at new ISRO complex at RRSC West Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_21019_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Comprehensive AMC for Mechanized Housekeeping including Office Support Services, Creche, Primary Health Centre, etc. at NRSC campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21019.pdf" target="_blank" id="p-style">Comprehensive AMC for Mechanized Housekeeping including Office Support Services, Creche, Primary Health Centre, etc. at NRSC campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_22_2459_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Design, Fabrication, Supply, Erection,Testing and commissioning of Passenger Lift for 'B' Type of CISF quarters at NRSC,Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_22_2459-L_2021-22.pdf" target="_blank" id="p-style">CORRIGENDUM:Design, Fabrication, Supply, Erection,Testing and commissioning of Passenger Lift for 'B' Type of CISF quarters at NRSC,Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_22_2459_2021-22.pdf" target="_blank" id="p-style">Design, Fabrication, Supply, Erection,Testing and commissioning of Passenger Lift for 'B' Type of CISF quarters at NRSC,Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21015_I.pdf" target="_blank" id="p-style">CORRIGENDUM: </a>
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21015_I.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla,Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21015_2021_22.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / Maintenance Civil &amp; PH works at NRSC Balanagar and allied units at Jeedimetla,Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_20_2475_2021-22.pdf" target="_blank" id="p-style">Providing Air Conditioning facility for HRSAT S/X Antenna Terminal Building at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_NIT_17_21010_2021_22.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing support services for day to day operation &amp; Maintenance of Electrical &amp; air Conditioning systems of RRSC-C campuses at Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_17_21010_2021_22.pdf" target="_blank" id="p-style">Providing support services for day to day operation &amp; Maintenance of Electrical &amp; air Conditioning systems of RRSC-C campuses at Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21_2445_2021-22.pdf" target="_blank" id="p-style">Providing Air Conditioning facility for KA-2 Band Antenna Terminal Building at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_19_21013_2021_22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract of gardens, lawns, landscape, greenery &amp; Trees at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_18_21012_2021_22.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for all building services, area cleaning and gardening at NRSC Housing Colonies at Hasmathpet and Banjara Hills, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_II_21_007.pdf" target="_blank" id="p-style">CORRIGENDUM:Providing standby 11kV HT feeder to IMGEOS facility at CAZRI campus, Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_2482_IB.pdf" target="_blank" id="p-style">CORRIGENDUM:Additional works (consisting of Civil, PH &amp; Electrical) for Infrastructure Building at Satellite Earth Station South (SESS), Palayamkottai,Tirunelveli, Tamilnadu.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21_009.pdf" target="_blank" id="p-style">CORRIGENDUM:Term Contract for execution of Minor / Maintenance Electrical works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/CORRIGENDUM_21_008.pdf" target="_blank" id="p-style">CORRIGENDUM:Term contract for execution of Minor/ Maintenance Civil &amp; PH works at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NOTICE_INVITING_TENDER_21_011.pdf" target="_blank" id="p-style">Annual Maintenance contract for housekeeping, gardening, catering, pump operations and other allied services at RRSCC office campus and Antariksh Vihar Campus at Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2482IB.pdf" target="_blank" id="p-style">Additional works (consisting of Civil, PH &amp; Electrical) for Infrastructure Building at Satellite Earth Station South (SESS), Palayamkottai, Tirunelveli, Tamilnadu</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21009.pdf" target="_blank" id="p-style">Term Contract for execution of Minor / Maintenance Electrical works at NRSC Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara Hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21008.pdf" target="_blank" id="p-style">Term contract for execution of Minor/ Maintenance Civil &amp; PH works at NRSC Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21007.pdf" target="_blank" id="p-style">Providing standby 11kV HT feeder to IMGEOS facility at CAZRI campus, Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2482SI.pdf" target="_blank" id="p-style">Additional Civil works for Security Infrastructure including Cable Trench at Satellite Earth Station South (SESS), Palayamkottai, Tirunelveli, Tamilnadu</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2482IT.pdf" target="_blank" id="p-style">Construction of Infrastructure Training Building (consisting of Civil &amp; Electrical works) at Satellite Earth Station South (SESS), Palayamkottai, Tirunelveli, Tamilnadu</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2482EW.pdf" target="_blank" id="p-style">Additional Electrical works at Satellite Earth Station South (SESS), Palayamkottai, Tirunelveli, Tamilnadu</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2445_AC.pdf" target="_blank" id="p-style">Providing Air Conditioning facility for DATA Centre -Horizontal Extension of Block B and C at IMGEOS facility, NRSC Campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/Corrigendum_21006.pdf" target="_blank" id="p-style">Corrigendum: Comprehensive AMC for mechanised housekeeping, area cleaning and guest room services in Guest House - I &amp; II at NRSC Balanagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/Corrigendum_21005.pdf" target="_blank" id="p-style">Corrigendum: Replacement of damaged wooden shutter with WPC doors, raising of parapet wall of landing area of staircase and balcony of E-type quarters at NRSC staff quarter, Hasamathpet, Secunderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21006.pdf" target="_blank" id="p-style">Comprehensive AMC for mechanised housekeeping, area cleaning and guest room services in Guest House - I &amp; II at NRSC Balanagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21005.pdf" target="_blank" id="p-style">Replacement of damaged wooden shutter with WPC doors, raising of parapet wall of landing area of staircase and balcony of E-type quarters at NRSC staff quarter, Hasamathpet, Secunderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21004.pdf" target="_blank" id="p-style">Providing and erecting 2000 LPH RO water treatment plant in Antariksh Vihar colony at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21003.pdf" target="_blank" id="p-style">Painting of Fire Hydrants and Fire Fighting Pipe lines with epoxy paint at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21002_FINAL.pdf" target="_blank" id="p-style">Construction of compound wall at the western side boundary at filled well at NRSC Campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2469_E_FINAL.pdf" target="_blank" id="p-style">Electrical power supply distribution works for UPS and Air conditioning units of Bhuvan Data Centre at RRSC-North, Sadiqnagar, Delhi</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_21_001.pdf" target="_blank" id="p-style">Supply of Water through Tankers to CISF Barracks at Miyapur and Drinking Water from NRSC Balanagar to various other campuses of NRSC Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10015.pdf" target="_blank" id="p-style">Comprehensive AMC for RO units (2 Nos) at NRSC Old airport area, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10014.pdf" target="_blank" id="p-style">Annual Maintenance Contract for housekeeping, gardening, catering, O&amp;M of electrical systems, pump operation, tank cleaning and other allied services at RRSC-C Office campus and Antariksh Vihar Campus at Nagpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10013.pdf" target="_blank" id="p-style">Comprehensive annual maintenance service contract of Split Ac's, Water coolers, Hot and cold water dispensers, Refrigerators, Inverter type split AC units, Precision Ac units, walkin cooler, Ductable AC units, D-X type AHU's, canteen kitchen exhaust , fresh air system and Evaporative air cooling units etc in different locations at NRSC, Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10012.pdf" target="_blank" id="p-style">Providing support services for operation and maintenance of 33/0.433kV and 11/0.433kV sub-stations including DG sets, street lights, AC plants &amp; water supply systems at NRSC Shadnagar, Ranga Reddy District, Telangana. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10010.pdf" target="_blank" id="p-style">Temporary and Part Time contract for mechanized housekeeping, area cleaning, horticulture and support service for day to day O &amp; M of Electrical &amp; Air Conditioning at Outreach Facility, NRSC, Jeedimetla Campus,and Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10008.pdf" target="_blank" id="p-style">Providing support services for carrying out day to day electrical and air conditioning systems operation and maintenance at Balanagar campus and various other campuses of NRSC, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10007.pdf" target="_blank" id="p-style">Temporary and part time contract for housekeeping / Gardening / Civil, Electrical and firefighting systems maintenance and upkeep at RRSC(E), Kolkata.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10006.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of HVAC systems installed for new ISRO complex, IRCDR and IMGEOS facilities at CAZRI campus Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10005.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for mechanised housekeeping area cleaning services in Guest house I &amp; II at NRSC Balanagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10009.pdf" target="_blank" id="p-style">Providing air coolers on hire basis for sitting / office areas at various campuses of NRSC, Balanagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10011.pdf" target="_blank" id="p-style">Providing water proofing over the roof of ‘E’ type block at NRSC Housing colony, Hasmathpet, Secunderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT__10004.pdf" target="_blank" id="p-style">Annual Maintenance Contract for operation and day to day maintenance of water supply,Electrical and AC systems including housekeeping and gardening at Satellite Earth Station (SES) –South Palayamkottai,Tirunelveli, Tamil Nadu</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10003.pdf" target="_blank" id="p-style">Comprehensive AMC for mechanised housekeeping including office support services at NRSC campus Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2475.pdf" target="_blank" id="p-style">Construction of HRSAT S/X Antenna Terminalbuilding at NRSC, Shadnagar campus (Composite work consisting of Civil &amp; Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2477.pdf" target="_blank" id="p-style">Augmentation of 125 KLD Sewage Treatment Plant (STP) to 250 KLD capacity at Gurukul in Balki. , Bidar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9023_FINAL_29.07.2020.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for operation and maintenance of sewage treatment plant (STP), Reverse Osmosis (RO) Plants at NRSC Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9021_29.07.2020.pdf" target="_blank" id="p-style">Annual contract for maintenance / Housekeeping of canteen support services at NRSC campas Balanagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_10001 (1).pdf" target="_blank" id="p-style">Comprehensive AMC of motorized gate at CISF main gate, for NRSC Balanagar campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2441_PB.pdf" target="_blank" id="p-style">Providing and laying paver blocks below Solar panels area in front of Phase-I (old buildings) Outreach training area at NRSC Jeedimetla campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9021.pdf" target="_blank" id="p-style">Annual contract for maintenance / Housekeeping of canteen support services at NRSC campus Balanagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9505.pdf" target="_blank" id="p-style">Comprehensive AMC for Pest, Termite &amp; Rodent control at NRSC campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9022.pdf" target="_blank" id="p-style">Comprehensive AMC of HVAC system along with repair and rectification works of package AC units installed for IMGEOS facility at CAZRI campus Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_12025.pdf" target="_blank" id="p-style">Providing air conditioning facility for office areas and dining hall to main building at RRSC campus, Jodhpur .</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_12024.pdf" target="_blank" id="p-style">Providing air conditioning facility for Bhuvan server areas at RRSC campus, Nagpur </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9020.pdf" target="_blank" id="p-style">Comprehensive AMC of operation &amp; maintenance of pumps, internal &amp; external water supply systems at NRSC Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9019.pdf" target="_blank" id="p-style">Comprehensive AMC for mechanized housekeeping and area cleaning of NRSC Balanagar Campus. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9018.pdf" target="_blank" id="p-style">Comprehensive AMC for mechanized housekeeping, area cleaning, Gardening,Electrical, AC and fire maintenance at RRSC(W), Jodhpur </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9017.pdf" target="_blank" id="p-style">Temporary and part time contract for providing support services for various divisions of NRSC Balanagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9016.pdf" target="_blank" id="p-style">Comprehensive AMC of gardens, lawns and greenery including manpower, material, tools &amp; plants etc at NRSC, Balanagar Campus </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9015.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract for 500TR capacity chiller water Central air conditioning system at IMGEOS and NDEM facility at NRSC Shadnagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9013.pdf" target="_blank" id="p-style">Annual Comprehensive maintenance and service contract for existing Solar Fencing System at NRSC, Balanagar campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9010.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Contract for the window, Split AC, cassette, water coolers,water dispensers etc at NRSC Jeedimetla, Old airport and Balanagar Campus, Hyderabad. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9008.pdf" target="_blank" id="p-style">Annual Maintenance Service Contract of 250 kVA DG set (Make Cummins) Installed at CAZRI Campus, RRSC jodhpur along with supply fixing of B-Check material, Batteries, Coolant and other repair work. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2455_FINAL.pdf" target="_blank" id="p-style">Construction of Antenna Terminal building of Ka-2 near Block – B at NRSC campus, Shadnagar.(Composite contract consisting of Civil and Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12510.pdf" target="_blank" id="p-style">CORRIGENDUM Dt: 10.01.2020 - Term contract for execution of Minor/ Maintenance Electrical works of NRSC, Shadnagar. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12509.pdf" target="_blank" id="p-style">CORRIGENDUM Dt: 10.01.2020 - Term contract for execution of Minor/ Maintenance civil works of NRSC, Shadnagar. </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12014.pdf" target="_blank" id="p-style">CORRIGENDUM Dt: 10.01.2020 - Term Contract for execution of Minor / Maintenance Electrical works at Balanagar and allied units at Jeedimetla, Hasmathpet, Old Airport, Miyapur &amp; Banjara hills Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12009.pdf" target="_blank" id="p-style">Relaying of existing bituminous road at NRSC Hasmathpet Quarters, Secunderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12507.pdf" target="_blank" id="p-style">Electrical works for providing Power supply to AC units in Bhuvan content generation facility room no. D11 of block-‘D’ of IMGEOS and in E – type quarters 2nd floor guest rooms at NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/12013.pdf" target="_blank" id="p-style">Providing MS railing all along the periphery of the terrace of A, B, E1 blocks &amp; pump room of NRSC housing colony at Hasmathpet, Secunderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9503.pdf" target="_blank" id="p-style">Non-comprensive AMC for 2 nos of synchronization panels for dg sets located at 33/0.433kv substation , NRSC Shadnagar</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2468.pdf" target="_blank" id="p-style">Vertical extension of Atmospheric science (main office) building at RRSC(E) campus, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2464_E.pdf" target="_blank" id="p-style">Providing lighting along the boundary wall for newly acquired land at NRSC, Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2464.pdf" target="_blank" id="p-style">Construction of precast RCC panel boundary wall with dwarf wall for protection of newly acquired land at NRSC, Shadnagar campus</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2463.pdf" target="_blank" id="p-style">Augmentation to control / panel room of 33/0.433 kV substation at NRSC, Shadnagar (Composite work consisting of Civil &amp; Internal Electrical works)</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_9004.pdf" target="_blank" id="p-style">Temporary and Part time contract for providing support services for carrying out day to day operation and maintenance of Electrical, air conditioning and pump operations at NRSC Annexee , jeedimetla campus, Hyderabad </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_2460.pdf">Construction of S/KA Band Antenna Terminal Building at DIPAC Delhi. (Composite contract <br /> consisting of Civil and Electrical works) </a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_11019.pdf" target="_blank" id="p-style">Electrical renovation works for the wiring in staircase and parking areas at NRSC housing colony, Hasmathpet, Bowenpally, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td id="p-style">
                        <a href="./assets/pdf/tenders/CMG/NIT_11020.pdf" target="_blank" id="p-style">Providing standby 11 TR ductable split air conditioner for NAS area, NRSC, Balanagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/tenders/CMG/cmgold/NIT_8013.pdf" target="_blank" id="p-style">Temporary and part time contract for providing support services for carrying out day to day electrical and air conditioning systems operation and maintenance at Balanagar campus and various other campuses of NRSC, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/tenders/CMG/cmgold/NIT_8011.pdf" target="_blank" id="p-style">Temporary and part time Comprehensive AMC for the central AC plants, package units and cold storage facilities at NRSC Balanagar Campus, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/tenders/CMG/cmgold/NIT_8009.pdf" target="_blank" id="p-style">Comprehensive AMC for RO units (2 Nos) at NRSC Old airport area, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NIT_2471.pdf" target="_blank" id="p-style">Supply &amp; Laying of LT power cabled to various facilities at NRSC campus, Balanagar, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NIT_2465.pdf" target="_blank" id="p-style">Design, Engineering, Manufacture, Transportation, Supply, installation, Testing &amp; Commissioning, Handing over and Comprehensive Annual Maintenance Service (CAMS) of 600kWp capacity ground mounted and roof top Solar Power Plants at NRSC, Shadnagar (Under Phase-III).</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NIT_2452_AC_FINAL.pdf" target="_blank" id="p-style">Providing Air conditioning facility for Ku Band Antenna terminal building at DIPAC Delhi campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NIT_2448_AC_FINAL.pdf" target="_blank" id="p-style">Providing Air conditioning facility for Antenna station for ISRO at Palayamkottai, Tirunelveli.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NIT_2444_AC_FINAL.pdf" target="_blank" id="p-style">Providing Air conditioning facility for Antenna terminal building at CAZRI campus, RRSC, Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/providing%20biotoilets.pdf" target="_blank" id="p-style">Providing Bio-Toilets (Gents, Ladies &amp; bathroom)at ISRO antenna facility, Palayamkottai</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/providing%20approach%20road.pdf" target="_blank" id="p-style">Providing Approach road with VDC to facilitate the under vehicle scanner at Main Gate Complex at NRSC, Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/NOTICE%20FOR%20PRE%20QUALIFICATION%20OF%20BIDDERS.pdf" target="_blank" id="p-style" title="tfc">Construction of Technical facility Building and other infrastructure works for Antenna station at Palayamkottai—(Composite contract consisting of Civil &amp; PH works,Electrical,Air-conditioning &amp; Mechanical and other Allied works).</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/66_NIT_2451_1.pdf" target="_blank" id="p-style">Establishment of KU Band Ground Station for GSAT Mission at NRSC campus Shadnagar</a>.
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/65_NIT_11014.pdf" target="_blank" id="p-style">Supply, installation, testing and commissioning of 50 BHP diesel engine pump for fire hydrant system at NRSC Balanagar campus, Hyderabad</a>.
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/64_NIT_2445.pdf" target="_blank" id="p-style">Extension of Data Centre Facility (Block B &amp; C) at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/63_Corrigendum_II_8005.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Variable refrigerant flow systems (VRF) along with Cassette ACs and Split ACs for New ISRO Complex, RRSC Jodhpur-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/62_NIT_2455.pdf" target="_blank" id="p-style">Construction of Antenna Terminals (2 Nos.) for KA Band at NRSC Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/1_Corrigendum_II%202452.pdf" target="_blank" id="p-style">Construction of Pedestal for KU Band Antenna at Delhi-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/2_Corrigendum_II%202451.pdf" target="_blank" id="p-style">Establishment of KU Band Ground Station for GSAT Mission at NRSC campus Shadnagar-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/3_Corrigendum_I%208005.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Variable refrigerant flow systems (VRF) along with Cassette ACs and Split ACs for New ISRO Complex, RRSC Jodhpur-Corrigendum.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/4_Corrigendum_I%208004.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Precision ACs, Package ACs, Ductable ACs and Split ACs of IRCDR facility building for New ISRO Complex, RRSC Jodhpur-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/7_Corrigendum_II_11006.pdf" target="_blank" id="p-style">Supply and installation of Flood light fittings to main building at RRSC-West, Jodhpur-Corrigendum.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/5_NIT_8501.pdf" target="_blank" id="p-style" title="8502">Comprehensive annual maintenance and service contract for BMS/DDC for HVAC application (central AC system) serving to IMGEOS &amp; NDEM facility at NRSC, Shadnagar campus, Ranga Reddy District.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/6_NIT_8502.pdf" target="_blank" id="p-style" title="8502">Comprehensive AMC of gardens, lawns, landscape, greenery &amp; Trees including manpower, material, tools &amp; plants etc. at NRSC, Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/8_Corrigendum_II_11002.pdf" target="_blank" id="p-style">Relaying of existing bituminous road in Hasmathpet Quarters--Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/9_Corrigendum_II_11004.pdf" target="_blank" id="p-style">Supply and laying of LT Power cables to various facilities of NRSC campus, Balanagar, Hyderabad--Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/10_Corrigendum_2452.pdf" target="_blank" id="p-style">Construction of Pedestal for KU Band Antenna at Delhi-Corrigendum.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/11_Corrigendum_2451.pdf" target="_blank" id="p-style">Establishment of KU Band Ground Station for GSAT Mission at NRSC campus Shadnagar-Corrigendum.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/13_NIT_11504.pdf" target="_blank" id="p-style">Providing and fixing of MS Grill for openings of Emergency Staircase in Block-B &amp; C at Antariksh Vihar, NRSC Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/12_NIT_8006.pdf" target="_blank" id="p-style">Comprehensive AMC of gardens, lawns and greenery including manpower, material, tools &amp; plants etc. at NRSC, Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/14_NIT_8007.pdf" target="_blank" id="p-style">Comprehensive AMC of all building services, area cleaning and gardening including pump operations and day to day Civil &amp; Electrical works at NRSC Housing Colonies at Hasmathpet &amp; Banjara Hills, Hyderabad.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/15_NIT_8008.pdf" target="_blank" id="p-style">Comprehensive AMC of day-to-day operation &amp; maintenance of pumps, internal &amp; external water supply systems and attending day-to-day complaints of Civil, Sanitary and carpentry services at NRSC Balanagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/18_Corrigendum_8002.pdf" target="_blank" id="p-style">Temporary and part time contract for mechanized housekeeping , area cleaning and guest room services in Guest house – I &amp; II of NRSC Balanagar campus-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/19_Corrigendum_8003.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Air Conditioning System (Split, Package and Cassette Units) at RRSC-E, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/16_NIT_8004.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Precision ACs, Package ACs, Ductable ACs and Split ACs of IRCDR facility building for New ISRO Complex, RRSC Jodhpur.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/17_NIT_8005.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Variable refrigerant flow systems (VRF) along with Cassette ACs and Split ACs for New ISRO Complex, RRSC Jodhpur</a>.
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/20_Corrigendum_11004.pdf" target="_blank" id="p-style">Supply and laying of LT Power cables to various facilities of NRSC campus, Balanagar, Hyderabad-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/22_Corrigendum%202450.pdf" target="_blank" id="p-style">Providing external power supply to Technical and Internal gates at NRSC Shadnagar campus, Rangareddy Dist., Telangana-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/23_NIT_11502.pdf" target="_blank" id="p-style">Proposed prefabricated MS cupboard with lock &amp; key facility at New barracks, CISF Housing NRSC, Shadnagar Campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/24_Corrigendum%202448-A1.pdf" target="_blank" id="p-style">Construction of Buildings and Infrastructure works at Antenna Station for ISRO at Palayamkottai, Tirunelveli. (Composite work comprising of Civil, PH, Internal Electrical and allied works). Part-1: Technical/ Control &amp; Storage Block Part-2: Residential buildings &amp; other infrastructure works</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/25_NIT_11009.pdf" target="_blank" id="p-style">Electrical improvement works for 3 nos of rooms at Guest House, NRSC, Balanagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/26_NIT_11010.pdf" target="_blank" id="p-style">Supply and laying of LT power cables for Pump House and CMG facilities at NRSC, Balanagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/27_10083_Corrigendum.pdf" target="_blank" id="p-style">Modification of water softener plant at NRSC Balanagar Campus, Hyderabad.-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/28_10134_Corrigendum.pdf" target="_blank" id="p-style">Supply and installation of modular switch sockets including wiring inside the modular furniture for RRSC-North, at Sadiqnagar, New Delhi.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/29_NIT_2451.pdf" target="_blank" id="p-style">Establishment of KU Band Ground Station for GSAT Mission at NRSC campus Shadnagar.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/30_NIT_2452.pdf" target="_blank" id="p-style">Construction of Pedestal for KU Band Antenna at Delhi</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/31_NIT_8500.pdf" target="_blank" id="p-style">Providing support services for Operation and maintenance of 11/0.433kV substation including DG sets, Street lights, Pumps and attending electrical complaints related to Antariksh Vihar etc, at NRSC Shadnagar, Ranga Reddy District, Telengana.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/32_NIT_8003.pdf" target="_blank" id="p-style">Comprehensive Annual Maintenance Service Contract of Air Conditioning System (Split, Package and Cassette Units) at RRSC-E, Kolkata</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/33_NIT_11003.pdf" target="_blank" id="p-style">Supply and replacement of hylam sheets for switch boards including supply and replacement of switches, sockets, fan regulators etc at CISF Barracks Miyapur campus, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/34_Corrigendum_11006.pdf" target="_blank" id="p-style">Supply and installation of Flood light fittings to main building at RRSC-West, Jodhpur.-Corrigendum</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/35_NIT_11006.pdf" target="_blank" id="p-style">Supply and installation of Flood light fittings to main building at RRSC-West, Jodhpur</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/36_NIT_11002.pdf" target="_blank" id="p-style">Relaying of existing bituminous road in Hasmathpet Quarters</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/37_NIT_2450.pdf" target="_blank" id="p-style">Providing external power supply to Technical and Internal gates at NRSC Shadnagar campus, Rangareddy Dist., Telangana</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/38_NIT_11005.pdf" target="_blank" id="p-style">Improvement of lighting and other related Electrical works in Hostel Rooms of NRSC campus, Balanagar, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/39_NIT_8002.pdf" target="_blank" id="p-style">Temporary and part time contract for mechanized house keeping , area cleaning and guest room services in Guest house – I &amp; II of NRSC Balanagar campus.</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="./assets/pdf/tenders/CMG/cmgold/40_NIT_11004.pdf" target="_blank" id="p-style">Supply and laying of LT Power cables to various facilities of NRSC campus, Balanagar, Hyderabad</a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
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
  const rowsPerPage = 20;
  const rows = Array.from(document.querySelectorAll("#myTable tbody tr"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput"); // Make sure this element exists

  function getFilteredRows() {
    const searchTerm = searchInput.value.toLowerCase();
    return rows.filter(row =>
      Array.from(row.querySelectorAll("td")).some(cell =>
        cell.textContent.toLowerCase().includes(searchTerm)
      )
    );
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
    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
