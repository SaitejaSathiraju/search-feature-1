<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Careers Result Active</title>
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

      .p-style p {
        font-size: 20px;
      }

      table,
      th,
      td {
        border: 1px solid #ddd;
        font-size: 20px;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f4f4f4;
      }

      .pagination {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15px;
        padding-left: 0;
        list-style: none;
      }

      .pagination li {
        margin: 0 2px;
      }

      .pagination a,
      .pagination span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 32px;
        height: 32px;
        padding: 0 6px;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
      }

      .pagination a:hover {
        background-color: #e9ecef;
      }

      .pagination .active span {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
      }

      .pagination .disabled span {
        color: #6c757d;
        pointer-events: none;
      }

      #myTable td:first-child,
      #myTable th:first-child {
        width: 450px;
      }

      @media (max-width: 576px) {

        th,
        td {
          font-size: 12px;
          padding: 5px;
        }

        #myTable .mobile-respatag {
		  font-size: 12px ;
		}

        .pagination li {
          margin: 2px;
        }

        .pagination a,
        .pagination span {
          min-width: 28px;
          height: 28px;
          font-size: 12px;
          padding: 0 4px;
        }
      }

      .form-control {
        margin-bottom: 20px;
      }

      #Image21 {
        width: 43px;
        height: 17px;
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
                <h1 class="heading-title text-break text-center">Career</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Career</b>
              </li>
              <li class="current">
                <b>Results & Documents</b>
              </li>
              <li class="current">
                <b>Results & Documents (Archive)</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="resultsArchive-main" id="resultsArchive-main"></div>
      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3> Results & Documents (Archive) </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search...">
              <table id="myTable" class="table table-hover  table-striped-rows">
                <thead>
                  <tr>
                    <th>Advertisement No.</th>
                    <th>Details of Information</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/NRSC-RMT-1-2022.pdf" target="_blank">ADVT NO: NRSC-RMT-1-2022 dated 23.04.2022</a>
                      </p>
                    </td>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist (Post Code-RS05).pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS05</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist (Post Code-RS04).pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS04</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist (Post Code-RS08).pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS08</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist (Post Code-RS07).pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS07</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist (Post Code-RS06).pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS06</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist _Post Code-RS01_.pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS01</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist _Post Code-RS02_.pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS02</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Scientist _Post Code-RS03_.pdf" target="_blank">Results for recruitment to the post of Research Scientist- Post code: RS03</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Research Associate _Post Code-RA01.pdf" target="_blank">Results for recruitment to the post of Research Associate- Post code: RA01</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Results for recruitment to the post of Junior Research Fellow (Post Code-JRF1).pdf" target="_blank">Results for the post of Junior Research Fellow(Post code: JRF1)</a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/NRSC-RMT-1-2022.pdf" target="_blank">ADVT NO: NRSC-RMT-1-2022 dated 23.04.2022</a>
                      </p>
                    </td>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS04.pdf" target="_blank">List of Candidates Shortlisted for Interview for the post of Research Scientist(Post Code: RS04)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS05.pdf" target="_blank">List of Candidates Shortlisted for Interview for the post of Research Scientist(Post Code: RS05)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS08 .pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists (Post Code RS08)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS07.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists (Post Code RS07)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS06.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists (Post Code RS06)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS01.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists(Post Code RS01)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists _Post Code RS02.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists (Post Code RS02)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Scientists_Post Code RS03.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Scientists(Post Code RS03)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Research Associate_Post Code RA01.pdf" target="_blank">List of Shortlisted Candidates for Interview to the post of Research Associate(Post Code RA01)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Shortlisted Candidates for Interview to the post of Junior Research Fellow_Post Code JRF1.pdf" target="_blank">List of candidates shortlisted for Interview for the post of Junior Research Fellow(POST CODE: JRF1)</a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT NO: NRSC/RMT/1/2018 DATED 17.01.2018 (Post No. 12)</td>
                    <td>
                      <a class="mobile-respatag" href="https://nrsc-staging.nrsc.gov.inassets/pdf/careers_archive/Result for Recruitment to the post of Scientific Assistant.pdf" target="_blank">Result for Recruitment to the post of Scientific Assistant</a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dated 17.01.2018 (Post No-12)</td>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Schedule for Skill Test to the post of Scientific Assistant.pdf" target="_blank">Schedule for Skill Test to the post of Scientific Assistant </a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Syllabus for Skill Test to the post of Scientific Assistant.pdf" target="_blank">Syllabus for Skill Test to the post of Scientific Assistant </a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/BioData Format.pdf" target="_blank">Biodata Format </a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/List of Candidates Shortlisted for Skill test for the post of Scientific Assistant.pdf" target="_blank">List of Candidates Shortlisted for Skill Test for the Post of Scientific Assistant </a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Final Answer Key for the Written Test conducted on 25.08.2019(Sunday) for the post of Scientific Assistant.pdf" target="_blank">Final Answer Key for the Written Test to the post of Scientific Assistant conducted on 25.08.2019(Sunday)</a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dated 17.01.2018 (Post No-12)</td>
                    <td>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/AnswerKey_WrittenTest_ScientificAssistant_25AUG2019.pdf" target="_&quot;blank&quot;">Answer Key for the Written Test to the post of Scientific Assistant conducted on 25.08.2019(Sunday)</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Screened in Candidates for Written test.pdf" target="_blank">List of candidates screened in for Written Test for the Post of Scientific Assistant </a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/Syllabus for written test.pdf" target="_blank">Syllabus for Written Test</a>
                      </p>
                      <p>
                        <a class="mobile-respatag" href="assets/pdf/careers_archive/SA2017qp.pdf" target="_blank">Previous Examination question Paper </a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="assets/pdf/careers_archive/lvd results-07152019120313.pdf">NO.ISRO HQ:ICRB:04:2017 dated 08.08.2017</a>
                    </td>
                    <td>
                      <a class="mobile-respatag" href="assets/pdf/careers_archive/lvd results-07152019120313.pdf" title="lvd">Results-Recruitment of light vehicle driver ' A ' for NRSC, Hyderabad</a>
                    </td>
                  </tr>
                  <tr>
                    <td> ISRO HQ:ICRB:02:2018 Dt. 10.04.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/Recruitment_SkillTest_26June2019.pdf" target="_blank" title="reviews">Skill Test for recruitment to the post of Junior Personal Assistants (Post No.1) against the Advertisement No. ISRO HQ:ICRB:02:2018 dated 10.04.2018</a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/Cancellation Notice -Sc and SD Posts  12032019.pdf" target="_blank"> Cancellation of Recruitment for the Post of Scientist / Engineer 'SC' and Scientist / Engineer -'SD' against the Advertisement No. NRSC /RMT/1/2018 dt. 17.01.2018 </a>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB7SkillTest.png" target="_blank">Skill test Schedule for the post of Technician- B (Motor Mechanic)</a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/POSTPONEMENT_OF_INTERVIEWS.pdf" target="_blank">Postponement of Interviews : Scientist/Engineer ‘SC’ POST CODES 04 to 09</a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PostCode05_Interview.pdf" target="_blank">
                        <strong>Post Code - 05 :</strong> Scientist / Engineer ‘SC’- Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PostCode06_Interview.pdf" target="_blank">
                        <strong>Post Code - 06 :</strong> Scientist / Engineer ‘SC’- Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PostCode07_Interview.pdf" target="_blank">
                        <strong>Post Code - 07 :</strong> Scientist / Engineer ‘SC’- Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PostCode08_Interview.pdf" target="_blank">
                        <strong>Post Code - 08 :</strong> Scientist / Engineer ‘SC’- Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PostCode09_Interview.pdf" target="_blank">
                        <strong>Post Code - 09 :</strong> Scientist / Engineer ‘SC’- Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/BioDataFormat_Interview.pdf" target="_blank">
                        <strong>Bio Data format </strong>for attending Interview for the Post of <strong>Scientist / Engineer ‘SC’ </strong>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/List of Candidates Shortlisted for Interview for the post of Sci.Engr. 'SC' Post Code 01.pdf" target="_blank">
                        <strong>Post Code - 01 :</strong> Scientist / Engineer ‘SC’ - Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/List of Candidates Shortlisted for Interview for the post of Sci.Engr. 'SC' Post Code 02.pdf" target="_blank">
                        <strong>Post Code - 02 :</strong> Scientist / Engineer ‘SC’ - Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/List of Candidates Shortlisted for Interview for the post of Sci.Engr. 'SC' Post Code 03.pdf" target="_blank">
                        <strong>Post Code - 03 :</strong> Scientist / Engineer ‘SC’ -Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/1/2018 Dt. 17.01.2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/List of Candidates Shortlisted for Interview for the post of Sci.Engr. 'SC' Post Code 04.pdf" target="_blank">
                        <strong>Post Code - 04 :</strong> Scientist / Engineer ‘SC’ -Shortlist for attending Interview </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/DM1SelectionPanel.pdf" target="_blank">
                        <strong>Post Code. DM1 </strong>: Draughtsman - B (CIVIL) -Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB1SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 1</strong> : Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB2SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 2</strong> : Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB3SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB3 </strong>: Technician - B -Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB4SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 4 :</strong> Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB5SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 5 : </strong>Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB6SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 6 :</strong> Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB8SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 8 : </strong> Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC/RMT/3/2017 Dt. 20.05.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB9SelectionPanel.pdf" target="_blank">
                        <strong>Post Code - TB 9 : </strong>Technician - B - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO HQ:ICRB:03:2017 Dt.11.07.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/NARL_RESULTS.pdf" target="_blank">
                        <strong>Post No.3. :</strong> Assistant - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO HQ:ICRB:03:2017 Dt 11.07.2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/Assistants_Results.pdf" target="_blank">
                        <strong>Post No.1 :</strong> Assistant - Results </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/DM1_SkillTestSyllabus.pdf" target="_blank" title="DM1_SkillTestSyllabus">
                        <strong>Post Code - DM1 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB3_SkillTestSyllabus.pdf" target="_blank" title="TB3_SkillTestSyllabus">
                        <strong>Post Code - TB3 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB4_SkillTestSyllabus.pdf" target="_blank" title="TB4_SkillTestSyllabus">
                        <strong>Post Code - TB4 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB5_SkillTestSyllabus.pdf" target="_blank" title="TB5_SkillTestSyllabus">
                        <strong>Post Code - TB5 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB6_SkillTestSyllabus.pdf" target="_blank" title="TB6_SkillTestSyllabus">
                        <strong>Post Code - TB6 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <strong>Post Code - TB7 :</strong> Syllabus for Skill Test
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB8_SkillTestSyllabus.pdf" target="_blank" title="TB8_SkillTestSyllabus">
                        <strong>Post Code - TB8 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB9_SkillTestSyllabus.pdf" target="_blank" title="TB9_SkillTestSyllabus">
                        <strong>Post Code - TB9 :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TB1-TB2 SkillTesSyllabus.pdf" target="_blank" title="TB1-TB2 SkillTesSyllabus">
                        <strong>Post Code - (TB1 &amp; TB2) :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/SA1-SA3_SkillTest.pdf" target="_blank" title="SA1-SA3_SkillTest">
                        <strong>Post Code - (SA1 ,SA2 and SA3) :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>23 - 25 January 2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/cookskilltest.pdf" target="_blank" title="cookskilltest">
                        <strong>Post Code - Cook :</strong> Syllabus for Skill Test for the posts of Cook </a>
                    </td>
                  </tr>
                  <tr>
                    <td>23 - 25 January 2018</td>
                    <td>
                      <a href="assets/pdf/careers_archive/cateringattendantaskilltest.pdf" target="_blank" title="cateringattendantaskilltest">
                        <strong>Post Code - Catering Attendant :</strong> Syllabus for Skill Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TA1_CIVIL_Syllabus.pdf" target="_blank" title="TA1_CIVIL_Syllabus">
                        <strong>Post(Civil) Code - TA1 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/TA2_EEE_Syllabus.pdf" target="_blank" title="TA2_EEE_Syllabus">
                        <strong>Post Code - TA2 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/DraughtsmanCivilSyllabus-Written Test.pdf" target="_blank" title="DraughtsmanCivilSyllabus-Written Test">
                        <strong>Post Code - DM1 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/Fitter Syllabus-Written Test.pdf" target="_blank" title="Fitter Syllabus-Written Test">
                        <strong>Post Code - TB3 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/InstrumentMechanicSyllabus-Written Test.pdf" target="_blank" title="InstrumentMechanicSyllabus-Written Test">
                        <strong>Post Code - TB4 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/ITILabAsstChemicalSyllabus-Written Test.pdf" target="_blank" title="ITILabAsstChemicalSyllabus-Written Test">
                        <strong>Post Code - TB5 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/MachinistSyllabus-Written Test.pdf" target="_blank" title="MachinistSyllabus-Written Test">
                        <strong>Post Code - TB6 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/MotorMechanicSyllabus-Written Test.pdf" target="_blank" title="MotorMechanicSyllabus-Written Test">
                        <strong>Post Code - TB7 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/PlumberSyllabus-Written Test.pdf" target="_blank" title="PlumberSyllabus-Written Test">
                        <strong>Post Code - TB8 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/RefrigerationSylllabus-Written Test.pdf" target="_blank" title="RefrigerationSylllabus-Written Test">
                        <strong>Post Code - TB9 :</strong> Syllabus for Written Test </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/SYLLABUS_TB1.pdf" title="SYLLABUS_TB1">
                        <strong>Syllabus for Written Test for the post Technician B (Electronic Mechanic) </strong>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/SYLLABUS_TB2 (1).pdf" title="SYLLABUS_TB2 (1)">
                        <strong>Syllabus for Written Test conducted for the post Technician B (Electrician) </strong>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>ADVT.NO.NRSC/RMT/3/2017</td>
                    <td>
                      <a href="assets/pdf/careers_archive/SA1SA2SA3syllabus-Written Test.pdf" title="SA1SA2SA3syllabus-Written Test.pdf">
                        <strong>(Post No. SA1, SA2 &amp; SA3) :</strong> Syllabus for Written Test for recruitment to the post of Scientific Assistant </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
  <script>
  let currentPage = 1;
  const rowsPerPage = 5;
  const allRows = Array.from(document.querySelectorAll("#myTable tbody tr"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput");

  let filteredRows = [...allRows]; // Default: all rows

  function rowMatchesSearch(row) {
    const searchTerm = searchInput.value.toLowerCase();
    return Array.from(row.querySelectorAll("td")).some(cell =>
      cell.textContent.toLowerCase().includes(searchTerm)
    );
  }

  function changePage(page) {
    currentPage = page;
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    // Hide all rows first
    allRows.forEach(row => (row.style.display = "none"));

    // Show only filtered rows on this page
    filteredRows.slice(start, end).forEach(row => {
      row.style.display = "";
    });

    // Update active page styling
    const pageLinks = pagination.querySelectorAll(".page-item");
    pageLinks.forEach((li, i) => {
      li.classList.toggle("active", i === page - 1);
    });
  }

  function setupPagination() {
    pagination.innerHTML = "";
    const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
    for (let i = 1; i <= pageCount; i++) {
      const li = document.createElement("li");
      li.className = "page-item";
      const a = document.createElement("a");
      a.className = "page-link";
      a.href = "#";
      a.textContent = i;
      a.addEventListener("click", (e) => {
        e.preventDefault();
        changePage(i);
      });
      li.appendChild(a);
      pagination.appendChild(li);
    }

    if (pageCount > 0) {
      changePage(1);
    } else {
      allRows.forEach(row => (row.style.display = "none")); // Hide all if no result
    }
  }

  searchInput.addEventListener("input", () => {
    const searchTerm = searchInput.value.trim().toLowerCase();
    filteredRows = allRows.filter(row => rowMatchesSearch(row));
    setupPagination();
  });

  // Initialize on load
  document.addEventListener("DOMContentLoaded", function () {
    filteredRows = [...allRows];
    setupPagination();

    // Menu toggle (optional UI behavior)
    const menuBtn = document.getElementById("menuToggleBtn");
    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>

</html>