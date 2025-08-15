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
              <!-- <span class="announcement-date">February 2024</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/Ayodya.pdf" target="_blank">Ayodhya Ram Mandir from Space as viewed by IRS Cartosat Satellite</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Satellite Imagery</span>
              </div>
              <p>Satellite view of the newly constructed Ram Mandir in Ayodhya captured by IRS Cartosat Satellite.</p>
            </div>

            <!-- Technician-B CBT Objection Management -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">March 7-10, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Objection Management for Technician-B CBT</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-notice">Notice</span>
              </div>
              <p>OBJECTION MANAGEMENT OF THE COMPUTER BASED TEST (CBT) FOR THE POST OF TECHNICIAN-B HELD ON 02.03.2024 HAVE BEEN UPLOADED IN NRSC APPLICATION PORTAL. Objections link is live from 07 Mar 2024(1000 Hrs) to 10 Mar 2024 (1000 Hrs).</p>
            </div>

            <!-- Technician-B CBT Schedule -->
            <div class="announcement-item important">
              <!-- <span class="announcement-date">March 2, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Technician-B Computer Based Test Schedule</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-important">Important</span>
              </div>
              <p>COMPUTER BASED TEST (CBT) FOR THE POSTS OF TECHNICIAN-B AGAINST ADVERTISEMENT NO: NRSC-RMT-4-2023 DATED 09.12.2023, IS SCHEDULED TO BE HELD ON 02.03.2024 (SATURDAY). ADMIT CARD FOR THE CBT MAY BE DOWNLOADED FROM THE LINK WHICH IS SENT TO REGISTERED MAIL ID / NRSC APPLICATION PORTAL.</p>
            </div>

            <!-- Application Deadline Extension -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">February 16, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Application Deadline Extended</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-deadline">Deadline</span>
              </div>
              <p>Applicants may note that the closing date of receipt of online applications against advertisement no. NRSC-RMT-1-2024 is now extended till 16.02.2024 (1700 Hrs).</p>
            </div>

            <!-- Application Closing Notice -->
            <div class="announcement-item urgent">
              <!-- <span class="announcement-date">February 12, 2024</span> -->
              <h3 class="announcement-title">Important Application Deadline Notice</h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-urgent">Urgent</span>
              </div>
              <p>ATTENTION: THE RECEIPT OF ONLINE APPLICATIONS AGAINST ADVT NO: NRSC-RMT-1-2024 DATED 22.01.2024 WILL BE CLOSED AT 1700 HRS ON 12.02.2024 (MONDAY).</p>
              <p>CANDIDATES APPLYING TO THE POST OF LIBRARY ASSISTANT (POST CODE 19) MAY KINDLY NOTE THAT WHOEVER FULFILL THE ELIGIBILITY CRITERIA FOR THE POST MAY SELECT "M.Sc" IN THE HIGHER EDUCATION FIELD AND THEIR RESPECTIVE SPECIALIZATION.</p>
            </div>

            <!-- User Interaction Meet 2024 -->
            <div class="announcement-item highlight">
              <!-- <span class="announcement-date">March 12-13, 2024</span> -->
              <h3 class="announcement-title">
                <a href="https://uim24.nrsc.gov.in/" target="_blank">User Interaction Meet 2024</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-highlight">Featured</span>
              </div>
              <p>USER INTERACTION MEET 2024 WITH FOCUS ON IMPLEMENTATION OF INDIAN SPACE POLICY-2023 AND UPCOMING LAUNCHES ON 12th and 13th March, 2024 @ JNTU CAMPUS HYDERABAD.</p>
              <p>
                <a href="assets/pdf/announcements/UIM_24_Brochure_2024.pdf" target="_blank" class="btn btn-sm btn-outline-primary mt-2">Download Brochure</a>
              </p>
            </div>

            <!-- Recruitment Notice -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">January 22, 2024</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Recruitment for Multiple Positions</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
              </div>
              <p>Recruitment for the posts of Scientist Engineer 'SC', Medical Officer 'SC', Nurse 'B' & Library Assistant 'A' (ADVERTISEMENT NO. NRSC-RMT-1-2024).</p>
            </div>

            <!-- Vacancy Update Notice -->
            <div class="announcement-item update">
              <!-- <span class="announcement-date">December 9, 2023 (Updated)</span> -->
              <h3 class="announcement-title">Vacancy Update Notice</h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-update">Update</span>
              </div>
              <p>Correction in number of vacancies published against Advt No.NRSC/RMT/4/2023 dated 09.12.2023 for Post code:01 (Electronic Mechanic) - now 33 vacancies (previously 32), with 03 vacancies reserved for EWS. Total vacancies are 54.</p>
            </div>

            <!-- EOS-06 Anniversary -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">2024</span> -->
              <h3 class="announcement-title">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal_2">Glimpses of EOS-06 One Year Anniversary</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Celebration</span>
                <span class="announcement-category category-video">Video</span>
              </div>
              <p>Celebrating one year of EOS-06 satellite operations with special video highlights.</p>
            </div>
          </div>
          <nav aria-label="Announcements pagination">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="View_More_Announcements.php">1</a>
              </li>
              <li class="page-item active">
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
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
    <!-- Video Modals -->
    <div class="modal fade" id="videoModal_2" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header flex-column align-items-start">
            <h3 class="modal-title" id="videoModalLabel">Glimpses EOS-06</h3>
            <h5 class="modal-subtitle">Glimpses of EOS-06 One Year Anniversary</h5>
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="ratio ratio-16x9">
              <video controls autoplay muted playsinline>
                <source src="assets/video/EOS-06_OneYear_Anniversary_Video.mp4" type="video/mp4"> Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>