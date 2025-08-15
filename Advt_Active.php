<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Careers Advt Active</title>
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

      /* Responsive adjustments */
      @media (max-width: 576px) {
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

      #myTable td:first-child,
      #myTable th:first-child {
        width: 4%;
      }

      #myTable td:nth-child(2),
      #myTable th:nth-child(2) {
        width: 30%;
      }

      .form-control {
        margin-bottom: 20px;
      }

      #Image21 {
        width: 43px;
        height: 17px;
      }

      #highlighttext {
        color: red;
        font-size: 20px;
      }

      @media (max-width: 576px) {
        #myTable td:first-child {
          display: none;
        }

        /* Ensure text breaks properly */
        #myTable td:first-child::before {
          content: "Advertisement: ";
          font-weight: 700;
          margin-right: 8px;
          display: inline;
        }

       .table-responsive {
          width: 100%;
        }

        #myTable,
        #myTable td {
          width: 100% !important;
        }


        #myTable thead {
          display: none;
        }

        #myTable tr {
          margin-bottom: 15px;
          border: 1px solid #ddd;
          border-radius: 8px;
          background: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          overflow: hidden;
          font-size: 12px !important;
        }

        #myTable td,
        #myTable td a {
          word-break: normal;
          overflow-wrap: break-word;
          white-space: normal;
          font-size: 12px !important;
        }


        #myTable td:last-child {
          border-bottom: none;
        }

        #highlighttext {
          color: red;
          font-size: 12px !important;
        }

        #mobile, #mobilenew{
          font-size: 12px !important;
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
                <b>Advertisements (Active)</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="advtActive-main" id="advtActive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3> Advertisements (Active) </h3>
              <br>
              <input type="text" id="searchInput" class="form-control" placeholder="Search advertisements...">
              <table id="myTable" class="table table-hover  table-striped-rows">
                <thead>
                  <tr>
                    <th>S.No. </th>
                    <th>Advertisement No.</th>
                    <th>Details of Information</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-2-2025, DT. 21.06.2025</td>
                    <td data-label="details">
                      <p id="mobile">
                        <b>
                          <a href="./assets/pdf/advt_active/NRSC-RMT-2-2025.pdf" target="_blank">Recruitment for the posts of Temporary Research Personnel (ADVERTISEMENT NO : NRSC-RMT-2-2025, DT. 21.06.2025)</a>
                        </b>
                      </p>
                      <p id="mobile">Click Here to <a href="https://apps.nrsc.gov.in/eRecruitment_NRSC" rel="noopener" target="_blank">Apply Online</a>
                      </p>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-1-2025, DT. 10.05.2025</td>
                    <td data-label="details">
                      <p id="mobile">
                        <b>
                          <a href="./assets/pdf/advt_active/NRSCRMT12025/NRSC-RMT-1-2025_10.05.2025.pdf" target="_blank">Recruitment for the posts of Scientist Engineer 'SC' ( ADVERTISEMENT NO : NRSC-RMT-1-2025, DT. 10.05.2025)</a>
                        </b>
                      </p>
                      <p id="mobile">Click Here to <a href="https://apps.nrsc.gov.in/eRecruitment_NRSC" rel="noopener" target="_blank">Apply Online</a>
                      </p>
                      <p id="mobile">
                        <a href="./assets/pdf/advt_active/NRSCRMT12025/Annexure-I.pdf" rel="noopener" target="_blank">Annexure 1</a>
                      </p>
                      <p id="mobile">
                        <a href="./assets/pdf/advt_active/NRSCRMT12025/Annexure-II.pdf" rel="noopener" target="_blank">Annexure 2</a>
                      </p>
                      <p id="mobile">
                        <a href="./assets/pdf/advt_active/NRSCRMT12025/Annexure-III.pdf" rel="noopener" target="_blank">Annexure 3</a>
                      </p>
                      <p id="mobile">
                        <a href="./assets/pdf/advt_active/NRSCRMT12025/Annexure-IV.pdf" rel="noopener" target="_blank">Annexure 4</a>
                      </p>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-1-2024, DT. 22.01.2024</td>
                    <td data-label="details">
                      <p id="mobile">
                        <b>Recruitment for the posts of Scientist Engineer 'SC', Medical Officer 'SC', Nurse 'B' &amp; Library Assistant 'A'.(ADVERTISEMENT NO. NRSC-RMT-1-2024)</b>
                      </p>
                      <p id="mobile">
                        <a href="https://cdn.digialm.com:443//EForms/configuredHtml/1258/93053/login.html" rel="noopener" target="_blank">Download E-Admit Card for Computer Based Test (CBT) for the post of Nurse 'B'</a>
                      </p>
                      <p id="mobile">Computer Based Test (CBT) for the post of Nurse 'B' (Post Code: 18) against Advt No: NRSC-RMT-1-2024 is scheduled to be held on 24.02.2025 (Monday). <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                      </p>
                      <p id="mobile"></p>
                      <p id="highlighttext">
                        <b>Written Test (CBT) for the post of Nurse 'B' (Post Code: 18) Advt No: NRSC-RMT-1-2024 on 24.02.2025, <strong>"Candidates whose Test Centre is Mumbai, may please note that there is a change in exam venue in Mumbai. The details of the new venue in Mumbai has been sent to registered E-mail IDs of the candidates. Candidates are advised to note the change and attend the exam accordingly." </strong>
                        </b>
                        <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                      </p>
                      <p id="mobile">
                        <a href="assets/pdf/advt_active/List of Shortlisted Candidates for CBT to the post of NURSE 'B' Post Code 18.pdf" rel="noopener" target="_blank">1. List of Shortlisted Candidates for CBT to the post of Nurse 'B' (post code: 18)</a>
                      </p>
                      <p id="mobile">
                        <a href="assets/pdf/advt_active/Instruction to the candidates for CBT to the post of Nurse 'B' scheduled on 24.02.2025.pdf" rel="noopener" target="_blank">2. IMPORTANT INSTRUCTIONS TO CANDIDATES APPEARING FOR COMPUTER BASED TEST (CBT) SCHEDULED TO BE HELD ON 24.02.2025 FOR THE POST OF NURSE ‘B’ (POST CODE : 18)</a>
                      </p>
                      <p id="mobile">
                        <a href="assets/pdf/advt_active/PWBD-Annexure 1.pdf" rel="noopener" target="_blank">3. PwBD Annexure 1</a>
                      </p>
                      <p id="mobile">
                        <a href="assets/pdf/advt_active/PWBD-Annexure 2.pdf" rel="noopener" target="_blank">4. PwBD Annexure 2</a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-2-2024 Dt. 18.03.2024</td>
                    <td data-label="details">
                      <a href="assets/pdf/advt_active/NRSC_RMT_2_2024_18032024V1.pdf" rel="noopener" target="_blank">Recruitment of various Temporary Research Personnel</a>
                      <br />
                      <br />
                      <p id="mobile">Applicants may note that the closing date of receipt of online applications against advertisement no. NRSC-RMT-2-2024 is now extended till 12.04.2024 (1700 Hrs)</p>
                      <p id="highlighttext">
                        <b>"It is hereby notified for information of all concerned that the recruitment for the post of JRF13 (01 Post) against advertisement NRSC-RMT-2-2024 dated 18.03.2024 stands cancelled due to administrative reasons."</b>
                        <img border="0" id="Image21" src="assets/img/newlabel.png" />
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">ISRO:ICRB:02(A-JPA):2022 Dt. 20.12.2022</td>
                    <td data-label="details">
                      <p id="mobile">CALL LETTERS FOR SKILL TEST TO THE SHORT-LISTED CANDIDATES HAVE BEEN SENT TO THE REGISTERED E-MAIL IDs. CANDIDATES MAY CHECK THEIR E-MAIL IDs</p>
                      <a href="assets/pdf/advt_active/Schedul_Venue_SkillTest_JPA.pdf" rel="noopener" target="_blank" title="2468">1. SCHEDULE AND VENUE OF SKILL TEST OF JPA </a>
                      <br />
                      <a href="assets/pdf/advt_active/Biodataformat_25092024.pdf" rel="noopener" target="_blank" title="2468">2. BIO-DATA FORMAT </a>
                      <br />
                      <a href="assets/pdf/advt_active/TA_skilltest_JPA_25092024.pdf" rel="noopener" target="_blank" title="2468">3. TA FORMAT </a>
                      <br />
                      <a href="assets/pdf/advt_active/Declarationform_25092024.pdf" rel="noopener" target="_blank" title="2468">4. DECLARATION FORM </a>
                      <p id="mobile"></p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">ISRO:ICRB:02(A-JPA):2022 Dt. 20.12.2022</td>
                    <td data-label="details">
                      <p id="mobile">CALL LETTERS FOR SKILL TEST TO THE SHORT-LISTED CANDIDATES HAVE BEEN SENT TO THE REGISTERED E-MAIL IDs. CANDIDATES MAY CHECK THEIR E-MAIL IDs</p>
                      <a href="assets/pdf/advt_active/Schedule and Venue of Skill Test.pdf" rel="noopener" target="_blank" title="2468">1. SCHEDULE AND VENUE OF SKILL TEST </a>
                      <br />
                      <a href="assets/pdf/advt_active/Bio-data format.pdf" rel="noopener" target="_blank" title="2468">2. BIO-DATA FORMAT </a>
                      <br />
                      <a href="assets/pdf/advt_active/TA-skill test.pdf" rel="noopener" target="_blank" title="2468">3. TA FORMAT </a>
                      <br />
                      <a href="assets/pdf/advt_active/Declaration form.pdf" rel="noopener" target="_blank" title="2468">4. DECLARATION FORM </a>
                      <p id="mobile"></p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC/RMT/4/2024 Dt. 06.08.2024</td>
                    <td data-label="details">
                      <a href="assets/pdf/advt_active/NRSCRMT42024_CAM.pdf" rel="noopener" target="_blank" title="2468">ADVERTISEMENT FOR CONTRACT EMPLOYMENT - Continuous Airworthiness Manager (CAM) </a>
                      <br />
                      <br />
                      <a href="assets/pdf/advt_active/NRSCRMT42024_Application.pdf" rel="noopener" target="_blank" title="2468"> Application Form</a>
                      <br />
                      <p id="mobile"></p>
                      <p id="mobile">Applicants may note that the closing date of receipt of applications against advertisement no. NRSC-RMT-4-2024 for the contract post of Continuous Airworthiness Manager (CAM) is now <b>extended till 12.09.2024</b>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC/RMT/3/2024 Dt. 18.07.2024</td>
                    <td data-label="details">
                      <a href="assets/pdf/advt_active/Apprentice_Advertisement_2024-25_.pdf" rel="noopener" target="_blank">ENGAGING GRADUATE AND TECHNICIAN APPRENTICES FOR THE YEAR 2024-25</a>
                      <br />
                      <br />
                      <a href="assets/pdf/advt_active/Annexure1_ApplicationForm.pdf" target="_blank">APPLICATION FORM</a>
                      <p id="mobile"></p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-1-2024, DT. 22.01.2024</td>
                    <td data-label="details">
                      <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 dated 22012024.pdf" rel="noopener" target="_blank" title="2468">Recruitment for the posts of Scientist Engineer 'SC', Medical Officer 'SC', Nurse 'B' &amp; Library Assistant 'A'.(ADVERTISEMENT NO. NRSC-RMT-1-2024)</a>
                      <br />
                      <p id="mobile"></p>
                      <p id="mobilenew">
                        <b>Computer Based Test (CBT) for the posts of Scientist/ Engineer 'SC' (Post Codes: 06 to 16) &amp; Library Assistant 'A' (Post Code: 19) against Advt No: NRSC-RMT-1-2024 is scheduled to be held on 30.12.2024 (Monday). </b>
                      </p>
                      <p id="mobilenew">Applicants may note that the closing date of receipt of online applications against advertisement no. NRSC-RMT-1-2024 is now extended till 16.02.2024 (1700 Hrs )</p>
                      <p id="highlighttext">"With reference to Point No: L of NRSC Advertisement No: NRSC-RMT-1-2024 dated 22.01.2024, candidates may note that Guwahati (Assam) has also been added as one of the Written Test Centres in addition to the existing 10 Centres"</p>
                      <p id="mobile">1. "ATTENTION: THE RECEIPT OF ONLINE APPLICATIONS AGAINST ADVT NO: NRSC-RMT-1-2024 DATED 22.01.2024 WILL BE CLOSED AT 1700 HRS ON 12.02.2024 (MONDAY). HENCE ALL THE APPLICANTS MAY KINDLY APPLY TO THE POSTS AT THE EARLIEST BEFORE THE CLOSING HOURS IN ORDER TO AVOID LAST MINUTE RUSH. NO TELEPHONIC/EMAIL COMMUNICATION SHALL BE ENTERTAINED AFTER THE CLOSING HOURS.</p>
                      <p id="mobile">2. "CANDIDATES APPLYING TO THE POST OF LIBRARY ASSISTANT (POST CODE 19) OF ADVT NO: NRSC-RMT-1-2024 DATED 22.01.2024 MAY KINDLY NOTE THAT WHOEVER FULFILL THE ELIGIBILITY CRITERIA FOR THE POST MAY KINDLY SELECT "M.Sc" IN THE HIGHER EDUCATION FIELD AND THEIR RESPECTIVE SPECIALIZATION (i.e., EITHER LIBRARY SCIENCE/ LIBRARY &amp; INFORMATION SCIENCE/ OR EQUIVALENT), IN THE SPECIALIZATION FIELD.</p>
                      <!--<p ><a  href="https://apps.nrsc.gov.in/eRecruitment_NRSC/" target="_blank">&nbsp; Apply Online</a></p> -->
                      <p id="mobile">
                        <strong>
                          <a href="assets/pdf/advt_active/FAQ_NRSC_RMT_1_2024.pdf" rel="noopener" target="_blank">Frequently Asked Questions</a>
                        </strong>
                      </p>
                      <p id="mobile">
                        <strong>Syllabus for Written Test - Scientist Engineer 'SC' Post Codes - <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 06 Syllabus.pdf" target="_blank">06</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 07 Syllabus.pdf" target="_blank">07</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 08 Syllabus.pdf" target="_blank">08</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 09 Syllabus.pdf" target="_blank">09</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 10 Syllabus.pdf" target="_blank">10</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 11 Syllabus.pdf" target="_blank">11</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 12 Syllabus.pdf" target="_blank">12</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 13 Syllabus.pdf" target="_blank">13</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 14 Syllabus.pdf" target="_blank">14</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 15 Syllabus.pdf" target="_blank">15</a>, <a href="assets/pdf/advt_active/NRSC-RMT-1-2024 Post Code 16 Syllabus.pdf" target="_blank">16</a>
                        </strong>
                      </p>
                      <p id="mobile">
                        <strong>Syllabus for Written Test - <a href="assets/pdf/advt_active/NRSC-RMT-1-2024-Post-Code-19-Syllabus.pdf" target="_blank"> Library Assistant 'A'(Post Code 19)</a>
                          <strong></strong>
                        </strong>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td class="sno"></td>
                    <td data-label="Advertisement No.">NRSC-RMT-4-2023, DT. 09.12.2023</td>
                    <td data-label="details">
                      <a href="assets/pdf/advt_active/NRSC-RMT-4-2023-dated-09122023.pdf" rel="noopener" target="_blank" title="2468">ADVERTISEMENT NO.NRSC/RMT/4/2023 (Post of Technician B)</a>
                      <br />
                      <p id="mobile"></p>
                      <p id="mobile">
                        <a href="https://cdn.digialm.com/EForms/configuredHtml/1258/86205/Index.html" target="_blank"> Apply Online</a>
                      </p>
                      <p id="mobile">NRSC-RMT-4-2023 dated 09.12.2023 - Candidates may login <a href="https://www.digialm.com:443//EForms/configuredHtml/1258/86205/login.html" target="_blank">NRSC APPLICATION PORTAL</a> to view the updated response sheet after redressal of Objections.The link is live from 16 April 2024(1000 Hrs) to 19 April 2024 (1000 Hrs) </p>
                      <p id="mobile">OBJECTION MANAGEMENT OF THE COMPUTER BASED TEST (CBT) FOR THE POST OF TECHNICIAN-B HELD ON 02.03.2024 HAVE BEEN UPLOADED IN NRSC APPLICATION PORTAL.(Objections link is live from 07 Mar 2024(1000 Hrs) to 10 Mar 2024 (1000 Hrs) )</p>
                      <p id="mobile">COMPUTER BASED TEST (CBT) FOR THE POSTS OF TECHNICIAN-B AGAINST ADVERTISEMENT NO: NRSC-RMT-4-2023 DATED 09.12.2023, IS SCHEDULED TO BE HELD ON 02.03.2024 (SATURDAY).ADMIT CARD FOR THE CBT MAY BE DOWNLOADED FROM THE LINK WHICH IS SENT TO REGISTERED MAIL ID / NRSC APPLICATION PORTAL <br />
                        <br />
                        <a href="assets/pdf/advt_active/PWBDScribeAnnexure1.pdf" target="_blank">PWBD-Annexure1</a>
                      </p>
                      <p id="mobile">
                        <a href="assets/pdf/advt_active/PWBDScribeAnnexure2.pdf" target="_blank">PWBD-Annexure2</a>
                      </p>
                      <p id="mobile">
                        <a href="https://cdn.digialm.com/EForms/configuredHtml/1258/86205/login.html" target="_blank">
                          <strong>Click here to download the e-Admitcard</strong>
                        </a>
                      </p>
                      <p id="highlighttext">All the Applicants may kindly note that the no. of vacancies published against Advt No.NRSC/RMT/4/2023 dated 09.12.2023 in the Employment news i.r.o Post code:01 i.e, Electronic Mechanic are 33 instead of 32. Hence, the no. of vacancies notified in detailed Advertisement No. NRSC/RMT/4/2023 dated 09.12.2023 may be treated as final i.e., 33 i.r.o post code: 01 (Electronic Mechanic) with 03 vacancies reserved for EWS and total vacancies are 54.</p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
              <!-- Gallery Section -->
              <!-- End of Hero Section -->
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
  <script>
    let currentPage = 1;
    const rowsPerPage = 7;
    const allRows = Array.from(document.querySelectorAll("#myTable tbody tr"));
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    let filteredRows = [...allRows]; // By default, show all rows
    function rowMatchesSearch(row) {
      const searchTerm = searchInput.value.toLowerCase();
      return Array.from(row.querySelectorAll('td')).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
    }

    function changePage(page) {
      currentPage = page;
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      // Hide all rows
      allRows.forEach(row => (row.style.display = "none"));
      // Show only filtered rows for this page
      const visibleRows = filteredRows.slice(start, end);
      visibleRows.forEach(row => (row.style.display = ""));
      updateSerialNumbers(visibleRows, start);
      // Update pagination styling
      const pageLinks = pagination.querySelectorAll(".page-item");
      pageLinks.forEach((li, i) => {
        li.classList.toggle("active", i === page - 1);
      });
    }

    function setupPagination() {
      pagination.innerHTML = "";
      filteredRows = allRows.filter(row => rowMatchesSearch(row));
      const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
      if (pageCount === 0) {
        const li = document.createElement("li");
        li.className = "page-item disabled";
        li.innerHTML = `
				
						
						<a class="page-link" href="#">No results</a>`;
        pagination.appendChild(li);
        allRows.forEach(row => (row.style.display = "none"));
        return;
      }
      for (let i = 1; i <= pageCount; i++) {
        const li = document.createElement("li");
        li.className = "page-item" + (i === currentPage ? " active" : "");
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
      changePage(currentPage);
    }

    function updateSerialNumbers(visibleRows, start) {
      visibleRows.forEach((row, i) => {
        const snoCell = row.querySelector(".sno");
        if (snoCell) {
          snoCell.textContent = start + i + 1; // Serial number starts from 1
        }
      });
    }
    // Event listener for search input
    searchInput.addEventListener("input", () => {
      currentPage = 1;
      setupPagination();
    });
    // Initialize on page load
    document.addEventListener("DOMContentLoaded", function() {
      setupPagination();
      // Menu toggle logic
      const menuBtn = document.getElementById("menuToggleBtn");
      const sidebar = document.getElementById("mobileSidebar");
      $('#mobileSidebar').on('show.bs.collapse', function() {
        menuBtn.innerText = "Hide Menu";
      });
      $('#mobileSidebar').on('hide.bs.collapse', function() {
        menuBtn.innerText = "Show Menu";
      });
    });
  </script>
</html>