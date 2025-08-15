<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Outreach</title>
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

      /* Desktop Table View */
        .holiday-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .holiday-table th {
            background-color: #4a6baf;
            color: white;
            padding: 12px;
            text-align: left;
        }
        .holiday-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #dee2e6;
        }
        .holiday-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .holiday-table tr.highlight-row {
            background-color: #fff3cd;
        }
        
        /* Mobile Card View */
        .holiday-card {
            display: none;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .holiday-card .card-header {
            background-color: #4a6baf;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }
        .holiday-card .card-body {
            padding: 15px;
        }
        .card-table {
            width: 100%;
            margin-bottom: 0;
        }
        .card-table th {
            width: 30%;
            font-weight: 600;
        }
        
        /* Responsive Switching */
        @media (max-width: 991.98px) {
            .holiday-table-container {
                display: none;
            }
            .holiday-card {
                display: block;
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
              <h1 class="heading-title text-break text-center">Outreach</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current">
              <b>Training & Outreach</b>
            </li>
            <li class="current">
              <b>Outreach</b>
            </li>
            <li class="current">
              <b>Holiday List</b>
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
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
            <section class="col-lg-9">
              <h3>Holiday List-2025</h3>
              <br /> <?php
        $holidays = [
            [
                "no" => "01",
                "name" => "Makara Sankranti",
                "date" => "January 14",
                "day" => "Tuesday"
            ],
            [
                "no" => "02",
                "name" => "Republic Day",
                "date" => "January 26",
                "day" => "Sunday"
            ],
            [
                "no" => "03",
                "name" => "Holi",
                "date" => "March 14",
                "day" => "Friday"
            ],
            [
                "no" => "04",
                "name" => "Id-ul-Fitr*",
                "date" => "March 31",
                "day" => "Monday",
                "highlight" => true
            ],
            [
                "no" => "05",
                "name" => "Mahavir Jayanti",
                "date" => "April 10",
                "day" => "Thursday"
            ],
            [
                "no" => "06",
                "name" => "Good Friday",
                "date" => "April 18",
                "day" => "Friday"
            ],
            [
                "no" => "07",
                "name" => "Buddha Purnima",
                "date" => "May 12",
                "day" => "Monday"
            ],
            [
                "no" => "08",
                "name" => "Id-Ul-Zuha (Bakrid)*",
                "date" => "June 07",
                "day" => "Saturday",
                "highlight" => true
            ],
            [
                "no" => "09",
                "name" => "Muhammad*",
                "date" => "July 06",
                "day" => "Sunday",
                "highlight" => true
            ],
            [
                "no" => "10",
                "name" => "Independence Day",
                "date" => "August 15",
                "day" => "Friday"
            ],
            [
                "no" => "11",
                "name" => "Ganesh Chathurthi",
                "date" => "August 27",
                "day" => "Wednesday"
            ],
            [
                "no" => "12",
                "name" => "Milad-un-Nabi/Id-e-Milad (Birthday of Prophet Mohammad)*",
                "date" => "September 05",
                "day" => "Friday",
                "highlight" => true
            ],
            [
                "no" => "13",
                "name" => "Mahatma Gandhi's Birthday",
                "date" => "October 02",
                "day" => "Thursday"
            ],
            [
                "no" => "14",
                "name" => "Dussehra",
                "date" => "October 02",
                "day" => "Thursday"
            ],
            [
                "no" => "15",
                "name" => "Diwali (Deepavali)",
                "date" => "October 20",
                "day" => "Monday"
            ],
            [
                "no" => "16",
                "name" => "Gurunanak's Birthday",
                "date" => "November 05",
                "day" => "Wednesday"
            ],
            [
                "no" => "17",
                "name" => "Christmas Day",
                "date" => "December 25",
                "day" => "Thursday"
            ]
        ];
        ?>
        
        <!-- Desktop Table View -->
        <div class="holiday-table-container">
            <table class="holiday-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Holiday Name</th>
                        <th>Date</th>
                        <th>Day</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($holidays as $holiday): ?>
                        <tr class="<?= isset($holiday['highlight']) && $holiday['highlight'] ? 'highlight-row' : '' ?>">
                            <td><?= $holiday['no'] ?></td>
                            <td><?= $holiday['name'] ?></td>
                            <td><?= $holiday['date'] ?></td>
                            <td><?= $holiday['day'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            * Subject to change depending on sighting of the moon
        </div>
        
        <!-- Mobile Card View -->
        <div class="row">
            <?php foreach ($holidays as $holiday): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card holiday-card">
                        <div class="card-header">
                            Holiday #<?= $holiday['no'] ?>
                        </div>
                        <div class="card-body">
                            <table class="card-table">
                                <tr>
                                    <th>Name</th>
                                    <td><?= $holiday['name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td><?= $holiday['date'] ?></td>
                                </tr>
                                <tr>
                                    <th>Day</th>
                                    <td><?= $holiday['day'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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
</script>