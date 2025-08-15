<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Training</title>
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

      .breadcrumb {
        padding: 10px 20px;
        font-size: 14px;
        color: #666;
      }

      .breadcrumb a {
        color: #0066cc;
        text-decoration: none;
      }

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .notice-section {
        margin-top: 30px;
        font-size: 15px;
      }

      .notice-section p {
        margin-bottom: 10px;
      }

      .notice-section a {
        color: #0056b3;
        text-decoration: none;
      }

      .notice-section a:hover {
        text-decoration: underline;
      }

      .note {
        font-style: italic;
        margin: 20px 0;
        color: #555;
      }

      .warning {
        font-weight: bold;
        color: #222;
        border-top: 1px solid #ccc;
        padding-top: 15px;
      }

      @media (max-width: 600px) {
        .notice-section {
          font-size: 14px;
        }
      }

      table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        border-radius: 6px;
        overflow: hidden;
      }

      th,
      td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
        font-size: 20px;
      }

      th {
        background-color: #e9ecef;
        color: #333;
        font-weight: 600;
      }

      td[colspan="9"] {
        background-color: #343a40;
        color: white;
        font-size: 22px;
        text-align: center;
        padding: 15px;
      }

      tr:nth-child(even) td {
        background-color: #f2f2f2;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      .table-container table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 20px;
        }
        .table-container {
      display: block;
    }

    .card-table {
      display: none;
    }
      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      @media (max-width: 768px) {
      .table-container table {
        display: none;
      }

      .card-table {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .card-row {
        display: grid;
        grid-template-columns: 1fr;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      }

      .card-row div {
        margin: 5px 0;
      }

      .card-row div strong {
        display: inline-block;
        width: 180px;
        font-weight: 600;
      }

      .card-row a {
        color: #0077cc;
        text-decoration: underline;
      }
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
                <h1 class="heading-title text-break text-center">Training Courses</h1>
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
                <b>Training Courses</b>
              </li>
              <li class="current">
                <b>Training Calendar</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="training-main" id="training-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'TrainingAndOutreach_list.php'; ?> </aside>
            <section class="col-md-9 col-lg-9">
              <h3>Training Calendar</h3>
              <br />
              <div class="table-container">
              <table>
                <tbody>
                  <tr>
                    <td colspan="9" id="myptag">
                      <center>
                        <strong>Training Courses/Webinars 2025</strong>
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2">
                      <b>S.No.</b>
                    </td>
                    <td rowspan="2">
                      <b>Type</b>
                    </td>
                    <td rowspan="2">
                      <b>Course Name</b> (click on the course title to download brochure)
                    </td>
                    <td rowspan="2">
                      <b>Duration</b>
                    </td>
                    <td rowspan="2">
                      <b>From- date</b>
                    </td>
                    <td rowspan="2">
                      <b>To- date</b>
                    </td>
                    <td colspan="2">
                      <b>
                        <center> Course fee (Rs.) for individual applicant</center>
                      </b>
                    </td>
                    <td rowspan="2">
                      <b>Last date</b>
                    </td>
                  </tr>
                  <tr>
                    <td> (Central Govt./ State Govt./Pure Govt. Organization/ Govt. Academic Colleges/Institutes) </td>
                    <td>PSU’s/Industry/Autonomous Bodies &amp; its Institutes, Private/ NGO, Private Academia / Other Institutes)* </td>
                  </tr>
                  <tr>
                    <td> 1. </td>
                    <td> Thematic </td>
                    <td>
                      <a href="assets/pdf/training_outreach/intro2GIS Brochure-2025-Englsih.pdf" target="_blank">Introduction to Open Source GIS</a>
                    </td>
                    <td> 1 week </td>
                    <td> 21.04.2025 </td>
                    <td> 25.04.2025 </td>
                    <td> Rs. 9,500/- </td>
                    <td> Rs. 11,210/- </td>
                    <td> 28.03.2025 </td>
                  </tr>
                  <tr>
                    <td> 2. </td>
                    <td> Thematic </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Hyperspectral course brochure-English-2025.pdf" target="_blank">Hyperspectral course brochure-English-2025</a>
                    </td>
                    <td> 1 week </td>
                    <td> 21.07.2025 </td>
                    <td> 25.07.2025 </td>
                    <td> Rs. 10,000/- </td>
                    <td> Rs. 11,800/- </td>
                    <td> 04.07.2025 </td>
                  </tr>
                  <tr>
                    <td> 3. </td>
                    <td> Thematic </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Microwave-brochure-2025-English.pdf" target="_blank">Microwave Remote Sensing Applications</a>
                    </td>
                    <td> 1 week </td>
                    <td> 18.08.2025 </td>
                    <td> 22.08.2025 </td>
                    <td> Rs. 10,000/- </td>
                    <td> Rs. 11,800/- </td>
                    <td> 01.08.2025 </td>
                  </tr>
                  <tr>
                    <td> 4. </td>
                    <td> Special </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Drone-Data Processing-English-2025.pdf" target="_blank">Drone Data Processing for Remote Sensing Applications</a>
                    </td>
                    <td> 1 week </td>
                    <td> 27.10.2025 </td>
                    <td> 31.10.2025 </td>
                    <td> Rs. 10,000/- </td>
                    <td> Rs. 11,800/- </td>
                    <td> 10.10.2025 </td>
                  </tr>
                  <tr>
                    <td> 5. </td>
                    <td> Webinar </td>
                    <td>
                      <a href="assets/pdf/training_outreach/Bhuvan-Webinar-English-2025.pdf" target="_blank">Bhuvan Overview Training (six programmes in a year in webinar mode) </a>
                    </td>
                    <td> 3 days </td>
                    <td> 21.01.2025 19.03.2025 07.05.2025 09.07.2025 24.09.2025 11.11.2025 </td>
                    <td> 23.01.2025 21.03.2025 09.05.2029 11.07.2025 26.09.2025 13.11.2025 </td>
                    <td colspan="2">
                      <strong>No course fee is charged for BHUVAN Courses. For Details kindly visit www.bhuvan.nrsc.gov.in</strong>
                    </td>
                    <td> Through Bhuvan On-line Registration </td>
                  </tr>
                </tbody>
              </table>
              </div>
              <div class="card-table">
                <div class="card-row">
                  <div><strong>S.No.:</strong> 1</div>
                  <div><strong>Type:</strong> Thematic</div>
                  <div><strong>Course Name:</strong> <a href="assets/pdf/training_outreach/intro2GIS Brochure-2025-Englsih.pdf" target="_blank">Introduction to Open Source GIS</a></div>
                  <div><strong>Duration:</strong> 1 week</div>
                  <div><strong>From-date:</strong> 21.04.2025</div>
                  <div><strong>To-date:</strong> 25.04.2025</div>
                  <div><strong>Fee (Govt):</strong> Rs. 9,500/-</div>
                  <div><strong>Fee (Private):</strong> Rs. 11,210/-</div>
                  <div><strong>Last date:</strong> 28.03.2025</div>
                </div>

                <div class="card-row">
                  <div><strong>S.No.:</strong> 2</div>
                  <div><strong>Type:</strong> Thematic</div>
                  <div><strong>Course Name:</strong> <a href="assets/pdf/training_outreach/Hyperspectral course brochure-English-2025.pdf" target="_blank">Hyperspectral course brochure-English-2025</a></div>
                  <div><strong>Duration:</strong> 1 week</div>
                  <div><strong>From-date:</strong> 21.07.2025</div>
                  <div><strong>To-date:</strong> 25.07.2025</div>
                  <div><strong>Fee (Govt):</strong> Rs. 10,000/-</div>
                  <div><strong>Fee (Private):</strong> Rs. 11,800/-</div>
                  <div><strong>Last date:</strong> 04.07.2025</div>
                </div>

                <div class="card-row">
                  <div><strong>S.No.:</strong> 3</div>
                  <div><strong>Type:</strong> Thematic</div>
                  <div><strong>Course Name:</strong> <a href="assets/pdf/training_outreach/Microwave-brochure-2025-English.pdf" target="_blank">Microwave Remote Sensing Applications</a></div>
                  <div><strong>Duration:</strong> 1 week</div>
                  <div><strong>From-date:</strong> 18.08.2025</div>
                  <div><strong>To-date:</strong> 22.08.2025</div>
                  <div><strong>Fee (Govt):</strong> Rs. 10,000/-</div>
                  <div><strong>Fee (Private):</strong> Rs. 11,800/-</div>
                  <div><strong>Last date:</strong> 01.08.2025</div>
                </div>

                <div class="card-row">
                  <div><strong>S.No.:</strong> 4</div>
                  <div><strong>Type:</strong> Special</div>
                  <div><strong>Course Name:</strong> <a href="assets/pdf/training_outreach/Drone-Data Processing-English-2025.pdf" target="_blank">Drone Data Processing for Remote Sensing Applications</a></div>
                  <div><strong>Duration:</strong> 1 week</div>
                  <div><strong>From-date:</strong> 27.10.2025</div>
                  <div><strong>To-date:</strong> 31.10.2025</div>
                  <div><strong>Fee (Govt):</strong> Rs. 10,000/-</div>
                  <div><strong>Fee (Private):</strong> Rs. 11,800/-</div>
                  <div><strong>Last date:</strong> 10.10.2025</div>
                </div>

                <div class="card-row">
                  <div><strong>S.No.:</strong> 5</div>
                  <div><strong>Type:</strong> Webinar</div>
                  <div><strong>Course Name:</strong> <a href="assets/pdf/training_outreach/Bhuvan-Webinar-English-2025.pdf" target="_blank">Bhuvan Overview Training</a></div>
                  <div><strong>Duration:</strong> 3 days</div>
                  <div><strong>From-date:</strong> 21.01.2025, 19.03.2025, 07.05.2025, 09.07.2025, 24.09.2025, 11.11.2025</div>
                  <div><strong>To-date:</strong> 23.01.2025, 21.03.2025, 09.05.2029, 11.07.2025, 26.09.2025, 13.11.2025</div>
                  <div><strong>Course Fee:</strong> No course fee is charged for BHUVAN Courses. For Details kindly visit <a href="https://bhuvan.nrsc.gov.in" target="_blank">bhuvan.nrsc.gov.in</a></div>
                  <div><strong>Last date:</strong> Through Bhuvan Online Registration</div>
                </div>
              </div>

              <small>
                <b>* Tuition Fee Rs. 9,500/- + 18% GST & Rs. 10,000/- + 18% GST from July 2025 onwards. Lodging & Boarding charges extra.</b>
              </small>
              <hr>
              <br />
              <h3>How to Apply, Course Fee & Instructions to Applicants</h3>
              <br />
              <p id="myptag">1. For ‘Bhuvan overview’, webinar based training is organized. Kindly visit www.bhuvan.nrsc.gov.in for registration. For Special/Thematic courses, applicants are requested to kindly download and fill the application form with requisite details. A certificate of sponsorship to be mandatorily submitted by the candidate along with the application form without fail. The sponsorship certificate should be signed by Employer / Academic Institution Head / HOD / Manager/Principal. Tuition fee to be made by Electronic Transfer using the details provided here duly mentioning the payment ref. no and date after due selection to the course by the concerned applicant. The duly filled application form with sponsorship certificate and should reach us on or before due date. The postal address to submit applications by EMS speed post is: <br />
                <br /> Head, TPCD 
                <br /> Training Education &amp; Outreach Group, 
                <br /> National Remote Sensing Centre 
                <br /> Indian Space Research Organisation 
                <br /> Dept. of Space, Govt. of India 
                <br /> Opp. Shapur Nagar Substation, 
                <br /> IDA Jeedimetla, Hyderabad- 500055 
                <br /> Ph: 040 - 2388 4566/4567/4458 
                <br /> Email: <a href="mailto:&#116;&#114;&#97;&#105;&#110;&#105;&#110;&#103;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> training[at]nrsc[dot]gov[dot]in</a>
                <br />
                <br /> Applicants are encouraged to send the scanned version of the application form with sponsorship as an advanced copy to <b>training[at]nrsc[dot]gov[dot]in </b> (attachment not exceeding 4 MB) and post the original copies to the address given so as to reach us before the due date. <br />
                <br />
                <a href="assets/pdf/training_outreach/SOP_TrainingCharges_Fees using_NTRP_BharatKosh.pdf" target="_blank">Bharat Kosh NTRP Training Payment Fees SOP</a>
                <br />
                <br />
                <a href="assets/pdf/training_outreach/DownloadApplicationForm_2024_online.docx" target="_blank">Download Application form</a>
                <br />
                <br />
                <a href="assets/pdf/training_outreach/intro2GIS Brochure-2025-Englsih.pdf" target="_blank">Download Open Source GIS Course Brochure </a>
                <a href="assets/pdf/training_outreach/Drone-Data Processing-English-2025.pdf" target="_blank">Download Drone Data Processing for Remote Sensing Applications Brochure</a>
                <br />
                <br />
                <a href="assets/pdf/training_outreach/Hyperspectral course brochure-English-2025.pdf" target="_blank">Download Hyperspectral Course Brochure</a>
                <br />
                <br />
                <a href="assets/pdf/training_outreach/Microwave-brochure-2025-English.pdf" target="_blank">Download Microwave Remote Sensing Applications Brochure</a>
                <br />
                <br />
              </p>
              <p id="myptag"> 2. The selected applicants will be informed by email/phone no. Necessary travel and stay arrangements to attend the training have to be made by the applicants on confirmation of admission. All selected applicants shall be provided with accommodation in Guest House II located inside the campus on twin sharing basis and NRSC canteen serves food at a nominal price. The expenses of lodging and boarding have to be borne by the applicants and are exclusive of tuition fee.
              <p id="myptag"> 3. For any queries kindly contact us at: <a href="mailto:&#116;&#114;&#97;&#105;&#110;&#105;&#110;&#103;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> training[at]nrsc[dot]gov[dot]in </a> or call Ph: 040 - 2388 4566 / 4567 / 4562 / 4848 / 4458
              <div class="notice-section">
                <p class="note">Note: Right of Admission reserved with NRSC</p>
                <p class="warning"> Notice: Be aware of the Fake Advertisements: For any notice / information regarding training courses at NRSC, the candidate should visit official website of NRSC only. i.e.: <a href="https://www.nrsc.gov.in" target="_blank">www.nrsc.gov.in</a> or communicate to us at <a href="mailto:&#116;&#114;&#97;&#105;&#110;&#105;&#110;&#103;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> training[at]nrsc[dot]gov[dot]in </a>              
                </p>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
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