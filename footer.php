<footer id="footer" class="footer dark-background footer-heading" style="background-color:#4e5a53;">
  <div class="container-footer footer-top">
    <div class="row justify-content-center">
      <!-- Column 1: Support -->
      <div class="col-lg-2 footer-links">
        <h4>Support</h4>
        <ul>
          <li><a href="contactus_new.php" class="footer-link">Contact Us</a></li>
          <li><a href="sitemap.php" class="footer-link">Site Map</a></li>
          <li><a href="termsConditions.php" class="footer-link">Terms and Conditions</a></li>
        </ul>
      </div>
      
      <!-- Gap Column (reduced width) -->
      <div class="col-lg-1 gap footer-links"></div>
      
      <!-- Column 2: Organisation -->
      <div class="col-lg-2 footer-links">
        <h4>Organisation</h4>
        <ul>
          <li><a href="./Career_ApplyOnline.php" class="footer-link">Careers</a></li>
          <li><a href="https://eproc.isro.gov.in/home.html" class="footer-link" onclick="if(!confirm('You are leaving NRSC website and will be redirected to ISRO eProcurement Portal.\n\n• External links open in new window\n• Proceed only if you agree to these terms')) return false;" target="_blank" rel="noopener noreferrer">Eprocurement</a></li>
          <li><a href="rti.php" class="footer-link">RTI</a></li>
          <li><a href="./disclaimer.php" class="footer-link">Disclaimer</a></li>
          <li><a href="./privacypolicy.php" class="footer-link">Privacy Policy</a></li>
          <li><a href="Tenders_overview.php" class="footer-link">Tenders</a></li>
        </ul>
      </div>
      
      <!-- Gap Column (reduced width) -->
      <div class="col-lg-1 gap footer-links"></div>
      
      <!-- Column 3: Others -->
      <div class="col-lg-2 footer-links">
        <h4>Others</h4>
        <ul>
          <li><a href="vigilenceAdmin.php" class="footer-link">Vigilance Administration</a></li>
          <li><a href="webmaster.php" class="footer-link">Web Information Manager</a></li>
          <li><a href="nrsc_iso.php" class="footer-link">ISO Certification</a></li>
          <li><a href="https://chss.nrsc.gov.in/CHSSPortal/" class="footer-link" title = "CHSS Portal" onclick="if(!confirm('You are leaving NRSC website and will be redirected to NRSC CHSS Portal.\n\n• External links open in new window\n• Proceed only if you agree to these terms')) return false;" target="_blank" rel="noopener noreferrer">CHSS Portal</a></li>
          <li><a href="isro_centers.php" class="footer-link">ISRO Centres</a></li>
        </ul>
      </div>
      
      <!-- Gap Column (reduced width) -->
      <div class="col-lg-1 gap footer-links"></div>
      
      <!-- Column 4: Connect With Us -->
      <div class="col-lg-2 footer-links">
        <h4>Connect With Us</h4>
        <div class="social-links d-flex mb-3">
          <a href="http://www.facebook.com/isro" onclick="alert('You are being redirected to Facebook.')" class="me-2" target="_blank">
            <img src="assets/img/footer/fb-icon.png" alt="FB" height="30" width="30">
          </a>
          <a href="http://www.twitter.com/isro" onclick="alert('You are being redirected to Twitter.')" class="me-2" target="_blank">
            <img src="assets/img/footer/twitter.png" alt="Twitter" height="30" width="30">
          </a>
          <a href="http://www.instagram.com/isro.dos/" onclick="alert('You are being redirected to Instagram.')" target="_blank">
            <img src="assets/img/footer/insta.jpg" alt="Instagram" height="30" width="30">
          </a>
        </div>
        <div class="logo-links">
          <a href="https://www.isro.gov.in/" target="_blank" onclick="alert('You are being redirected to ISRO Website.')" class="d-block mb-2">
            <img src="assets/img/footer/isro.png" alt="ISRO" class="img-fluid">
          </a>
          <a href="https://www.india.gov.in/" target="_blank" onclick="alert('You are being redirected to National Portal.')" class="d-block">
            <img src="assets/img/footer/NPI.png" alt="National Portal" class="img-fluid">
          </a>
        </div>
      </div>
      
      <!-- Column 5: Copyright (No gap before this column) -->
      <div class="col-lg-2 footer-links">
        <br>
        <div class="copyright-box styled-counter">
          <p>© Copyright 2025 <br><strong>NRSC</strong> All Rights Reserved.</p>
          <p>Last Updated: <br>22-05-2025</p>
          <div class="hit-counter">
            <span class="hit-icon">👁️</span>
            <span class="hit-text">
              <?php include 'page_counter.php'; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Scripts -->
<!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<style>
  /* Custom gap columns (half width) */
  @media (min-width: 992px) {
    .footer-links.gap {
      flex: 0 0 4.166%; /* Half of col-lg-1 */
      max-width: 4.166%;
    }
  }

  .styled-counter {
    background: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    font-size: 15px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    text-align: center;
  }

  .hit-counter {
    margin-top: 10px;
    padding: 8px 12px;
    background-color: #ffffff;
    display: inline-flex;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-weight: 500;
    font-size: 14px;
    color: #444;
  }

  .hit-icon {
    font-size: 18px;
    margin-right: 6px;
  }

  .copyright-box {
    background-color: rgb(218, 227, 235);
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    color: black;
    font-weight: bold;
    width: 100%;
    max-width: 220px;
    margin: 0 auto;
  }

  .footer-link {
    font-size: 1.1rem;
    text-decoration: none;
    color: #e0e0e0;
  }

  .footer-link:hover {
    color: white;
    text-decoration: underline;
  }

  .footer-links ul {
    padding-left: 0;
  }

  .footer-links ul li {
    list-style: none;
    margin-bottom: 8px;
  }

  .footer-links h4 {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 15px;
  }

  footer .container-footer {
    max-width: 1440px;
    padding: 20px 15px;
    margin: 0 auto;
  }


  .logo-links img {
    max-width: 120px;
    height: auto;
    margin-bottom: 10px;
  }

  .social-links img {
    transition: transform 0.3s;
  }

  .social-links img:hover {
    transform: scale(1.1);
  }

  @media (max-width: 991.98px) {
    .footer-links {
      margin-bottom: 30px;
    }
    
    .copyright-box {
      max-width: 100%;
    }
  }

  @media (max-width: 480px) {
    .styled-counter {
      padding: 12px;
      font-size: 13px;
    }
    
    .hit-counter {
      font-size: 12px;
      padding: 5px 8px;
    }
    
    .hit-icon {
      font-size: 14px;
    }
    
    .logo-links img {
      max-width: 80px;
    }
  }
</style>