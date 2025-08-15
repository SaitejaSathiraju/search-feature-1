<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>UN-CSSTEAP@NRSC SRSDAP</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>

  <!-- Custom CSS -->
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
      font-size: 20px;
    }
    table, td {
      border: 1px solid #ddd;
    }
    td {
      padding: 8px 12px;
    }
    .bgColor {
      font-weight: 700;
      position: sticky; top: 0; z-index: 1;
    }
    th:nth-child(3) {
      width: 200px;
      white-space: nowrap;
    }
    #searchInput {
      margin-bottom: 12px;
      padding: 8px;
      width: 100%;
      font-size: 16px;
      border: 1px solid #ddd;
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
    @media (max-width: 768px) {
      table, tbody, th, td, tr {
        display: block;
        width: 100%;
      }
      thead {
        display: none !important;
      }
      tr {
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        background-color: #fff;
        padding: 0.5rem;
      }
      td {
        position: relative;
        padding-left: 50%;
        text-align: left;
        border: none;
        border-bottom: 1px solid #eee;
        font-size: 16px;
        box-sizing: border-box;
        word-break: break-word;
      }
      td::before {
        display: block; 
        font-weight: bold;
        margin-bottom: 4px;
      }
    }
    .p_style p{
      font-size:20px; 
      text-align:justify;
    }
    #flagStyle{
      width: 24px; height: auto; vertical-align: middle; margin-right: 6px;
    }
  </style>
</head>

