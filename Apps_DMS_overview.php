<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Disaster Management Support</title>
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
          font-size: 18px !important;
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

      .button-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        padding: 10px;
      }

      /* Button styling */
      button {
        padding: 10px 20px;
        background-color: #0066cc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        flex: 1 1 auto;
        max-width: 300px;
      }

      /* Hover effect */
      button:hover {
        background-color: #0055aa;
      }

      /* Optional: make sure they stack nicely on very small screens */
      @media (max-width: 480px) {
        .button-container {
          flex-direction: column;
          align-items: center;
        }

        button {
          width: 90%;
        }
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
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
                <h1 class="heading-title text-break text-center">Disaster Management Support</h1>
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
                <b>Disaster Management Support</b>
              </li>
              <li class="current">
                <b>Overview</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="DMS-main" id="DMS-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'App_DMS_services_list.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Overview</h3>
              <br />
              <p id="myptag">As part of Disaster Management Support Programme (DMSP), Decision Support Centre is established at NRSC for monitoring natural disasters viz. flood, cyclone, agricultural drought, landslides, earthquakes and forest fires in near real-time using space and aerial remote sensing based inputs. <br />
                <br /> National Database for Emergency Management (NDEM) serves as national repository of GIS based database for entire country coupled with set of Decision Support System tools to assist the State / Central Disaster Management Authorities in decision making during emergency situations. <br />
                <br /> Current activities to support disaster management support are : Near Real Time Flood & Cyclone monitoring & mapping in the country, Flood Hazard/Risk Zonation for Flood prone states, Spatial Flood Early Warning, forest fire alerts, landslide zonation and inventory, agricultural drought studies and Capacity Building and institutionalization is being done to the stake holders.
              </p>
              <br />
              <br />
              <div class="button-container">
                <button onclick="window.open('View_More_Space_Based_DM.php', '_blank')">View Maps</button>
                <button onclick="window.open('https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood', '_blank')">View GIS Layers</button>
              </div>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>DISASTER SUPPORT</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/DMSP-FLOWCHART_0.png">
                    <img alt="antenna1" src="assets/img/about/Picture2_15.png" />
                    <div class="image-overlay">Disaster Management Services</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/DMSP-ANNUAL FLOOD 2018.png">
                    <img alt="antenna1" src="assets/img/about/Picture1_24.png" />
                    <div class="image-overlay">Flood</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)" data-large-src="assets/img/about/dmsp-forest fire.png">
                    <img alt="antenna1" src="assets/img/about/Picture2_17.png" />
                    <div class="image-overlay">Forest Fire</div>
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
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<!-- <script>
  function openPopup() {
    const popup = window.open("", "DMSP_Popup", "width=700,height=800");
    popup.document.write(`
    
				
		<html>
			<head>
				<title>Disaster Management Support</title>
				<style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h2 { margin-bottom: 5px; }
        h3 { margin-top: 30px; }
        a { display: block; color: blue; margin: 5px 0; text-decoration: none; }
        a:hover { text-decoration: underline; }
      </style>
			</head>
			<body>
				<h2>Disaster Management Support (DMSP)</h2>
				<h3>Floods</h3>
				<a href="2023_SikkimFloods.php" target="_blank">2023 (Sikkim Floods)</a>
				<a href="2022_Floods.php" target="_blank">2022</a>
				<a href="2021_Floods.php" target="_blank">2021</a>
				<a href="2020_Floods.php" target="_blank">2020</a>
				<a href="https://example.com/2019_floods" target="_blank">2019</a>
				<h3>Cyclones </h3>
				<a href="https://example.com/2023_sikkim_floods" target="_blank">2023 (BIPARJOY) </a>
				<a href="https://example.com/2022_floods" target="_blank">2021 (YAAS) </a>
				<a href="https://example.com/2021_floods" target="_blank">2021 (TAUKTAE) </a>
				<a href="https://example.com/2020_floods" target="_blank">2020 (NIVAR) </a>
				<a href="https://example.com/2019_floods" target="_blank">2019</a>
				<a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=cyclone" target="_blank">View Maps in Bhuvan Portal</a>
				<br />
				<br/>
				<hr>
					<br/>
					<a href="About_DMS.php" target="_blank">Go to Applications -  EO Applications - Disaster Management Support Programme (DMSP)	</a>
					<br />
					<a href="View_More_DMSP.php" target="_blank">View More DMSP</a>
				</body>
			</html>
  `);
  }
</script> -->
<script>
  localStorage.setItem('activeMenuItem', 'Overview');
  window.addEventListener('beforeunload', function() {
    localStorage.removeItem('activeMenuItem');
  });

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