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
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 15, 2024</span> -->
              <h3 class="announcement-title">
                Extension of Vendors Meet 2024 submission deadline
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
              </div>
              <p>The due date for submission of request for participating in Vendors Meet 2024 has been extended till 26-07-2024.</p>
            </div>

            <div class="announcement-item">
              <!-- <span class="announcement-date">July 15, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NRSCVendorsMeet.pdf" target="_blank">Vendors Meet</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
              </div>
              <p>NRSC proposes to conduct Vendors Meet to create awareness and encourage participation from the vendors with special emphasis on MSE Sectors including MSE units owned by SC/ST/Women Entrepreneurs.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 10, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Career_Result_Active.php" target="_blank">Advertisement no: NRSC-RMT-4-2023 - Schedule for Skill Test</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <!-- <span class="announcement-category category-results">Results</span> -->
              </div>
              <p>Advertisement no: NRSC-RMT-4-2023 dated 09.12.2023, SCHEDULE FOR SKILL TEST TO THE PROVISIONALLY SHORT-LISTED CANDIDATES - 1. Electronic Mechanic, 2. Electrical, 3. Instrument Mechanic, 4. Photography, 5. Desktop Publishing Operator.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 25, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/UNCSSTEAP-NRSCshortcourse-SatelliteRemotesensingforOceanapplications_2024.pdf" target="_blank">Short Course on Satellite Remote Sensing For Ocean Applications</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
              </div>
              <p>Short Course on Satellite Remote Sensing For Ocean Applications to be conducted at NRSC, Hyderabad during <b>August 19-30</b>, 2024. Last date for receipt of online applications is June 30, 2024. </p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 20, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/New_GSTA Programme Flyer at Hyderabad.pdf" target="_blank">Training Programme on Geospatial Technologies & Applications</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
              </div>
              <p>Training Programme on Geospatial Technologies & Applications during 01-05 July, 2024 at Hyderabad.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 15, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NHP2024_Training_Report_Story_of_the_Week_Bilingual.pdf" target="_blank">5-day Training Programme on Spatial Flood Early Warning Systems</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
              </div>
              <p>5-day Training Programme (May 6-10, 2024) on Spatial Flood Early Warning Systems for Godavari and Tapi River Basins under the National Hydrology Project.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 10, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NICES_Announcement_2024_Extension.pdf" target="_blank">NICES programme - Announcement inviting project proposals</a>
              </h3>
              <div>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>NICES programme - Announcement inviting project proposals from Indian researchers.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 5, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Advertisement no: NRSC-RMT-1-2024 - Syllabus for Written Test</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
              </div>
              <p>Advertisement no: NRSC-RMT-1-2024 dated 22.01.2024, the Syllabus for Written Test of the post codes 06 to 16.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 30, 2024</span> -->
              <h3 class="announcement-title">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">AMRUT Large scale urban geospatial databases</a>
              </h3>
              <div>
                <span class="announcement-category category-project">Project</span>
              </div>
              <p>Overview – AMRUT Large scale urban geospatial databases creation using VHRS data for Class-I cities for GIS based Master Plan formulation.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 25, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/atlas/geology/Geology_Atlas_Book.pdf" target="_blank">Release of Atlas - Geology from Space</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data Release</span>
              </div>
              <p>New atlas showcasing geological features from space observations.</p>
            </div>
            <!-- Announcement Item -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 20, 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/swachhtaPledge_2024.pdf" target="_blank">Swachhta Pakhwada campaign at NRSC</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
              </div>
              <p>Swachhta Pakhwada campaign at NRSC during 01.02.2024 to 15.02.2024.</p>
            </div>
          </div>
          <nav aria-label="Announcements pagination">
            <ul class="pagination">
              <li class="page-item active">
                <a class="page-link" href="View_More_Announcements.php">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements_2.php">2</a>
              </li>
              <li class="page-item">
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
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header flex-column align-items-start">
            <h3 class="modal-title" id="videoModalLabel">AMRUT Project Overview</h3>
            <h5 class="modal-subtitle">AMRUT Large scale urban geospatial databases creation using VHRS data for Class-I cities for GIS based Master Plan formulation</h5>
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="ratio ratio-16x9">
              <video controls autoplay muted playsinline>
                <source src="assets/video/AMRUT_Project_Overview.mp4" type="video/mp4"> Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>