<body>
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
          <li class="current"><b>UN-CSSTEAP@NRSC</b></li>
          <li class="current"><b>Participants</b></li>
          <li class="current"><b>Satellite Remote Sensing Data Acquisition & Processing</b></li>
        </ol>
      </div>
    </nav>
  </header>
  <!-- <div data-skip-id="homepage-main" id="homepage-main"></div> -->
  <!-- Course Details Section -->
  <section class="service-details section">
    <div class="container-fluid">
      <div class="row gy-4">
        <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">
          Show Menu
        </button>

        <!-- Sidebar -->
        <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation">
          <?php include 'UNCSSTEAP_Services_List.php'; ?>
        </aside>

        <section class="col-lg-9 p_style">
          <h3>Satellite Remote Sensing Data Acquisition & Processing</h3>
          <br />
          <p>
            NRSC organized a CSSTEAP Short Course on Satellite Remote Sensing Data Acquisition & Processing from November 18 - November 29, 2024 at Knowledge Resource Area, IMGEOS facility Earth Station, Shadnagar.
          </p>
          <br>
          <div class="container">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for Name, Country or Organization">
            <table class="table table-hover table-striped-rows">
              <thead class="bgColor">
                <tr>
                  <th>S.No.</th>
                  <th>Participants name <br />Registration Number</th>
                  <th>Country</th>
                  <th>Organization</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $countryCodes = [
                    "Bangladesh" => "bd",
                    "Bhutan" => "bt",
                    "Indonesia" => "id",
                    "Kazakhstan" => "kz",
                    "Lao PDR" => "la",
                    "Nepal" => "np",
                    "Sri Lanka" => "lk",
                    "India" => "in",
                    "Mongolia" => "mn",
                    "Tajikistan" => "tj",
                    "Vietnam" => "vn",
                    "Myanmar" => "mm",
                    "Uzbekistan" => "uz"
                  ];

                  $participants = [
                    ["Md Mohi Uddin", "SRS-24-795", "Bangladesh", "Government Department Geological Survey of Bangladesh (GSB)"],
                    ["Avinash Rout", "SRS-24-796", "India", "IMINT Government Department Directorate of Naval Intelligence"],
                    ["Juhi Nigam", "SRS-24-797", "India", "Private Agency Azista Industries Pvt. Ltd"],
                    ["Anshari Akbar", "SRS-24-798", "Indonesia", "Government Department BRIN (Badan Riset dan Inovasi Nasional)"],
                    ["Yuvita Dian Safitri", "SRS-24-799", "Indonesia", "Government Department BRIN (Badan Riset dan Inovasi Nasional)"],
                    ["Nurmajid Setyasaputra", "SRS-24-800", "Indonesia", "Government Department BRIN (Badan Riset dan Inovasi Nasional)"],
                    ["Fajar Bahari Kusuma", "SRS-24-801", "Indonesia", "Government Department BRIN (Badan Riset dan Inovasi Nasional)"],
                    ["Akzahn Bagdaulet Bakituly", "SRS-24-802", "Kazakhstan", "Government Department 11/1 Mangilik El avenue, Astana, Republic of Kazakhstan"],
                    ["Dias Rakishev", "SRS-24-803", "Kazakhstan", "Government Department 11/1 Mangilik El avenue, Astana, Republic of Kazakhstan"],
                    ["Erkinbek Torobekovich Toktoraliev", "SRS-24-804", "Kazakhstan", "Government Department National Academy of Sciences"],
                    ["Nagima Alimbekova", "SRS-24-805", "Kazakhstan", "Kyrgyz Research Institute of Irrigation, Ministry of Agriculture KR"],
                    ["Otgonbaatar Yura", "SRS-24-806", "Mongolia", "Department of Information Technology and Communication at Huree"],
                    ["TOE ZUNE MAY", "SRS-24-807", "Myanmar", "Department of Meteorology and Hydrology"],
                    ["Siddhant Baral", "SRS-24-808", "Nepal", "Government Department Division Forest Office"],
                    ["Bishnu Prasad Lamichhane", "SRS-24-809", "Nepal", "Department Ministry of Forest and Environment"],
                    ["Malmadayalage Tharindu Lakmal Dayarathna", "SRS-24-810", "Sri Lanka", "Clarke Institute for Modern Technologies"],
                    ["Rajapaksha Arachchige Don Kaveendra Sampath", "SRS-24-811", "Sri Lanka", "Clarke Institute for Modern Technologies"],
                    ["Obidjon Zarip o'g'li Arabov", "SRS-24-812", "Uzbekistan", "Government Department National university of Uzbekistan"],
                    ["Pham Trung Dung", "SRS-24-813", "Vietnam", "Government Department Hanoi University of Mining and Geology (HUMG)"],
                    ["LE THI THU HANG", "SRS-24-814", "Vietnam", "Government Department Vietnam National Space Center (VNSC)"],
                    ["Tong Khanh Linh", "SRS-24-815", "Vietnam", "Government Department Vietnam National Space Center (VNSC)"],
                  ];

                  $count = 1;
                  foreach ($participants as $p) {
                    $countryName = $p[2];
                    $countryCode = isset($countryCodes[$countryName]) ? $countryCodes[$countryName] : 'default';
                    $flagFile = "assets/img/cssteap/participants_flags/{$countryCode}.gif";
                    $flagImgTag = "<img src='$flagFile' alt='$countryName flag' id='flagStyle'>";

                    echo "<tr>";
                    echo "<td data-label='S.No.'>$count.</td>";
                    echo "<td data-label='Participants name / Reg. No.'>{$p[0]}<br />{$p[1]}</td>";
                    echo "<td data-label='Country'>$flagImgTag$countryName</td>";
                    echo "<td data-label='Organization'>{$p[3]}</td>";
                    echo "</tr>";
                    $count++;
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
  </section>
</main>

<footer role="contentinfo">
  <?php include 'footer.php'; ?>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var menuBtn = document.getElementById("menuToggleBtn");
    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });

  function searchTable() {
    var input = document.getElementById("searchInput");
    var filter = input.value.toUpperCase();
    var table = document.querySelector("table");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) {
      var td = tr[i].getElementsByTagName("td");
      var matchFound = false;
      for (var j = 0; j < td.length; j++) {
        var txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          matchFound = true;
          break;
        }
      }
      tr[i].style.display = matchFound ? "" : "none";
    }
  }
</script>
</body>
</html>

