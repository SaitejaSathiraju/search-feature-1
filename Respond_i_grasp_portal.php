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
                <b>I-GRASP Portal</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="I-GRASP-main" id="I-GRASP-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Respond_Projects_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>I-GRASP (ISRO GRant in Aid for Space Research Programmes) Portal</h3>
              <br />
              <p id="myptag"> Academic Interface is one of the most important activities of CBPO and it aims at encouraging joint collaborative research with academia/Labs/institutes and establishing the Knowledge/incubation/research etc., across the country.</p>
              <p id="myptag"> Recognising the need for a broader academic interface with institutions across the country, a series of capacity building initiatives have been taken up to further strengthen the involvement of academia for ISRO programmes. These initiatives include <b> R&amp;D Projects (RESPOND Basket); Space Technology Cells (STCs); Regional Academic Centres for Space (RAC-S); Space Technology Incubation Centres (S-TICs). </b>
              </p>
              <p id="myptag"> Research proposals are supported by ISRO in the areas of Space Science, Space Technology and Space Applications which are of relevance to Space Programme. <b> RESPOND Basket </b> document published annually comprises of the most urgent and important research problems identified by ISRO/DOS Centre / Units on the basis of ISRO’s upcoming programmatic R&amp;D requirements. And Research Area for Space Document published bi-annually with same moto. Each research problem comprises of a brief write-up about the topic for the faculty of the Academic Institutions/R&amp;D laboratories to select and prepare the proposals. A Co-PI from ISRO/DOS Centres has also been identified for each topic proposed in the Basket. </p>
              <p id="myptag"> In March 2022, ISRO launched “ <b>I-GRASP</b>” online portal (ISRO <b>GR</b>ant in <b>A</b>id for <b>S</b>pace <b>R</b>esearch <b>P</b>rogrammes). The portal invites proposals from academia. The PIs from the academic institutions based on their area of interest and expertise select and submit the research proposals through this portal, where the entire process will be carried out through this portal which includes submission of proposals under RESPOND/STC/S-TIC and Other programmes are submitted online through <a onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')" href="https://igrasp.isro.gov.in/igrasp/" target="_blank">
                  <b>I-GRASP</b>
                </a> portal only. </p>
              <p id="myptag"> An individual or group(s) of scientists/faculty members affiliated to any academic institution/autonomous R&amp;D institutions may submit proposals. The Principal Investigator(s) should be full-time employee(s) of the concerned institution. The age limit for the Principal Investigator should be below 65 years (sixty-five years) including the project period. The Head of the academic institution must forward proposals with application for research grants. Proposals from individuals not affiliated to any recognized institution will not be considered. There may also be co-investigator(s) from the same/different institutions working on the project. But satisfactory completion of a project will be the responsibility of the Principal Investigator and her/his institution. The following information is required for the submission of the proposal online. </p>
              <p id="myptag"></p>
              <ol id="myptag">
                <li> Detailed bio-data of all the investigators (Age also to be indicated) including publications/awards &amp; recognition received. </li>
                <li> Contact details: address, email id, telephone/fax numbers of investigators as well as the institution. </li>
                <li> In case the institution belongs to Non-Government Category, NGO Darpan ID and PAN number of the institution. </li>
                <li> Brief description of the research proposal including the objectives and the scientific/application merits of the work. </li>
                <li> Description of the research methodology or technique to be used for the proposed project. </li>
                <li> The extent of financial support needed from ISRO for executing the work within the shortest possible time. </li>
                <li> A list of research projects related to the proposal undertaken or carried out through funding by other Agencies. </li>
                <li>Scanned copy of the declaration form signed by head of the institution. </li>
              </ol>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html><script>
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