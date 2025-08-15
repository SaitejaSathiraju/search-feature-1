<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link src="assets/css/main.css" rel="stylesheet">
<link src="assets/css/carousels.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  .portal-img {
    width: 140px;
    height: 140px;
    object-fit: contain;
    display: block;
    margin: 0 auto;
    border: 1px solid #00c4ff;
    padding: 10px;
    border-radius: 12px;
    background-color: #fff;
    transition: transform 0.2s ease-in-out;
  }

  .portal-img:hover {
    transform: scale(1.5);
  }

  .card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 100, 255, 0.15) !important;
  }

  @media (max-width: 576px) {
    .card {
      margin-bottom: 1rem !important;
    }

    .card-body {
      padding: 0.75rem !important;
    }
  }
  
  /* START : Upcoming Events styles */
  .news-ticker {
    box-shadow: inset 0 -5px 15px rgba(0, 0, 0, 0.1), 0 3px 5px rgba(0, 0, 0, 0.1);
    width: 95%;
    max-width: 1200px;
    margin: 20px auto;
    overflow: hidden;
    border-radius: 6px;
    padding: 0;
    background: linear-gradient(135deg, #f5f7fa, #e4e8eb);
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }

  .news-ticker-header {
    color: #2c3e50;
    padding: 10px 20px;
    font-size: clamp(16px, 4vw, 24px);
    font-family: 'Raleway', Helvetica, Arial, sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
    background: rgb(166, 176, 196);
    text-align: center;
    margin: 0;
  }

  .ticker-container {
    overflow: hidden;
    padding: 10px 0;
  }

  .ticker-content {
    display: inline-block;
    white-space: nowrap;
    padding-left: 100%;
    animation: ticker-scroll 15s linear infinite;
  }

  .ticker-content:hover {
    animation-play-state: paused;
  }

  .ticker-item {
    display: inline-block;
    margin-right: 40px;
    color: #2c3e50;
    font-size: clamp(14px, 3.5vw, 22px);
    font-family: 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    text-decoration: none;
    transition: all 0.2s ease;
    padding: 5px 10px;
    border-radius: 3px;
    font-weight: bold;
  }

  .ticker-item:hover {
    background: rgba(52, 152, 219, 0.1);
    color: #2980b9;
    text-decoration: underline;
  }

  .ticker-item::before {
    content: "•";
    color: #3498db;
    margin-right: 10px;
  }

  @keyframes ticker-scroll {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  @media (min-width: 768px) {
    .news-ticker {
      flex-direction: row;
      align-items: center;
    }

    .news-ticker-header {
      text-align: left;
      border-radius: 4px 0 0 4px;
      margin-right: 10px;
      margin-left: 10px;
      white-space: nowrap;
    }
  }

  @media (max-width: 480px) {
    .ticker-item {
      margin-right: 20px;
      padding: 3px 5px;
    }

    .ticker-item::before {
      margin-right: 5px;
    }
  }

  /* END : Upcoming Events styles */
  @media (max-width: 576px) {
    .section-title h2 {
      font-size: 20px;
    }

    .section-title h3 {
      font-size: 24px;
    }

    .h4 {
      font-size: 1.35rem;
    }
  }

  .carousel-caption-container {
    width: 100%;
    text-align: center;
    margin-top: 10px;
    padding: 0 15px;
    /* display: flex; */
  }

  .carousel-caption-below {
    display: inline-block;
    background: linear-gradient(to right, rgba(182, 211, 135, 0.9), rgba(255, 255, 255, 0.9));
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 1.1rem;
    line-height: 1.3;
    color: #1e1f1f;
    text-align: center;
    max-width: 90%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    word-wrap: break-word;
    /* min-height: 60px; */
  }

  .carousel-caption-below p {
    margin: 0;
    font-weight: 500;
  }

  @media (max-width: 768px) {

    /* .carousel-img {
      max-height: 350px;
    } */
    .carousel-caption-container {
      padding: 0 8px;
      margin-top: 8px;
    }

    .carousel-caption-below {
      font-size: 12px;
      max-width: 95%;
      font-weight: none;
    }

    .carousel-caption-below a {
      font-size: 12px;
      max-width: 95%;
      font-weight: none;
    }
  }

  @media (max-width: 480px) {
    .section.card.border p {
      font-size: 13px !important;
      line-height: 1.3 !important;
      margin-top: 6px !important;
    }

    .section.card.border .col-12.text-center p {
      font-size: 16px !important;
      line-height: 1.4 !important;
      padding: 0 10px !important;
    }
  }

  @media (min-width: 481px) and (max-width: 767px) {
    .section.card.border p {
      font-size: 14px !important;
    }

    .section.card.border .col-12.text-center p {
      font-size: 18px !important;
    }
  }

  .satellite-carousel .carousel-inner {
    width: 100%;
  }

  .satellite-carousel .carousel-item {
    position: relative;
    object-fit: cover;
  }

  .satellite-carousel .carousel-control-prev,
  .satellite-carousel .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 5%;
    height: 50px;
    z-index: 5;
  }

  .satellite-carousel .carousel-control-prev-icon,
  .satellite-carousel .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    padding: 10px;
  }

  .btn {
    border-radius: 20px;
    margin-top: 10px;
  }

  .carousel-caption-custom {
    display: inline-block;
    background: linear-gradient(to right, rgba(182, 211, 135, 0.9), rgba(255, 255, 255, 0.9));
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 1.1rem;
    line-height: 1.3;
    color: #1e1f1f;
    text-align: center;
    max-width: 90%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    word-wrap: break-word;
  }

  .auto-scroll {
    animation: scroll 20s linear infinite;
    overflow-y: auto;
  }

  @keyframes scroll {
    0% {
      transform: translateY(0);
    }

    100% {
      transform: translateY(calc(-100% + 40vh));
    }
  }

  #qualitySection {
    background: linear-gradient(145deg, #ffffff, #f8f9fa);
    border-radius: 15px;
    box-shadow:
      0 6px 20px rgba(0, 0, 0, 0.1),
      0 8px 25px rgba(0, 123, 255, 0.15);
    transform-style: preserve-3d;
    transition: all 0.3s ease;
    border: none !important;
    margin: 30px 0;
    padding: 25px;
    position: relative;
    overflow: hidden;
  }

  #qualityDiv {
    position: relative;
    z-index: 2;
  }

  #qualityPTag {
    font-size: 24px;
    color: #343a40;
    position: relative;
    padding: 20px;
    background: linear-gradient(to right, rgba(182, 211, 135, 0.9), rgba(255, 255, 255, 0.9));
    border-radius: 10px;
    font-weight: 500;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  }

  #qualityPolicy {
    display: block;
    font-style: italic;
    position: relative;
    padding: 0 20px;
  }

  #displaySection {
    border-radius: 6px;
    z-index: 2;
  }

  .service-details {
    padding: 2rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  }

  .service-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
  }

  .card-header {
    color: white;
    padding: 1rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .card-header h3 {
    margin: 0;
    font-weight: 600;
  }

  .icon-wrapper {
    background: rgba(255, 255, 255, 0.2);
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
  }

  .badge {
    font-size: 0.7rem;
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .new-badge {
    background: #ff4757;
    color: white;
  }

  .card-body {
    padding: 0;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .view-more-btn {
    padding: 1rem;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    text-align: center;
  }

  .view-more-btn a {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: inherit;
    text-decoration: none;
  }

  .view-more-btn:hover {
    background: #e3d8e7ff;
    font-weight: 700;
  }

  @media (max-width: 768px) {
    .col-md-6 {
      width: 100%;
      padding: 0 1rem;
    }

    .card-header h3 {
      font-size: 22px;
      font-weight: 600;
    }
  }

  @media (max-width: 480px) {
    .services-list a span {
      display: inline-block;
      width: 90%;
      vertical-align: middle;
    }

    .services-list a i {
      margin-right: 5px;
    }

    .d-inline-block {
      font-size: 14px;
    }
  }

  /* Hover effects - replaced with active state for touch devices */
  @media (hover: hover) {
    .mandate-item:hover img {
      transform: scale(1.1);
    }
  }

  @media (hover: none) {
    .mandate-item:active img {
      transform: scale(1.1);
    }
  }

  @media (max-width: 480px) {
    #displaySection {
      padding-left: 5px;
      padding-right: 5px;
    }
  }

  .satellite-carousel .carousel-media-wrapper {
    position: relative;
    width: 100%;
    padding-top: 33.33%;
    overflow: hidden;
  }

  .satellite-carousel .carousel-media {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .section-title h3 {
    color: #006680;
    margin-top: 3px;
  }

  .portal-name {
    margin-top: 8px;
    font-size: 14px;
    font-weight: 500;
    color: #333;
    text-align: center;
  }
</style>
<main>
  <div class="container">
    <div class="news-ticker">
      <div class="news-ticker-header">Upcoming Events</div>
      <div class="ticker-container">
        <div class="ticker-content">
          <a href="UNCSSTEAP_Overview.php" class="ticker-item" target="_blank">International UNCSSTEAP Program @ NRSC</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid satellite-carousel" id="displaySection"> <?php include 'imagesOfInterest.php'?> </div>
  <br>
  <main id="main-content" class="main" role="main">
    <section id="service-details" class="service-details"> <?php include 'section2.php'?> </div>
    </section>
    <section> <?php include 'section3.php'?> </div>
    </section>
    <br>
    <div class="container-fluid section-title py-3">
      <h3>
        <b>Our Leaders</b>
      </h3>
    </div>
    <section id="team" class="team section pb-4">
      <div class="container">
        <div class="row g-4 justify-content-center">
          <!-- Card 1 -->
          <div class="col-12 col-md-6">
            <div class="card h-100 border-0" style="background-color: #f8fbff; 
                  border-radius: 15px; box-shadow: 0 5px 15px rgba(0,100,255,0.1);
                  transition: all 0.3s ease;">
              <div class="row g-0 h-100 align-items-center">
                <div class="col-5 col-sm-4 d-flex justify-content-center p-3">
                  <img src="assets/img/team/team-1.png" alt="Dr. V. Narayanan" class="img-fluid rounded-circle border border-3 border-primary" style="width: 100%; max-width: 140px; aspect-ratio: 1; object-fit: contain; box-shadow: 0 4px 10px rgba(0,100,255,0.15);" />
                </div>
                <div class="col-7 col-sm-8">
                  <div class="card-body h-100 d-flex flex-column py-2 px-3">
                    <h5 class="card-title text-primary mb-1 mb-md-2 fw-bold fs-5 fs-md-4">
                      <img src="assets/img/clients/rocket-removebg-preview.png" class="me-1" style="width:1em; height:1em;" /> Dr. V. Narayanan
                    </h5>
                    <p class="text-muted mb-1 mb-md-2 fs-6">Chairman, ISRO</p>
                    <p class="card-text flex-grow-1 mb-2 fs-6 fs-md-5">Secretary Department of Space, and Chairman, Space Commission/ISRO</p>
                    <a href="ourChairman.php" class="btn btn-sm align-self-start mt-auto" style="background-color: #1bbca3; border-color: #1bbca3; color: white;
                     border-radius: 8px; box-shadow: 0 2px 5px rgba(27, 188, 163, 0.3);
                     font-size: 0.875rem; padding: 0.25rem 0.75rem;"> Know More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-12 col-md-6">
            <div class="card h-100 border-0" style="background-color: #f8fbff; 
                  border-radius: 15px; box-shadow: 0 5px 15px rgba(0,100,255,0.1);
                  transition: all 0.3s ease;">
              <div class="row g-0 h-100 align-items-center">
                <div class="col-5 col-sm-4 d-flex justify-content-center p-3">
                  <img src="assets/img/team/team-2.jpg" alt="Dr. Prakash Chauhan" class="img-fluid rounded-circle border border-3 border-primary" style="width: 100%; max-width: 140px; aspect-ratio: 1; object-fit: contain; box-shadow: 0 4px 10px rgba(0,100,255,0.15);" />
                </div>
                <div class="col-7 col-sm-8">
                  <div class="card-body h-100 d-flex flex-column py-2 px-3">
                    <h5 class="card-title text-primary mb-1 mb-md-2 fw-bold fs-5 fs-md-4">
                      <img src="assets/img/clients/satellite-removebg-preview.png" class="me-1" style="width:1em; height:1em;" /> Dr. Prakash Chauhan
                    </h5>
                    <p class="text-muted mb-1 mb-md-2 fs-6">Director, NRSC</p>
                    <p class="card-text flex-grow-1 mb-2 fs-6 fs-md-5">Director, National Remote Sensing Centre</p>
                    <a href="ourDirector.php" class="btn btn-sm align-self-start mt-auto" style="background-color: #1bbca3; border-color: #1bbca3; color: white;
                     border-radius: 8px; box-shadow: 0 2px 5px rgba(27, 188, 163, 0.3);
                     font-size: 0.875rem; padding: 0.25rem 0.75rem;"> Know More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Team Section -->
    <br />
    <section class="section card border" id="mandateSection"> <?php include 'mandate_section.php' ?> </section>
    <br>
    <!-- web portals Section -->
    <div class="container-fluid section-title">
      <h3>
        <b>Web Portals</b>
      </h3>
    </div>
    <div class="container-fluid py-2">
      <div class="row g-3 justify-content-center">
        <div class="col-auto text-center">
          <a href="https://bhoonidhi.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/bhoonidhi.png" class="portal-img" title="Bhoonidhi">
            <div class="portal-name">Bhoonidhi</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://bhoonidhi.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/bhoonidhi_2.png" class="portal-img" title="Search and Order">
            <div class="portal-name">Search and Order</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://bhuvan.nrsc.gov.in/ngmaps" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/bhuvan.png" class="portal-img" title="BHUVAN">
            <div class="portal-name">BHUVAN</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://ndem.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/ndem.png" class="portal-img" title="NDEM">
            <div class="portal-name">NDEM</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://nices.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/nices.jpg" class="portal-img" title="NICES">
            <div class="portal-name">NICES</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://indiawris.gov.in/wris/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/portals/wris.png" class="portal-img" title="India WRIS">
            <div class="portal-name">India WRIS</div>
          </a>
        </div>
        <div class="col-auto text-center">
          <a href="https://bhuvan-panchayat3.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">
            <img src="assets/img/clients2/BP3_2.png" class="portal-img" title="BHUVAN Panchayat 3.0">
            <div class="portal-name">BHUVAN Panchayat 3.0</div>
          </a>
        </div>
      </div>
    </div>
    <br>
    <section class="about section card border" id="qualitySection">
      <div class="container-fluid section-title" id="qualityDiv">
        <h3>
          <b>Our Quality Policy</b>
        </h3>
        <p id="qualityPTag">
          <span id="qualityPolicy">"To excel in promoting enhanced utilization of remote sensing by delivering quality data products, developing value added services and implementing outreach programmes" </span>
        </p>
      </div>
    </section>
  </main>
  <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
</main>