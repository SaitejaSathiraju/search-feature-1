<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>E-Books</title>
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

      @media (max-width: 768px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
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

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      table {
        width: 100%;
        border-collapse: collapse;
        max-width: 1000px;
        margin: auto;
      }

      table,
      th,
      td {
        font-size: 18px;
      }

      th,
      td {
        border: 1px solid #aaa;
        padding: 10px;
        text-align: left;
      }

      th {
        background-color: #555;
        color: white;
        font-weight: bold;
      }

      td a {
        color: #0044cc;
        text-decoration: none;
      }

      .pdf-icon {
        width: 20px;
        vertical-align: middle;
      }

      .pdf-size {
        font-size: 12px;
        color: #555;
        margin-left: 5px;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #e0f7fa;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      @media (max-width: 600px) {

        table,
        th,
        td {
          font-size: 12px;
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
                <h1 class="heading-title text-break text-center">E-Books</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>E-Books</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="IP-main" id="IP-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>E-Books</h3>
              <br />
              <p id="myptag"> National Remote Sensing Center (NRSC) focusing on promotion of Remote Sensing Technology and Applications among users in India, has brought out a book on "Remote Sensing Applications" covering land, water, atmosphere and natural disasters. The book was Compiled and Edited by P.S. Roy, R.S Dwivedi and D.Vijayan. The book covers 16 chapters addressing various applications starting with introduction, state of art technology, case studies, literature review, future trends besides providing relevant references which are more useful for operational scientists and researchers. The resource scientists from Remote Sensing & GIS Applications Area have contributed these chapters. The book was published as training material for distribution to course participants attending 12 weeks course at NRSC, Hyderabad. The book contains 397 pages in 16 chapters and the same is placed in NRSC website so that users can view/download chapter wise as per their needs. </p>
              <p id="myptag">
                <b>
                  <i> Copyright @ 2010 by NRSC/ISRO. Placed for Academic and Research purpose only. Copying contents of this document in part (or) whole in any form is prohibited. </i>
                </b>
              </p>
              <!-- <p id="myptag"> Kindly forward the feedback on this book to <a href="mailto:&#118;&#105;&#106;&#97;&#121;&#97;&#110;&#95;&#100;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;">vijayan_d[at]nrsc[dot]gov[dot]in</a>
              </p> -->
              <table>
                <thead>
                  <tr>
                    <th>Document</th>
                    <th>Authors</th>
                    <th>Links</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <strong>Agriculture</strong>
                    </td>
                    <td>Sesha Sai MVR, Ramana KV &amp; Hebbar R</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_1_Agriculture.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Land use and Land cover Analysis</strong>
                    </td>
                    <td>Sudhakar S &amp; Kameshwara Rao SVC</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_2_LULC.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Forest and Vegetation</strong>
                    </td>
                    <td>Murthy MSR and Jha CS</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_3_ForestVegetation_p1.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                      <a class="link" href="./assets/pdf/ebooks/Chap_3_ForestVegetation_p2.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                      <a class="link" href="./assets/pdf/ebooks/Chap_3_ForestVegetation_p3.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Soils</strong>
                    </td>
                    <td>Land Degradation By Ravishankar T &amp; Sreenivas</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_4_Soils.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Urban and Regional Planning</strong>
                    </td>
                    <td>Venugopal Rao K,Ramesh B,Bhavani SVL &amp; Kamini</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_5_Urban.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Water Resources Management</strong>
                    </td>
                    <td>Rao VV &amp; Raju PV</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_6_Water_RS.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Geosciences</strong>
                    </td>
                    <td>Vinod Kumar K &amp; Arindam Guha</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_7_Geosciences.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Ground Water</strong>
                    </td>
                    <td>Subramanian SK &amp; Seshadri K</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_8_GroundWater.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Oceans</strong>
                    </td>
                    <td>Ali MM, Rao KH,Rao MV &amp; Sridhar PN</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_9_Oceans.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Atmosphere</strong>
                    </td>
                    <td>Badrinath KVS</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_10_Atmosphere.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Cyclones</strong>
                    </td>
                    <td>Ali MM</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_11_Cyclones.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Flood Disaster Management</strong>
                    </td>
                    <td>Bhanumurthy V, Manjusree P &amp; Srinivasa Rao</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_12_FloodDisasterManagement_p1.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                      <a class="link" href="./assets/pdf/ebooks/Chap_12_FloodDisasterManagement_p2.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Agricultural Drought Monitoring and Assesment</strong>
                    </td>
                    <td>Murthy CS &amp; Sesha Sai MVR</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_13_AgricultureDroughtMonitoring.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Landslides</strong>
                    </td>
                    <td>Vinod Kumar K &amp; Tapas RM</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_14_Landslide.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Earthquake and Active Faults</strong>
                    </td>
                    <td>Vinod Kumar K</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_15_Earthquake.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Forest Fire Monitoring</strong>
                    </td>
                    <td>Biswadip Gharai, Badrinath KVS &amp; Murthy MSR</td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/Chap_16_ForestFireMonitoring.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
              <p id="myptag"> The Indian Earth Observation Programme, over the past three decades, has successfully launched and operated a series of Indian Remote Sensing satellites with coarse, medium and high resolution sensors with the best spatial resolution achieved being 2.5m. </p>
              <table>
                <thead>
                  <tr>
                    <th>Document</th>
                    <th>Links</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <strong>Rajiv Gandhi National Drinking Water Mission User Manual</strong>
                    </td>
                    <td>
                      <a class="link" href="./assets/pdf/ebooks/RGNationalDrinkingWater_UserManual.pdf" target="_blank">
                        <img src="assets/img/pdf_img.png" alt="PDF" class="pdf-icon" />
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role=" contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'E-Books');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

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