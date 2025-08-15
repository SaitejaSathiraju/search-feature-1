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
            <!-- Data Release -->
            <div class="announcement-item ">
              <!-- <span class="announcement-date">September 15, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://bhoonidhi.nrsc.gov.in" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">Landsat-9 Data Now Available</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data Release</span>
                <span class="announcement-category category-open-data">Open Data</span>
              </div>
              <p>Happy to announce the availability of Landsat-9 data through Bhoonidhi Application as Open and free data to users.</p>
            </div>
            <!-- Data Visualization -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">September 10, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://bhoonidhi.nrsc.gov.in/vista/" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">EOS-04 Data Visualization</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data</span>
                <span class="announcement-category category-visualization">Visualization</span>
              </div>
              <p>Visualize data from <a href="assets/pdf/announcements/EOS-04_VISTA.pdf" target="_blank">EOS-04</a> the latest Radar Imaging Satellite at Bhoonidhi VISTA. Data products will be announced soon. </p>
            </div>
            <!-- Recruitment Shortlist -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">August 25, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/Announcements/List of Shortlisted Candidates for Interview to the post of Junior Research Fellow_Post Code JRF1.pdf" target="_blank">Shortlisted Candidates for JRF Position</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-shortlist">Shortlist</span>
              </div>
              <p>List of candidates shortlisted for Interview for the post of Junior Research Fellow (POST CODE: JRF1).</p>
            </div>
            <!-- Student Competition -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 6, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://spacequiz.iirs.gov.in" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">International Moon Day 2022 - Space Quiz</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-student">Student</span>
              </div>
              <p>Space Quiz open for School Students during July 06-19, 2022 as part of International Moon Day celebrations.</p>
            </div>
            <!-- Research Workshop -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 18, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NICES_NRSC_Workshop_July_18-19_VF02.pdf" target="_blank">NICES National Workshop on Space-based Climate Studies</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-climate">Climate</span>
              </div>
              <p>NICES National Workshop on "Space based Information Support for Climate and Environment Studies: Road to the Future".</p>
              <p>
                <strong>Date:</strong> July 18-19, 2022 <br>
                <strong>Venue:</strong> New Delhi
              </p>
            </div>
            <!-- Training Schedule -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">July 1, 2022</span> -->
              <h3 class="announcement-title">
                <a href="Training_TC_Overview.php" target="_blank">Training Courses/Webinars Schedule</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
                <span class="announcement-category category-schedule">Schedule</span>
              </div>
              <p>Upcoming Training Courses and Webinars for July-December 2022.</p>
            </div>
            <!-- Training Program -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 14, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/Microwave-brochure-2022-English_14062022.pdf" target="_blank">Microwave Remote Sensing Training 2022</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
                <span class="announcement-category category-technical">Technical</span>
              </div>
              <p>1 Week Microwave Remote Sensing Training program brochure available for download.</p>
            </div>
            <!-- Training Program -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 14, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/intro2GIS Brochure-2pages-English_14062022.pdf" target="_blank">Open Source GIS Training 2022</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
                <span class="announcement-category category-gis">GIS</span>
              </div>
              <p>1 Week Open Source GIS Training program details and brochure now available.</p>
            </div>
            <!-- Research Program -->
            <div class="announcement-item ">
              <!-- <span class="announcement-date">June 10, 2022</span> -->
              <h3 class="announcement-title">
                <a href="Respond_Projects.php" target="_blank">RESPOND BASKET 2022 Deadline Extended</a>
              </h3>
              <div>
                <span class="announcement-category category-research">Research</span>
                <span class="announcement-category category-deadline">Deadline</span>
              </div>
              <p>Last date for online submission extended to June 15, 2022.</p>
            </div>
            <!-- Collaboration -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 5, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/MOU Signed Between UIDAI and NRSC.pdf" target="_blank">NRSC-UIDAI Technical Collaboration</a>
              </h3>
              <div>
                <span class="announcement-category category-collaboration">Collaboration</span>
                <span class="announcement-category category-mou">MOU</span>
              </div>
              <p>MOU Signed Between UIDAI and NRSC/ISRO for Technical Collaboration.</p>
            </div>
            <!-- Satellite Imagery -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">June 1, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/E04_SAMPLE_IMAGES_5.pdf" target="_blank">RISAT 1A (EOS-04) Sample Images</a>
              </h3>
              <div>
                <span class="announcement-category category-satellite">Satellite</span>
                <span class="announcement-category category-imagery">Imagery</span>
              </div>
              <p>Sample images from RISAT 1A (EOS-04) now available for viewing.</p>
            </div>
            <!-- Data Products -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 25, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://bhoonidhi.nrsc.gov.in/bhoonidhi/htmls/help.html" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">NovaSAR-1 Data Products Available</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data Products</span>
                <span class="announcement-category category-satellite">Satellite</span>
              </div>
              <p>NovaSAR-1 data products now accessible through Bhoonidhi portal.</p>
            </div>
            <!-- Event Materials -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 20, 2022</span> -->
              <h3 class="announcement-title">
                <a href="/UIM_2022" target="_blank">User Interaction Meet 2022 Presentations</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-presentations">Presentations</span>
              </div>
              <p>Presentation materials from User Interaction Meet 2022 now available.</p>
            </div>
            <!-- Platform Update -->
            <div class="announcement-item ">
              <!-- <span class="announcement-date">January 15, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NRSC_Website_Bhoonidhi_January2022_New Releases.pdf" target="_blank">Bhoonidhi Platform New Features</a>
              </h3>
              <div>
                <span class="announcement-category category-platform">Platform</span>
                <span class="announcement-category category-update">Update</span>
              </div>
              <p>New releases include Stereo/CartoDEM/Bottom of Atmosphere data products ordering, Vista, and Upgraph features.</p>
            </div>
            <!-- Special Publication -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">January 10, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/75YrsAzadiKaAmritMahotsavISRO_2022.html" target="_blank">Azadi Ka Amrit Mahotsav: ISRO's 75 Achievements</a>
              </h3>
              <div>
                <span class="announcement-category category-publication">Publication</span>
                <span class="announcement-category category-special">Special</span>
              </div>
              <p>Coffee Table Book showcasing 75 Major Activities of ISRO released as part of Azadi Ka Amrit Mahotsav celebrations.</p>
            </div>

            <!-- Training Program -->
