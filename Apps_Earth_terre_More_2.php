<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Earth and Climatic Studies</title>
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

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .image-gallery {
        margin-top: 20px;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
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
                <h1 class="heading-title text-break text-center">Earth and Climatic Studies</h1>
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
                <b>Earth and Climatic Studies</b>
              </li>
              <li class="current">
                <b>Applications</b>
              </li>
              <li class="current">
                <b>Terrestrial Studies</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="EARTH-main" id="EARTH-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Apps_Earth_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <div class="section">
                <h3>Forest Fire Regime </h3>
                <p id="myptag">Fire regime over India was analysed using the MODIS fire record from 2003 to 2017.The analysis used AQUA MODIS daytime fires for the 2003 - 2017 time period. Only detections with a detection confidence of over 10% and flagged as forest by using the NRSC forest fraction layer were used in the analysis.</p>
                <a class="read-more" data-modal="imgeos-modal" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Forest Fraction Cover</h3>
                <p id="myptag">The status of global forest cover has large uncertainty for several continents on earth owing to the paucity of comprehensive studies related to long term forest cover change. The aim of the present work is to prepare a nation-wide multi-date forest cover database which describes and quantifies historical changes in forests of India.</p>
                <a class="read-more" data-modal="imgeos-modal-1" id="myptag">Read more</a>
              </div>
              <div class="section">
                <h3>Forest Type Grid</h3>
                <p id="myptag">Vegetation classification is a prerequisite for understanding carbon stocks, biodiversity, sustainable use of natural resources and global change. This study has classified forest types of India based on multi-season Resourcesat-2 Advanced Wide Field Sensor (AWiFS) data of 2013.</p>
                <a class="read-more" data-modal="imgeos-modal-2" id="myptag">Read more</a>
              </div>
              <div class="pagination">
                <a href="Apps_Earth_terre_More.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More.php', this)" class="page-link ">1</a>
                <a href="#" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_2.php', this)" class="page-link active">2</a>
                <a href="Apps_Earth_terre_More_3.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_3.php', this)" class="page-link">3</a>
                <a href="Apps_Earth_terre_More_4.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_4.php', this)" class="page-link">4</a>
                <a href="Apps_Earth_terre_More_5.php" onclick="localStorage.setItem('activeMenuItem', 'Terrestrial Studies') ;loadPage('Apps_Earth_terre_More_5.php', this)" class="page-link">5</a>
              </div>
            </section>
            <div id="imgeos-modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Forest Fire Regime </h3>
                <p id="myptag">Fire regime over India was analysed using the MODIS fire record from 2003 to 2017.The analysis used AQUA MODIS daytime fires for the 2003 - 2017 time period. Only detections with a detection confidence of over 10% and flagged as forest by using the NRSC forest fraction layer were used in the analysis.</p>
                <p id="myptag">Forest Fire Regime consisting of Average Fire Density, Fire Period and are hosted on Bhuvan-Forest Fire Regime .</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Forest Fire Regime, List and view the data of the selected parameter. Technical Document(hyper link : Water Bodies Fraction)</p>
              </div>
            </div>
            <div id="imgeos-modal-1" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Forest Fraction Cover</h3>
                <p id="myptag">The status of global forest cover has large uncertainty for several continents on earth owing to the paucity of comprehensive studies related to long term forest cover change. The aim of the present work is to prepare a nation-wide multi-date forest cover database which describes and quantifies historical changes in forests of India.</p>
                <p id="myptag">Forest Fraction cover during 1930,1975,2013 are hosted on Bhuvan-Forest Fraction Cover .</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Forest Fraction Cover . List and view the data of the selected time period. Technical Document(hyper link : Forest Fraction Cover)</p>
              </div>
            </div>
            <div id="imgeos-modal-2" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="modal-title">Forest Type Grid</h3>
                <p id="myptag">Vegetation classification is a prerequisite for understanding carbon stocks, biodiversity, sustainable use of natural resources and global change. This study has classified forest types of India based on multi-season Resourcesat-2 Advanced Wide Field Sensor (AWiFS) data of 2013.</p>
                <p id="myptag">Forest type Grid (5Km) information is hosted on Bhuvan-Forest Type Grid</p>
                <p id="myptag">Select NICES Project – Terrestrial Sciences – Forest Type Grid –Select the Forest Type and view the data. Technical Document(hyper link : Forest Type Grid)</p>
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
  localStorage.setItem('activeMenuItem', 'Terrestrial Studies');
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