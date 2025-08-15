<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Respond Projects</title>
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

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .pdf-icon {
        width: 25px;
        vertical-align: middle;
      }

      #myptag {
        text-align: justify;
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
                <h1 class="heading-title text-break text-center">Respond Projects</h1>
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
                <b>Respond Projects</b>
              </li>
              <li class="current">
                <b>Submission of Research Proposal</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Overview-main" id="Overview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Respond_Projects_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Submission of Research Proposal</h3>
              <br />
              <p id="myptag">An individual or group(s) of scientists / faculty members affiliated to any academic institution/autonomous R&D institutions may submit proposals.Faculty of STCs and RAC-S established at various IITs/NITs; IISc and SPPU can select and generate proposals from <a href="Research_Areas_in_space.php">Research Areas in Space</a> document.Faculty of the academic institutions/R&D labs other than STCs and RAC-S can select and generate proposals from <b>Respond Basket</b>. The Principal Investigator(s) should be full-time employee(s) of the concerned institution. The age limit for the Principal Investigator should be below 65 years (sixty five) including the project period.The Head of the academic institution must forward proposals with application for research grants. Proposals from individuals not affiliated to any recognized institution will not be considered. </p>
              <p id="myptag">Each proposal must name a Principal Investigator who is a domain expert in the area to which the proposal belongs and who is a full time employee/faculty of the institution forwarding the application. There may also be co-investigator(s) from the same/different institutions working on the project. But satisfactory completion of a project will be the responsibility of the Principal Investigator and her/his institution. The following information will be required for the submission of the proposal online.</p>
              <ol id="myptag">
                <li> Detailed bio-data of all the investigators (Age also to be indicated) including publications/awards &amp; recognition received. </li>
                <li> Contact details: address, email id, telephone/fax numbers of investigators as well as the institution. </li>
                <li> In case the institution belongs to Non Government Category, NGO Darpan ID and PAN number of the institution. </li>
                <li> Brief description of the research proposal including the objectives and the scientific/application merits of the work. </li>
                <li> Description of the research methodology or technique to be used for the proposed project. </li>
                <li> The extent of financial support needed from ISRO for executing the work within the shortest possible time. </li>
                <li> A list of research projects related to the proposal undertaken or carried out through funding by other Agencies. </li>
                <li>Scanned copy of the declaration form (Annexure-1 in <a href="assets/pdf/respond/Respond_Basket_2024.pdf" target="_blank">“RESPOND Basket 2024”</a> ) signed by head of the institution. </li>
              </ol>
              <p id="myptag"> Proposals will be evaluated by domain experts (internal and/or external) for its novelty, usefulness to Indian Space Programme and other Scientific/ technical merits. The proposal may call for changes based on review and the PI will have to re-submit the proposal incorporating the recommended changes. Proposers are informed about the outcome of the evaluation of their research proposals. </p>
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