<div class="announcement-item">
  <span class="announcement-date">March 1, 2022</span>
  <h3 class="announcement-title">
    <a href="Training_TC_Overview.php" target="_blank">Hyperspectral Remote Sensing Training 2022</a>
  </h3>
  <div>
    <span class="announcement-category category-training">Training</span>
    <span class="announcement-category category-technical">Technical</span>
  </div>
  <p>1 Week Hyperspectral Remote Sensing Training program details available.</p>
</div>

<!-- Event Announcement -->
<div class="announcement-item">
  <span class="announcement-date">March 3, 2022</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/UIM-2022 Brochure-03032021-1.pdf" target="_blank">User Interaction Meet 2022</a>
  </h3>
  <div>
    <span class="announcement-category category-event">Event</span>
    <span class="announcement-category category-conference">Conference</span>
  </div>
  <p>Brochure and details for User Interaction Meet (UIM-2022) now available.</p>
</div>

<!-- Newsletter -->
<div class="announcement-item">
  <span class="announcement-date">January 15, 2022</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/NRSC_P2P_Jan_2022.pdf" target="_blank">Pixel 2 People Newsletter - January 2022</a>
  </h3>
  <div>
    <span class="announcement-category category-newsletter">Newsletter</span>
    <span class="announcement-category category-update">Update</span>
  </div>
  <p>Latest edition of the Pixel 2 People (P2P) newsletter now available.</p>
</div>

<!-- Save the Date -->
<div class="announcement-item highlight-item">
  <span class="announcement-date">March 1, 2022</span>
  <h3 class="announcement-title">Virtual User Interaction Meet 2022</h3>
  <div>
    <span class="announcement-category category-event">Event</span>
    <span class="announcement-category category-save-date">Save the Date</span>
  </div>
  <p><strong>Save The Date:</strong> Virtual User Interaction Meet 2022 on 29th March @ NRSC Hyderabad, India.</p>
  <p>Registration details will be announced soon.</p>
</div>

<!-- Portal Information -->
<div class="announcement-item">
  <span class="announcement-date">January 10, 2022</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/Retired employees data for Advisor portal.pdf" target="_blank">IN-SPACe Advisor Portal Update</a>
  </h3>
  <div>
    <span class="announcement-category category-portal">Portal</span>
    <span class="announcement-category category-update">Update</span>
  </div>
  <p>Furnishing Details Of Retired/Resigned S&amp;T Personnel for IN-SPACe Advisor Portal.</p>
  <p><a href="assets/pdf/announcements/Format.xlsx" target="_blank">Download required format</a></p>
</div>

<!-- Newsletter -->
<div class="announcement-item">
  <span class="announcement-date">July 15, 2021</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/NRSC_P2P_Jul_2021_FINAL_small.pdf" target="_blank">Pixel 2 People Newsletter - July 2021</a>
  </h3>
  <div>
    <span class="announcement-category category-newsletter">Newsletter</span>
    <span class="announcement-category category-archive">Archive</span>
  </div>
  <p>July 2021 edition of Pixel 2 People (P2P) newsletter available for reference.</p>
</div>

<!-- Portal Launch -->
<div class="announcement-item highlight-item">
  <span class="announcement-date">January 5, 2022</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/portal_launch.pdf" target="_blank">Bhuvan-NHP Portal Launch</a>
  </h3>
  <div>
    <span class="announcement-category category-launch">Launch</span>
    <span class="announcement-category category-portal">Portal</span>
  </div>
  <p>Official launch of the Bhuvan-NHP portal for hydrological applications.</p>
</div>

<!-- New Portal -->
<div class="announcement-item highlight-item">
  <span class="announcement-date">January 3, 2022</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/NRSC Satellite Data Ordering Application Information_v1.0.pdf" target="_blank">New Bhoonidhi Portal</a>
  </h3>
  <div>
    <span class="announcement-category category-launch">Launch</span>
    <span class="announcement-category category-portal">Portal</span>
  </div>
  <p>New Bhoonidhi Portal now available for satellite data ordering and access.</p>
  <p><a href="https://bhoonidhi.nrsc.gov.in" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">Access the portal</a></p>
</div>

<!-- Satellite Data -->
<div class="announcement-item">
  <span class="announcement-date">January 1, 2021</span>
  <h3 class="announcement-title">
    <a href="assets/pdf/announcements/C3_BROCHURE_JAN2021_modified.pdf" target="_blank">Cartosat-3 Data Products</a>
  </h3>
  <div>
    <span class="announcement-category category-data">Data Products</span>
    <span class="announcement-category category-satellite">Satellite</span>
  </div>
  <p>Technical brochure for Cartosat-3 Satellite Data Products now available.</p>
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
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements_3.php">3</a>
              </li>
              <li class="page-item ">
                <a class="page-link" href="View_More_Announcements_4.php">4</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="View_More_Announcements_5.php">5</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </main>
    <footer role="contentinfo" class="bg-dark text-white py-4"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>