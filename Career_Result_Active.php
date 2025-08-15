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
        width: 250px;
      }

      @media (max-width: 576px) {

        th,
        td {
          font-size: 12px;
          padding: 5px;
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
                <b>Results & Documents (Active)</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="resultsActive-main" id="resultsActive-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Career_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3> Results & Documents (Active)</h3>
              <br />
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
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Candidates Shortlisted for Skill Test to the post of Library Assistant 'A' (Post code 19).pdf" target="_blank"> List of Candidates shortlisted for Skill Test to the post of Library Assistant 'A' (Post Code: 19) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-06- Agriculture.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-06- Agriculture) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-07.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-07- Forestry &amp; Ecology) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-09- Geoinformatics.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-09- Geoinformatics ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code - 10- Geology.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code - 10- Geology ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-11- Geophysics.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-11- Geophysics ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-12- Soil Science.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-12- Soil Science ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-14- Water Resources.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-14- Water Resources ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-15- Water Resources (NE-SAC).pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-15- Water Resources (NE-SAC) ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results of recruitment to the post of Scientist.Engineer 'SC' - Post code-16- Water Resources.pdf" target="_blank"> Results of recruitment to the post of Scientist.Engineer 'SC' ( Post code-16- Water Resources ) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO:ICRB:02(A-JPA):2022 Assistant/JPA recruitment</td>
                    <td>
                      <a href="assets/pdf/careers_active/ISRO_ICRB_02_A_JPA_2022_ASSISTANT_HYDERABAD_ZONE_POSTNO1.pdf" target="_blank"> Results for Recruitment to the Post No:1 Assistant- Hyderabad Zone </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO:ICRB:02(A-JPA):2022 Assistant/JPA recruitment</td>
                    <td>
                      <a href="assets/pdf/careers_active/ISRO_ICRB_02_A_JPA_2022_ASSISTANT_HYDERABAD_ZONE_POSTNO5.pdf" target="_blank"> Results for Recruitment to the Post No.5 Assistant - Hyderabad Zone </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO:ICRB:02(A-JPA):2022 Assistant/JPA recruitment</td>
                    <td>
                      <a href="assets/pdf/careers_active/ISRO_ICRB_02_A_JPA_2022__JUNIOR_PERSONAL_ASSISTANT_HYDERABAD_ZONE_POSTNO2.pdf" target="_blank"> Results for Recruitment to the Post No.2 Junior Personnel Assistant - Hyderabad Zone </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO:ICRB:02(A-JPA):2022 Assistant/JPA recruitment</td>
                    <td>
                      <a href="assets/pdf/careers_active/ISRO_ICRB_02_A_JPA_2022__JUNIOR_PERSONAL_ASSISTANT_HYDERABAD_ZONE_POSTNO6.pdf" target="_blank"> Results for Recruitment to the Post No.6 Junior Personnel Assistant - Hyderabad Zone </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/LIST OF CANDIDATES SHORTLISTED FOR INTERVIEW FOR THE POST OF SCIENTIST ENGINEER 'SC'.pdf" target="_blank"> SCIENTIST/ENGINEER -SC INTERVIEW SCHEDULE FOR THE PROVISIONALLY SHORT-LISTED CANDIDATES </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS12 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Research Scientist (Post Code RS12) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS13 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Research Scientist (Post Code RS13) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS14 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Research Scientist (Post Code RS14) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS16 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Research Scientist (Post Code RS16) </a>
                      <img alt="" border="0" id="Image21" src="assets/img/newlabel.png" />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-06).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 06) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-07).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 07) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-08).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 08) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-09).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 09) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-10).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 10) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-11).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 11) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-12).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 12) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-13).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 13) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-14).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 14) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-15).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 15) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Scientist.Engineer-'SC' (Post Code-16).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Scientist/Engineer 'SC' (Post Code: 16) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for the Post of Library Assistant-'A' (Post Code-19).pdf" target="_blank"> Shortlisted Candidates for CBT scheduled to be held on 30.12.2024 for the post of Library Assistant 'A' (Post Code: 19) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_PostCode_RS12_NRSC-RMT-2-2024.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Research Scientist(Post Code RS12) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_PostCode_RS13_NRSC-RMT-2-2024.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Research Scientist(Post Code RS13) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_PostCode_RS14_NRSC-RMT-2-2024.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Research Scientist(Post Code RS14) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_Interview_RS16_NRSC-RMT-2-2024.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Research Scientist(Post Code RS16) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_Medical_Officer_SC_NRSC-RMT-1-2024.pdf" target="_blank"> Results for Recruitment to the Post of Medical Officer-'SC'(Post Code-17,advt no: NRSC-RMT-1-2024) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024_PS02_RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Project Scientist-I (Post Code PS02) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024_JRF21_RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Junior Research Fellow (Post Code JRF21) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024_JRF23_RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Junior Research Fellow (Post Code JRF23) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS11 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Research Scientist - Post Code RS11 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-PA03 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post of Project Associate I - Post Code PA03 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Post Code JRF21.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow Post Code JRF21 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Post Code JRF23.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow Post Code JRF23 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Project Scientist_Post Code PS02 -1.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Project Scientist-Post Code PS02 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_MedicalOfficer_SC_NRSC-RMT-1-2024.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Medical Officer 'SC' </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS15 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post Code of RS15 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-JRF22 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post Code of JRF22 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-2-2024 POST CODE-RS10 RESULTS.pdf" target="_blank"> Results for Recruitment to the Post Code of RS10 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Research Scientist_Post Code RS11.pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Research Scientist Post Code RS11 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Project Associate _Post Code PA03 .pdf" target="_blank"> List of Shortlisted Candidates for Interview to the post of Project Associate-I Post Code PA03 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC-RMT-2-2024_PSB01.pdf" target="_blank"> Results for Recruitment to the Post Code of PSB01 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC-RMT-2-2024_JRF24.pdf" target="_blank"> Results for Recruitment to the Post Code of JRF24 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC-RMT-2-2024_JRF19.pdf" target="_blank"> Results for Recruitment to the Post Code of JRF19 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC-RMT-2-2024_JRF18.pdf" target="_blank"> Results for Recruitment to the Post Code of JRF18 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC-RMT-2-2024_JRF17.pdf" target="_blank"> Results for Recruitment to the Post Code of JRF17 </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Research Scientist_Post Code RS15.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Research Scientist (Post Code-RS15) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <p>
                        <br>Written Test marks of the empaneled candidates for the posts of Technician-B: <br />
                        <br />
                        <a href="assets/pdf/careers_active/NRSC-RMT-4-2023 POST CODE-01 ELECTRONIC MECHANIC RESULTS Cut off details.pdf" target="_blank">ELECTRONIC MECHANIC (POST CODE-01)</a>, <br />
                        <a href="assets/pdf/careers_active/NRSC-RMT-4-2023 POST CODE-02 ELECTRICAL RESULTS Cut off details.pdf" target="_blank">ELECTRICAL (POST CODE-02)</a>, <br />
                        <a href="assets/pdf/careers_active/NRSC-RMT-4-2023 POST CODE-03 INSTRUMENT MECHANIC RESULTS Cut off details.pdf" target="_blank">INSTRUMENT MECHANIC (POST CODE-03)</a>, <br />
                        <a href="assets/pdf/careers_active/NRSC-RMT-4-2023 POST CODE-04 PHOTOGRAPHY RESULTS Cut off details.pdf" target="_blank">PHOTOGRAPHY (POST CODE-04)</a>, <br />
                        <a href="assets/pdf/careers_active/NRSC-RMT-4-2023 POST CODE-05 DESKTOP PUBLISHING OPERATOR Cut off details.pdf" target="_blank">DESKTOP PUBLISHING OPERATOR (POST CODE-05)</a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Research Scientist_Post Code RS10.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Research Scientist (Post Code-RS10) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/List of Shortlisted Candidates for Interview to the post of Junior Research Fellow _Post Code JRF22 .pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow (Post Code-JRF22) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_PostCode PSB01.pdf" target="_blank" title="reviews"> LIST OF SHORTLISTED CANDIDATES FOR INTERVIEW TO THE POST OF PROJECT SCIENTIST-B(POST CODE-PSB01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-4-2023_POSTCODE1_RESULTS.pdf" target="_blank" title="reviews"> RESULTS OF RECRUITMENT TO THE POSTS OF TECHNICIAN-B (ELECTRONIC MECHANIC - POST CODE : 01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-4-2023_POSTCODE2_RESULTS.pdf" target="_blank" title="reviews"> RESULTS OF RECRUITMENT TO THE POSTS OF TECHNICIAN-B (ELECTRICAL-POST CODE : 02) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-4-2023_POSTCODE3_RESULTS.pdf" target="_blank" title="reviews"> RESULTS OF RECRUITMENT TO THE POSTS OF TECHNICIAN-B (INSTRUMENT MECHANIC-POST CODE : 03) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-4-2023_POSTCODE4_RESULTS.pdf" target="_blank" title="reviews"> RESULTS OF RECRUITMENT TO THE POSTS OF TECHNICIAN-B (PHOTOGRAPHY -POST CODE : 04) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC-RMT-4-2023_POSTCODE5_RESULTS.pdf" target="_blank" title="reviews"> RESULTS OF RECRUITMENT TO THE POSTS OF TECHNICIAN-B (DESKTOP PUBLISHING OPERATOR- POST CODE : 05) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_PA201.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Project Associate(Post Code PA201) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF24.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF24) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF19.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF19) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF18.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF18) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF17.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF17) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF16.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF16) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF15.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF15) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-2-2024</td>
                    <td>
                      <a href="assets/pdf/careers_active/Shortlisted_NRSC-RMT-2-2024_JRF14.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF14) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <br>Advertisement no: NRSC-RMT-4-2023 dated 09.12.2023, SCHEDULE FOR SKILL TEST TO THE PROVISIONALLY SHORT-LISTED CANDIDATES <br />
                      <br />
                      <a href="assets/pdf/careers_active/EM_Schedule2.pdf" target="_blank">1. Electronic Mechanic (Post Code 01)</a>
                      <br />
                      <a href="assets/pdf/careers_active/Electrical2.pdf" target="_blank">2. Electrical (Post Code 02)</a>
                      <br />
                      <a href="assets/pdf/careers_active/IM_Schedule2.pdf" target="_blank">3. Instrument Mechanic (Post Code 03)</a>
                      <br />
                      <a href="assets/pdf/careers_active/Photography_Schedule2.pdf" target="_blank">4. Photography (Post Code 04)</a>
                      <br />
                      <a href="assets/pdf/careers_active/DPO_Schedule.pdf" target="_blank">5. Desktop Publishing Operator (Post Code 05) <br />
                      </a>
                      <br />
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <br>Advertisement no: NRSC-RMT-4-2023 dated 09.12.2023, CALL LETTERS FOR SKILL TEST TO THE PROVISIONALLY SHORT-LISTED CANDIDATES HAVE BEEN SENT TO THEIR REGISTERED E-MAIL IDs. CANDIDATES MAY CHECK THEIR E-MAIL IDs. <br />
                      <br />
                      <a href="assets/pdf/careers_active/Skill Test Dates.pdf" target="_blank"> - Skill Test Dates</a>
                      <br />
                      <a href="assets/pdf/careers_active/Annexure-I (SC ST).pdf" target="_blank">1. Annexure-I (SC &amp; ST) <br />
                      </a>
                      <a href="assets/pdf/careers_active/Annexure-II(OBC).pdf" target="_blank"> 2. Annexure-II(OBC) <br />
                      </a>
                      <a href="assets/pdf/careers_active/Annexure-III (EWS).pdf" target="_blank"> 3. Annexure-III(EWS) <br />
                      </a>
                      <a href="assets/pdf/careers_active/Annexure-IV (PwBD).pdf" target="_blank"> 4. Annexure-IV (PwBD) <br />
                      </a>
                      <a href="assets/pdf/careers_active/Biodata.pdf" target="_blank"> 5. Biodata <br />
                      </a>
                      <a href="assets/pdf/careers_active/Declaration form for skill test.pdf" target="_blank"> 6. Declaration form for skill test <br />
                      </a>
                      <a href="assets/pdf/careers_active/How to reach shadnagar.pdf" target="_blank"> 7. How to reach shadnagar <br />
                      </a>
                      <a href="assets/pdf/careers_active/TA format.pdf" target="_blank"> 8. TA format <br />
                      </a>
                      <br />
                    </td>
                  </tr>
                  <tr>
                    <td>ISRO:ICRB:02(A-JPA):2022 dated 20.12.2022</td>
                    <td>Skill Tests for recruitment to the posts of Assistant/Upper Division Clerk and Junior Personal Assistant/Stenographer scheduled to be held on 09.06.2024 ( SUNDAY ) and 16.06.2024 (SUNDAY) respectively at NRSC OUTREACH FACILITY, JEEDIMETLA stands postponed due to administrative reasons. Revised dates of Skill Tests shall be informed in due course </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Desktop Publishing Operator.pdf" target="_blank" title="reviews"> Results Of The Written Test Held On 02.03.2024 For The Post Of Technician-B-Desktop Publishing Operator </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Electrical.pdf" target="_blank" title="reviews"> Results Of The Written Test Held On 02.03.2024 For The Post Of Technician-B-Electrical </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Electronic Mechanic.pdf" target="_blank" title="reviews"> Results Of The Written Test Held On 02.03.2024 For The Post Of Technician-B-Electronic Mechanic </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Instrument Mechanic.pdf" target="_blank" title="reviews"> Results Of The Written Test Held On 02.03.2024 For The Post Of Technician-B-Instrument Mechanic </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-4-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Photgraphy.pdf" target="_blank" title="reviews"> Results Of The Written Test Held On 02.03.2024 For The Post Of Technician-B-Photgraphy </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF4.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF4) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF5.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF5) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_PA02.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Project Associate-I (Post Code-PA02) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_RS09.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Research Scientist (Post Code-RS09) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF4.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF4) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF5.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF5) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF8.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF8) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF11.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF11) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_PA02.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Project Associate-I (Post Code PA02) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_RS09.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Research Scientist(Post Code RS09) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF7.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF7) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF6.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF6) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_PA01.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Project Associate-I (Post Code-PA01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF06.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow (Post Code JRF06) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF07.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow (Post Code JRF07) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/ShortList_NRSC_RMT_1_2023_JRF10.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow (Post Code JRF10) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_PS01.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Project Scientist-I (Post Code-PS01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF9.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF9) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF3.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF3) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/Results_NRSC_RMT_1_2023_JRF2.pdf" target="_blank" title="reviews"> Results for recruitment to the post of Junior Research Fellow (Post Code-JRF2) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_PA01.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Project Associate-I(Post Code PA01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_PS01.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Project Scientist-I(Post Code PS01) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_JRF09.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF09) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_JRF02.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF02) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_JRF03.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF03) </a>
                    </td>
                  </tr>
                  <tr>
                    <td>NRSC-RMT-1-2023</td>
                    <td>
                      <a href="assets/pdf/careers_active/NRSC_RMT_1_2023_JRF12.pdf" target="_blank" title="reviews"> List of Shortlisted Candidates for Interview to the post of Junior Research Fellow(Post Code JRF12) </a>
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
  const rowsPerPage = 10;
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