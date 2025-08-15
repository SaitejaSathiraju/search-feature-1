<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Announcements | NRSC</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-KNmb9dp1LtRCH0ZqV/Y3SgwFhJYOmIAVukEY9VkGCGqgOAdRYTQeRNC8s8qY9uvhHDgqP+VnEPhKDKBzm5Ag0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --light-color: #ecf0f1;
        --dark-color: #2c3e50;
        --text-color: #333;
        --text-light: #7f8c8d;
      }

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }
      }

      .section {
        padding: 3rem 0;
        background-color: #fff;
      }

      .announcement-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 2rem;
        margin-bottom: 2rem;
      }

      .announcement-item {
        padding: 1rem 0;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
      }

      .announcement-item p {
        font-size: 20px;
        text-align: justify;
      }

      .announcement-item:hover {
        background-color: #f9f9f9;
        transform: translateX(5px);
      }

      .announcement-item:last-child {
        border-bottom: none;
      }

      .announcement-date {
        font-size: 0.85rem;
        color: var(--text-light);
        margin-bottom: 0.5rem;
        display: block;
      }

      .announcement-title {
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
      }

      .announcement-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s;
      }

      .announcement-title a:hover {
        color: var(--secondary-color);
        text-decoration: underline;
      }

      .announcement-category {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background-color: var(--light-color);
        color: var(--dark-color);
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
      }

      .category-recruitment {
        background-color: #e3f2fd;
        color: #1565c0;
      }

      .category-training {
        background-color: #e8f5e9;
        color: #2e7d32;
      }

      .category-event {
        background-color: #fff3e0;
        color: #e65100;
      }

      .category-data {
        background-color: #f3e5f5;
        color: #7b1fa2;
      }

      .search-box {
        margin-bottom: 2rem;
        position: relative;
      }

      .search-box input {
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        border: 1px solid #ddd;
        box-shadow: none;
      }

      .search-box .btn-search {
        position: absolute;
        right: 5px;
        top: 5px;
        background-color: var(--secondary-color);
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .filter-section {
        margin-bottom: 2rem;
      }

      .filter-btn {
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
        border-radius: 20px;
        padding: 0.375rem 1rem;
        font-size: 0.85rem;
        border: 1px solid #ddd;
        background-color: white;
      }

      .filter-btn.active {
        background-color: var(--secondary-color);
        color: white;
        border-color: var(--secondary-color);
      }

      .pagination {
        justify-content: center;
        margin-top: 2rem;
      }

      .page-item.active .page-link {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
      }

      .page-link {
        color: var(--secondary-color);
      }

      .modal-header {
        border-bottom: none;
        padding-bottom: 0;
      }

      .modal-subtitle {
        color: var(--text-light);
        font-size: 1rem;
        margin-bottom: 1rem;
      }

      .category-newsletter { background-color: #e8f5e9; color: #2e7d32; }
      .category-save-date { background-color: #fff3e0; color: #e65100; }
      .category-archive { background-color: #f5f5f5; color: #616161; }
      .category-launch { background-color: #e3f2fd; color: #1565c0; }
      .category-technical { background-color: #e8f5e9; color: #2e7d32; }
      .category-research { background-color: #fff3e0; color: #e65100; }
      .category-collaboration { background-color: #f3e5f5; color: #7b1fa2; }
      .category-satellite { background-color: #e0f7fa; color: #00838f; }
      .category-platform { background-color: #fce4ec; color: #ad1457; }
      .category-publication { background-color: #e8eaf6; color: #3949ab; }

      /* .btn-close {
        background: transparent url("data:image/svg+xml,%3csvg
			xmlns='http://www.w3.org/2000/svg'viewBox='0 0 16 16'fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
opacity: 0.5;
            width: 1em;
            height: 1em;
        } */
      .btn-close:hover {
        opacity: 0.75;
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
        .announcement-container {
          padding: 1.5rem;
        }

        .section {
          padding: 2rem 0;
        }
      }

      .sub-item a {
        font-size: 20px;
        text-align: justify;
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
                <h1 class="heading-title text-break text-center">Announcements</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div data-skip-id="viewMoreAnn-main" id="viewMoreAnn-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container">
          <div class="announcement-container">
            <!-- Announcement Item -->
            <!-- Announcement Item - Launch -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 22, 2023</span> -->
              <h3 class="announcement-title">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal_3">DWEPIC Portal Launch</a>
              </h3>
              <div>
                <span class="announcement-category category-launch">Launch</span>
                <span class="announcement-category category-portal">Portal</span>
              </div>
              <p>DWEPIC portal was launched by Honorable Prime Minister on 22.05.2023.</p>
            </div>
            <!-- Announcement Item - Data Release -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">April 1, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://bhoonidhi.nrsc.gov.in" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">EOS-06 Data Products Available</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data Release</span>
                <span class="announcement-category category-satellite">Satellite</span>
              </div>
              <p>We are happy to announce EOS-06 - OCM L1C and SCAT-3 products to users from 01st Apr 2023, accessible through the Bhoonidhi portal.</p>
            </div>
            <!-- Announcement Item - Publication -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">March 21, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/Release_GLatlas_ihr_21032023.pdf" target="_blank">Glacial Lake Atlas Released</a>
              </h3>
              <div>
                <span class="announcement-category category-publication">Publication</span>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>Glacial Lake Atlas of Indian Himalayan River Basins now available.</p>
            </div>
            <!-- Announcement Item - Workshop -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">February 27, 2023</span> -->
              <h3 class="announcement-title">
                <a href="#" data-bs-toggle="modal" data-bs-target="#tableModal_1">National Meet on Disaster Risk Management</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-disaster">Disaster Management</span>
              </div>
              <p>Technical Presentations from National Meet on Disaster Risk Management - Trends & Technologies held on 27th-28th Feb 2023.</p>
            </div>
            <!-- Announcement Item - Recruitment Results -->
            <div class="announcement-item highlight-item">
              <!-- <span class="announcement-date">March 25, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Career_Result_Active.php" target="_blank">Recruitment Results - Multiple Positions</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-results">Results</span>
              </div>
              <p>Results for various positions including Junior Research Fellow, Project Associate-I, and Research Scientist (Advertisement No: NRSC-RMT-1-2023).</p>
              <div class="sub-items">
                <div class="sub-item">
                  <!-- <span class="sub-date">March 28, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (JRF, Project Associate-I, Research Scientist)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">March 30, 2023</span> -->
                  <p><br>
                    <strong>Update:</strong> Number of positions against JRF4 & JRF5 reduced to 01 each due to administrative reasons.
                  </p>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 5, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Junior Research Fellow (Post Code JRF06,JRF07)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 7, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Project Associate-I (Post Code PA01)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 10, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (JRF06,JRF07,JRF10)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 12, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Project Scientist-I (Post Code-PS01)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 15, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Junior Research Fellow (JRF2,JRF3,JRF9)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 18, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (PS01,PA01)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 20, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (JRF09)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">April 22, 2023</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (JRF02,JRF03,JRF12)</a>
                </div>
              </div>
            </div>
            <!-- Announcement Item - Training -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 1, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://www.cssteap.org" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">NRSC-CSSTEAP Short Course on Remote Sensing Data Processing</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
                <span class="announcement-category category-course">Course</span>
              </div>
              <p>Short Course on <b>Remote Sensing Data Processing</b> during October 09-20, 2023. Last date to apply July 31, 2023. <a href="https://www.cssteap.org/upload/announcement/UNCSSTEAP-ShortcourseonDataprocessing_Final.pdf" target="_blank">Download Brochure</a>
              </p>
            </div>
            <!-- Announcement Item -->
            <!-- Announcement Item - Recruitment -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">December 9, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">ADVERTISEMENT NO.NRSC/RMT/4/2023 (Post of Technician B)</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
              </div>
              <p>National Remote Sensing Centre recruitment notification for Technician B positions.</p>
            </div>
            <!-- Announcement Item - Recruitment -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">December 5, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">ADVERTISEMENT FOR CONTRACT EMPLOYMENT (CAM and QM for Aircraft Air Worthiness)</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-contract">Contract</span>
              </div>
              <p>Contract employment opportunities for CAM and QM positions in Aircraft Air Worthiness.</p>
            </div>
            <!-- Announcement Item - Event -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">November 10, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://icsm2023.nrsc.gov.in" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')" target="_blank">Inter Centre Sports Meet – 2023</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-sports">Sports</span>
              </div>
              <p>National Remote Sensing Centre (NRSC) is organizing the <b>Inter Centre Sports Meet – 2023</b> for Athletics and Indoor games at Hyderabad during November 16-26, 2023. </p>
            </div>
            <!-- Announcement Item - Award -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">November 5, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NDEM_Geospatial_Excellence_Award_2023.pdf" target="_blank">NDEM Receives Geospatial Excellence Award 2023</a>
              </h3>
              <div>
                <span class="announcement-category category-award">Award</span>
                <span class="announcement-category category-achievement">Achievement</span>
              </div>
              <p>National Database for Emergency Management (NDEM) of National Remote Sensing Centre (NRSC), ISRO receives Geospatial Excellence Award 2023.</p>
            </div>
            <!-- Announcement Item - Recruitment Results -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">October 30, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Career_Result_Active.php" target="_blank">Recruitment Results - JRF, Project Associate-I, Research Scientist</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-results">Results</span>
              </div>
              <p>Results for recruitment to the post of Junior Research Fellow, Project Associate-I, Research Scientist (Post Code JRF04, JRF05, PA02, RS09 - Advertisement No: NRSC-RMT-1-2023).</p>
            </div>
            <!-- Announcement Item - Event -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">October 1, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/WSW_2023.png" target="_blank">World Space Week Celebrations</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-celebration">Celebration</span>
              </div>
              <p>World Space Week Celebrations - October 4-10, 2023.</p>
            </div>
            <!-- Announcement Item - Workshop -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">September 25, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/Banner_NISAR_workshop_final.pdf" target="_blank">Geodynamics NISAR Brainstorming Meet</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>Geodynamics NISAR brainstorming meet 11-12 October, 2023 (Participation in the Brainstorming meet is based on Invitation).</p>
            </div>
            <!-- Announcement Item - Publication -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">September 6, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NovaSAR_satellite_06092023.pdf" target="_blank">NovaSAR Satellite Brochure</a>
              </h3>
              <div>
                <span class="announcement-category category-publication">Publication</span>
                <span class="announcement-category category-satellite">Satellite</span>
              </div>
              <p>Technical brochure for NovaSAR satellite now available.</p>
            </div>
            <!-- Announcement Item - Conference -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">August 20, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://43inca.org/" target="_blank">43rd INCA International Congress</a>
              </h3>
              <div>
                <span class="announcement-category category-conference">Conference</span>
                <span class="announcement-category category-registration">Registration</span>
              </div>
              <p>Registration open for 43rd INCA (Indian National Cartographic Association) International Congress. Last Date for Abstract Submission: 05 September 2023.</p>
            </div>
            <!-- Announcement Item - Event -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">August 10, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://indiaspaceweek.org" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">India Space Week Celebrations</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-celebration">Celebration</span>
              </div>
              <p>India Space Week Celebrations on August 12 to 18, 2023.</p>
            </div>
            <!-- Announcement Item - Award -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 15, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/SAG-Award-2023-2.pdf" target="_blank">NRSC bags ESRI SAG Award 2023</a>
              </h3>
              <div>
                <span class="announcement-category category-award">Award</span>
                <span class="announcement-category category-achievement">Achievement</span>
              </div>
              <p>National Remote Sensing Center recognized with ESRI Special Achievement in GIS Award 2023.</p>
            </div>
            <!-- Announcement Item - Publication -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 6, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/LandscapesofBharat/LandscapesofBharat.html" target="_blank">Coffee Table Book Released at G20 SELM Meet</a>
              </h3>
              <div>
                <span class="announcement-category category-publication">Publication</span>
                <span class="announcement-category category-event">Event</span>
              </div>
              <p>Coffee Table Book "Landscapes of Bharat" released at G20 Space Economy Leaders Meeting on 06.07.2023 at Bengaluru.</p>
            </div>
            <!-- Announcement Item - Project -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 21, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/InternationalDayofYoga_Short_bhuvan.pdf" target="_blank">Bhuvan Support to International Day of Yoga</a>
              </h3>
              <div>
                <span class="announcement-category category-project">Project</span>
                <span class="announcement-category category-collaboration">Collaboration</span>
              </div>
              <p>Bhuvan platform provides support to International Day of Yoga celebrations for Ministry of Ayush.</p>
            </div>
          </div>
          <nav aria-label="Announcements pagination">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements.php">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements_2.php">2</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="View_More_Announcements_3.php">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements_4.php">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements_5.php">5</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </main>
    <footer role="contentinfo" > <?php include 'footer.php'; ?> </footer>
    <!-- Video Modals -->
    <div class="modal fade" id="videoModal_3" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header flex-column align-items-start">
            <h3 class="modal-title" id="videoModalLabel">DWEPIC</h3>
            <h5 class="modal-subtitle">DWEPIC portal was launched by Honorable Prime Minister on 22.05.2023</h5>
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="ratio ratio-16x9">
              <video controls autoplay muted playsinline>
                <source src="assets/video/DWEPIC.mp4" type="video/mp4"> Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<div class="modal fade" id="tableModal_1" tabindex="-1" aria-labelledby="tableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header flex-column align-items-start">
        <h3 class="modal-title" id="tableModalLabel">National Meet on Disaster Risk Management</h3>
        <h5 class="modal-subtitle">Technical Presentations held on 27th-28th Feb 2023</h5>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">SNo</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-I_DisasterRiskReduction.pdf" target="_blank">Disaster Risk Management</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-II_HydrologicalDisasters.pdf" target="_blank">Hydrological Disasters</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-III_MeteorologicalDisaster.pdf" target="_blank">Meteorological Disasters</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-IV_GeologicalDisasters.pdf" target="_blank">Geological Disasters</a></td>
              </tr>
              <tr>
                <td>5</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-V_ForestFireDrought.pdf" target="_blank">Forest Fire & Drought</a></td>
              </tr>
              <tr>
                <td>6</td>
                <td><a href="assets\pdf\announcements\DRM_Meet_2023\S-VI_ClimateChange.pdf" target="_blank">Climatic change impact and Capacity Building</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>