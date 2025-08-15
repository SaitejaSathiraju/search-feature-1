<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Satellite Data Acquisition</title>
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
        width: 400px;
        margin-left: auto;
      } */

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

      .read-more {
        display: inline-block;
        margin-top: 10px;
        color: #0066cc;
        text-decoration: none;
        font-weight: bold;
      }

      .read-more:hover {
        text-decoration: underline;
      }

      .image-gallery {
        margin-top: 20px;
      }

      .image-item {
        margin-bottom: 20px;
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

        .sidebar h3 {
          font-size: 18px !important;
        }
      }
    </style>
  </head>
  <body>

      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Satellite Data Acquisition</h1>
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
                <b>Satellite Data Acquisition</b>
              </li>
             </ol>
          </div>
        </nav>
      </header>
        <main id="main-content" class="main" role="main">
        <section id="service-details" class="service-details section">
          <div class="container-fluid">
            <div class="row gy-4">
              <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
              <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_Services_List.php'; ?> </aside>
              <section class="col-lg-6">
                <div class="section">
                  <h3>IMGEOS</h3>
                  <p id="p-style">Integrated Multi Mission Ground Segment for Earth Observation Satellites (IMGEOS) facility is established in Shadnagar campus. This facility is equipped with state of the art data acquisition systems which receive data from various satellites. Payload programming requests are consolidated at the respective sub systems based on the feasibility of tracking a particular satellite and acquisition schedules generated for each of the antenna in ground station. Global coverages are handled through on-board recordings and play back mechanism through ground station services at poles.</p>
                  <a class="read-more" data-modal="imgeos-modal" id="p-style">Read more</a>
                </div>
                <div class="section">
                  <h3>AGEOS</h3>
                  <p id="p-style">ISRO has established the Antarctica Ground Station for Earth Observation Satellites (AGEOS), at Bharati Station, Larsemann Hills, Antarctica, for receiving Indian Remote sensing Satellite (IRS) data. This state-of-the-art advanced Ground station was commissioned during August 2013 and is receiving data from IRS satellites (like CARTOSAT-2 Series, SCATSAT-1, RESOURCESAT-2/2A,CARTOSAT-1) and transferring the same to NRSC, Shadnagar near Hyderabad.</p>
                  <a class="read-more" data-modal="ageos-modal" id="p-style">Read more</a>
                </div>
              </section>
              <aside class="col-md-3 sidebar">
                <div class="section">
                  <h3>DATA ACQUISITION</h3>
                  <div class="image-gallery">
                    <div class="image-item">
                      <img alt="antenna1" data-entity-type="file" src="assets/img/about/DSC_3436_0.jpg" />
                      <div class="image-overlay">Antenna, IMGEOS</div>
                    </div>
                    <div class="image-item">
                      <img alt="bharati" data-entity-type="file" src="assets/img/about/Bharati-2.png" />
                      <div class="image-overlay">AGEOS, Larsemann Hills</div>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">IMGEOS </h3>
    <p id="p-style">Integrated Multi Mission Ground Segment for Earth Observation Satellites (IMGEOS) facility is established in Shadnagar campus. This facility is equipped with state of the art data acquisition systems which receive data from various satellites. Payload programming requests are consolidated at the respective subsystems based on the feasibility of tracking a particular satellite and acquisition schedules generated for each of the antennas in the ground station. Global coverages are handled through onboard recordings and playback mechanisms through ground station services at poles.</p>
    <p id="p-style">Multiple antenna receive systems at this ground station are capable of receiving data in frequencies of 2200-2300 MHz (S-Band) and 8000-8400 MHz (X band). Automated facility exists for transferring down converted demodulated data into Level 0 data processing systems for further correction and dissemination to the user. Satellite data acquisition planning also covers speculative collections based on the current needs and archival requirements. Emergency scheduling is also planned in case of disasters like floods for providing the data in near real-time for disaster management support.</p>
  </div>
</div>
<div id="ageos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">AGEOS </h3>
    <p id="p-style">ISRO has established the Antarctica Ground Station for Earth Observation Satellites (AGEOS), at Bharati Station, Larsemann Hills, Antarctica, for receiving Indian Remote sensing Satellite (IRS) data. This state-of-the-art advanced Ground station was commissioned during August 2013 and is receiving data from IRS satellites (like CARTOSAT-2 Series, SCATSAT-1, RESOURCESAT-2/2A,CARTOSAT-1) and transferring the same to NRSC, Shadnagar near Hyderabad.</p>
    <p id="p-style">This extended data receive S/X/Ka antenna system of Antarctica supplements Earth Observation (EO) data collection for ISRO. An Earth Station at Polar region has the advantage of visibility of 10 passes per day for each mission. This would provide global remote sensing data acquisition capability. A C- Band station is commissioned at the National Centre for Antarctica & Ocean Research (NCAOR), Goa to establish a dedicated communication link for round the clock operation for the video conferencing, video streaming and internet browsing applications.</p>
    <p id="p-style">This Satcom station is providing vital communication support to the Indian scientific community for pursuing their research work at Maitri throughout the year. With the commissioning of the Earth station at NCAOR, Goa, the Indian station, Maitri has been brought in the ambit of World Wide Web. The AGEOS is continuously operated and maintained by the Engineers of ISRO who are under deputation to Bharati Station, Antarctica on a regular basis.</p>
  </div>
</div>
<script>
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
  // Modal functionality
  document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const modals = document.querySelectorAll('.modal');
    const readMoreLinks = document.querySelectorAll('.read-more');
    const closeButtons = document.querySelectorAll('.close');
    // Open modal when Read more is clicked
    readMoreLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const modalId = this.getAttribute('data-modal');
        document.getElementById(modalId).style.display = 'block';
      });
    });
    // Close modal when X is clicked
    closeButtons.forEach(button => {
      button.addEventListener('click', function() {
        this.closest('.modal').style.display = 'none';
      });
    });
    // Close modal when clicking outside content
    window.addEventListener('click', function(e) {
      if (e.target.classList.contains('modal')) {
        e.target.style.display = 'none';
      }
    });
    // Close modal with ESC key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        modals.forEach(modal => {
          modal.style.display = 'none';
        });
      }
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