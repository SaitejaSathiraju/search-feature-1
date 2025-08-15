<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Processing & Dissemination</title>
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

      #p-style {
        font-size: 20px;
        text-align: justify;
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

      /* .sidebar {
        width: 430px;
        margin-left: auto;
      } */

      .sidebar h3 {
        color: #003366;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 0;
      }

      .image-gallery {
        margin-top: 20px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .image-item {
        position: relative;
      }

      .image-item img {
        width: 100%;
        height: auto;
        object-fit: contain;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .image-overlay {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 8px 12px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        width: calc(100% - 24px);
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

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }

        .sidebar {
          /* width: 100%;
          margin-left: 0; */
          order: 3; 
          margin-top: 20px;
        }

        .image-overlay {
				  position: absolute;
				  background-color: rgba(0, 0, 0, 0.6);
				  color: white;
				  font-size: 10px;
				  text-align: center;
				  font-weight: bold;
				  border-radius: 4px;
				  width: calc(100% - 24px);
				}

        .sidebar h3{
          font-size: 16px !important;
        }
		
      }

      .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        text-align: center;
      }

      .lightbox-content {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        max-width: 90%;
        max-height: 90%;
        margin: 0 auto;
      }

      .lightbox-content img {
        max-height: 80vh;
        max-width: 100%;
        border: 3px solid #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
      }

      .lightbox-content h3 {
        color: #fff;
        margin-bottom: 20px;
        font-size: 24px;
      }

      .close-lightbox {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
      }


      #myTable {
        width: 100%;
        border-collapse: collapse;
        font-size: 20px;
      }

      #myTable th,
      #myTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      @media screen and (max-width: 768px) {
        #myTable {
          border: 0;
        }

        #myTable thead {
          display: none !important;
        }

        #myTable, 
        #myTable tbody, 
        #myTable tr, 
        #myTable td {
          display: block;
          width: 100%;
        }

        #myTable tr {
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 8px;
          padding: 10px;
          background: #fff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        #myTable td {
          text-align: left;
          padding: 8px 16px;
          position: relative;
          border: none;
          border-bottom: 1px solid #eee;
          word-wrap: break-word;
          white-space: normal;
        }

        #myTable td::before {
          content: attr(data-label);
          display: block;
          font-weight: bold;
          margin-bottom: 4px;
          color: #333;
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
                <h1 class="heading-title text-break text-center">Data Processing & Dissemination</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Organization</b>
                </a>
              </li>
              <li class="current">
                <b>About NRSC</b>
              </li>
              <li class="current">
                <a href="About_DPD.php">
                  <b>Data Processing & Dissemination</b>
                </a>
              </li>
              <li class="current">
                <b>Microwave</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="about-main" id="about-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_DPD_Services_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Imaging Sensors (EOS-04)</h3>
                <br />
                <table id="myTable">
                  <thead>
                    <tr>
                      <th>SNo</th>
                      <th>Satellite / Sensor</th>
                      <th>Imaging Mode</th>
                      <th>Resolution</th>
                      <th>Data Availability</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="SNo">1</td>
                      <td data-label="Satellite / Sensor">EOS-04 (₹) <br>C-Band SAR </td>
                      <td data-label="Imaging Mode">FRS 1</td>
                      <td data-label="Resolution">3 m</td>
                      <td data-label="Data Availability">23-MAR-2022 - till date</td>
                    </tr>
                    <tr>
                      <td data-label="SNo">2</td>
                      <td data-label="Satellite / Sensor">EOS-04 (₹)</td>
                      <td data-label="Imaging Mode">FRS 2</td>
                      <td data-label="Resolution">3 m</td>
                      <td data-label="Data Availability">23-MAR-2022 - till date</td>
                    </tr>
                    <tr>
                      <td data-label="SNo">3</td>
                      <td data-label="Satellite / Sensor">EOS-04 (₹)</td>
                      <td data-label="Imaging Mode">MRS</td>
                      <td data-label="Resolution">33 m</td>
                      <td data-label="Data Availability">23-MAR-2022 - till date</td>
                    </tr>
                    <tr>
                      <td data-label="SNo">4</td>
                      <td data-label="Satellite / Sensor">EOS-04 (₹)</td>
                      <td data-label="Imaging Mode">CRS</td>
                      <td data-label="Resolution">48 m</td>
                      <td data-label="Data Availability">23-MAR-2022 - till date</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="section">
                <h3>Imaging Sensors (EOS-04) Documents</h3>
                <br />
                <p id="p-style">
                  <a href="assets/pdf/E04_handbook.pdf" target="_blank">EOS-04 Handbook</a>
                </p>
                <p id="p-style">
                  <a href="assets/pdf/E04_BROUCHURE.pdf" target="_blank">EOS-04 Brochure <a />
                </p>
                <p id="p-style">
                  <a href="assets/pdf/EOS_04_Data_Products_Format_Document.pdf" target="_blank">EOS-04 Data Products Format</a>
                </p>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Microwave') ;loadPage('DP_Index.php', this)" class="page-link active">1</a>
                <a href="DP_Index_2.php" onclick="localStorage.setItem('activeMenuItem', 'Microwave') ;loadPage('DP_Index_2.php', this)" class="page-link">2</a>
                <a href="DP_Index_3.php" onclick="localStorage.setItem('activeMenuItem', 'Microwave') ;loadPage('DP_Index_3.php', this)" class="page-link">3</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>EOS-04 PRODUCTS </h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/india_missions/Eye Of Africa.png">
                    <img src="assets/img/india_missions/Eye Of Africa_6.png" ALT="Eye of Africa" />
                    <div class="image-overlay">Eye of Africa </div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/india_missions/Goa.png">
                    <img src="assets/img/india_missions/Goa_1.png" alt="Goa" />
                    <div class="image-overlay">Goa</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/india_missions/Haridwar.png">
                    <img src="assets/img/india_missions/Haridwar_1.png" alt="Haridwar" />
                    <div class="image-overlay">Haridwar</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/india_missions/Mount Etna.png">
                    <img src="assets/img/india_missions/Mount Etna_1.png" alt="Mount Etna, Italy" />
                    <div class="image-overlay">Mount Etna, Italy</div>
                  </div>
                </div>
              </div>
            </aside>
            <div class="lightbox" id="lightbox">
              <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
              <div class="lightbox-content">
                <h3 id="lightbox-title"></h3>
                <img id="lightbox-image" src="" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  localStorage.setItem('activeMenuItem', 'Microwave');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

  function loadPage(pageUrl, element) {
    fetch(pageUrl).then(response => response.text()).then(data => {
      document.getElementById("main-content").innerHTML = data;
      // Update active class
      document.querySelectorAll(".page-link").forEach(el => el.classList.remove("active"));
      element.classList.add("active");
    });
  }

  function openLightbox(element) {
    const largeSrc = element.getAttribute('data-large-src');
    const title = element.getAttribute('data-title');
    document.getElementById('lightbox-image').src = largeSrc;
    document.getElementById('lightbox-title').textContent = title;
    document.getElementById('lightbox').style.display = 'block';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
  }
  // JavaScript for any interactive functionality
  document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded successfully');
    // Example: Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
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