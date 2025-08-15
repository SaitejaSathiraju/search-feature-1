<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Aerial Services & Digital Mapping</title>
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
        width: 450px;
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

      .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 1100px;
        max-height: 80vh;
        background: white;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        overflow-y: auto;
      }

      .popup-content {
        padding: 10px;
      }

      .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
      }

      .read-more-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin: 20px 0;
      }

      .read-more-btn:hover {
        background-color: #45a049;
      }

      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
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
                <h1 class="heading-title text-break text-center">Aerial Services & Digital Mapping</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Services</b>
              </li>
              <li class="current">
                <b>Aerial Services & Digital Mapping</b>
                </a>
              </li>
              <li class="current">
                <b>Operational Projects</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="ASnDM-main" id="ASnDM-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Services_AerialServices_Digital_Mapping_list.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Operational Projects</h3>
              <br />
              <p id="p-style">NRSC has executed several projects to generate high resolution geospatial data base using airborne sensors like aerial camera, airborne laser scanner (ALS), Synthetic Aperture Radar and ground based survey equipment like GPS. Some of the important projects are highlighted below - </p>
              <h4>Disaster Management Support</h4>
              <br />
              <ol id="p-style">
                <li>High resolution geospatial data base compatible to 1:5000 scale and 25 cm accurate DTM in MSL datum for 6 river basins – for Disaster Management Support </li>
                <li>High resolution geospatial data base compatible to 1:5000 scale and 35 cm accurate DTM in MSL datum along with building heights extraction for entire Indian coast with 2km buffer inland for INCOIS - for Disaster Management Support</li>
                <li>Orthoimage for earthquake-affected areas in Gujarat state for damage assessment for Disaster Management Support</li>
              </ol>
              <button class="read-more-btn" onclick="openPopup()">Read More</button>
              <div class="overlay" id="overlay"></div>
              <div class="popup" id="popup">
                <span class="close-btn" onclick="closePopup()">&times;</span>
                <div class="popup-content">
                  <h4>Operational Projects</h4>
                  <p id="p-style">NRSC has executed several projects to generate high resolution geospatial data base using airborne sensors like aerial camera, airborne laser scanner (ALS), Synthetic Aperture Radar and ground based survey equipment like GPS. Some of the important projects are highlighted below - </p>
                  <h4>Disaster Management Support</h4>
                  <ol id="p-style">
                    <li>High resolution geospatial data base compatible to 1:5000 scale and 25 cm accurate DTM in MSL datum for 6 river basins – for Disaster Management Support</li>
                    <li>High resolution geospatial data base compatible to 1:5000 scale and 35 cm accurate DTM in MSL datum along with building heights extraction for entire Indian coast with 2km buffer inland for INCOIS - for Disaster Management Support</li>
                    <li>Orthoimage for earthquake-affected areas in Gujarat state for damage assessment for Disaster Management Support</li>
                    <li>Generation of DTM for the entire Indian Coast (1, 50,000 sqkm) with Cartosat data for Tsunami warning centre (INCOIS)</li>
                  </ol>
                  <h4>Urban & Infrastructure</h4>
                  <ol id="p-style">
                    <li>Digital Orthoimage generation using LFDC images (10 cm GSD) - for 10 towns of Chhattisgarh state for SSLR, Govt. of Chhattisgarh.</li>
                    <li>Digital Orthoimage generation for Cadastral mapping project of entire Nizamabad district covering 6300 sq. km. (rural) & 300 sq. km. (urban).</li>
                    <li>Aerial photography & 3D Utility mapping in 1: 1000 mapping scale of three cities - Hyderabad, Bangalore and Kolkata for NIC.</li>
                    <li>Updation of 1: 10,000 scale large-scale topographical maps using aerial rectified photos for Delhi Development Authority (DDA).</li>
                    <li>Creation of digital topographic database 1: 1,000 to 1:2,500 with 1 m contours <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-53 towns (6200 Sq.Km) - for Town and Country Planning Organisation (TCPO), New Delhi.</p>
                      <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-6 towns (1400 Sq.Km) -Jaipur, Jodhpur, Ajmer, Kota, Bikaner, Udaipur – for Rajasthan Urban Infrastructure Development Project (RUIDP), Govt. of Rajasthan.</p>
                      <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-Bangalore city and its surroundings (1400 Sq.Km) –for Bangalore Development Authority (BDA)</p>
                      <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-Hyderabad city and its surroundings (650 Sq.Km) - for Hyderabad Metropolitan Water Supply and Sewerage Board (HMWS&amp;SB)</p>
                      <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-31 towns in Tamil Nadu state for Town and Country Planning Department,Tamilnadu</p>
                      <p style="font-size:15px; text-align:justify;  margin-left: 30px; padding-left: 20px;">-New Bombay, Kalyan and Vasai-Virar areas for BMRDA &amp; CIDCO covering 500 sq. km. Large scale mapping in 1: 500 scale of Kolkata Metropolitan Area covering 200 sq. km for Kolkata Municipal Corporation (KMC).Topographic map preparation from Cartosat -1 stereo data for National Hydro Power Corporation (NHPC)</p>
                    </li>
                    <li>Topographic mapping in 1: 5000 scale of highly undulating area in Jammu and Kashmir state for Northern Railways (IRCON) covering 160 line kms for railway alignment application using aerial images.</li>
                  </ol>
                </div>
              </div>
              <script>
                function openPopup() {
                  document.getElementById('popup').style.display = 'block';
                  document.getElementById('overlay').style.display = 'block';
                }

                function closePopup() {
                  document.getElementById('popup').style.display = 'none';
                  document.getElementById('overlay').style.display = 'none';
                }
                // Close the popup when clicking on overlay
                document.getElementById('overlay').addEventListener('click', closePopup);
              </script>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>OPERATIONAL PROJECTS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/dsm.png" />
                    <div class="image-overlay">Digital Surface Model (DSM)</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/dtm.png" />
                    <div class="image-overlay">Digital Terrain Model (DTM)</div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Lightbox Popup -->
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
    </main> <?php include 'footer.php'; ?>
  </body>
</html>
<script>
  function openLightbox(element) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    // Get image source and overlay text
    const imgSrc = element.querySelector('img').src;
    const titleText = element.querySelector('.image-overlay').textContent;
    // Set lightbox content
    lightboxImg.src = imgSrc;
    lightboxTitle.textContent = titleText;
    // Show lightbox
    lightbox.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
    document.body.style.overflow = 'auto';
  }
  // Close when clicking outside image
  document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
      closeLightbox();
    }
  });
  // Close with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeLightbox();
    }
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