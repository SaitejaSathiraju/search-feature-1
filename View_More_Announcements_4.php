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
            <!-- Announcement Item - Recruitment Update -->
            <div class="announcement-item highlight-item">
              <!-- <span class="announcement-date">May 15, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Update: Technician Apprentices Qualification</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-update">Update</span>
              </div>
              <p>
                <strong>Note:</strong> The Essential Qualification for Technician Apprentices (Advertisement No.NRSC-RMT-2-2023) is updated to "Pass in First Class Diploma in Engg. in the respective field with not less than 60% marks / 6.32 CGPA".
              </p>
            </div>
            <!-- Announcement Item - Recruitment -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 13, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Advt_Active.php" target="_blank">Apprentice Recruitment 2023-24</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-apprentice">Apprentice</span>
              </div>
              <p>Engaging Graduate and Technician Apprentices for the Year 2023-24.</p>
            </div>
            <!-- Announcement Item - Training -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">May 10, 2023</span> -->
              <h3 class="announcement-title">
                <a href="https://www.cssteap.org/" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">NRSC-CSSTEAP Short Course on Remote Sensing Data Acquisition</a>
              </h3>
              <div>
                <span class="announcement-category category-training">Training</span>
                <span class="announcement-category category-course">Course</span>
              </div>
              <p>Short Course on <b>Remote Sensing Data Acquisition</b> during August 21-September 01, 2023. Last date to apply June 30, 2023. <a href="https://www.cssteap.org/upload/announcement/UNCSSTEAP-ShortcourseonDataacquisition_Final.pdf" target="_blank">Download Brochure</a>
              </p>
            </div>
            <!-- Announcement Item - Recruitment Update -->
            <div class="announcement-item highlight-item">
              <!-- <span class="announcement-date">March 25, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Career_ApplyOnline.php" target="_blank">Correction: Recruitment Advertisement</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-correction">Correction</span>
              </div>
              <p style="color:red;">
                <strong>Note:</strong> In respect of Post No.RS09 of Advertisement No.NRSC-RMT-1-2023, the word 'Hydraulics' in Hindi version was mentioned inadvertently and has been excluded.
              </p>
            </div>
            <!-- Announcement Item - Recruitment -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">March 23, 2023</span> -->
              <h3 class="announcement-title">
                <a href="Career_ApplyOnline.php" target="_blank">Temporary Research Personnel Recruitment</a>
              </h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>Recruitment of various Temporary Research Personnel.</p>
            </div>
            <!-- Announcement Item - Program -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">March 15, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/YuvikaFlyer_2023.pdf" target="_blank">Young Scientist Programme YUVIKA -2023</a>
              </h3>
              <div>
                <span class="announcement-category category-program">Program</span>
                <span class="announcement-category category-youth">Youth</span>
              </div>
              <p>Applications open for Young Scientist Programme YUVIKA 2023.</p>
            </div>
            <!-- Announcement Item - Event Update -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">March 1, 2023</span> -->
              <h3 class="announcement-title">UIM - 2023 Rescheduled</h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-update">Update</span>
              </div>
              <p>UIM - 2023 meet has been rescheduled to 16th & 17th March 2023.</p>
            </div>

            <!-- Workshop Announcement -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">February 1, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/Agenda-Emerging-geospatial-technology-innovations-1.pdf" target="_blank">Workshop on Emerging Geospatial Technology Innovations</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-technology">Technology</span>
              </div>
              <p>NRSC is organizing a one Day Workshop on Emerging Geospatial Technology Innovations under initiative of SpIN.</p>
              <p>
                <strong>Date:</strong> 1-Feb-2023 <br>
                <strong>Venue:</strong> NRSC, Jeedimetla Campus, Hyderabad
              </p>
            </div>
            <!-- Publication Announcement -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">January 28, 2023</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/E04_handbook.pdf" target="_blank">EOS-04 Handbook Released</a>
              </h3>
              <div>
                <span class="announcement-category category-publication">Publication</span>
                <span class="announcement-category category-satellite">Satellite</span>
              </div>
              <p>Technical handbook for EOS-04 satellite now available for download.</p>
            </div>
            <!-- Workshop Materials -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">January 25, 2023</span> -->
              <h3 class="announcement-title">
                <a href="#" data-bs-toggle="modal" data-bs-target="#tableModal_2">Bhoonidhi Workshop Presentations</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-materials">Materials</span>
              </div>
              <p>Presentation materials from the Bhoonidhi workshop now available online.</p>
            </div>
            <!-- Research Workshop -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">November 3, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/NICES_Lightning Workshop_03November2022.pdf" target="_blank">Brainstorming Session on Atmospheric Lightning Monitoring</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>Brainstorming Session on Monitoring the Atmospheric Lightning over India.</p>
            </div>
            <!-- Data Release -->
            <div class="announcement-item highlight-item">
              <!-- <span class="announcement-date">October 28, 2022</span> -->
              <h3 class="announcement-title">
                <a href="assets/pdf/announcements/EOS_04_writeup_modified.pdf" target="_blank">EOS-04 (RISAT-1A) SAR Data Now Available</a>
              </h3>
              <div>
                <span class="announcement-category category-data">Data Release</span>
                <span class="announcement-category category-satellite">Satellite</span>
              </div>
              <p>Happy to announce EOS-04 (RISAT-1A) SAR data to users through <a href="https://bhoonidhi.nrsc.gov.in" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">BHOONIDHI</a> portal. </p>
            </div>
            <!-- Review Committee -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">October 25, 2022</span> -->
              <h3 class="announcement-title">
                <a href="Respond_basket_2024.php" target="_blank">RESPOND Review Committee Meeting Schedule</a>
              </h3>
              <div>
                <span class="announcement-category category-meeting">Meeting</span>
                <span class="announcement-category category-research">Research</span>
              </div>
              <p>Schedule for evaluation of RESPOND BASKET - 2022 proposals.</p>
            </div>
            <!-- Recruitment Results Group -->
            <div class="announcement-item highlight-item">
              <!-- <span class="announcement-date">April 23, 2022</span> -->
              <h3 class="announcement-title">Research Scientist Recruitment Updates</h3>
              <div>
                <span class="announcement-category category-recruitment">Recruitment</span>
                <span class="announcement-category category-results">Results</span>
              </div>
              <p>Updates regarding recruitment to Research Scientist positions (Advertisement No: NRSC-RMT-1-2022).</p>
              <div class="sub-items">
                <div class="sub-item">
                  <!-- <span class="sub-date">October 20, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Research Scientist (Post Code-RS04)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">October 18, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (Post Code: RS04)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">October 15, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Research Scientists (RS06,RS07,RS08)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">October 10, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">Results for Research Scientists and Research Associate (RS01,RS02,RS03,RA01)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">October 5, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (RS06,RS07,RS08)</a>
                </div>
                <div class="sub-item">
                  <!-- <span class="sub-date">October 1, 2022</span> -->
                  <a href="Career_Result_Active.php" target="_blank">List of Shortlisted Candidates for Interview (Research Scientists and Research Associate)</a>
                </div>
              </div>
            </div>
            <!-- Vigilance Awareness -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">October 31, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://pledge.cvc.nic.in/" target="_blank" onclick="return confirm('You are now leaving the NRSC website. Do you want to continue?')">Vigilance Awareness Week 2022</a>
              </h3>
              <div>
                <span class="announcement-category category-event">Event</span>
                <span class="announcement-category category-awareness">Awareness</span>
              </div>
              <p>Join NRSC's endeavor for 'Corruption free India for a Developed Nation' during Vigilance Awareness Week (31-October to 06-November). Click to take e-integrity pledge.</p>
            </div>
            <!-- Workshop Announcement -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">November 2, 2022</span> -->
              <h3 class="announcement-title">
                <a href="https://bhoonidhiworkshop2022.nrsc.gov.in/" target="_blank">BHOONIDHI Familiarization Workshop</a>
              </h3>
              <div>
                <span class="announcement-category category-workshop">Workshop</span>
                <span class="announcement-category category-training">Training</span>
              </div>
              <p>One Day Workshop on BHOONIDHI familiarization on 02-Nov-2022 (Wednesday). Registration now open.</p>
            </div>
            <!-- Meeting Update -->
            <div class="announcement-item">
              <!-- <span class="announcement-date">September 20, 2022</span> -->
              <h3 class="announcement-title">
                <a href="Respond_basket_2024.php" target="_blank">RESPOND Review Committee Meeting Postponed</a>
              </h3>
              <div>
                <span class="announcement-category category-update">Update</span>
                <span class="announcement-category category-meeting">Meeting</span>
              </div>
              <p>The RESPOND Review Committee meeting scheduled on 22.09.2022, 23.09.2022 and 26.09.2022 has been postponed.</p>
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
              <li class="page-item active">
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
  </body>
