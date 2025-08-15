<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>NRSC | NRSC Web Site</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="assets/css/css2_google.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <style>
      .language-controls {
        display: flex;
        align-items: center;
        background: white;
        border-radius: 4px;
        border: 1px solid #ddd;
        height: 26px;
        overflow: hidden;
      }

      .lang-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 10px;
        border: none;
        background: transparent;
        color: #333;
        font-size: 12px;
        cursor: pointer;
        height: 100%;
      }

      .lang-btn:hover {
        background: #f5f5f5;
      }

      .lang-btn:active {
        background: #eee;
      }

      .lang-separator {
        width: 1px;
        height: 16px;
        background: #ddd;
      }

      .lang-btn.active {
        background-color: #007bff;
        color: #fff;
      }

      @media (max-width: 400px) {
        .language-controls {
          justify-content: center;
          width: 100%;
        }

        .lang-btn {
          flex: 1;
          text-align: center;
          padding: 6px 0;
          font-size: 14px;
        }
      }

      .accessibility-controls {
        display: flex;
        align-items: center;
        gap: 10px;
      }
      
      .skip-link {
        font-size: 16px;
        color: #333;
        text-decoration: none;
        font-weight: 700;
        padding: 2px 4px;
      }
      
      .zoom-controls {
        display: flex;
        align-items: center;
        background: white;
        border-radius: 4px;
        border: 1px solid #ddd;
        height: 26px;
        overflow: hidden;
      }
      
      .zoom-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 8px;
        border: none;
        background: transparent;
        color: #333;
        font-size: 12px;
        cursor: pointer;
        height: 100%;
      }
      
      .zoom-btn:hover {
        background: #f5f5f5;
      }
      
      .zoom-btn:active {
        background: #eee;
      }
      
      .zoom-separator {
        width: 1px;
        height: 16px;
        background: #ddd;
      }
      
      .zoom-percent {
        padding: 0 8px;
        font-size: 12px;
        color: #333;
        cursor: pointer;
      }
      
      .zoom-percent:hover {
        background: #f5f5f5;
      }

      @media (max-width: 400px) {
        .accessibility-controls {
          flex-direction: column;
          align-items: stretch;
          gap: 6px;
          width: 100%;
        }

        .zoom-controls {
          justify-content: center;
          width: 100%;
        }

        .zoom-btn, .zoom-percent {
          flex: 1;
          text-align: center;
          padding: 6px 0;
          font-size: 14px;
        }

        .skip-link {
          text-align: center;
          font-size: 14px;
          padding: 4px;
          display: block;
          width: 100%;
        }
      }

      .logo-container img {
        width: 100%;
        height: auto;
        margin-top: 10px;
      }

      /* Extra small screen (like 320px width) */
      @media (max-width: 576px) {
        .logo-container {
          margin: 0 auto; /* center the logo */
        }

        .logo-container img {
          height: 40px;
        }
      }
    </style>
  </head>
  <body class="index-page">
    <div class="container-fluid pt-2">
      <div class="row align-items-center">
        <div class="container-fluid mt-2">
          <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-end align-items-center" style="background-color: #e3d2cc; padding: 8px; overflow-x: auto;">
              <div class="accessibility-controls">
                <a href="#main-content" class="skip-link">Skip to main content</a>
                <div class="zoom-controls">
                  <button class="zoom-btn" id="zoom-out" title="Zoom Out" aria-label="Zoom Out">
                    <i class="bi bi-dash-lg"></i>
                  </button>
                  <div class="zoom-separator"></div>
                  <div class="zoom-percent" id="zoom-percent">100%</div>
                  <div class="zoom-separator"></div>
                  <button class="zoom-btn" id="zoom-in" title="Zoom In" aria-label="Zoom In">
                    <i class="bi bi-plus-lg"></i>
                  </button>
                </div>
                <!-- <div class="language-controls">
                  <button class="lang-btn active" id="lang-en" aria-label="English">EN</button>
                  <div class="lang-separator"></div>
                  <button class="lang-btn" id="lang-hi" aria-label="Hindi">हिंदी</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="logo-container">
          <a href="index.php" title="National Remote Sensing Centre">
            <img src="assets/img/header/Logo_iso.png" class="img-fluid" alt="NRSC Logo" />
          </a>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');
        const zoomPercent = document.getElementById('zoom-percent');
        const bodyElement = document.body;
        
        let currentZoom = 100;
        const minZoom = 50;
        const maxZoom = 150;
        const zoomStep = 10;
        
        function updateZoom() {
          bodyElement.style.zoom = `${currentZoom}%`;
          zoomPercent.textContent = `${currentZoom}%`;
          
          // Disable buttons at limits
          zoomInBtn.disabled = currentZoom >= maxZoom;
          zoomOutBtn.disabled = currentZoom <= minZoom;
        }
        
        function resetZoom() {
          currentZoom = 100;
          updateZoom();
        }
        
        zoomInBtn.addEventListener('click', function() {
          if (currentZoom < maxZoom) {
            currentZoom += zoomStep;
            updateZoom();
          }
        });
        
        zoomOutBtn.addEventListener('click', function() {
          if (currentZoom > minZoom) {
            currentZoom -= zoomStep;
            updateZoom();
          }
        });
        
        zoomPercent.addEventListener('click', resetZoom);
        updateZoom();

        // const langEnBtn = document.getElementById('lang-en');
        // const langHiBtn = document.getElementById('lang-hi');

        // function setActiveLanguage(lang) {
        //   if (lang === 'en') {
        //     langEnBtn.classList.add('active');
        //     langHiBtn.classList.remove('active');
        //   } else if (lang === 'hi') {
        //     langHiBtn.classList.add('active');
        //     langEnBtn.classList.remove('active');
        //   }
        //   // Here, you can add logic to actually change the language content
        // }

        // langEnBtn.addEventListener('click', function() {
        //   setActiveLanguage('en');
        // });

        // langHiBtn.addEventListener('click', function() {
        //   setActiveLanguage('hi');
        // });

        // // Initialize (default is English active)
        // setActiveLanguage('en');
      });

    </script>
  </body>
</html>