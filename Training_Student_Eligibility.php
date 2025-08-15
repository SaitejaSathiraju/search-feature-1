<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Student Projects/Internships</title>
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

      td {
        border: 1px solid #dee2e6;
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: rgba(13, 13, 14, 0.9);
        color: #333;
        font-weight: 600;
        color: white;
        padding: 10px;
      }

      td a {
        color: #007bff;
        text-decoration: none;
      }

      td a:hover {
        text-decoration: underline;
      }

      td[colspan="9"] {
        background-color: #343a40;
        color: white;
        font-size: 22px;
        text-align: center;
        padding: 0px;
      }

      tr:nth-child(even) td {
        background-color: #f2f2f2;
      }

      /* Mobile Responsive Improvements */
      @media (max-width: 992px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }

        .breadcrumbs ol {
          flex-direction: column;
          padding: 10px;
        }

        .col-lg-3,
        .col-lg-9 {
          width: 100%;
          padding: 0 15px;
        }

        .service-details .row {
          flex-direction: column;
        }

        table {
          font-size: 14px;
        }

        td[colspan="3"] {
          font-size: 12px !important;
        }

        th,
        td {
          padding: 8px 5px;
        }
      }

      @media (max-width: 768px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
          display: block;
        }

        tr {
          margin-bottom: 15px;
          border-bottom: 2px solid #ccc;
          padding-bottom: 10px;
        }

        td[colspan="9"] {
          font-size: 18px;
        }

        td {
          position: relative;
          padding-left: 50%;
          text-align: left;
          border: none;
          border-bottom: 1px solid #ddd;
          background-color: #fff !important;
        }

        td:before {
          position: absolute;
          left: 10px;
          top: 12px;
          white-space: nowrap;
          font-weight: bold;
          color: #555;
        }
      }

      @media (max-width: 600px) {

        p,
        li {
          font-size: 16px !important;
          line-height: 1.5;
        }

        h3,
        h4 {
          font-size: 1.3rem;
        }

        .section {
          padding: 15px;
        }

        ul,
        ol {
          padding-left: 20px;
        }
      }

      @media (max-width: 480px) {
        a[href^="mailto:"] {
          word-break: break-all;
        }

        td:before {
          font-size: 12px;
          top: 8px;
        }

        td {
          padding-left: 45%;
          padding-top: 15px;
          padding-bottom: 15px;
        }
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
                <h1 class="heading-title text-break text-center">Student Projects/Internships</h1>
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
                <b>Student Projects/Internships</b>
              </li>
              <li class="current">
                <b>Eligibility & Duration</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachOverview-main" id="OutreachOverview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Training_Student_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Student Projects</h3>
              <br />
              <p id="myptag"> Opportunity shall be extended for the following category of students, in offline mode, with prescribed educational eligibility as stated below:</p>
              <br />
              <h4 style="color:black">Eligibility conditions & Duration</h4>
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Degree</th>
                      <th scope="col">Eligibility Criteria</th>
                      <th scope="col">Duration</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Engineering (BE/BTech)</td>
                      <td>Should have completed 6th semester</td>
                      <td>Minimum 90 days</td>
                    </tr>
                    <tr>
                      <td>MCA/ME/MTech</td>
                      <td>Should have completed 1 semester</td>
                      <td>Minimum 120 days</td>
                    </tr>
                    <tr>
                      <td>BSc/Diploma</td>
                      <td>Only final year students</td>
                      <td>Minimum 90 days</td>
                    </tr>
                    <tr>
                      <td>MSc</td>
                      <td>Student should have completed 1st semester</td>
                      <td>Minimum 120 days</td>
                    </tr>
                    <tr>
                      <td>PhD</td>
                      <td>Scholars should have completed course work</td>
                      <td>Minimum 90 days</td>
                    </tr>
                    <tr>
                      <td colspan="3" class="small fst-italic fw-bold"> All the students wanting to pursue Academic Project Work shall possess an aggregate of Min.60% or CGPA 6.32 on a scale of 10 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr />
              <h3>Internships</h3>
              <br>
              <h4 style="color:black">Eligibility conditions & Duration</h4>
              <p id="myptag"> The duration of the project work will be 3-12 months. Preference is given to the students doing project for a longer duration.Guide’s availability is a crucial factor</p>
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Internship Opportunity shall be extended for UG / PG / PhD students pursuing BE/BTech/MCA/ME/MTech/Phd or have completed within six months of the application
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> The duration of the internship work will be around 45 days
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> The student shall possess an aggregate of Min. 60% or CGPA 6.32 on a scale of 10
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Guide's availability is a critical factor
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Seats are limited
                </li>
              </ul>
              <br />
              <h4 style="color:black">Documents to be submitted</h4>
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Letter of Recommendation from the Head of Dept/Principal/Placement Officer of the college (CollegeAbbreviation_Studentname_Branch.pdf). also mentioning duration of the project, with start and end dates. The letter of recommendation should be addressed to Group Director, Training, Education and Outreach Group, NRSC
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> CV / biodata/ resume which includes marks obtained from Xth class onwards (Studentname_Cv.pdf)
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> Copies of mark sheets (Studentname_X, Studentname_XII, Studentname_ undergrad, Studentname_ postgrad, as applicable and any other relevant document)
                </li>
              </ul>
              <br />
              <h4 style="color:black">Note:</h4>
              <ol>
                <li id="myptag"> Students can apply by email at: <a href="mailto:&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;" target="_blank">student[at]nrsc[dot]gov[dot]in</a>
                </li>
                <li id="myptag"> Students are discouraged to send mails to any NRSC mail ID other than that specified here. Sending mails to multiple persons may lead to disqualification </li>
                <li id="myptag"> For Student Projects & Internships students should apply at least 30 days in advance </li>
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