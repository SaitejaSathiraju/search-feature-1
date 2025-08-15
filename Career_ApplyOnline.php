<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Careers Apply</title>
  
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

    .card-body p {
      font-size: 18px;
    }

    .new-label {
      width: 43px;
      height: 17px;
      margin-left: 0.5rem;
    }

    .alert-info,
    .alert-warning,
    .alert-danger {
      font-size: 18px;
    }

    .note-text {
      font-size: 18px;
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
              <h1 class="heading-title text-break text-center">Career</h1>
            </div>
          </div>
        </div>
      </section>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current"><b>Careers</b></li>
            <li class="current"><b>Apply Online</b></li>
          </ol>
        </div>
      </nav>
    </header>

    <div data-skip-id="cssteap-main" id="cssteap-main"></div>

    <section id="service-details" class="service-details section">
      <div class="container-fluid">
        <div class="row gy-4">
          <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>

          <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation">
            <?php include 'Career_Services_List.php'; ?>
          </aside>

<section class="col-md-9 col-lg-9">
            <h3>Apply Online</h3>
            <br>
            <?php
              function jobCard($text, $link = '#', $new = false, $extraLink = null) {
                $newLabel = $new ? '<img src="assets/img/newlabel.png" alt="new" class="ml-2 new-label">' : '';
                $extra = $extraLink ? '<a href="' . $extraLink . '" target="_blank">Apply Online</a>' : '';
                $html = '<div class="card mb-3 shadow-sm">';
                $html .= '<div class="card-body">';
                $html .= '<p><a href="' . $link . '" target="_blank">' . $text . '</a>' . $newLabel . ' ' . $extra . '</p>';
                $html .= '</div></div>';
                return $html;
              }
              
              echo jobCard("ADVERTISEMENT NO. NRSC-RMT-2-2025 : Temporary Research Personnel (Dated: 21.06.2025)", "./assets/pdf/advt_active/NRSC-RMT-2-2025.pdf", true, "https://apps.nrsc.gov.in/eRecruitment_NRSC");

              echo jobCard("ADVERTISEMENT NO. NRSC-RMT-1-2025: Recruitment for the posts of Scientist Engineer 'SC' (Dated: 10.05.2025)", "./assets/pdf/advt_active/NRSCRMT12025/NRSC-RMT-1-2025_10.05.2025.pdf", true, "https://apps.nrsc.gov.in/eRecruitment_NRSC");
              echo jobCard("ADVERTISEMENT FOR CONTRACT EMPLOYMENT : Continuous Airworthiness Manager (CAM)", "./Advt_Active.php", true);
              echo jobCard("LIST OF CANDIDATES PROVISIONALLY SHORTLISTED FOR SKILL TEST FOR TECHNICIAN-B (Advt: NRSC-RMT-4-2023)", "./Career_Result_Active.php");
            ?>

            <div class="alert alert-info">
              NRSC-RMT-4-2023 dated 09.12.2023 – Candidates may login 
              <a href="https://www.digialm.com:443//EForms/configuredHtml/1258/86205/login.html" target="_blank">NRSC APPLICATION PORTAL</a>
              to view the updated response sheet after redressal of objections. Link is live from 16 April 2024 (1000 Hrs) to 19 April 2024 (1000 Hrs).
            </div>

            <?php
            echo jobCard("Recruitment of various Temporary Research Personnel (Advt. No. NRSC-RMT-2-2024, Dt:18.03.2024)", "assets/pdf/careers_apply/NRSC_RMT_2_2024_18032024V1.pdf", false, "https://apps.nrsc.gov.in/eRecruitment_NRSC/");
            ?>

            <div class="alert alert-warning">
              Objection Management of the CBT for Technician-B held on 02.03.2024 has been uploaded in the portal. Link is active from 07 Mar 2024 to 10 Mar 2024.
            </div>

            <?php
            echo jobCard("CBT for Technician-B (NRSC-RMT-4-2023) was held on 02.03.2024 – Admit cards sent via mail and portal.", "./Advt_Active.php");
            echo jobCard("Recruitment for the posts of Scientist Engineer 'SC', Medical Officer 'SC', Nurse 'B' & Library Assistant 'A'. (NRSC-RMT-1-2024)", "assets/pdf/careers_apply/NRSC-RMT-1-2024 dated 22012024.pdf");
            ?>

            <div class="alert alert-danger">
              Closing date of online applications for NRSC-RMT-1-2024 extended till <strong>16.02.2024 (1700 Hrs)</strong>
            </div>

            <div class="mb-3 note-text">
              <strong>Note:</strong> Candidates applying for Library Assistant (Post Code 19) must choose "M.Sc" as higher education with relevant specialization.
            </div>

            <?php
            echo jobCard("FAQ - NRSC-RMT-1-2024", "assets/pdf/careers_apply/FAQ_NRSC_RMT_1_2024.pdf");
            ?>

            <div class="alert alert-danger">
              Guwahati (Assam) added as a new Written Test Centre under NRSC-RMT-1-2024.
            </div>

            <?php
            echo jobCard("Caution for Job Seekers - Fake Recruitment Notices", "assets/pdf/careers_apply/Caution for Job Seekers- Fake Recruitment Notices & Appointment Offers.pdf");
            echo jobCard("ADVERTISEMENT NO.NRSC/RMT/4/2023 (Technician B)", "assets/pdf/careers_apply/NRSC-RMT-4-2023-dated-09122023.pdf", false, "https://cdn.digialm.com/EForms/configuredHtml/1258/86205/Index.html");
            echo jobCard("Contract Recruitment for CAM and QM", "assets/pdf/careers_apply/Advertisement_for_recruitment_of_Continuous_Airworthiness_Managaer_CAM_and_Quality_Manager_QM.pdf");
            echo jobCard("Application Form - NRSC-RMT-3-2023", "assets/pdf/careers_apply/application_form_for_NRSC_RMT-3-2023.pdf");
            ?>
          </section>
        </div>
      </div>
    </section>
  </main>

  <footer role="contentinfo">
    <?php include 'footer.php'; ?>
  </footer>
</body>

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
</html>