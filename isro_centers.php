<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Isro Centers</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <!-- Skip Link CSS for Accessibility -->
    <style>
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        padding: 30px;
        max-width: 1400px;
        margin: 0 auto;
      }

      .card {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        font-size: 18px;
        border: 1px solid rgba(0, 119, 204, 0.1);
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 119, 204, 0.15);
        border: 1px solid rgba(0, 119, 204, 0.3);
      }

      .card a {
        text-decoration: none;
        color: #0056b3;
        font-weight: 600;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 100%;
        justify-content: center;
      }

      .card a::after {
        content: "Click to visit →";
        font-size: 14px;
        color: #6c757d;
        margin-top: 10px;
        font-weight: normal;
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .card:hover a::after {
        opacity: 1;
      }

      .card a:hover {
        color: #003d7a;
      }

      .heading-title {
        word-break: break-word;
      }

      @media (max-width: 768px) {
        .grid {
          grid-template-columns: 1fr;
          padding: 15px;
        }

        .card {
          height: 150px;
          padding: 20px;
        }

        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
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
                <h1 class="heading-title text-break text-center">ISRO Centres</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div data-skip-id="main-content" id="main-content"></div>
      <!-- End Page Title -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
              <div class="grid">
                <div class="card">
                  <a href="https://www.vssc.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Vikram Sarabhai Space Centre (VSSC) </a>
                </div>
                <div class="card">
                  <a href="https://www.lpsc.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Liquid Propulsion Systems Centre (LPSC) </a>
                </div>
                <div class="card">
                  <a href="https://www.shar.gov.in/sdscshar/index.jsp" target="_blank" rel="noopener noreferrer" class="external-link"> Satish Dhawan Space Centre (SDSC) SHAR </a>
                </div>
                <div class="card">
                  <a href="https://www.ursc.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> U R Rao Satellite Centre (URSC) </a>
                </div>
                <div class="card">
                  <a href="https://www.iprc.gov.in/iprc/index.php/en" target="_blank" rel="noopener noreferrer" class="external-link"> ISRO Propulsion Complex (IPRC) </a>
                </div>
                <div class="card">
                  <a href="https://www.sac.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Space Applications Centre (SAC) </a>
                </div>
                <div class="card">
                  <a href="https://www.nrsc.gov.in/" rel="noopener noreferrer"> National Remote Sensing Centre (NRSC) </a>
                </div>
                <div class="card">
                  <a href="https://www.istrac.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> ISRO Telemetry, Tracking and Command Network (ISTRAC) </a>
                </div>
                <div class="card">
                  <a href="http://www.sac.gov.in/Vyom/DECU.jsp" target="_blank" rel="noopener noreferrer" class="external-link"> Development and Educational Communication Unit (DECU) </a>
                </div>
                <div class="card">
                  <a href="http://www.scl.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Semi Conductor Laboratory (SCL) </a>
                </div>
                <div class="card">
                  <a href="https://www.narl.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> National Atmospheric Research Laboratory (NARL) </a>
                </div>
                <div class="card">
                  <a href="https://www.iirs.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Indian Institute of Remote Sensing (IIRS) </a>
                </div>
                <div class="card">
                  <a href="https://www.mcf.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Master Control Facility (MCF) </a>
                </div>
                <div class="card">
                  <a href="http://nesac.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> North Eastern Space Applications Centre (NE-SAC) </a>
                </div>
                <div class="card">
                  <a href="https://www.dos.gov.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Department of Space (DOS) </a>
                </div>
                <div class="card">
                  <a href="http://www.antrix.co.in/" target="_blank" rel="noopener noreferrer" class="external-link"> Antrix Corporation Limited </a>
                </div>
                <div class="card">
                  <a href="https://www.nsilindia.co.in/" target="_blank" rel="noopener noreferrer" class="external-link"> NewSpace India Ltd </a>
                </div>
                <div class="card">
                  <a href="https://www.isro.gov.in/HSFC.html" target="_blank" rel="noopener noreferrer" class="external-link"> Human Space Flight Centre </a>
                </div>
                <div class="card">
                  <a href="https://www.isro.gov.in/IN-SPACe.html" target="_blank" rel="noopener noreferrer" class="external-link"> Indian National Space Promotion and Authorization Center (IN-SPACe) </a>
                </div>
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
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('external-link')) {
        if(!confirm('You are about to leave this site. Continue?')) {
            e.preventDefault(); // Cancel navigation
        }
    }
});
</script>