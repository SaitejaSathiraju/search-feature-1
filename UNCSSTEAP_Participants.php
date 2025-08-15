<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UN-CSSTEAP@NRSC Participants</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Skip Link CSS for Accessibility -->
    <style>
      .container-fluid p {
        font-size: 20px;
        text-align: justify;
      }

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

      table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }

      th,
      td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
      }

      th {
        background-color: #f2f2f2;
        font-weight: bold;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #f1f1f1;
      }

      .total-row {
        font-weight: bold;
        background-color: #e6f7ff;
      }

      .total-col {
        font-weight: bold;
        background-color: #fff2cc;
      }

      .empty-cell {
        background-color: #f5f5f5;
      }

      .flag-icon {
        display: inline-block;
        vertical-align: middle;
      }

      .waving-flag {
        animation: wave 2s infinite ease-in-out;
        transform-origin: 70% 70%;
      }

      @keyframes wave {
        0% {
          transform: rotate(0deg);
        }

        25% {
          transform: rotate(2deg);
        }

        50% {
          transform: rotate(-2deg);
        }

        75% {
          transform: rotate(1deg);
        }

        100% {
          transform: rotate(0deg);
        }
      }

      #flag_left {
        text-align: left;
      }

      @media (max-width: 768px) {

        table thead,
        table tfoot {
          display: none;
        }

        table,
        tbody,
        tr,
        td {
          display: block;
          width: 100%;
        }

        tr {
          margin-bottom: 1rem;
          border: 1px solid #ccc;
          border-radius: 8px;
          padding: 10px;
          background-color: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        td {
          text-align: left;
          padding: 5px 10px;
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
          margin-bottom: 2px;
        }

        .total-row {
          display: none;
        }
      }
    </style> <?php $countryCodes = ["Bangladesh" => "bd", "Bhutan" => "bt", "Indonesia" => "id", "Kazakhstan" => "kz", "Lao PDR" => "la", "Nepal" => "np", "Sri Lanka" => "lk", "India" => "in", "Mongolia" => "mn", "Tajikistan" => "tj", "Vietnam" => "vn", "Myanmar" => "mm", "Uzbekistan" => "uz"];?>
  </head>
  <main id="main-content" class="main" role="main">
    <!-- Page Header -->
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">UN-CSSTEAP@NRSC</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current">
              <b>UN-CSSTEAP@NRSC</b>
            </li>
            <li class="current">
              <b>Participants</b>
            </li>
          </ol>
        </div>
      </nav>
    </header>
    <!-- End Header -->
    <div data-skip-id="homepage-main" id="homepage-main"></div>
    <section id="service-details" class="service-details section">
      <div class="container-fluid">
        <div class="row gy-4">
          <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
          <!-- Sidebar -->
          <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>
          <section class="col-md-9 col-lg-9">
            <h3>CSSTEAP Participants</h3>
            <h4>from different countries</h4>
            <br /> <?php
                $data = [["Country" => "Bangladesh", "RSDA-2024" => 1, "RSDP-2024" => 2, "SRSOA-2023" => null, "SRSDAP-2023" => 1], ["Country" => "Bhutan", "RSDA-2024" => 2, "RSDP-2024" => null, "SRSOA-2023" => null, "SRSDAP-2023" => null], ["Country" => "Indonesia", "RSDA-2024" => 4, "RSDP-2024" => 3, "SRSOA-2023" => 4, "SRSDAP-2023" => 4], ["Country" => "Kazakhstan", "RSDA-2024" => 2, "RSDP-2024" => 2, "SRSOA-2023" => 2, "SRSDAP-2023" => 4], ["Country" => "Lao PDR", "RSDA-2024" => 2, "RSDP-2024" => null, "SRSOA-2023" => null, "SRSDAP-2023" => null], ["Country" => "Nepal", "RSDA-2024" => 1, "RSDP-2024" => null, "SRSOA-2023" => 1, "SRSDAP-2023" => 2], ["Country" => "Sri Lanka", "RSDA-2024" => 2, "RSDP-2024" => 3, "SRSOA-2023" => 2, "SRSDAP-2023" => 2], ["Country" => "India", "RSDA-2024" => null, "RSDP-2024" => 4, "SRSOA-2023" => 4, "SRSDAP-2023" => 2], ["Country" => "Mongolia", "RSDA-2024" => null, "RSDP-2024" => 1, "SRSOA-2023" => 1, "SRSDAP-2023" => 1], ["Country" => "Tajikistan", "RSDA-2024" => null, "RSDP-2024" => 1, "SRSOA-2023" => null, "SRSDAP-2023" => null], ["Country" => "Vietnam", "RSDA-2024" => null, "RSDP-2024" => null, "SRSOA-2023" => 2, "SRSDAP-2023" => 3], ["Country" => "Myanmar", "RSDA-2024" => null, "RSDP-2024" => null, "SRSOA-2023" => null, "SRSDAP-2023" => 1], ["Country" => "Uzbekistan", "RSDA-2024" => null, "RSDP-2024" => null, "SRSOA-2023" => null, "SRSDAP-2023" => 1], ];

                $columns = ['RSDA-2024', 'RSDP-2024', 'SRSOA-2023', 'SRSDAP-2023'];
                $columnTotals = array_fill_keys($columns, 0);
                foreach ($data as $row) {
                    foreach ($columns as $col) {
                        if (isset($row[$col]) && is_numeric($row[$col])) {
                            $columnTotals[$col]+= $row[$col];
                        }
                    }
                }

                foreach ($data as & $row) {
                    $rowTotal = 0;
                    foreach ($columns as $col) {
                        if (isset($row[$col])) {
                            $rowTotal+= $row[$col]??0;
                        }
                    }
                    $row['Total'] = $rowTotal;
                }
                unset($row); 
                
                $grandTotal = array_sum($columnTotals);
            ?> <table>
              <thead>
                <tr>
                  <th>Country</th>
                  <th>RSDA-2023</th>
                  <th>RSDP-2023</th>
                  <th>SRSOA-2024</th>
                  <th>SRSDAP-2024</th>
                  <th class="total-col">Total</th>
                </tr>
              </thead>
              <tbody> <?php foreach ($data as $row): ?> 
                <tr>
                  <td id="flag_left"> 
                    <?php
                      $code = $countryCodes[$row['Country']]??'';
                      $flagPath = "assets/img/cssteap/participants_flags/$code.gif"; ?> <?php if (file_exists($flagPath)): ?> <img class="flag-icon waving-flag" src="					
                      <?=$flagPath?>" alt="
                      <?=$row['Country'] ?> Flag" width="24" style="margin-right: 8px;"> <?php endif; ?> <?=htmlspecialchars($row['Country']) ?> 
                  </td> 
                    <?php foreach ($columns as $col): ?>
                  <td class="
										<?=is_null($row[$col]) ? 'empty-cell' : '' ?>" data-label="
										<?=$col?>"> <?=is_null($row[$col]) ? '' : $row[$col] ?> </td> <?php endforeach; ?> <td class="total-col" data-label="Total"> <?=$row['Total'] ?> 
                  </td>
                </tr> 
                <?php endforeach; ?> 
              </tbody>
              <tfoot>
                <tr class="total-row">
                  <td>Total</td> <?php foreach ($columns as $col): ?> <td> <?=$columnTotals[$col] ?> </td> <?php endforeach; ?> <td class="total-col"> <?=$grandTotal ?> </td>
                </tr>
              </tfoot>
            </table>
          </section>
        </div>
      </div>
    </section>
  </main>
  <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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
</script>