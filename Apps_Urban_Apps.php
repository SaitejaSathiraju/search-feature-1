<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Urban & Infrastructure</title>
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

      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.7);
      }

      .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 30px;
        border-radius: 8px;
        width: 80%;
        max-width: 1000px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        position: relative;
      }

      .close {
        position: absolute;
        top: 15px;
        right: 25px;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
      }

      .close:hover {
        color: #333;
      }

      .modal-title {
        color: #003366;
        margin-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
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

        .modal-content {
          width: 90%;
          margin: 20% auto;
        }

        .sidebar h3{
          font-size: 14px !important;
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
        z-index: -1;
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

      #myptag {
        font-size: 20px;
        text-align: justify;
      }

      #RP_Image{
        width:250px; height:350px;
      }

      #NUIS_Image{
        width:250px; height:300px; 
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
                <h1 class="heading-title text-break text-center">Urban & Infrastructure</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Urban & Infrastructure</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Urban-main" id="Urban-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Urban_List.php'; ?> </aside>
            <section class="col-lg-6">
              <div class="section">
                <h3>Preparation of Regional Plans</h3>
                <p id="myptag">Regional plan preparation is one of the urban applications using medium and high satellite data. In 1999, regional land use for National Capital Region (NCR) was prepared using IRS LISS III satellite data at 1:50,000 scale which was a major input for preparation of Regional Plan-2021. </p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>National Urban Information System (NUIS)</h3>
                <p id="myptag">National Urban Information System (NUIS) is a National Mission initiated by Ministry of Urban Development (MoUD) in 2006 for generation of 1:10,000 scale urban geospatial database for 152 towns on thematic content using high resolution satellite data. </p>
                <a class="read-more" data-modal="ageos-modal1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>AMRUT Cities</h3>
                <p id="myptag">Govt of India launched ‘Atal Mission for Rejuvenation and Urban Transformation’ (AMRUT)in 2015 with theaim of providing basic services (e.g. water supply, sewerage, urban transport) to households and build amenities for 500 cities through a set of eleven reforms with Ministry of Housing & Urban Affairs (MoHUA) as the Nodal Ministry and Town and Country Planning Organisation (TCPO) as the focal department.</p>
                <a class="read-more" data-modal="ageos-modal2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps.php', this)" class="page-link active">1</a>
                <a href="Apps_Urban_Apps1.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps1.php', this)" class="page-link">2</a>
                <a href="Apps_Urban_Apps2.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps2.php', this)" class="page-link">3</a>
                <a href="Apps_Urban_Apps3.php" onclick="localStorage.setItem('activeMenuItem', 'Applications') ;loadPage('Apps_Urban_Apps3.php', this)" class="page-link">4</a>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>URBAN APPLICATIONS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/u12.png">
                    <img alt="Urban Landuse" src="assets/img/apps/u12.png" />
                    <div class="image-overlay">Urban Landuse</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/u13.png">
                    <img alt="NUIS" src="assets/img/apps/u13.png" />
                    <div class="image-overlay">NUIS</div>
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
<!-- IMGEOS Modal -->
<div id="imgeos-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">Regional Plans</h3>
    <div class="image-item1">
      <img id="RP_Image"  alt=" Regional Plans" src="assets/img/apps/1_3.png" />
    </div>
    <hr />
    <p id="myptag">Regional plan preparation is one of the urban applications using medium and high satellite data. In 1999, regional land use for National Capital Region (NCR) was prepared using IRS LISS III satellite data at 1:50,000 scale which was a major input for preparation of Regional Plan-2021.</p>
    <p id="myptag">In 2012, for mid-review of Regional Plan-2021, regional Land use at 1:50,000 scale was prepared and updated and landuse change analysis for 1999-2012 was also provided to National Capital Region Planning Board (NCRPB). These inputs were used by the study groups to formulate and review the planning policies for development of NCR. In 2013, additional six new districts have been added to the NCR and Regional Land use for the same is being prepared using Resourcesat-2 satellite data</p>
  </div>