</html>

<div class="modal fade" id="tableModal_2" tabindex="-1" aria-labelledby="tableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header flex-column align-items-start">
        <h3 class="modal-title" id="tableModalLabel">Bhoonidhi workshop Presentations</h3>
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
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\1-BWS.pdf" target="_blank">EO sensor specifications and Planning</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\2-BWS.pdf" target="_blank">Optical Data Products Standard and Advanced</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\3-BWS.pdf" target="_blank">Data Products @ Bhoonidhi - Microwave</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\4-BWS.pdf" target="_blank">	Customised Special Products </a></td>
              </tr>
              <tr>
                <td>5</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\5-BWS.pdf" target="_blank">	Pricing and Licensing of IRS Data</a></td>
              </tr>
              <tr>
                <td>6</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\6-BWS.pdf" target="_blank">BHOONIDHI-ISRO EO Data Hub</a></td>
              </tr>
              <tr>
                <td>7</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\7-BWS.pdf" target="_blank">	Bhoonidhi Vista- Online Visualization and Exploration of Multi-mission EO Data</a></td>
              </tr>
              <tr>
                <td>8</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\8-BWS.pdf" target="_blank">	Bhoonidhi Upcoming Features</a></td>
              </tr>
              <tr>
                <td>9</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\9-BWS.pdf" target="_blank">	Bhoonidhi End to End Procesess</a></td>
              </tr>
              <tr>
                <td>10</td>
                <td><a href="assets\pdf\announcements\Bhoonidhi_2022\10-BWS.pdf" target="_blank">Practical Help Sessions with Usecases</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>