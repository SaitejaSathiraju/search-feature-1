<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Former Directors</title>
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

              @media (max-width: 576px) {
                .heading-title {
                  font-size: 26px !important;
                  line-height: 1.3 !important;
                }

                .container li {
                  font-size: 18px !important;
                }
              }
              .directors-gallery {
                margin: 50px auto;
                max-width: 1400px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              }

              .director-profile {
                padding: 20px 10px;
                text-align: center;
                transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
                border-radius: 12px;
                margin-bottom: 30px;
                height: 90%;
              }

              .director-profile:hover {
                transform: translateY(-8px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
                background: linear-gradient(to bottom, #ffffff, #f8f9fa);
              }

              .director-profile img {
                width: 100%;
                height: auto;
                max-width: 220px;
                /* Adjust max height to keep similar size if needed */
                max-height: 320px;
                object-fit: cover;
                border: 6px solid #e9ecef;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                transition: all 0.4s ease;
                margin-bottom: 15px;
                display: block;
                margin-left: auto;
                margin-right: auto;
              }


              .director-profile:hover img {
                border-color: #3a86ff;
                box-shadow: 0 8px 16px rgba(58, 134, 255, 0.2);
              }

              .director-profile h4 {
                margin: 20px 0 10px;
                color: #2c3e50;
                font-weight: 600;
                font-size: 1.3rem;
              }

              .director-profile p {
                color: #6c757d;
                font-size: 1rem;
                margin-bottom: 0;
              }

              .time-period {
                display: inline-block;
                padding: 5px 12px;
                background-color: #f1f8fe;
                border-radius: 20px;
                color: #3a86ff;
                font-weight: 500;
                margin-top: 10px;
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
                <h1 class="heading-title text-break text-center">Former Directors</h1>
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
              </li>
              <li class="current">
                <b>Former Directors</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Directors-main" id="Directors-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_orgStructure_Services_List.php'; ?> </aside>
            <div class="container directors-gallery">
              <div class="row">
                <!-- Row 1 -->
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/DSC_6207777_RajKumar.jpg" alt="Dr. Raj Kumar">
                    <h4>Dr. Raj Kumar</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Jan 2021 - Feb 2022</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/2_NR02354_4.jpg" alt="Shri. Santanu Chowdhury">
                    <h4>Shri. Santanu Chowdhury</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Apr 2018 - Dec 2020</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/3_dryvn_5.jpg" alt="Dr. Y. V. N. Krishnamurthy">
                    <h4>Dr. Y. V. N. Krishnamurthy</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Jul 2016 - Mar 2018</span>
                  </div>
                </div>
                <!-- Row 2 -->
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/4_dadhwal_2.png" alt="Dr. Vinay Kumar Dadhwal">
                    <h4>Dr. Vinay Kumar Dadhwal</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">May 2011 - Jul 2016</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/5_jayaraman_0.jpg" alt="Dr. V. Jayaraman">
                    <h4>Dr. V. Jayaraman</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Sep 2008 - Apr 2011</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/6_radhakrishnan_2.jpg" alt="Dr. K. Radhakrishnan">
                    <h4>Dr. K. Radhakrishnan</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Nov 2005 - Aug 2008</span>
                  </div>
                </div>
                <!-- Row 3 -->
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/7_navalgund_1.jpg" alt="Dr. R. R. Navalgund">
                    <h4>Dr. R. R. Navalgund</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">May 2001 - Nov 2005</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/8_DPrao_1.jpg" alt="Dr. D. P. Rao">
                    <h4>Dr. D. P. Rao</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Nov 1996 - Apr 2001</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/9_deekshitulu_1.jpg" alt="Dr. B. L. Deekshitulu">
                    <h4>Dr. B. L. Deekshitulu</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Sep 1982 - Oct 1996</span>
                  </div>
                </div>
                <!-- Row 4 - Last single item centered -->
                <div class="col-lg-4 col-md-6 mx-auto">
                  <div class="director-profile">
                    <img src="assets/img/FormerDirectors/10_krrao_1.jpg" alt="Dr. K. R. Rao">
                    <h4>Dr. K. R. Rao</h4>
                    <!-- <p>Director</p> -->
                    <span class="time-period">Feb 1975 - Jan 1982</span>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html><script>
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