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

      /* Mobile Responsive Improvements */
      @media (max-width: 992px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      @media (max-width: 576px) {
        .download-btn {
          width: 100%;
          justify-content: center;
          padding: 12px 20px;
        }
      }

      .download-btn {
        display: inline-flex;
        align-items: center;
        padding: 15px 30px;
        background: linear-gradient(135deg, #3f68b5 0%, #1a3a8f 100%);
        color: white;
        text-decoration: none;
        font-weight: 600;
        border-radius: 8px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
      }

      .download-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 14px rgba(0, 0, 0, 0.15);
        background: linear-gradient(135deg, #1a3a8f 0%, #3f68b5 100%);
        color: #ffd700;
      }

      .download-btn::before {
        content: "↓";
        margin-right: 10px;
        font-size: 1.2rem;
      }

      /* Animation */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animated {
        animation: fadeInUp 0.8s ease forwards;
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
                <b>Research Areas in Space</b>
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
              <h3>Research Areas in Space</h3>
              <br />
              <p id="myptag"> Research proposals are Supported by ISRO in the areas of Space Science, Space technology and Space Applications which are of relevance to ISRO.</p>
              <ol id="myptag">
                <li>"Research Areas in Space" is a comprehensive document highlighting ISRO's major programmes, current and upcoming R&D requirements of ISRO. This document will exclusively cater to the advanced research requirements of ISRO wherein Space Technology Cells (STCs), Space Technology Incubation Centre (STIC) and Regional Academic Centre for Space (RAC-S) established at various IITs/NITs and premier institutes across the country can select and generate R&D proposals. The faculty of these institutes are encouraged to submit their project proposals in these diverse research areas.</li>
                <li>The concerned ISRO/DOS centre interested in the research topic is given in brackets after the areas/sub areas/problems.</li>
                <li>The faculty of these STCs, RAC-S and S-TICs may submit the proposals to the convener of their respective STCs/ RAC-S/ S-TICs. However, the proposals may be submitted by the faculty of STC to the respective convenors of STC Cells only. Further proposals from the RAC-S/STIC and associated colleges shall be submitted to RAC-S/STIC-s based on the call for proposals by the respective cells. Further, the submitted proposals will be subjected to critical evaluation by ISRO/DOS Centres. The proposal will be evaluated on the basis of novelty, methodology, approach, deliverables, experience of the PI in the subject area, duration of the project, budget etc.</li>
                <li>The Projects having envisaged outcome as a product or process of business/commercial potential shall be submitted through S-TICs.</li>
                <li>The evaluation reports of the proposals received from the ISRO/DOS centres will be further reviewed by the Joint Policy Committee (JPC) of STC, Joint Management Committee (JMC) of STIC and Joint Policy Management Council (JPMC) of RAC-S before its recommendation for funding support.</li>
                <li>The age limit for the Principal Investigator is below 65 years (sixty-five) including the project period.</li>
                <li>One hard copy and a soft copy of the proposal shall be submitted to the respective STCs/STIC/ RAC-S.</li>
                <li>Conveners of STC/STIC/RAC-S shall submit a hard copy and a soft copy of the proposal to the respective ISRO/DOS centre.</li>
              </ol>
              <a href="assets/pdf/respond/Research_Areas_Space_Doc2025.pdf" class="download-btn" rel="noopener noreferrer" target="_blank" title="Download Research Areas in Space-2025"> Download Research Areas in Space-2025 </a>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>