</div>
<!-- AGEOS Modal -->
<div id="ageos-modal1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">NUIS</h3>
    <div class="image-item">
      <img id="NUIS_Image" alt="NUIS" src="assets/img/apps/Picture16.jpg" />
      <hr>
      <p id="myptag">National Urban Information System (NUIS) is a National Mission initiated by Ministry of Urban Development (MoUD) in 2006 for generation of 1:10,000 scale urban geospatial database for 152 towns on thematic content using high resolution satellite data.</p>
      <p id="myptag">To enhance the utilisation of NUIS geospatial databases and to build the capacity of Urban Local bodies (ULBs) in using remote sensing and GIS technology, a customized web application Bhuvan-NUIS was developed. NUIS GIS database has been hosted on Bhuvan platform and Bhuvan-NUIS application enables uers to access, edit, manage and utilise the data for Master Plan formulation. 2200 town planning personnel covering all States/UTs have been trained in this application.</p>
    </div>
  </div>
</div>
<div id="ageos-modal2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 class="modal-title">AMRUT Cities </h3>
    <h5>
      <a href="https://www.nrsc.gov.in/sites/default/files/inline-images/AMRUT_input_website.jpg" target="_blank">(Click to see the Image )</a>
    </h5>
    <div class="image-item">
      <img id="NUIS_Image" alt="bharati" src="assets/img/apps/1_amrut.png" />
      <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/apps/Picture16.jpg">
        <img id="NUIS_Image" alt="bharati" src="assets/img/apps/2_amrut.png" />
        <hr />
        <p id="myptag">Govt of India launched ‘Atal Mission for Rejuvenation and Urban Transformation’ (AMRUT) in 2015 with the aim of providing basic services (e.g. water supply, sewerage, urban transport) to households and build amenities for 500 cities through a set of eleven reforms with Ministry of Housing & Urban Affairs (MoHUA) as the Nodal Ministry and Town and Country Planning Organisation (TCPO) as the focal department.</p>
        <p id="myptag">GIS based Master Plan formulation is one of the important reforms under AMRUT Mission, in which NRSC, ISRO has played a major role. Urban Studies team at NRSC has contributed to the preparation of AMRUT Design & Standards which are published on <a href="http://amrut.gov.in/upload/uploadfiles/files/designandStandards_AMRUT(3).pdf" ; target="_blank">MoHUA website</a> and are adopted as a national guideline for preparation of large-scale urban GIS database using Very High-Resolution satellite (VHRS) data. </p>
        <p id="myptag">In addition to this, NRSC is carrying out a major activity under the Mission ‘Large scale (1:4,000 scale) Urban GIS database creation of 238 AMRUT cities from 20 states / Union Territories using VHRS data’, which are to be used by respective Urban Local Bodies (ULBs) for formulation of GIS based Master Plans.</p>
        <p id="myptag">This project involves GIS Base map preparation by NRSC (completed for all 238 AMRUT cities) and handed over the data to Urban Local Bodies (ULBs) for ground verification and attribute data collection; field verification of the GIS base maps by ULBs; and Incorporation of the field information and geospatial database finalization by NRSC. So far, NRSC has finalized and delivered final GIS databases of 181 cities to ULBs for formulation of GIS based Master Plans. Illustration shows the process sequence of GIS database creation adopted for the project.</p>
        <p id="myptag">Major takeaways from this project are –hand-holding and capacity building among State Town Planning departments and ULBs through National Workshops; partnering the ULBs in the process of GIS database creation so as to make them owners of the data and responsible for its content; creation of state-of-the-art (Cloud technology based) facility at NRSC for geospatial database preparation, data storage, retrieval & dissemination; partnering and empowering private geospatial industry in GIS database creation; and development of value added products using this data for various societal applications.</p>
        <p id="myptag">The project is due for completion by March 2023.</p>
      </div>
    </div>
  </div>
</div>
<script>
  localStorage.setItem('activeMenuItem', 'Applications');
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